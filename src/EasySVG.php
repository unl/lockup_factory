<?php
/**
 * EasySVG - Generate SVG from PHP
 * @author Simon Tarchichi <kartsims@gmail.com>
 * @version 0.1b
 *
 * @see https://github.com/kartsims/easysvg
 * @see https://developer.mozilla.org/en-US/docs/Web/SVG/Attribute/transform
 * @see http://stackoverflow.com/questions/14684846/flattening-svg-matrix-transforms-in-inkscape
 * @see http://stackoverflow.com/questions/7742148/how-to-convert-text-to-svg-paths
 */
class EasySVG {

    protected $font;
    protected $svg;

    public function __construct() {
        // default font data
        $this->font = new stdClass;
        $this->font->id = '';
        $this->font->horizAdvX = 0;
        $this->font->unitsPerEm = 0;
        $this->font->ascent = 0;
        $this->font->descent = 0;
        $this->font->glyphs = array();
        $this->font->size = 20;
        $this->font->color = '#000000';
        $this->font->lineHeight = 1;
        $this->font->letterSpacing = 0;

        $this->clearSVG();
    }

    public function clearSVG() {
        $this->svg = new SimpleXMLElement('<svg></svg>');
    }

    /**
     * Function takes UTF-8 encoded string and returns unicode number for every character.
     * @param  string $str
     * @return string
     */
    private function _utf8ToUnicode($str) {
        $unicode = array();
        $values = array();
        $lookingFor = 1;

        $ligature_table = array(
            'ff' => 64256, # = 0xFB00
            'fi' => 64257,
            'fl' => 64258,
            'ffi' => 64259,
            'ffl' => 64260,
            'fb' => 64261,
            'fh' => 64262,
            'fj' => 64263,
            'fk' => 64264,
            'ffb' => 64265,
            'ffh' => 64266,
            'ffj' => 64267,
            'ffk' => 64268
        );

        for ($i = 0; $i < mb_strlen($str); $i++ ) {
            # check for ligatures here
            # ------ THIS IS KIND OF A HACK ----- #
            # see Unicode only supports ff, fi, fl, ffi, and ffl ligatures. However, certain unicode characters near these are unused.
            # so I use these codes to correspond to other ligatures as given below. 
            # See https://en.wikipedia.org/wiki/Typographic_ligature#Ligatures_in_Unicode_.28Latin_alphabets.29
            # ---------------------------------------------------------------------------------------------------------------------- #
            # |   fb   |   ff   |   fh   |   fi   |   fj   |   fk   |   fl   |   ffb  |   ffh  |   ffi  |   ffj  |   ffk  |   ffl  | #
            # |--------------------------------------------------------------------------------------------------------------------| #
            # | 0xFB05 | 0xFB00 | 0xFB06 | 0xFB01 | 0xFB07 | 0xFB08 | 0xFB02 | 0xFB09 | 0xFB0A | 0xFB03 | 0xFB0B | 0xFB0C | 0xFB04 | #
            # |--------------------------------------------------------------------------------------------------------------------| #

            if (mb_substr($str, $i, 1) == 'f') {
                if (mb_strlen($str) > $i+1 && in_array(mb_substr($str, $i+1, 1), array('b','h','i','j','k','l'))) {
                    $unicode[] = $ligature_table[mb_substr($str, $i, 2)];
                    $i++;
                    continue;
                } else if (mb_strlen($str) > $i+1 && mb_substr($str, $i+1, 1) == 'f') {
                    if (mb_strlen($str) > $i+2 && in_array(mb_substr($str, $i+2, 1), array('b','h','i','j','k','l'))) {
                        $unicode[] = $ligature_table[mb_substr($str, $i, 3)];
                        $i += 2;
                        continue;
                    } else {
                        $unicode[] = $ligature_table['ff'];
                        $i++;
                        continue;
                    }
                }
            }

            $unicode[] = $this->_unicodeOrd(mb_substr($str, $i, 1));
        }

        return $unicode;
    }

    private function _unicodeOrd($c) {
        if (ord($c[0]) >=0 && ord($c[0]) <= 127)
            return ord($c[0]);
        if (ord($c[0]) >= 192 && ord($c[0]) <= 223)
            return (ord($c[0])-192)*64 + (ord($c[1])-128);
        if (ord($c[0]) >= 224 && ord($c[0]) <= 239)
            return (ord($c[0])-224)*4096 + (ord($c[1])-128)*64 + (ord($c[2])-128);
        if (ord($c[0]) >= 240 && ord($c[0]) <= 247)
            return (ord($c[0])-240)*262144 + (ord($c[1])-128)*4096 + (ord($c[2])-128)*64 + (ord($c[3])-128);
        if (ord($c[0]) >= 248 && ord($c[0]) <= 251)
            return (ord($c[0])-248)*16777216 + (ord($c[1])-128)*262144 + (ord($c[2])-128)*4096 + (ord($c[3])-128)*64 + (ord($c[4])-128);
        if (ord($c[0]) >= 252 && ord($c[0]) <= 253)
            return (ord($c[0])-252)*1073741824 + (ord($c[1])-128)*16777216 + (ord($c[2])-128)*262144 + (ord($c[3])-128)*4096 + (ord($c[4])-128)*64 + (ord($c[5])-128);
        if (ord($c[0]) >= 254 && ord($c[0]) <= 255)    //  error
            return FALSE;
        return 0;
    }

    /**
     * Set font params (short-hand method)
     * @param string $filepath
     * @param integer $size   
     * @param string $color  
     */
    public function setFont( $filepath, $size, $color ) {
        $this->setFontSVG($filepath);
        $this->setFontSize($size);
        $this->setFontColor($color);
    }

    /**
     * Set font size for display
     * @param int $size
     * @return void
     */
    public function setFontSize( $size ) {
        $this->font->size = $size;
    }

    /**
     * Set font color
     * @param string $color
     * @return void
     */
    public function setFontColor( $color ) {
        $this->font->color = $color;
    }

    /**
     * Set the line height from default (1) to custom value
     * @param  float $value
     * @return void
     */
    public function setLineHeight( $value ) {
        $this->font->lineHeight = $value;
    }

    /**
     * Set the letter spacing from default (0) to custom value
     * @param  float $value
     * @return void
     */
    public function setLetterSpacing( $value ) {
        $this->font->letterSpacing = $value;
    }

    /**
     * Function takes path to SVG font (local path) and processes its xml
     * to get path representation of every character and additional
     * font parameters
     * @param  string $filepath
     * @return void
     */
    public function setFontSVG( $filepath ) {
        $this->font->glyphs = array();
        $z = new XMLReader;
        $z->open($filepath);

        // move to the first <product /> node
        while ($z->read()) {
            $name = $z->name;

            if ($z->nodeType == XMLReader::ELEMENT) {
                if ($name == 'font') {
                    $this->font->id = $z->getAttribute('id');
                    $this->font->horizAdvX = $z->getAttribute('horiz-adv-x');
                }

                if ($name == 'font-face') {
                    $this->font->unitsPerEm = $z->getAttribute('units-per-em');
                    $this->font->ascent = $z->getAttribute('ascent');
                    $this->font->descent = $z->getAttribute('descent');
                }

                if ($name == 'glyph') {
                    $unicode = $z->getAttribute('unicode');
                    $unicode = html_entity_decode($unicode);
                    $unicode = $this->_utf8ToUnicode($unicode);
                    if (count($unicode) > 0) {
                        $unicode = $unicode[0];

                        $this->font->glyphs[$unicode] = new stdClass();
                        $this->font->glyphs[$unicode]->horizAdvX = $z->getAttribute('horiz-adv-x');
                        if (empty($this->font->glyphs[$unicode]->horizAdvX)) {
                            $this->font->glyphs[$unicode]->horizAdvX = $this->font->horizAdvX;
                        }
                        $this->font->glyphs[$unicode]->d = $z->getAttribute('d');

                        // save em value for letter spacing (109 is unicode for the letter 'm')
                        if ($unicode == '109') {
                            $this->font->em = $this->font->glyphs[$unicode]->horizAdvX;
                        }
                    }
                }
            }
        }
    }

    /**
     * Add a path to the SVG
     * @param string $def
     * @param array $attributes
     * @return SimpleXMLElement
     */
    public function addPath($def, $attributes=array()) {
        $path = $this->svg->addChild('path');
        foreach($attributes as $key=>$value){
            $path->addAttribute($key, $value);
        }
        $path->addAttribute('d', $def);
        return $path;
    }

    /**
     * Add a text to the SVG
     * @param string $def
     * @param float $x
     * @param float $y
     * @param array $attributes
     * @return SimpleXMLElement
     */
    public function addText($text, $x=0, $y=0, $attributes=array()) {
        $def = $this->textDef($text);

        if($x!=0 || $y!=0){
            $def = $this->defTranslate($def, $x, $y);
        }

        $attributes['fill'] = $this->font->color;

        return $this->addPath($def, $attributes);
    }


    /**
     * Function takes UTF-8 encoded string and size, returns xml for SVG paths representing this string.
     * @param string $text UTF-8 encoded text
     * @return string xml for text converted into SVG paths
     */
    public function textDef($text) {
        $def = array();

        $horizAdvX = 0;
        $horizAdvY = $this->font->ascent + $this->font->descent;
        $fontSize = floatval($this->font->size) / $this->font->unitsPerEm;

        $text = $this->_utf8ToUnicode($text);
        error_log(print_r($text, 1));

        for($i = 0; $i < count($text); $i++) {

            $letter = $text[$i];

            // line break support (10 is unicode for linebreak)
            if($letter==10){
                $horizAdvX = 0;
                $horizAdvY += $this->font->lineHeight * ( $this->font->ascent + $this->font->descent );
                continue;
            }
            
            // extract character definition
            if (isset($this->font->glyphs[$letter])) {
                $letter = $this->font->glyphs[$letter];
            } else {
                $letter = $this->font->glyphs[32];
            }

            $d = $letter->d;
            // transform typo from original SVG format to straight display
            $d = $this->defScale($d, $fontSize, -$fontSize);
            $d = $this->defTranslate($d, $horizAdvX, $horizAdvY*$fontSize*2);
            
            $def[] = $d;

            // next letter's position
            $horizAdvX += $letter->horizAdvX * $fontSize + $this->font->em * $this->font->letterSpacing * $fontSize;
        }
        return implode(' ', $def);
    }


    /**
     * Function takes UTF-8 encoded string and size, returns width and height of the whole text
     * @param string $text UTF-8 encoded text
     * @return array ($width, $height)
     */
    public function textDimensions($text) {
        $def = array();

        $fontSize = floatval($this->font->size) / $this->font->unitsPerEm;
        $text = $this->_utf8ToUnicode($text);

        $lineWidth = 0;
        $lineHeight = ( $this->font->ascent + $this->font->descent ) * $fontSize * 2;

        $width = 0;
        $height = $lineHeight;

        for($i = 0; $i < count($text); $i++) {

            $letter = $text[$i];

            // line break support (10 is unicode for linebreak)
            if($letter==10){
                $width = $lineWidth>$width ? $lineWidth : $width;
                $height += $lineHeight * $this->font->lineHeight;
                $lineWidth = 0;
                continue;
            }

            // extract character definition
            if (isset($this->font->glyphs[$letter])) {
                $letter = $this->font->glyphs[$letter];
            } else {
                $letter = $this->font->glyphs[32];
            }

            $lineWidth += $letter->horizAdvX * $fontSize + $this->font->em * $this->font->letterSpacing * $fontSize;
        }

        // only keep the widest line's width
        $width = $lineWidth>$width ? $lineWidth : $width;

        return array($width, $height);
    }


    /**
     * Function takes unicode character and returns the UTF-8 equivalent
     * @param  string $str
     * @return string
     */
    public function unicodeDef( $unicode ) {

        $horizAdvY = $this->font->ascent + $this->font->descent;
        $fontSize =  floatval($this->font->size) / $this->font->unitsPerEm;

        // extract character definition
        $d = $this->font->glyphs[hexdec($unicode)]->d;

        // transform typo from original SVG format to straight display
        $d = $this->defScale($d, $fontSize, -$fontSize);
        $d = $this->defTranslate($d, 0, $horizAdvY*$fontSize*2);

        return $d;
    }

    /**
     * Returns the character width, as set in the font file
     * @param  string  $str
     * @param  boolean $is_unicode
     * @return float
     */
    public function characterWidth( $char, $is_unicode = false ) {
        if ($is_unicode){
            $letter = hexdec($char);
        }
        else {
            $letter = $this->_utf8ToUnicode($char);
        }

        if (!isset($this->font->glyphs[$letter]))
            return NULL;

        $fontSize = floatval($this->font->size) / $this->font->unitsPerEm;
        return $this->font->glyphs[$letter]->horizAdvX * $fontSize;
    }

    
    /**
     * Applies a translate transformation to definition
     * @param  string  $def definition
     * @param  float $x
     * @param  float $y
     * @return string
     */
    public function defTranslate($def, $x=0, $y=0){
        return $this->defApplyMatrix($def, array(1, 0, 0, 1, $x, $y));
    }
    
    /**
     * Applies a translate transformation to definition
     * @param  string  $def    Definition
     * @param  integer $angle  Rotation angle (degrees)
     * @param  integer $x      X coordinate of rotation center
     * @param  integer $y      Y coordinate of rotation center
     * @return string
     */
    public function defRotate($def, $angle, $x=0, $y=0){
        if($x==0 && $y==0){
            $angle = deg2rad($angle);
            return $this->defApplyMatrix($def, array(cos($angle), sin($angle), -sin($angle), cos($angle), 0, 0));
        }

        // rotate by a given point
        $def = $this->defTranslate($def, $x, $y);
        $def = $this->defRotate($def, $angle);
        $def = $this->defTranslate($def, -$x, -$y);
        return $def;
    }
    
    /**
     * Applies a scale transformation to definition
     * @param  string  $def definition
     * @param  integer $x
     * @param  integer $y
     * @return string
     */
    public function defScale($def, $x=1, $y=1){
        return $this->defApplyMatrix($def, array($x, 0, 0, $y, 0, 0));
    }

    /**
     * Calculates the new definition with the matrix applied
     * @param  string $def
     * @param  array  $matrix
     * @return string
     */
    public function defApplyMatrix($def, $matrix){

        // if there are several shapes in this definition, do the operation for each
        preg_match_all('/M[^zZ]*[zZ]/', $def, $shapes);
        $shapes = $shapes[0];
        if(count($shapes)>1){
            foreach($shapes as &$shape)
                $shape = $this->defApplyMatrix($shape, $matrix);
            return implode(' ', $shapes);
        }

        preg_match_all('/[a-zA-Z]+[^a-zA-Z]*/', $def, $instructions);
        $instructions = $instructions[0];

        $return = '';
        foreach($instructions as &$instruction){
            $i = preg_replace('/[^a-zA-Z]*/', '', $instruction);
            preg_match_all('/\-?[0-9\.]+/', $instruction, $coords);
            $coords = $coords[0];

            if(empty($coords)){
                continue;
            }
            
            $new_coords = array();
            while(count($coords)>0){

                // do the matrix calculation stuff
                list($a, $b, $c, $d, $e, $f) = $matrix;

                // exception for relative instruction
                if( preg_match('/[a-z]/', $i) ){
                    $e = 0;
                    $f = 0;
                }

                // convert horizontal lineto (relative)
                if( $i=='h' ){
                    $i = 'l';
                    $x = floatval( array_shift($coords) );
                    $y = 0;

                    // add new point's coordinates
                    $current_point = array(
                        $a*$x + $c*$y + $e,
                        $b*$x + $d*$y + $f,
                    );
                    $new_coords = array_merge($new_coords, $current_point);
                }

                // convert vertical lineto (relative)
                elseif( $i=='v' ){
                    $i = 'l';
                    $x = 0;
                    $y = floatval( array_shift($coords) );

                    // add new point's coordinates
                    $current_point = array(
                        $a*$x + $c*$y + $e,
                        $b*$x + $d*$y + $f,
                    );
                    $new_coords = array_merge($new_coords, $current_point);
                }

                // convert quadratic bezier curve (relative)
                elseif( $i=='q' ){
                    $x = floatval( array_shift($coords) );
                    $y = floatval( array_shift($coords) );

                    // add new point's coordinates
                    $current_point = array(
                        $a*$x + $c*$y + $e,
                        $b*$x + $d*$y + $f,
                    );
                    $new_coords = array_merge($new_coords, $current_point);

                    // same for 2nd point
                    $x = floatval( array_shift($coords) );
                    $y = floatval( array_shift($coords) );

                    // add new point's coordinates
                    $current_point = array(
                        $a*$x + $c*$y + $e,
                        $b*$x + $d*$y + $f,
                    );
                    $new_coords = array_merge($new_coords, $current_point);
                }

                // every other commands
                // @TODO: handle 'a,c,s' (elliptic arc curve) commands
                // cf. http://www.w3.org/TR/SVG/paths.html#PathDataCurveCommands
                else{
                    $x = floatval( array_shift($coords) );
                    $y = floatval( array_shift($coords) );
    
                    // add new point's coordinates
                    $current_point = array(
                        $a*$x + $c*$y + $e,
                        $b*$x + $d*$y + $f,
                    );
                    $new_coords = array_merge($new_coords, $current_point);
                }


            }

            $instruction = $i . implode(',', $new_coords);

            // remove useless commas
            $instruction = preg_replace('/,\-/','-', $instruction);
        }

        return implode('', $instructions);
    }



    /**
     * 
     * Short-hand methods
     * 
     */
    

    /**
     * Return full SVG XML
     * @return string
     */
    public function asXML(){
        return $this->svg->asXML();
    }

    /**
     * Adds an attribute to the SVG
     * @param string $key
     * @param string $value
     */
    public function addAttribute($key, $value){
        return $this->svg->addAttribute($key, $value);
    }
}