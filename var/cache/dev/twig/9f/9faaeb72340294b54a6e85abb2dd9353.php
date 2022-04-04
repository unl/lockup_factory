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

/* wdn/templates_5.1/js/plugins/mediaelement/css/mejs-skins.css */
class __TwigTemplate_ba5afe85b4d931828f82035efa2c02f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/plugins/mediaelement/css/mejs-skins.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/plugins/mediaelement/css/mejs-skins.css"));

        // line 1
        echo "/* TED player */
.mejs-container.mejs-ted {

}
.mejs-ted .mejs-controls {
\tbackground: #eee;
\theight: 65px;
}

.mejs-ted .mejs-button,
.mejs-ted .mejs-time {
\tposition: absolute;
\tbackground: #ddd;
}
.mejs-ted .mejs-controls .mejs-time-rail .mejs-time-total {
\tbackground-color: none;
\tbackground: url(controls-ted.png) repeat-x 0 -52px;
\theight: 6px;
}
.mejs-ted .mejs-controls .mejs-time-rail .mejs-time-buffering {
\theight: 6px;
}
.mejs-ted .mejs-controls .mejs-time-rail .mejs-time-loaded {
\tbackground-color: none;
\tbackground: url(controls-ted.png) repeat-x 0 -52px;
\twidth: 0;
\theight: 6px;
}
.mejs-ted .mejs-controls .mejs-time-rail .mejs-time-current {
\twidth: 0;
\theight: 6px;
\tbackground-color: none;
\tbackground: url(controls-ted.png) repeat-x 0 -59px;
}
.mejs-ted .mejs-controls .mejs-time-rail .mejs-time-handle  {
\tdisplay: block;
\tmargin: 0;
\twidth: 14px;
\theight: 21px;
\ttop: -7px;
\tborder: 0;
\tbackground: url(controls-ted.png) no-repeat 0 0;\t
}
.mejs-ted .mejs-controls .mejs-time-rail .mejs-time-float {\t
\tdisplay: none;
}
.mejs-ted .mejs-controls .mejs-playpause-button  {
\ttop: 29px;
\tleft: 9px;
\twidth: 49px;
\theight: 28px;
}
.mejs-ted .mejs-controls .mejs-playpause-button  button {
\twidth: 49px;
\theight: 28px;
\tbackground: url(controls-ted.png) no-repeat -50px -23px;
\tmargin: 0;
\tpadding: 0;
}
.mejs-ted .mejs-controls .mejs-pause button  {
\tbackground-position: 0 -23px;
}

.mejs-ted .mejs-controls .mejs-fullscreen-button  {
\ttop: 34px;
\tright: 9px;
\twidth: 17px;
\theight: 15px;
\tbackground : none;
}
.mejs-ted .mejs-controls .mejs-fullscreen-button  button {
\twidth: 19px;
\theight: 17px;
\tbackground: transparent url(controls-ted.png) no-repeat 0 -66px;
\tmargin: 0;
\tpadding: 0;
}
.mejs-ted .mejs-controls .mejs-unfullscreen  button {
\tbackground: transparent url(controls-ted.png) no-repeat -21px -66px;
\tmargin: 0;
\tpadding: 0;
}
.mejs-ted .mejs-controls .mejs-volume-button  {
\ttop: 30px;
\tright: 35px;
\twidth: 24px;
\theight: 22px;
}
.mejs-ted .mejs-controls .mejs-mute button {
\tbackground: url(controls-ted.png) no-repeat -15px 0;
\twidth: 24px;
\theight: 22px;
\tmargin: 0;
\tpadding: 0;
}
.mejs-ted .mejs-controls .mejs-unmute button {
\tbackground: url(controls-ted.png) no-repeat -40px 0;
\twidth: 24px;
\theight: 22px;
\tmargin: 0;
\tpadding: 0;\t
}
.mejs-ted  .mejs-controls .mejs-volume-button .mejs-volume-slider {
\tbackground: #fff;
\tborder: solid 1px #aaa;
\tborder-width: 1px 1px 0 1px;
\twidth: 22px;
\theight: 65px;
\ttop: -65px;
}
.mejs-ted  .mejs-controls .mejs-volume-button .mejs-volume-total {
\tbackground: url(controls-ted.png) repeat-y -41px -66px;
\tleft: 8px;
\twidth: 6px;
\theight: 50px;
}
.mejs-ted  .mejs-controls .mejs-volume-button .mejs-volume-current {
\tleft: 8px;
\twidth: 6px;\t
\tbackground: url(controls-ted.png) repeat-y -48px -66px;
\theight: 50px;
}

.mejs-ted  .mejs-controls .mejs-volume-button .mejs-volume-handle {
\tdisplay: none;
}

.mejs-ted .mejs-controls .mejs-time span {
\tcolor: #333;
}
.mejs-ted .mejs-controls .mejs-currenttime-container  {
\tposition: absolute;
\ttop: 32px;
\tright: 100px;
\tborder: solid 1px #999;
\tbackground: #fff;
\tcolor: #333;
\tpadding-top: 2px;
\tborder-radius: 3px;
\tcolor: #333;
}
.mejs-ted .mejs-controls .mejs-duration-container  {

\tposition: absolute;
\ttop: 32px;
\tright: 65px;
\tborder: solid 1px #999;
\tbackground: #fff;
\tcolor: #333;
\tpadding-top: 2px;
\tborder-radius: 3px;
\tcolor: #333;
}

.mejs-ted .mejs-controls .mejs-time  button{
\tcolor: #333;
}
.mejs-ted .mejs-controls .mejs-captions-button {
\tdisplay: none;
}
/* END: TED player */


/* WMP player */
.mejs-container.mejs-wmp {

}
.mejs-wmp .mejs-controls {
\tbackground: transparent url(controls-wmp-bg.png) center 16px no-repeat;
\theight: 65px;
}

.mejs-wmp .mejs-button,
.mejs-wmp .mejs-time {
\tposition: absolute;
\tbackground: transparent;
}
.mejs-wmp .mejs-controls .mejs-time-rail .mejs-time-total {
\tbackground-color: transparent;
\tborder: solid 1px #ccc;
\theight: 3px;
}
.mejs-wmp .mejs-controls .mejs-time-rail .mejs-time-buffering {
\theight: 3px;
}
.mejs-wmp .mejs-controls .mejs-time-rail .mejs-time-loaded {
\tbackground-color: rgba(255,255,255,0.3);
\twidth: 0;
\theight: 3px;
}
.mejs-wmp .mejs-controls .mejs-time-rail .mejs-time-current {
\twidth: 0;
\theight: 1px;
\tbackground-color: #014CB6;
\tborder: solid 1px #7FC9FA;
\tborder-width: 1px 0;
\tborder-color: #7FC9FA #fff #619FF2 #fff;
}
.mejs-wmp .mejs-controls .mejs-time-rail .mejs-time-handle  {
\tdisplay: block;
\tmargin: 0;
\twidth: 16px;
\theight: 9px;
\ttop: -3px;
\tborder: 0;
\tbackground: url(controls-wmp.png) no-repeat 0 -80px;\t
}
.mejs-wmp .mejs-controls .mejs-time-rail .mejs-time-float {\t
\tdisplay: none;
}
.mejs-wmp .mejs-controls .mejs-playpause-button  {
\ttop: 10px;
\tleft: 50%;
\tmargin: 10px 0 0 -20px;\t
\twidth: 40px;
\theight: 40px;
\t
}
.mejs-wmp .mejs-controls .mejs-playpause-button  button {
\twidth: 40px;
\theight: 40px;
\tbackground: url(controls-wmp.png) no-repeat 0 0;\t
\tmargin: 0;
\tpadding: 0;
}
.mejs-wmp .mejs-controls .mejs-pause button  {
\tbackground-position: 0 -40px;
}

.mejs-wmp .mejs-controls .mejs-currenttime-container  {
\tposition: absolute;
\ttop: 25px;
\tleft: 50%;
\tmargin-left: -93px;
}
.mejs-wmp .mejs-controls .mejs-duration-container  {
\tposition: absolute;
\ttop: 25px;
\tleft: 50%;
\tmargin-left: -58px;
}


.mejs-wmp .mejs-controls .mejs-volume-button  {
\ttop: 32px;
\tright: 50%;
\tmargin-right: -55px;
\twidth: 20px;
\theight: 15px;
}
.mejs-wmp .mejs-controls .mejs-volume-button button {
\tmargin: 0;
\tpadding: 0;
\tbackground: url(controls-wmp.png) no-repeat -42px -17px;
\twidth: 20px;
\theight: 15px;
}
.mejs-wmp .mejs-controls .mejs-unmute button {
\tmargin: 0;
\tpadding: 0;
\tbackground: url(controls-wmp.png) no-repeat -42px 0;
\twidth: 20px;
\theight: 15px;
}
.mejs-wmp .mejs-controls .mejs-volume-button .mejs-volume-slider {
\tbackground: rgba(102,102,102,0.6);
}

.mejs-wmp .mejs-controls .mejs-fullscreen-button  {
\ttop: 32px;
\tright: 50%;
\tmargin-right: -82px;
\twidth: 15px;
\theight: 14px;
}
.mejs-wmp .mejs-controls .mejs-fullscreen-button  button {
\tmargin: 0;
\tpadding: 0;
\tbackground: url(controls-wmp.png) no-repeat -63px 0;
\twidth: 15px;
\theight: 14px;
}
.mejs-wmp .mejs-controls .mejs-captions-button {
\tdisplay: none;
}
/* END: WMP player */



";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.1/js/plugins/mediaelement/css/mejs-skins.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/* TED player */
.mejs-container.mejs-ted {

}
.mejs-ted .mejs-controls {
\tbackground: #eee;
\theight: 65px;
}

.mejs-ted .mejs-button,
.mejs-ted .mejs-time {
\tposition: absolute;
\tbackground: #ddd;
}
.mejs-ted .mejs-controls .mejs-time-rail .mejs-time-total {
\tbackground-color: none;
\tbackground: url(controls-ted.png) repeat-x 0 -52px;
\theight: 6px;
}
.mejs-ted .mejs-controls .mejs-time-rail .mejs-time-buffering {
\theight: 6px;
}
.mejs-ted .mejs-controls .mejs-time-rail .mejs-time-loaded {
\tbackground-color: none;
\tbackground: url(controls-ted.png) repeat-x 0 -52px;
\twidth: 0;
\theight: 6px;
}
.mejs-ted .mejs-controls .mejs-time-rail .mejs-time-current {
\twidth: 0;
\theight: 6px;
\tbackground-color: none;
\tbackground: url(controls-ted.png) repeat-x 0 -59px;
}
.mejs-ted .mejs-controls .mejs-time-rail .mejs-time-handle  {
\tdisplay: block;
\tmargin: 0;
\twidth: 14px;
\theight: 21px;
\ttop: -7px;
\tborder: 0;
\tbackground: url(controls-ted.png) no-repeat 0 0;\t
}
.mejs-ted .mejs-controls .mejs-time-rail .mejs-time-float {\t
\tdisplay: none;
}
.mejs-ted .mejs-controls .mejs-playpause-button  {
\ttop: 29px;
\tleft: 9px;
\twidth: 49px;
\theight: 28px;
}
.mejs-ted .mejs-controls .mejs-playpause-button  button {
\twidth: 49px;
\theight: 28px;
\tbackground: url(controls-ted.png) no-repeat -50px -23px;
\tmargin: 0;
\tpadding: 0;
}
.mejs-ted .mejs-controls .mejs-pause button  {
\tbackground-position: 0 -23px;
}

.mejs-ted .mejs-controls .mejs-fullscreen-button  {
\ttop: 34px;
\tright: 9px;
\twidth: 17px;
\theight: 15px;
\tbackground : none;
}
.mejs-ted .mejs-controls .mejs-fullscreen-button  button {
\twidth: 19px;
\theight: 17px;
\tbackground: transparent url(controls-ted.png) no-repeat 0 -66px;
\tmargin: 0;
\tpadding: 0;
}
.mejs-ted .mejs-controls .mejs-unfullscreen  button {
\tbackground: transparent url(controls-ted.png) no-repeat -21px -66px;
\tmargin: 0;
\tpadding: 0;
}
.mejs-ted .mejs-controls .mejs-volume-button  {
\ttop: 30px;
\tright: 35px;
\twidth: 24px;
\theight: 22px;
}
.mejs-ted .mejs-controls .mejs-mute button {
\tbackground: url(controls-ted.png) no-repeat -15px 0;
\twidth: 24px;
\theight: 22px;
\tmargin: 0;
\tpadding: 0;
}
.mejs-ted .mejs-controls .mejs-unmute button {
\tbackground: url(controls-ted.png) no-repeat -40px 0;
\twidth: 24px;
\theight: 22px;
\tmargin: 0;
\tpadding: 0;\t
}
.mejs-ted  .mejs-controls .mejs-volume-button .mejs-volume-slider {
\tbackground: #fff;
\tborder: solid 1px #aaa;
\tborder-width: 1px 1px 0 1px;
\twidth: 22px;
\theight: 65px;
\ttop: -65px;
}
.mejs-ted  .mejs-controls .mejs-volume-button .mejs-volume-total {
\tbackground: url(controls-ted.png) repeat-y -41px -66px;
\tleft: 8px;
\twidth: 6px;
\theight: 50px;
}
.mejs-ted  .mejs-controls .mejs-volume-button .mejs-volume-current {
\tleft: 8px;
\twidth: 6px;\t
\tbackground: url(controls-ted.png) repeat-y -48px -66px;
\theight: 50px;
}

.mejs-ted  .mejs-controls .mejs-volume-button .mejs-volume-handle {
\tdisplay: none;
}

.mejs-ted .mejs-controls .mejs-time span {
\tcolor: #333;
}
.mejs-ted .mejs-controls .mejs-currenttime-container  {
\tposition: absolute;
\ttop: 32px;
\tright: 100px;
\tborder: solid 1px #999;
\tbackground: #fff;
\tcolor: #333;
\tpadding-top: 2px;
\tborder-radius: 3px;
\tcolor: #333;
}
.mejs-ted .mejs-controls .mejs-duration-container  {

\tposition: absolute;
\ttop: 32px;
\tright: 65px;
\tborder: solid 1px #999;
\tbackground: #fff;
\tcolor: #333;
\tpadding-top: 2px;
\tborder-radius: 3px;
\tcolor: #333;
}

.mejs-ted .mejs-controls .mejs-time  button{
\tcolor: #333;
}
.mejs-ted .mejs-controls .mejs-captions-button {
\tdisplay: none;
}
/* END: TED player */


/* WMP player */
.mejs-container.mejs-wmp {

}
.mejs-wmp .mejs-controls {
\tbackground: transparent url(controls-wmp-bg.png) center 16px no-repeat;
\theight: 65px;
}

.mejs-wmp .mejs-button,
.mejs-wmp .mejs-time {
\tposition: absolute;
\tbackground: transparent;
}
.mejs-wmp .mejs-controls .mejs-time-rail .mejs-time-total {
\tbackground-color: transparent;
\tborder: solid 1px #ccc;
\theight: 3px;
}
.mejs-wmp .mejs-controls .mejs-time-rail .mejs-time-buffering {
\theight: 3px;
}
.mejs-wmp .mejs-controls .mejs-time-rail .mejs-time-loaded {
\tbackground-color: rgba(255,255,255,0.3);
\twidth: 0;
\theight: 3px;
}
.mejs-wmp .mejs-controls .mejs-time-rail .mejs-time-current {
\twidth: 0;
\theight: 1px;
\tbackground-color: #014CB6;
\tborder: solid 1px #7FC9FA;
\tborder-width: 1px 0;
\tborder-color: #7FC9FA #fff #619FF2 #fff;
}
.mejs-wmp .mejs-controls .mejs-time-rail .mejs-time-handle  {
\tdisplay: block;
\tmargin: 0;
\twidth: 16px;
\theight: 9px;
\ttop: -3px;
\tborder: 0;
\tbackground: url(controls-wmp.png) no-repeat 0 -80px;\t
}
.mejs-wmp .mejs-controls .mejs-time-rail .mejs-time-float {\t
\tdisplay: none;
}
.mejs-wmp .mejs-controls .mejs-playpause-button  {
\ttop: 10px;
\tleft: 50%;
\tmargin: 10px 0 0 -20px;\t
\twidth: 40px;
\theight: 40px;
\t
}
.mejs-wmp .mejs-controls .mejs-playpause-button  button {
\twidth: 40px;
\theight: 40px;
\tbackground: url(controls-wmp.png) no-repeat 0 0;\t
\tmargin: 0;
\tpadding: 0;
}
.mejs-wmp .mejs-controls .mejs-pause button  {
\tbackground-position: 0 -40px;
}

.mejs-wmp .mejs-controls .mejs-currenttime-container  {
\tposition: absolute;
\ttop: 25px;
\tleft: 50%;
\tmargin-left: -93px;
}
.mejs-wmp .mejs-controls .mejs-duration-container  {
\tposition: absolute;
\ttop: 25px;
\tleft: 50%;
\tmargin-left: -58px;
}


.mejs-wmp .mejs-controls .mejs-volume-button  {
\ttop: 32px;
\tright: 50%;
\tmargin-right: -55px;
\twidth: 20px;
\theight: 15px;
}
.mejs-wmp .mejs-controls .mejs-volume-button button {
\tmargin: 0;
\tpadding: 0;
\tbackground: url(controls-wmp.png) no-repeat -42px -17px;
\twidth: 20px;
\theight: 15px;
}
.mejs-wmp .mejs-controls .mejs-unmute button {
\tmargin: 0;
\tpadding: 0;
\tbackground: url(controls-wmp.png) no-repeat -42px 0;
\twidth: 20px;
\theight: 15px;
}
.mejs-wmp .mejs-controls .mejs-volume-button .mejs-volume-slider {
\tbackground: rgba(102,102,102,0.6);
}

.mejs-wmp .mejs-controls .mejs-fullscreen-button  {
\ttop: 32px;
\tright: 50%;
\tmargin-right: -82px;
\twidth: 15px;
\theight: 14px;
}
.mejs-wmp .mejs-controls .mejs-fullscreen-button  button {
\tmargin: 0;
\tpadding: 0;
\tbackground: url(controls-wmp.png) no-repeat -63px 0;
\twidth: 15px;
\theight: 14px;
}
.mejs-wmp .mejs-controls .mejs-captions-button {
\tdisplay: none;
}
/* END: WMP player */



", "wdn/templates_5.1/js/plugins/mediaelement/css/mejs-skins.css", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/js/plugins/mediaelement/css/mejs-skins.css");
    }
}
