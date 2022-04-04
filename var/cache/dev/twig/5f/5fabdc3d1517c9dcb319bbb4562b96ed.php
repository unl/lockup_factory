<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* wdn/templates_5.2/js/compressed/plugins/mediaelement/css/mediaelementplayer.css */
class __TwigTemplate_b5894bc1e956c21b5909795cfe1c8ea8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/plugins/mediaelement/css/mediaelementplayer.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/plugins/mediaelement/css/mediaelementplayer.css"));

        // line 1
        echo ".mejs-offscreen{
\tclip: rect(1px 1px 1px 1px); 
\tclip: rect(1px, 1px, 1px, 1px); 
\tclip-path: polygon(0px 0px, 0px 0px,0px 0px, 0px 0px);
\tposition: absolute !important;
\theight: 1px;
\twidth: 1px;
\toverflow: hidden;
}
.mejs-container {
\tposition: relative;
\tbackground: #000;
\tfont-family: \"Helvetica\", Arial, serif;
\ttext-align: left;
\tvertical-align: top;
\ttext-indent: 0;
}
.mejs-fill-container,.mejs-fill-container .mejs-container{
    \twidth: 100%;
    \theight: 100%;
}
.mejs-fill-container{
    \toverflow: hidden;
}
.mejs-container:focus {
\toutline: none;
}
.me-plugin {
\tposition: absolute;
}
.mejs-embed, .mejs-embed body {
\twidth: 100%;
\theight: 100%;
\tmargin: 0;
\tpadding: 0;
\tbackground: #000;
\toverflow: hidden;
}
.mejs-fullscreen {
\t
\toverflow: hidden !important;
}
.mejs-container-fullscreen {
\tposition: fixed;
\tleft: 0;
\ttop: 0;
\tright: 0;
\tbottom: 0;
\toverflow: hidden;
\tz-index: 1000;
}
.mejs-container-fullscreen .mejs-mediaelement,
.mejs-container-fullscreen video {
\twidth: 100%;
\theight: 100%;
}
.mejs-clear {
\tclear: both;
}
.mejs-background {
\tposition: absolute;
\ttop: 0;
\tleft: 0;
}
.mejs-mediaelement {
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\twidth: 100%;
\theight: 100%;
}
.mejs-poster {
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\tbackground-size: contain ;
\tbackground-position: 50% 50% ;
\tbackground-repeat: no-repeat ;
}
:root .mejs-poster img {
\tdisplay: none ;
}
.mejs-poster img {
\tborder: 0;
\tpadding: 0;
}
.mejs-overlay {
\tposition: absolute;
\ttop: 0;
\tleft: 0;
}
.mejs-overlay-play {
\tcursor: pointer;
}
.mejs-overlay-button {
\tposition: absolute;
\ttop: 50%;
\tleft: 50%;
\twidth: 100px;
\theight: 100px;
\tmargin: -50px 0 0 -50px;
\tbackground: url(\"bigplay.svg\") no-repeat;
}
.no-svg .mejs-overlay-button {
\tbackground-image: url(\"bigplay.png\");
}
.mejs-overlay:hover .mejs-overlay-button {
\tbackground-position: 0 -100px ;
}
.mejs-overlay-loading {
\tposition: absolute;
\ttop: 50%;
\tleft: 50%;
\twidth: 80px;
\theight: 80px;
\tmargin: -40px 0 0 -40px;
\tbackground: #333;
\tbackground: url(\"background.png\");
\tbackground: rgba(0, 0, 0, 0.9);
\tbackground: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(50,50,50,0.9)), to(rgba(0,0,0,0.9)));
\tbackground: -webkit-linear-gradient(top, rgba(50,50,50,0.9), rgba(0,0,0,0.9));
\tbackground: -moz-linear-gradient(top, rgba(50,50,50,0.9), rgba(0,0,0,0.9));
\tbackground: -o-linear-gradient(top, rgba(50,50,50,0.9), rgba(0,0,0,0.9));
\tbackground: -ms-linear-gradient(top, rgba(50,50,50,0.9), rgba(0,0,0,0.9));
\tbackground: linear-gradient(rgba(50,50,50,0.9), rgba(0,0,0,0.9));
}
.mejs-overlay-loading span {
\tdisplay: block;
\twidth: 80px;
\theight: 80px;
\tbackground: transparent url(\"loading.gif\") 50% 50% no-repeat;
}
.mejs-container .mejs-controls {
\tposition: absolute;
\tlist-style-type: none;
\tmargin: 0;
\tpadding: 0;
\tbottom: 0;
\tleft: 0;
\tbackground: url(\"background.png\");
\tbackground: rgba(0, 0, 0, 0.7);
\tbackground: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(50,50,50,0.7)), to(rgba(0,0,0,0.7)));
\tbackground: -webkit-linear-gradient(top, rgba(50,50,50,0.7), rgba(0,0,0,0.7));
\tbackground: -moz-linear-gradient(top, rgba(50,50,50,0.7), rgba(0,0,0,0.7));
\tbackground: -o-linear-gradient(top, rgba(50,50,50,0.7), rgba(0,0,0,0.7));
\tbackground: -ms-linear-gradient(top, rgba(50,50,50,0.7), rgba(0,0,0,0.7));
\tbackground: linear-gradient(rgba(50,50,50,0.7), rgba(0,0,0,0.7));
\theight: 30px;
\twidth: 100%;
}
.mejs-container .mejs-controls  div {
\tlist-style-type: none;
\tbackground-image: none;
\tdisplay: block;
\tfloat: left;
\tmargin: 0;
\tpadding: 0;
\twidth: 26px;
\theight: 26px;
\tfont-size: 11px;
\tline-height: 11px;
\tfont-family: \"Helvetica\", Arial, serif;
\tborder: 0;
}
.mejs-controls .mejs-button button {
\tcursor: pointer;
\tdisplay: block;
\tfont-size: 0;
\tline-height: 0;
\ttext-decoration: none;
\tmargin: 7px 5px;
\tpadding: 0;
\tposition: absolute;
\theight: 16px;
\twidth: 16px;
\tborder: 0;
\tbackground: transparent url(\"controls.svg\") no-repeat;
}
.no-svg .mejs-controls .mejs-button button {
\tbackground-image: url(\"controls.png\");
}
\t
.mejs-controls .mejs-button button:focus {
\toutline: dotted 1px #999;
}
.mejs-container .mejs-controls .mejs-time {
\tcolor: #fff;
\tdisplay: block;
\theight: 17px;
\twidth: auto;
\tpadding: 10px 3px 0 3px ;
\toverflow: hidden;
\ttext-align: center;
\t-moz-box-sizing: content-box;
\t-webkit-box-sizing: content-box;
\tbox-sizing: content-box;
}
.mejs-container .mejs-controls .mejs-time a {
\tcolor: #fff;
\tfont-size: 11px;
\tline-height: 12px;
\tdisplay: block;
\tfloat: left;
\tmargin: 1px 2px 0 0;
\twidth: auto;
}
.mejs-controls .mejs-play button {
\tbackground-position: 0 0;
}
.mejs-controls .mejs-pause button {
\tbackground-position: 0 -16px;
}
.mejs-controls .mejs-stop button {
\tbackground-position: -112px 0;
}
.mejs-controls div.mejs-time-rail {
\tdirection: ltr;
\twidth: 200px;
\tpadding-top: 5px;
}
.mejs-controls .mejs-time-rail span, .mejs-controls .mejs-time-rail a {
\tdisplay: block;
\tposition: absolute;
\twidth: 180px;
\theight: 10px;
\t-webkit-border-radius: 2px;
\t-moz-border-radius: 2px;
\tborder-radius: 2px;
\tcursor: pointer;
}
.mejs-controls .mejs-time-rail .mejs-time-total {
\tmargin: 5px;
\tbackground: #333;
\tbackground: rgba(50,50,50,0.8);
\tbackground: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(30,30,30,0.8)), to(rgba(60,60,60,0.8)));
\tbackground: -webkit-linear-gradient(top, rgba(30,30,30,0.8), rgba(60,60,60,0.8));
\tbackground: -moz-linear-gradient(top, rgba(30,30,30,0.8), rgba(60,60,60,0.8));
\tbackground: -o-linear-gradient(top, rgba(30,30,30,0.8), rgba(60,60,60,0.8));
\tbackground: -ms-linear-gradient(top, rgba(30,30,30,0.8), rgba(60,60,60,0.8));
\tbackground: linear-gradient(rgba(30,30,30,0.8), rgba(60,60,60,0.8));
}
.mejs-controls .mejs-time-rail .mejs-time-buffering {
\twidth: 100%;
\tbackground-image: -o-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
\tbackground-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
\tbackground-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
\tbackground-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
\tbackground-image: -ms-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
\tbackground-image: linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
\t-webkit-background-size: 15px 15px;
\t-moz-background-size: 15px 15px;
\t-o-background-size: 15px 15px;
\tbackground-size: 15px 15px;
\t-webkit-animation: buffering-stripes 2s linear infinite;
\t-moz-animation: buffering-stripes 2s linear infinite;
\t-ms-animation: buffering-stripes 2s linear infinite;
\t-o-animation: buffering-stripes 2s linear infinite;
\tanimation: buffering-stripes 2s linear infinite;
}
@-webkit-keyframes buffering-stripes { from {background-position: 0 0;} to {background-position: 30px 0;} }
@-moz-keyframes buffering-stripes { from {background-position: 0 0;} to {background-position: 30px 0;} }
@-ms-keyframes buffering-stripes { from {background-position: 0 0;} to {background-position: 30px 0;} }
@-o-keyframes buffering-stripes { from {background-position: 0 0;} to {background-position: 30px 0;} }
@keyframes buffering-stripes { from {background-position: 0 0;} to {background-position: 30px 0;} }
.mejs-controls .mejs-time-rail .mejs-time-loaded {
\tbackground: #3caac8;
\tbackground: rgba(60,170,200,0.8);
\tbackground: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(44,124,145,0.8)), to(rgba(78,183,212,0.8)));
\tbackground: -webkit-linear-gradient(top, rgba(44,124,145,0.8), rgba(78,183,212,0.8));
\tbackground: -moz-linear-gradient(top, rgba(44,124,145,0.8), rgba(78,183,212,0.8));
\tbackground: -o-linear-gradient(top, rgba(44,124,145,0.8), rgba(78,183,212,0.8));
\tbackground: -ms-linear-gradient(top, rgba(44,124,145,0.8), rgba(78,183,212,0.8));
\tbackground: linear-gradient(rgba(44,124,145,0.8), rgba(78,183,212,0.8));
\twidth: 0;
}
.mejs-controls .mejs-time-rail .mejs-time-current {
\tbackground: #fff;
\tbackground: rgba(255,255,255,0.8);
\tbackground: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(255,255,255,0.9)), to(rgba(200,200,200,0.8)));
\tbackground: -webkit-linear-gradient(top, rgba(255,255,255,0.9), rgba(200,200,200,0.8));
\tbackground: -moz-linear-gradient(top, rgba(255,255,255,0.9), rgba(200,200,200,0.8));
\tbackground: -o-linear-gradient(top, rgba(255,255,255,0.9), rgba(200,200,200,0.8));
\tbackground: -ms-linear-gradient(top, rgba(255,255,255,0.9), rgba(200,200,200,0.8));
\tbackground: linear-gradient(rgba(255,255,255,0.9), rgba(200,200,200,0.8));
\twidth: 0;
}
.mejs-controls .mejs-time-rail .mejs-time-handle {
\tdisplay: none;
\tposition: absolute;
\tmargin: 0;
\twidth: 10px;
\tbackground: #fff;
\t-webkit-border-radius: 5px;
\t-moz-border-radius: 5px;
\tborder-radius: 5px;
\tcursor: pointer;
\tborder: solid 2px #333;
\ttop: -2px;
\ttext-align: center;
}
.mejs-controls .mejs-time-rail .mejs-time-float {
\tposition: absolute;
\tdisplay: none;
\tbackground: #eee;
\twidth: 36px;
\theight: 17px;
\tborder: solid 1px #333;
\ttop: -26px;
\tmargin-left: -18px;
\ttext-align: center;
\tcolor: #111;
}
.mejs-controls .mejs-time-rail .mejs-time-float-current {
\tmargin: 2px;
\twidth: 30px;
\tdisplay: block;
\ttext-align: center;
\tleft: 0;
}
.mejs-controls .mejs-time-rail .mejs-time-float-corner {
\tposition: absolute;
\tdisplay: block;
\twidth: 0;
\theight: 0;
\tline-height: 0;
\tborder: solid 5px #eee;
\tborder-color: #eee transparent transparent transparent;
\t-webkit-border-radius: 0;
\t-moz-border-radius: 0;
\tborder-radius: 0;
\ttop: 15px;
\tleft: 13px;
}
.mejs-long-video .mejs-controls .mejs-time-rail .mejs-time-float {
\twidth: 48px;
}
.mejs-long-video .mejs-controls .mejs-time-rail .mejs-time-float-current {
\twidth: 44px;
}
.mejs-long-video .mejs-controls .mejs-time-rail .mejs-time-float-corner {
\tleft: 18px;
}
.mejs-controls .mejs-fullscreen-button button {
\tbackground-position: -32px 0;
}
.mejs-controls .mejs-unfullscreen button {
\tbackground-position: -32px -16px;
}
.mejs-controls .mejs-volume-button {
}
.mejs-controls .mejs-mute button {
\tbackground-position: -16px -16px;
}
.mejs-controls .mejs-unmute button {
\tbackground-position: -16px 0;
}
.mejs-controls .mejs-volume-button {
\tposition: relative;
}
.mejs-controls .mejs-volume-button .mejs-volume-slider {
\tdisplay: none;
\theight: 115px;
\twidth: 25px;
\tbackground: url(\"background.png\");
\tbackground: rgba(50, 50, 50, 0.7);
\t-webkit-border-radius: 0;
\t-moz-border-radius: 0;
\tborder-radius: 0;
\ttop: -115px;
\tleft: 0;
\tz-index: 1;
\tposition: absolute;
\tmargin: 0;
}
.mejs-controls .mejs-volume-button:hover {
\t-webkit-border-radius: 0 0 4px 4px;
\t-moz-border-radius: 0 0 4px 4px;
\tborder-radius: 0 0 4px 4px;
}
.mejs-controls .mejs-volume-button .mejs-volume-slider .mejs-volume-total {
\tposition: absolute;
\tleft: 11px;
\ttop: 8px;
\twidth: 2px;
\theight: 100px;
\tbackground: #ddd;
\tbackground: rgba(255, 255, 255, 0.5);
\tmargin: 0;
}
.mejs-controls .mejs-volume-button .mejs-volume-slider .mejs-volume-current {
\tposition: absolute;
\tleft: 11px;
\ttop: 8px;
\twidth: 2px;
\theight: 100px;
\tbackground: #ddd;
\tbackground: rgba(255, 255, 255, 0.9);
\tmargin: 0;
}
.mejs-controls .mejs-volume-button .mejs-volume-slider .mejs-volume-handle {
\tposition: absolute;
\tleft: 4px;
\ttop: -3px;
\twidth: 16px;
\theight: 6px;
\tbackground: #ddd;
\tbackground: rgba(255, 255, 255, 0.9);
\tcursor: N-resize;
\t-webkit-border-radius: 1px;
\t-moz-border-radius: 1px;
\tborder-radius: 1px;
\tmargin: 0;
}
.mejs-controls a.mejs-horizontal-volume-slider {
\theight: 26px;
\twidth: 56px;
\tposition: relative;
    display: block;
    float: left;
    vertical-align: middle;
}
.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-total {
\tposition: absolute;
\tleft: 0;
\ttop: 11px;
\twidth: 50px;
\theight: 8px;
\tmargin: 0;
\tpadding: 0;
\tfont-size: 1px;
\t-webkit-border-radius: 2px;
\t-moz-border-radius: 2px;
\tborder-radius: 2px;
\tbackground: #333;
\tbackground: rgba(50,50,50,0.8);
\tbackground: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(30,30,30,0.8)), to(rgba(60,60,60,0.8)));
\tbackground: -webkit-linear-gradient(top, rgba(30,30,30,0.8), rgba(60,60,60,0.8));
\tbackground: -moz-linear-gradient(top, rgba(30,30,30,0.8), rgba(60,60,60,0.8));
\tbackground: -o-linear-gradient(top, rgba(30,30,30,0.8), rgba(60,60,60,0.8));
\tbackground: -ms-linear-gradient(top, rgba(30,30,30,0.8), rgba(60,60,60,0.8));
\tbackground: linear-gradient(rgba(30,30,30,0.8), rgba(60,60,60,0.8));
}
.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current {
\tposition: absolute;
\tleft: 0;
\ttop: 11px;
\twidth: 50px;
\theight: 8px;
\tmargin: 0;
\tpadding: 0;
\tfont-size: 1px;
\t-webkit-border-radius: 2px;
\t-moz-border-radius: 2px;
\tborder-radius: 2px;
\tbackground: #fff;
\tbackground: rgba(255,255,255,0.8);
\tbackground: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(255,255,255,0.9)), to(rgba(200,200,200,0.8)));
\tbackground: -webkit-linear-gradient(top, rgba(255,255,255,0.9), rgba(200,200,200,0.8));
\tbackground: -moz-linear-gradient(top, rgba(255,255,255,0.9), rgba(200,200,200,0.8));
\tbackground: -o-linear-gradient(top, rgba(255,255,255,0.9), rgba(200,200,200,0.8));
\tbackground: -ms-linear-gradient(top, rgba(255,255,255,0.9), rgba(200,200,200,0.8));
\tbackground: linear-gradient(rgba(255,255,255,0.9), rgba(200,200,200,0.8));
}
.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-handle {
\tdisplay: none;
}
.mejs-controls .mejs-captions-button {
\tposition: relative;
}
.mejs-controls .mejs-captions-button button {
\tbackground-position: -48px 0;
}
.mejs-controls .mejs-captions-button .mejs-captions-selector {
\tvisibility: hidden;
\tposition: absolute;
\tbottom: 26px;
\tright: -51px;
\twidth: 85px;
\theight: 100px;
\tbackground: url(\"background.png\");
\tbackground: rgba(50,50,50,0.7);
\tborder: solid 1px transparent;
\tpadding: 10px 10px 0 10px;
\toverflow: hidden;
\t-webkit-border-radius: 0;
\t-moz-border-radius: 0;
\tborder-radius: 0;
}
.mejs-controls .mejs-captions-button .mejs-captions-selector ul {
\tmargin: 0;
\tpadding: 0;
\tdisplay: block;
\tlist-style-type: none !important;
\toverflow: hidden;
}
.mejs-controls .mejs-captions-button .mejs-captions-selector ul li {
\tmargin: 0 0 6px 0;
\tpadding: 0;
\tlist-style-type: none !important;
\tdisplay: block;
\tcolor: #fff;
\toverflow: hidden;
}
.mejs-controls .mejs-captions-button .mejs-captions-selector ul li input {
\tclear: both;
\tfloat: left;
\tmargin: 3px 3px 0 5px;
}
.mejs-controls .mejs-captions-button .mejs-captions-selector ul li label {
\twidth: 55px;
\tfloat: left;
\tpadding: 4px 0 0 0;
\tline-height: 15px;
\tfont-family: \"Helvetica\", Arial, serif;
\tfont-size: 10px;
}
.mejs-controls .mejs-captions-button .mejs-captions-translations {
\tfont-size: 10px;
\tmargin: 0 0 5px 0;
}
.mejs-chapters {
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\tborder-right: solid 1px #fff;
\twidth: 10000px;
\tz-index: 1;
}
.mejs-chapters .mejs-chapter {
\tposition: absolute;
\tfloat: left;
\tbackground: #222;
\tbackground: rgba(0, 0, 0, 0.7);
\tbackground: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(50,50,50,0.7)), to(rgba(0,0,0,0.7)));
\tbackground: -webkit-linear-gradient(top, rgba(50,50,50,0.7), rgba(0,0,0,0.7));
\tbackground: -moz-linear-gradient(top, rgba(50,50,50,0.7), rgba(0,0,0,0.7));
\tbackground: -o-linear-gradient(top, rgba(50,50,50,0.7), rgba(0,0,0,0.7));
\tbackground: -ms-linear-gradient(top, rgba(50,50,50,0.7), rgba(0,0,0,0.7));
\tbackground: linear-gradient(rgba(50,50,50,0.7), rgba(0,0,0,0.7));
\tfilter: progid:DXImageTransform.Microsoft.Gradient(GradientType=0, startColorstr=#323232,endColorstr=#000000);
\toverflow: hidden;
\tborder: 0;
}
.mejs-chapters .mejs-chapter .mejs-chapter-block {
\tfont-size: 11px;
\tcolor: #fff;
\tpadding: 5px;
\tdisplay: block;
\tborder-right: solid 1px #333;
\tborder-bottom: solid 1px #333;
\tcursor: pointer;
}
.mejs-chapters .mejs-chapter .mejs-chapter-block-last {
\tborder-right: none;
}
.mejs-chapters .mejs-chapter .mejs-chapter-block:hover {
\tbackground: #666;
\tbackground: rgba(102,102,102, 0.7);
\tbackground: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(102,102,102,0.7)), to(rgba(50,50,50,0.6)));
\tbackground: -webkit-linear-gradient(top, rgba(102,102,102,0.7), rgba(50,50,50,0.6));
\tbackground: -moz-linear-gradient(top, rgba(102,102,102,0.7), rgba(50,50,50,0.6));
\tbackground: -o-linear-gradient(top, rgba(102,102,102,0.7), rgba(50,50,50,0.6));
\tbackground: -ms-linear-gradient(top, rgba(102,102,102,0.7), rgba(50,50,50,0.6));
\tbackground: linear-gradient(rgba(102,102,102,0.7), rgba(50,50,50,0.6));
\tfilter: progid:DXImageTransform.Microsoft.Gradient(GradientType=0, startColorstr=#666666,endColorstr=#323232);
}
.mejs-chapters .mejs-chapter .mejs-chapter-block .ch-title {
\tfont-size: 12px;
\tfont-weight: bold;
\tdisplay: block;
\twhite-space: nowrap;
\ttext-overflow: ellipsis;
\tmargin: 0 0 3px 0;
\tline-height: 12px;
}
.mejs-chapters .mejs-chapter .mejs-chapter-block .ch-timespan {
\tfont-size: 12px;
\tline-height: 12px;
\tmargin: 3px 0 4px 0;
\tdisplay: block;
\twhite-space: nowrap;
\ttext-overflow: ellipsis;
}
.mejs-captions-layer {
\tposition: absolute;
\tbottom: 0;
\tleft: 0;
\ttext-align:center;
\tline-height: 20px;
\tfont-size: 16px;
\tcolor: #fff;
}
.mejs-captions-layer  a {
\tcolor: #fff;
\ttext-decoration: underline;
}
.mejs-captions-layer[lang=ar] {
\tfont-size: 20px;
\tfont-weight: normal;
}
.mejs-captions-position {
\tposition: absolute;
\twidth: 100%;
\tbottom: 15px;
\tleft: 0;
}
.mejs-captions-position-hover {
\tbottom: 35px;
}
.mejs-captions-text {
\tpadding: 0;
\tbackground: url(\"background.png\");
\tbackground: rgba(20, 20, 20, 0.5);
\twhite-space: pre-wrap;
\t-webkit-box-shadow: 5px 0 0 rgba(20, 20, 20, 0.5), -5px 0 0 rgba(20, 20, 20, 0.5);
\tbox-shadow: 5px 0 0 rgba(20, 20, 20, 0.5), -5px 0 0 rgba(20, 20, 20, 0.5);
}
.me-cannotplay {
}
.me-cannotplay a {
\tcolor: #fff;
\tfont-weight: bold;
}
.me-cannotplay span {
\tpadding: 15px;
\tdisplay: block;
}
.mejs-controls .mejs-loop-off button {
\tbackground-position: -64px -16px;
}
.mejs-controls .mejs-loop-on button {
\tbackground-position: -64px 0;
}
.mejs-controls .mejs-backlight-off button {
\tbackground-position: -80px -16px;
}
.mejs-controls .mejs-backlight-on button {
\tbackground-position: -80px 0;
}
.mejs-controls .mejs-picturecontrols-button {
\tbackground-position: -96px 0;
}
.mejs-contextmenu {
\tposition: absolute;
\twidth: 150px;
\tpadding: 10px;
\tborder-radius: 4px;
\ttop: 0;
\tleft: 0;
\tbackground: #fff;
\tborder: solid 1px #999;
\tz-index: 1001; 
}
.mejs-contextmenu .mejs-contextmenu-separator {
\theight: 1px;
\tfont-size: 0;
\tmargin: 5px 6px;
\tbackground: #333;
}
.mejs-contextmenu .mejs-contextmenu-item {
\tfont-family: \"Helvetica\", Arial, serif;
\tfont-size: 12px;
\tpadding: 4px 6px;
\tcursor: pointer;
\tcolor: #333;
}
.mejs-contextmenu .mejs-contextmenu-item:hover {
\tbackground: #2C7C91;
\tcolor: #fff;
}
.mejs-controls .mejs-sourcechooser-button {
\tposition: relative;
}
.mejs-controls .mejs-sourcechooser-button button {
\tbackground-position: -128px 0;
}
.mejs-controls .mejs-sourcechooser-button .mejs-sourcechooser-selector {
\tposition: absolute;
\tbottom: 26px;
\tright: -10px;
\twidth: 130px;
\theight: 100px;
\tbackground: url(\"background.png\");
\tbackground: rgba(50,50,50,0.7);
\tborder: solid 1px transparent;
\tpadding: 10px;
\toverflow: hidden;
\t-webkit-border-radius: 0;
\t-moz-border-radius: 0;
\tborder-radius: 0;
}
.mejs-controls .mejs-sourcechooser-button .mejs-sourcechooser-selector ul {
\tmargin: 0;
\tpadding: 0;
\tdisplay: block;
\tlist-style-type: none !important;
\toverflow: hidden;
}
.mejs-controls .mejs-sourcechooser-button .mejs-sourcechooser-selector ul li {
\tmargin: 0 0 6px 0;
\tpadding: 0;
\tlist-style-type: none !important;
\tdisplay: block;
\tcolor: #fff;
\toverflow: hidden;
}
.mejs-controls .mejs-sourcechooser-button .mejs-sourcechooser-selector ul li input {
\tclear: both;
\tfloat: left;
\tmargin: 3px 3px 0 5px;
}
.mejs-controls .mejs-sourcechooser-button .mejs-sourcechooser-selector ul li label {
\twidth: 100px;
\tfloat: left;
\tpadding: 4px 0 0 0;
\tline-height: 15px;
\tfont-family: \"Helvetica\", Arial, serif;
\tfont-size: 10px;
}
.mejs-postroll-layer {
\tposition: absolute;
\tbottom: 0;
\tleft: 0;
\twidth: 100%;
\theight: 100%;
\tbackground: url(\"background.png\");
\tbackground: rgba(50,50,50,0.7);
\tz-index: 1000;
\toverflow: hidden;
}
.mejs-postroll-layer-content {
\twidth: 100%;
\theight: 100%;
}
.mejs-postroll-close {
\tposition: absolute;
\tright: 0;
\ttop: 0;
\tbackground: url(\"background.png\");
\tbackground: rgba(50,50,50,0.7);
\tcolor: #fff;
\tpadding: 4px;
\tz-index: 100;
\tcursor: pointer;
}
div.mejs-speed-button {
\twidth: 46px !important;
\tposition: relative;
}
.mejs-controls .mejs-button.mejs-speed-button button {
\tbackground: transparent;
\twidth: 36px;
\tfont-size: 11px;
\tline-height: normal;
\tcolor: #ffffff;
}
.mejs-controls .mejs-speed-button .mejs-speed-selector {
\tdisplay: none;
\tposition: absolute;
\ttop: -100px;
\tleft: -10px;
\twidth: 60px;
\theight: 100px;
\tbackground: url(\"background.png\");
\tbackground: rgba(50, 50, 50, 0.7);
\tborder: solid 1px transparent;
\tpadding: 0;
\toverflow: hidden;
\t-webkit-border-radius: 0;
\t-moz-border-radius: 0;
\tborder-radius: 0;
}
.mejs-controls .mejs-speed-button:hover > .mejs-speed-selector {
\tdisplay: block;
}
.mejs-controls .mejs-speed-button .mejs-speed-selector ul li label.mejs-speed-selected {
\tcolor: rgba(33, 248, 248, 1);
}
.mejs-controls .mejs-speed-button .mejs-speed-selector ul {
\tmargin: 0;
\tpadding: 0;
\tdisplay: block;
\tlist-style-type: none !important;
\toverflow: hidden;
}
.mejs-controls .mejs-speed-button .mejs-speed-selector ul li {
\tmargin: 0 0 6px 0;
\tpadding: 0 10px;
\tlist-style-type: none !important;
\tdisplay: block;
\tcolor: #fff;
\toverflow: hidden;
}
.mejs-controls .mejs-speed-button .mejs-speed-selector ul li input {
\tclear: both;
\tfloat: left;
\tmargin: 3px 3px 0 5px;
\tdisplay: none;
}
.mejs-controls .mejs-speed-button .mejs-speed-selector ul li label {
\twidth: 60px;
\tfloat: left;
\tpadding: 4px 0 0 0;
\tline-height: 15px;
\tfont-family: \"Helvetica\", Arial, serif;
\tfont-size: 11px;
\tcolor: white;
\tmargin-left: 5px;
\tcursor: pointer;
}
.mejs-controls .mejs-speed-button .mejs-speed-selector ul li:hover {
\tbackground-color: rgb(200, 200, 200) !important;
\tbackground-color: rgba(255,255,255,.4) !important;
}
.mejs-controls .mejs-button.mejs-jump-forward-button {
\tbackground: transparent url(\"jumpforward.png\") no-repeat 3px 3px;
}
.mejs-controls .mejs-button.mejs-jump-forward-button button {
\tbackground: transparent;
\tfont-size: 9px;
\tline-height: normal;
\tcolor: #ffffff;
}
.mejs-controls .mejs-button.mejs-skip-back-button {
\tbackground: transparent url(\"skipback.png\") no-repeat 3px 3px;
}
.mejs-controls .mejs-button.mejs-skip-back-button button {
\tbackground: transparent;
\tfont-size: 9px;
\tline-height: normal;
\tcolor: #ffffff;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/compressed/plugins/mediaelement/css/mediaelementplayer.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".mejs-offscreen{
\tclip: rect(1px 1px 1px 1px); 
\tclip: rect(1px, 1px, 1px, 1px); 
\tclip-path: polygon(0px 0px, 0px 0px,0px 0px, 0px 0px);
\tposition: absolute !important;
\theight: 1px;
\twidth: 1px;
\toverflow: hidden;
}
.mejs-container {
\tposition: relative;
\tbackground: #000;
\tfont-family: \"Helvetica\", Arial, serif;
\ttext-align: left;
\tvertical-align: top;
\ttext-indent: 0;
}
.mejs-fill-container,.mejs-fill-container .mejs-container{
    \twidth: 100%;
    \theight: 100%;
}
.mejs-fill-container{
    \toverflow: hidden;
}
.mejs-container:focus {
\toutline: none;
}
.me-plugin {
\tposition: absolute;
}
.mejs-embed, .mejs-embed body {
\twidth: 100%;
\theight: 100%;
\tmargin: 0;
\tpadding: 0;
\tbackground: #000;
\toverflow: hidden;
}
.mejs-fullscreen {
\t
\toverflow: hidden !important;
}
.mejs-container-fullscreen {
\tposition: fixed;
\tleft: 0;
\ttop: 0;
\tright: 0;
\tbottom: 0;
\toverflow: hidden;
\tz-index: 1000;
}
.mejs-container-fullscreen .mejs-mediaelement,
.mejs-container-fullscreen video {
\twidth: 100%;
\theight: 100%;
}
.mejs-clear {
\tclear: both;
}
.mejs-background {
\tposition: absolute;
\ttop: 0;
\tleft: 0;
}
.mejs-mediaelement {
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\twidth: 100%;
\theight: 100%;
}
.mejs-poster {
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\tbackground-size: contain ;
\tbackground-position: 50% 50% ;
\tbackground-repeat: no-repeat ;
}
:root .mejs-poster img {
\tdisplay: none ;
}
.mejs-poster img {
\tborder: 0;
\tpadding: 0;
}
.mejs-overlay {
\tposition: absolute;
\ttop: 0;
\tleft: 0;
}
.mejs-overlay-play {
\tcursor: pointer;
}
.mejs-overlay-button {
\tposition: absolute;
\ttop: 50%;
\tleft: 50%;
\twidth: 100px;
\theight: 100px;
\tmargin: -50px 0 0 -50px;
\tbackground: url(\"bigplay.svg\") no-repeat;
}
.no-svg .mejs-overlay-button {
\tbackground-image: url(\"bigplay.png\");
}
.mejs-overlay:hover .mejs-overlay-button {
\tbackground-position: 0 -100px ;
}
.mejs-overlay-loading {
\tposition: absolute;
\ttop: 50%;
\tleft: 50%;
\twidth: 80px;
\theight: 80px;
\tmargin: -40px 0 0 -40px;
\tbackground: #333;
\tbackground: url(\"background.png\");
\tbackground: rgba(0, 0, 0, 0.9);
\tbackground: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(50,50,50,0.9)), to(rgba(0,0,0,0.9)));
\tbackground: -webkit-linear-gradient(top, rgba(50,50,50,0.9), rgba(0,0,0,0.9));
\tbackground: -moz-linear-gradient(top, rgba(50,50,50,0.9), rgba(0,0,0,0.9));
\tbackground: -o-linear-gradient(top, rgba(50,50,50,0.9), rgba(0,0,0,0.9));
\tbackground: -ms-linear-gradient(top, rgba(50,50,50,0.9), rgba(0,0,0,0.9));
\tbackground: linear-gradient(rgba(50,50,50,0.9), rgba(0,0,0,0.9));
}
.mejs-overlay-loading span {
\tdisplay: block;
\twidth: 80px;
\theight: 80px;
\tbackground: transparent url(\"loading.gif\") 50% 50% no-repeat;
}
.mejs-container .mejs-controls {
\tposition: absolute;
\tlist-style-type: none;
\tmargin: 0;
\tpadding: 0;
\tbottom: 0;
\tleft: 0;
\tbackground: url(\"background.png\");
\tbackground: rgba(0, 0, 0, 0.7);
\tbackground: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(50,50,50,0.7)), to(rgba(0,0,0,0.7)));
\tbackground: -webkit-linear-gradient(top, rgba(50,50,50,0.7), rgba(0,0,0,0.7));
\tbackground: -moz-linear-gradient(top, rgba(50,50,50,0.7), rgba(0,0,0,0.7));
\tbackground: -o-linear-gradient(top, rgba(50,50,50,0.7), rgba(0,0,0,0.7));
\tbackground: -ms-linear-gradient(top, rgba(50,50,50,0.7), rgba(0,0,0,0.7));
\tbackground: linear-gradient(rgba(50,50,50,0.7), rgba(0,0,0,0.7));
\theight: 30px;
\twidth: 100%;
}
.mejs-container .mejs-controls  div {
\tlist-style-type: none;
\tbackground-image: none;
\tdisplay: block;
\tfloat: left;
\tmargin: 0;
\tpadding: 0;
\twidth: 26px;
\theight: 26px;
\tfont-size: 11px;
\tline-height: 11px;
\tfont-family: \"Helvetica\", Arial, serif;
\tborder: 0;
}
.mejs-controls .mejs-button button {
\tcursor: pointer;
\tdisplay: block;
\tfont-size: 0;
\tline-height: 0;
\ttext-decoration: none;
\tmargin: 7px 5px;
\tpadding: 0;
\tposition: absolute;
\theight: 16px;
\twidth: 16px;
\tborder: 0;
\tbackground: transparent url(\"controls.svg\") no-repeat;
}
.no-svg .mejs-controls .mejs-button button {
\tbackground-image: url(\"controls.png\");
}
\t
.mejs-controls .mejs-button button:focus {
\toutline: dotted 1px #999;
}
.mejs-container .mejs-controls .mejs-time {
\tcolor: #fff;
\tdisplay: block;
\theight: 17px;
\twidth: auto;
\tpadding: 10px 3px 0 3px ;
\toverflow: hidden;
\ttext-align: center;
\t-moz-box-sizing: content-box;
\t-webkit-box-sizing: content-box;
\tbox-sizing: content-box;
}
.mejs-container .mejs-controls .mejs-time a {
\tcolor: #fff;
\tfont-size: 11px;
\tline-height: 12px;
\tdisplay: block;
\tfloat: left;
\tmargin: 1px 2px 0 0;
\twidth: auto;
}
.mejs-controls .mejs-play button {
\tbackground-position: 0 0;
}
.mejs-controls .mejs-pause button {
\tbackground-position: 0 -16px;
}
.mejs-controls .mejs-stop button {
\tbackground-position: -112px 0;
}
.mejs-controls div.mejs-time-rail {
\tdirection: ltr;
\twidth: 200px;
\tpadding-top: 5px;
}
.mejs-controls .mejs-time-rail span, .mejs-controls .mejs-time-rail a {
\tdisplay: block;
\tposition: absolute;
\twidth: 180px;
\theight: 10px;
\t-webkit-border-radius: 2px;
\t-moz-border-radius: 2px;
\tborder-radius: 2px;
\tcursor: pointer;
}
.mejs-controls .mejs-time-rail .mejs-time-total {
\tmargin: 5px;
\tbackground: #333;
\tbackground: rgba(50,50,50,0.8);
\tbackground: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(30,30,30,0.8)), to(rgba(60,60,60,0.8)));
\tbackground: -webkit-linear-gradient(top, rgba(30,30,30,0.8), rgba(60,60,60,0.8));
\tbackground: -moz-linear-gradient(top, rgba(30,30,30,0.8), rgba(60,60,60,0.8));
\tbackground: -o-linear-gradient(top, rgba(30,30,30,0.8), rgba(60,60,60,0.8));
\tbackground: -ms-linear-gradient(top, rgba(30,30,30,0.8), rgba(60,60,60,0.8));
\tbackground: linear-gradient(rgba(30,30,30,0.8), rgba(60,60,60,0.8));
}
.mejs-controls .mejs-time-rail .mejs-time-buffering {
\twidth: 100%;
\tbackground-image: -o-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
\tbackground-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
\tbackground-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
\tbackground-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
\tbackground-image: -ms-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
\tbackground-image: linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
\t-webkit-background-size: 15px 15px;
\t-moz-background-size: 15px 15px;
\t-o-background-size: 15px 15px;
\tbackground-size: 15px 15px;
\t-webkit-animation: buffering-stripes 2s linear infinite;
\t-moz-animation: buffering-stripes 2s linear infinite;
\t-ms-animation: buffering-stripes 2s linear infinite;
\t-o-animation: buffering-stripes 2s linear infinite;
\tanimation: buffering-stripes 2s linear infinite;
}
@-webkit-keyframes buffering-stripes { from {background-position: 0 0;} to {background-position: 30px 0;} }
@-moz-keyframes buffering-stripes { from {background-position: 0 0;} to {background-position: 30px 0;} }
@-ms-keyframes buffering-stripes { from {background-position: 0 0;} to {background-position: 30px 0;} }
@-o-keyframes buffering-stripes { from {background-position: 0 0;} to {background-position: 30px 0;} }
@keyframes buffering-stripes { from {background-position: 0 0;} to {background-position: 30px 0;} }
.mejs-controls .mejs-time-rail .mejs-time-loaded {
\tbackground: #3caac8;
\tbackground: rgba(60,170,200,0.8);
\tbackground: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(44,124,145,0.8)), to(rgba(78,183,212,0.8)));
\tbackground: -webkit-linear-gradient(top, rgba(44,124,145,0.8), rgba(78,183,212,0.8));
\tbackground: -moz-linear-gradient(top, rgba(44,124,145,0.8), rgba(78,183,212,0.8));
\tbackground: -o-linear-gradient(top, rgba(44,124,145,0.8), rgba(78,183,212,0.8));
\tbackground: -ms-linear-gradient(top, rgba(44,124,145,0.8), rgba(78,183,212,0.8));
\tbackground: linear-gradient(rgba(44,124,145,0.8), rgba(78,183,212,0.8));
\twidth: 0;
}
.mejs-controls .mejs-time-rail .mejs-time-current {
\tbackground: #fff;
\tbackground: rgba(255,255,255,0.8);
\tbackground: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(255,255,255,0.9)), to(rgba(200,200,200,0.8)));
\tbackground: -webkit-linear-gradient(top, rgba(255,255,255,0.9), rgba(200,200,200,0.8));
\tbackground: -moz-linear-gradient(top, rgba(255,255,255,0.9), rgba(200,200,200,0.8));
\tbackground: -o-linear-gradient(top, rgba(255,255,255,0.9), rgba(200,200,200,0.8));
\tbackground: -ms-linear-gradient(top, rgba(255,255,255,0.9), rgba(200,200,200,0.8));
\tbackground: linear-gradient(rgba(255,255,255,0.9), rgba(200,200,200,0.8));
\twidth: 0;
}
.mejs-controls .mejs-time-rail .mejs-time-handle {
\tdisplay: none;
\tposition: absolute;
\tmargin: 0;
\twidth: 10px;
\tbackground: #fff;
\t-webkit-border-radius: 5px;
\t-moz-border-radius: 5px;
\tborder-radius: 5px;
\tcursor: pointer;
\tborder: solid 2px #333;
\ttop: -2px;
\ttext-align: center;
}
.mejs-controls .mejs-time-rail .mejs-time-float {
\tposition: absolute;
\tdisplay: none;
\tbackground: #eee;
\twidth: 36px;
\theight: 17px;
\tborder: solid 1px #333;
\ttop: -26px;
\tmargin-left: -18px;
\ttext-align: center;
\tcolor: #111;
}
.mejs-controls .mejs-time-rail .mejs-time-float-current {
\tmargin: 2px;
\twidth: 30px;
\tdisplay: block;
\ttext-align: center;
\tleft: 0;
}
.mejs-controls .mejs-time-rail .mejs-time-float-corner {
\tposition: absolute;
\tdisplay: block;
\twidth: 0;
\theight: 0;
\tline-height: 0;
\tborder: solid 5px #eee;
\tborder-color: #eee transparent transparent transparent;
\t-webkit-border-radius: 0;
\t-moz-border-radius: 0;
\tborder-radius: 0;
\ttop: 15px;
\tleft: 13px;
}
.mejs-long-video .mejs-controls .mejs-time-rail .mejs-time-float {
\twidth: 48px;
}
.mejs-long-video .mejs-controls .mejs-time-rail .mejs-time-float-current {
\twidth: 44px;
}
.mejs-long-video .mejs-controls .mejs-time-rail .mejs-time-float-corner {
\tleft: 18px;
}
.mejs-controls .mejs-fullscreen-button button {
\tbackground-position: -32px 0;
}
.mejs-controls .mejs-unfullscreen button {
\tbackground-position: -32px -16px;
}
.mejs-controls .mejs-volume-button {
}
.mejs-controls .mejs-mute button {
\tbackground-position: -16px -16px;
}
.mejs-controls .mejs-unmute button {
\tbackground-position: -16px 0;
}
.mejs-controls .mejs-volume-button {
\tposition: relative;
}
.mejs-controls .mejs-volume-button .mejs-volume-slider {
\tdisplay: none;
\theight: 115px;
\twidth: 25px;
\tbackground: url(\"background.png\");
\tbackground: rgba(50, 50, 50, 0.7);
\t-webkit-border-radius: 0;
\t-moz-border-radius: 0;
\tborder-radius: 0;
\ttop: -115px;
\tleft: 0;
\tz-index: 1;
\tposition: absolute;
\tmargin: 0;
}
.mejs-controls .mejs-volume-button:hover {
\t-webkit-border-radius: 0 0 4px 4px;
\t-moz-border-radius: 0 0 4px 4px;
\tborder-radius: 0 0 4px 4px;
}
.mejs-controls .mejs-volume-button .mejs-volume-slider .mejs-volume-total {
\tposition: absolute;
\tleft: 11px;
\ttop: 8px;
\twidth: 2px;
\theight: 100px;
\tbackground: #ddd;
\tbackground: rgba(255, 255, 255, 0.5);
\tmargin: 0;
}
.mejs-controls .mejs-volume-button .mejs-volume-slider .mejs-volume-current {
\tposition: absolute;
\tleft: 11px;
\ttop: 8px;
\twidth: 2px;
\theight: 100px;
\tbackground: #ddd;
\tbackground: rgba(255, 255, 255, 0.9);
\tmargin: 0;
}
.mejs-controls .mejs-volume-button .mejs-volume-slider .mejs-volume-handle {
\tposition: absolute;
\tleft: 4px;
\ttop: -3px;
\twidth: 16px;
\theight: 6px;
\tbackground: #ddd;
\tbackground: rgba(255, 255, 255, 0.9);
\tcursor: N-resize;
\t-webkit-border-radius: 1px;
\t-moz-border-radius: 1px;
\tborder-radius: 1px;
\tmargin: 0;
}
.mejs-controls a.mejs-horizontal-volume-slider {
\theight: 26px;
\twidth: 56px;
\tposition: relative;
    display: block;
    float: left;
    vertical-align: middle;
}
.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-total {
\tposition: absolute;
\tleft: 0;
\ttop: 11px;
\twidth: 50px;
\theight: 8px;
\tmargin: 0;
\tpadding: 0;
\tfont-size: 1px;
\t-webkit-border-radius: 2px;
\t-moz-border-radius: 2px;
\tborder-radius: 2px;
\tbackground: #333;
\tbackground: rgba(50,50,50,0.8);
\tbackground: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(30,30,30,0.8)), to(rgba(60,60,60,0.8)));
\tbackground: -webkit-linear-gradient(top, rgba(30,30,30,0.8), rgba(60,60,60,0.8));
\tbackground: -moz-linear-gradient(top, rgba(30,30,30,0.8), rgba(60,60,60,0.8));
\tbackground: -o-linear-gradient(top, rgba(30,30,30,0.8), rgba(60,60,60,0.8));
\tbackground: -ms-linear-gradient(top, rgba(30,30,30,0.8), rgba(60,60,60,0.8));
\tbackground: linear-gradient(rgba(30,30,30,0.8), rgba(60,60,60,0.8));
}
.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current {
\tposition: absolute;
\tleft: 0;
\ttop: 11px;
\twidth: 50px;
\theight: 8px;
\tmargin: 0;
\tpadding: 0;
\tfont-size: 1px;
\t-webkit-border-radius: 2px;
\t-moz-border-radius: 2px;
\tborder-radius: 2px;
\tbackground: #fff;
\tbackground: rgba(255,255,255,0.8);
\tbackground: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(255,255,255,0.9)), to(rgba(200,200,200,0.8)));
\tbackground: -webkit-linear-gradient(top, rgba(255,255,255,0.9), rgba(200,200,200,0.8));
\tbackground: -moz-linear-gradient(top, rgba(255,255,255,0.9), rgba(200,200,200,0.8));
\tbackground: -o-linear-gradient(top, rgba(255,255,255,0.9), rgba(200,200,200,0.8));
\tbackground: -ms-linear-gradient(top, rgba(255,255,255,0.9), rgba(200,200,200,0.8));
\tbackground: linear-gradient(rgba(255,255,255,0.9), rgba(200,200,200,0.8));
}
.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-handle {
\tdisplay: none;
}
.mejs-controls .mejs-captions-button {
\tposition: relative;
}
.mejs-controls .mejs-captions-button button {
\tbackground-position: -48px 0;
}
.mejs-controls .mejs-captions-button .mejs-captions-selector {
\tvisibility: hidden;
\tposition: absolute;
\tbottom: 26px;
\tright: -51px;
\twidth: 85px;
\theight: 100px;
\tbackground: url(\"background.png\");
\tbackground: rgba(50,50,50,0.7);
\tborder: solid 1px transparent;
\tpadding: 10px 10px 0 10px;
\toverflow: hidden;
\t-webkit-border-radius: 0;
\t-moz-border-radius: 0;
\tborder-radius: 0;
}
.mejs-controls .mejs-captions-button .mejs-captions-selector ul {
\tmargin: 0;
\tpadding: 0;
\tdisplay: block;
\tlist-style-type: none !important;
\toverflow: hidden;
}
.mejs-controls .mejs-captions-button .mejs-captions-selector ul li {
\tmargin: 0 0 6px 0;
\tpadding: 0;
\tlist-style-type: none !important;
\tdisplay: block;
\tcolor: #fff;
\toverflow: hidden;
}
.mejs-controls .mejs-captions-button .mejs-captions-selector ul li input {
\tclear: both;
\tfloat: left;
\tmargin: 3px 3px 0 5px;
}
.mejs-controls .mejs-captions-button .mejs-captions-selector ul li label {
\twidth: 55px;
\tfloat: left;
\tpadding: 4px 0 0 0;
\tline-height: 15px;
\tfont-family: \"Helvetica\", Arial, serif;
\tfont-size: 10px;
}
.mejs-controls .mejs-captions-button .mejs-captions-translations {
\tfont-size: 10px;
\tmargin: 0 0 5px 0;
}
.mejs-chapters {
\tposition: absolute;
\ttop: 0;
\tleft: 0;
\tborder-right: solid 1px #fff;
\twidth: 10000px;
\tz-index: 1;
}
.mejs-chapters .mejs-chapter {
\tposition: absolute;
\tfloat: left;
\tbackground: #222;
\tbackground: rgba(0, 0, 0, 0.7);
\tbackground: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(50,50,50,0.7)), to(rgba(0,0,0,0.7)));
\tbackground: -webkit-linear-gradient(top, rgba(50,50,50,0.7), rgba(0,0,0,0.7));
\tbackground: -moz-linear-gradient(top, rgba(50,50,50,0.7), rgba(0,0,0,0.7));
\tbackground: -o-linear-gradient(top, rgba(50,50,50,0.7), rgba(0,0,0,0.7));
\tbackground: -ms-linear-gradient(top, rgba(50,50,50,0.7), rgba(0,0,0,0.7));
\tbackground: linear-gradient(rgba(50,50,50,0.7), rgba(0,0,0,0.7));
\tfilter: progid:DXImageTransform.Microsoft.Gradient(GradientType=0, startColorstr=#323232,endColorstr=#000000);
\toverflow: hidden;
\tborder: 0;
}
.mejs-chapters .mejs-chapter .mejs-chapter-block {
\tfont-size: 11px;
\tcolor: #fff;
\tpadding: 5px;
\tdisplay: block;
\tborder-right: solid 1px #333;
\tborder-bottom: solid 1px #333;
\tcursor: pointer;
}
.mejs-chapters .mejs-chapter .mejs-chapter-block-last {
\tborder-right: none;
}
.mejs-chapters .mejs-chapter .mejs-chapter-block:hover {
\tbackground: #666;
\tbackground: rgba(102,102,102, 0.7);
\tbackground: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(102,102,102,0.7)), to(rgba(50,50,50,0.6)));
\tbackground: -webkit-linear-gradient(top, rgba(102,102,102,0.7), rgba(50,50,50,0.6));
\tbackground: -moz-linear-gradient(top, rgba(102,102,102,0.7), rgba(50,50,50,0.6));
\tbackground: -o-linear-gradient(top, rgba(102,102,102,0.7), rgba(50,50,50,0.6));
\tbackground: -ms-linear-gradient(top, rgba(102,102,102,0.7), rgba(50,50,50,0.6));
\tbackground: linear-gradient(rgba(102,102,102,0.7), rgba(50,50,50,0.6));
\tfilter: progid:DXImageTransform.Microsoft.Gradient(GradientType=0, startColorstr=#666666,endColorstr=#323232);
}
.mejs-chapters .mejs-chapter .mejs-chapter-block .ch-title {
\tfont-size: 12px;
\tfont-weight: bold;
\tdisplay: block;
\twhite-space: nowrap;
\ttext-overflow: ellipsis;
\tmargin: 0 0 3px 0;
\tline-height: 12px;
}
.mejs-chapters .mejs-chapter .mejs-chapter-block .ch-timespan {
\tfont-size: 12px;
\tline-height: 12px;
\tmargin: 3px 0 4px 0;
\tdisplay: block;
\twhite-space: nowrap;
\ttext-overflow: ellipsis;
}
.mejs-captions-layer {
\tposition: absolute;
\tbottom: 0;
\tleft: 0;
\ttext-align:center;
\tline-height: 20px;
\tfont-size: 16px;
\tcolor: #fff;
}
.mejs-captions-layer  a {
\tcolor: #fff;
\ttext-decoration: underline;
}
.mejs-captions-layer[lang=ar] {
\tfont-size: 20px;
\tfont-weight: normal;
}
.mejs-captions-position {
\tposition: absolute;
\twidth: 100%;
\tbottom: 15px;
\tleft: 0;
}
.mejs-captions-position-hover {
\tbottom: 35px;
}
.mejs-captions-text {
\tpadding: 0;
\tbackground: url(\"background.png\");
\tbackground: rgba(20, 20, 20, 0.5);
\twhite-space: pre-wrap;
\t-webkit-box-shadow: 5px 0 0 rgba(20, 20, 20, 0.5), -5px 0 0 rgba(20, 20, 20, 0.5);
\tbox-shadow: 5px 0 0 rgba(20, 20, 20, 0.5), -5px 0 0 rgba(20, 20, 20, 0.5);
}
.me-cannotplay {
}
.me-cannotplay a {
\tcolor: #fff;
\tfont-weight: bold;
}
.me-cannotplay span {
\tpadding: 15px;
\tdisplay: block;
}
.mejs-controls .mejs-loop-off button {
\tbackground-position: -64px -16px;
}
.mejs-controls .mejs-loop-on button {
\tbackground-position: -64px 0;
}
.mejs-controls .mejs-backlight-off button {
\tbackground-position: -80px -16px;
}
.mejs-controls .mejs-backlight-on button {
\tbackground-position: -80px 0;
}
.mejs-controls .mejs-picturecontrols-button {
\tbackground-position: -96px 0;
}
.mejs-contextmenu {
\tposition: absolute;
\twidth: 150px;
\tpadding: 10px;
\tborder-radius: 4px;
\ttop: 0;
\tleft: 0;
\tbackground: #fff;
\tborder: solid 1px #999;
\tz-index: 1001; 
}
.mejs-contextmenu .mejs-contextmenu-separator {
\theight: 1px;
\tfont-size: 0;
\tmargin: 5px 6px;
\tbackground: #333;
}
.mejs-contextmenu .mejs-contextmenu-item {
\tfont-family: \"Helvetica\", Arial, serif;
\tfont-size: 12px;
\tpadding: 4px 6px;
\tcursor: pointer;
\tcolor: #333;
}
.mejs-contextmenu .mejs-contextmenu-item:hover {
\tbackground: #2C7C91;
\tcolor: #fff;
}
.mejs-controls .mejs-sourcechooser-button {
\tposition: relative;
}
.mejs-controls .mejs-sourcechooser-button button {
\tbackground-position: -128px 0;
}
.mejs-controls .mejs-sourcechooser-button .mejs-sourcechooser-selector {
\tposition: absolute;
\tbottom: 26px;
\tright: -10px;
\twidth: 130px;
\theight: 100px;
\tbackground: url(\"background.png\");
\tbackground: rgba(50,50,50,0.7);
\tborder: solid 1px transparent;
\tpadding: 10px;
\toverflow: hidden;
\t-webkit-border-radius: 0;
\t-moz-border-radius: 0;
\tborder-radius: 0;
}
.mejs-controls .mejs-sourcechooser-button .mejs-sourcechooser-selector ul {
\tmargin: 0;
\tpadding: 0;
\tdisplay: block;
\tlist-style-type: none !important;
\toverflow: hidden;
}
.mejs-controls .mejs-sourcechooser-button .mejs-sourcechooser-selector ul li {
\tmargin: 0 0 6px 0;
\tpadding: 0;
\tlist-style-type: none !important;
\tdisplay: block;
\tcolor: #fff;
\toverflow: hidden;
}
.mejs-controls .mejs-sourcechooser-button .mejs-sourcechooser-selector ul li input {
\tclear: both;
\tfloat: left;
\tmargin: 3px 3px 0 5px;
}
.mejs-controls .mejs-sourcechooser-button .mejs-sourcechooser-selector ul li label {
\twidth: 100px;
\tfloat: left;
\tpadding: 4px 0 0 0;
\tline-height: 15px;
\tfont-family: \"Helvetica\", Arial, serif;
\tfont-size: 10px;
}
.mejs-postroll-layer {
\tposition: absolute;
\tbottom: 0;
\tleft: 0;
\twidth: 100%;
\theight: 100%;
\tbackground: url(\"background.png\");
\tbackground: rgba(50,50,50,0.7);
\tz-index: 1000;
\toverflow: hidden;
}
.mejs-postroll-layer-content {
\twidth: 100%;
\theight: 100%;
}
.mejs-postroll-close {
\tposition: absolute;
\tright: 0;
\ttop: 0;
\tbackground: url(\"background.png\");
\tbackground: rgba(50,50,50,0.7);
\tcolor: #fff;
\tpadding: 4px;
\tz-index: 100;
\tcursor: pointer;
}
div.mejs-speed-button {
\twidth: 46px !important;
\tposition: relative;
}
.mejs-controls .mejs-button.mejs-speed-button button {
\tbackground: transparent;
\twidth: 36px;
\tfont-size: 11px;
\tline-height: normal;
\tcolor: #ffffff;
}
.mejs-controls .mejs-speed-button .mejs-speed-selector {
\tdisplay: none;
\tposition: absolute;
\ttop: -100px;
\tleft: -10px;
\twidth: 60px;
\theight: 100px;
\tbackground: url(\"background.png\");
\tbackground: rgba(50, 50, 50, 0.7);
\tborder: solid 1px transparent;
\tpadding: 0;
\toverflow: hidden;
\t-webkit-border-radius: 0;
\t-moz-border-radius: 0;
\tborder-radius: 0;
}
.mejs-controls .mejs-speed-button:hover > .mejs-speed-selector {
\tdisplay: block;
}
.mejs-controls .mejs-speed-button .mejs-speed-selector ul li label.mejs-speed-selected {
\tcolor: rgba(33, 248, 248, 1);
}
.mejs-controls .mejs-speed-button .mejs-speed-selector ul {
\tmargin: 0;
\tpadding: 0;
\tdisplay: block;
\tlist-style-type: none !important;
\toverflow: hidden;
}
.mejs-controls .mejs-speed-button .mejs-speed-selector ul li {
\tmargin: 0 0 6px 0;
\tpadding: 0 10px;
\tlist-style-type: none !important;
\tdisplay: block;
\tcolor: #fff;
\toverflow: hidden;
}
.mejs-controls .mejs-speed-button .mejs-speed-selector ul li input {
\tclear: both;
\tfloat: left;
\tmargin: 3px 3px 0 5px;
\tdisplay: none;
}
.mejs-controls .mejs-speed-button .mejs-speed-selector ul li label {
\twidth: 60px;
\tfloat: left;
\tpadding: 4px 0 0 0;
\tline-height: 15px;
\tfont-family: \"Helvetica\", Arial, serif;
\tfont-size: 11px;
\tcolor: white;
\tmargin-left: 5px;
\tcursor: pointer;
}
.mejs-controls .mejs-speed-button .mejs-speed-selector ul li:hover {
\tbackground-color: rgb(200, 200, 200) !important;
\tbackground-color: rgba(255,255,255,.4) !important;
}
.mejs-controls .mejs-button.mejs-jump-forward-button {
\tbackground: transparent url(\"jumpforward.png\") no-repeat 3px 3px;
}
.mejs-controls .mejs-button.mejs-jump-forward-button button {
\tbackground: transparent;
\tfont-size: 9px;
\tline-height: normal;
\tcolor: #ffffff;
}
.mejs-controls .mejs-button.mejs-skip-back-button {
\tbackground: transparent url(\"skipback.png\") no-repeat 3px 3px;
}
.mejs-controls .mejs-button.mejs-skip-back-button button {
\tbackground: transparent;
\tfont-size: 9px;
\tline-height: normal;
\tcolor: #ffffff;
}
", "wdn/templates_5.2/js/compressed/plugins/mediaelement/css/mediaelementplayer.css", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/compressed/plugins/mediaelement/css/mediaelementplayer.css");
    }
}
