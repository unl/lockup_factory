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

/* wdn/templates_5.3/js-src/plugins/flexslider/css/flexslider.css */
class __TwigTemplate_d924bd4e03e864ef361e93ea84432f7a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js-src/plugins/flexslider/css/flexslider.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js-src/plugins/flexslider/css/flexslider.css"));

        // line 1
        echo "/*
 * jQuery FlexSlider v2.5.0
 * http://www.woothemes.com/flexslider/
 *
 * Copyright 2012 WooThemes
 * Free to use under the GPLv2 and later license.
 * http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Contributing author: Tyler Smith (@mbmufffin)
 *
 */
/* ====================================================================================================================
 * FONT-FACE
 * ====================================================================================================================*/
@font-face {
  font-family: 'flexslider-icon';
  src: url('fonts/flexslider-icon.eot');
  src: url('fonts/flexslider-icon.eot?#iefix') format('embedded-opentype'), url('fonts/flexslider-icon.woff') format('woff'), url('fonts/flexslider-icon.ttf') format('truetype'), url('fonts/flexslider-icon.svg#flexslider-icon') format('svg');
  font-weight: normal;
  font-style: normal;
}
/* ====================================================================================================================
 * RESETS
 * ====================================================================================================================*/
.slides,
.slides > li,
.flex-control-nav,
.flex-direction-nav {
  margin: 0;
  padding: 0;
  list-style: none;
}
.flex-pauseplay span {
  text-transform: capitalize;
}
/* ====================================================================================================================
 * DEFAULT THEME
 * ====================================================================================================================*/
.flexslider {
  margin: 0 0 60px;
  position: relative;
}
.flexslider .slides img {
  height: auto;
}
.flex-viewport {
  max-height: 2000px;
  transition: all 1s ease;
}
.loading .flex-viewport {
  max-height: 300px;
}
.carousel li {
  margin-right: 5px;
}
.flex-direction-nav {

}
.flex-direction-nav a {
  text-decoration: none;
  display: block;
  width: 40px;
  height: 40px;
  margin: -20px 0 0;
  position: absolute;
  top: 50%;
  z-index: 10;
  overflow: hidden;
  opacity: 0;
  cursor: pointer;
  color: rgba(0, 0, 0, 0.8);
  text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3);
  transition: all 0.3s ease-in-out;
  line-height: 1;
  border: 0 !important;
}
.flex-direction-nav a:before {
  font-family: \"flexslider-icon\";
  font-size: 40px;
  display: inline-block;
  content: '\\f001';
  color: rgba(0, 0, 0, 0.8);
  text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3);
}
.flex-direction-nav a.flex-next:before {
  content: '\\f002';
}
.flex-direction-nav .flex-prev {
  left: -50px;
}
.flex-direction-nav .flex-next {
  right: -50px;
  text-align: right;
}
.flexslider:hover .flex-direction-nav .flex-prev {
  opacity: 0.7;
  left: 10px;
}
.flexslider:hover .flex-direction-nav .flex-prev:hover {
  opacity: 1;
}
.flexslider:hover .flex-direction-nav .flex-next {
  opacity: 0.7;
  right: 10px;
}
.flexslider:hover .flex-direction-nav .flex-next:hover {
  opacity: 1;
}
.flex-direction-nav .flex-disabled {
  opacity: 0!important;
  cursor: default;
}
.flex-pauseplay a {
  display: block;
  width: 20px;
  height: 20px;
  position: absolute;
  bottom: 5px;
  left: 10px;
  opacity: 0.8;
  z-index: 10;
  overflow: hidden;
  cursor: pointer;
  color: #000;
}
.flex-pauseplay a:before {
  font-family: \"flexslider-icon\";
  font-size: 20px;
  display: inline-block;
  content: '\\f004';
}
.flex-pauseplay a:hover {
  opacity: 1;
}
.flex-pauseplay a.flex-play:before {
  content: '\\f003';
}
.flex-control-nav {
  width: 100%;
  position: absolute;
  bottom: -40px;
  text-align: center;
}
.flex-control-nav li {
  margin: 0 6px;
  display: inline-block;
  zoom: 1;
  *display: inline;
}
.flex-control-paging li a {
  width: 11px;
  height: 11px;
  display: block;
  background: #666;
  cursor: pointer;
  text-indent: -9999px;
  box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
  border-radius: 20px;
  border: 0;
  color: #fff;
}
.flex-control-paging li a:hover {
  background: #333;
}
.flex-control-paging li a.flex-active {
  background: #000;
  cursor: default;
}
.flex-control-thumbs {
  margin: 5px 0 0;
  position: static;
  overflow: hidden;
}
.flex-control-thumbs li {
  width: 25%;
  float: left;
  margin: 0;
}
.flex-control-thumbs img {
  width: 100%;
  height: auto;
  display: block;
  opacity: .7;
  cursor: pointer;
  transition: all 1s ease;
}
.flex-control-thumbs img:hover {
  opacity: 1;
}
.flex-control-thumbs .flex-active {
  opacity: 1;
  cursor: default;
}
/* ====================================================================================================================
 * RESPONSIVE
 * ====================================================================================================================*/
@media screen and (max-width: 860px) {
  .flex-direction-nav .flex-prev {
    opacity: 1;
    left: 10px;
  }
  .flex-direction-nav .flex-next {
    opacity: 1;
    right: 10px;
  }
}
/* add clearfix to flexslider */
.flexslider::after {
  clear: both;
  content: '';
  display: table;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js-src/plugins/flexslider/css/flexslider.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/*
 * jQuery FlexSlider v2.5.0
 * http://www.woothemes.com/flexslider/
 *
 * Copyright 2012 WooThemes
 * Free to use under the GPLv2 and later license.
 * http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Contributing author: Tyler Smith (@mbmufffin)
 *
 */
/* ====================================================================================================================
 * FONT-FACE
 * ====================================================================================================================*/
@font-face {
  font-family: 'flexslider-icon';
  src: url('fonts/flexslider-icon.eot');
  src: url('fonts/flexslider-icon.eot?#iefix') format('embedded-opentype'), url('fonts/flexslider-icon.woff') format('woff'), url('fonts/flexslider-icon.ttf') format('truetype'), url('fonts/flexslider-icon.svg#flexslider-icon') format('svg');
  font-weight: normal;
  font-style: normal;
}
/* ====================================================================================================================
 * RESETS
 * ====================================================================================================================*/
.slides,
.slides > li,
.flex-control-nav,
.flex-direction-nav {
  margin: 0;
  padding: 0;
  list-style: none;
}
.flex-pauseplay span {
  text-transform: capitalize;
}
/* ====================================================================================================================
 * DEFAULT THEME
 * ====================================================================================================================*/
.flexslider {
  margin: 0 0 60px;
  position: relative;
}
.flexslider .slides img {
  height: auto;
}
.flex-viewport {
  max-height: 2000px;
  transition: all 1s ease;
}
.loading .flex-viewport {
  max-height: 300px;
}
.carousel li {
  margin-right: 5px;
}
.flex-direction-nav {

}
.flex-direction-nav a {
  text-decoration: none;
  display: block;
  width: 40px;
  height: 40px;
  margin: -20px 0 0;
  position: absolute;
  top: 50%;
  z-index: 10;
  overflow: hidden;
  opacity: 0;
  cursor: pointer;
  color: rgba(0, 0, 0, 0.8);
  text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3);
  transition: all 0.3s ease-in-out;
  line-height: 1;
  border: 0 !important;
}
.flex-direction-nav a:before {
  font-family: \"flexslider-icon\";
  font-size: 40px;
  display: inline-block;
  content: '\\f001';
  color: rgba(0, 0, 0, 0.8);
  text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3);
}
.flex-direction-nav a.flex-next:before {
  content: '\\f002';
}
.flex-direction-nav .flex-prev {
  left: -50px;
}
.flex-direction-nav .flex-next {
  right: -50px;
  text-align: right;
}
.flexslider:hover .flex-direction-nav .flex-prev {
  opacity: 0.7;
  left: 10px;
}
.flexslider:hover .flex-direction-nav .flex-prev:hover {
  opacity: 1;
}
.flexslider:hover .flex-direction-nav .flex-next {
  opacity: 0.7;
  right: 10px;
}
.flexslider:hover .flex-direction-nav .flex-next:hover {
  opacity: 1;
}
.flex-direction-nav .flex-disabled {
  opacity: 0!important;
  cursor: default;
}
.flex-pauseplay a {
  display: block;
  width: 20px;
  height: 20px;
  position: absolute;
  bottom: 5px;
  left: 10px;
  opacity: 0.8;
  z-index: 10;
  overflow: hidden;
  cursor: pointer;
  color: #000;
}
.flex-pauseplay a:before {
  font-family: \"flexslider-icon\";
  font-size: 20px;
  display: inline-block;
  content: '\\f004';
}
.flex-pauseplay a:hover {
  opacity: 1;
}
.flex-pauseplay a.flex-play:before {
  content: '\\f003';
}
.flex-control-nav {
  width: 100%;
  position: absolute;
  bottom: -40px;
  text-align: center;
}
.flex-control-nav li {
  margin: 0 6px;
  display: inline-block;
  zoom: 1;
  *display: inline;
}
.flex-control-paging li a {
  width: 11px;
  height: 11px;
  display: block;
  background: #666;
  cursor: pointer;
  text-indent: -9999px;
  box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
  border-radius: 20px;
  border: 0;
  color: #fff;
}
.flex-control-paging li a:hover {
  background: #333;
}
.flex-control-paging li a.flex-active {
  background: #000;
  cursor: default;
}
.flex-control-thumbs {
  margin: 5px 0 0;
  position: static;
  overflow: hidden;
}
.flex-control-thumbs li {
  width: 25%;
  float: left;
  margin: 0;
}
.flex-control-thumbs img {
  width: 100%;
  height: auto;
  display: block;
  opacity: .7;
  cursor: pointer;
  transition: all 1s ease;
}
.flex-control-thumbs img:hover {
  opacity: 1;
}
.flex-control-thumbs .flex-active {
  opacity: 1;
  cursor: default;
}
/* ====================================================================================================================
 * RESPONSIVE
 * ====================================================================================================================*/
@media screen and (max-width: 860px) {
  .flex-direction-nav .flex-prev {
    opacity: 1;
    left: 10px;
  }
  .flex-direction-nav .flex-next {
    opacity: 1;
    right: 10px;
  }
}
/* add clearfix to flexslider */
.flexslider::after {
  clear: both;
  content: '';
  display: table;
}
", "wdn/templates_5.3/js-src/plugins/flexslider/css/flexslider.css", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js-src/plugins/flexslider/css/flexslider.css");
    }
}
