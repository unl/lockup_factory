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

/* wdn/templates_5.3/js/slideshows.js */
class __TwigTemplate_5516f4ca2579edcf23ba1108a5248dc8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/slideshows.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/slideshows.js"));

        // line 1
        echo "\"use strict\";

require(['dcf-slideshow', 'css!js-css/slideshows'], function (DCFSlideshowModule) {
  var slideshows = document.querySelectorAll('.dcf-slideshow');
  var slideshowTheme = new DCFSlideshowModule.DCFSlideshowTheme();
  slideshowTheme.setThemeVariable('slideBtnClassList', ['dcf-d-flex', 'dcf-ai-center', 'dcf-pt-4', 'dcf-pb-4', 'dcf-white']);
  slideshowTheme.setThemeVariable('slidePrevBtnClassList', ['dcf-d-flex', 'dcf-ai-center', 'dcf-pt-4', 'dcf-pb-4', 'dcf-inverse']);
  slideshowTheme.setThemeVariable('slidePrevBtnInnerHTML', '<svg class=\"dcf-h-4 dcf-w-4 dcf-fill-current\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" focusable=\"false\" aria-hidden=\"true\">' + '<path d=\"M23.509 9.856c-.38-.55-.928-.852-1.542-.852H9.74l4.311-4.151c.995-.994.961-2.646-.074-3.682-1.001-1-2.722-1.033-3.68-.077L.148 11.144a.5.5 0 00-.003.707l9.978 10.079a2.445 2.445 0 001.737.705c.707 0 1.407-.294 1.92-.806a2.737 2.737 0 00.807-1.923 2.431 2.431 0 00-.708-1.733l-4.156-4.16h12.276c.618 0 1.161-.302 1.53-.851.304-.451.471-1.041.471-1.658 0-.596-.179-1.196-.491-1.648z\"></path>' + '</svg>');
  slideshowTheme.setThemeVariable('slideNextBtnClassList', ['dcf-d-flex', 'dcf-ai-center', 'dcf-pt-4', 'dcf-pb-4', 'dcf-inverse']);
  slideshowTheme.setThemeVariable('slideNextBtnInnerHTML', '<svg class=\"dcf-h-4 dcf-w-4 dcf-fill-current\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" focusable=\"false\" aria-hidden=\"true\">' + '<path d=\"M23.852 11.144L13.703 1.096c-.96-.96-2.678-.924-3.68.075-1.036 1.035-1.07 2.687-.069 3.69l4.321 4.143H2.03c-1.27 0-2.03 1.272-2.03 2.5 0 .617.168 1.207.472 1.659.369.549.913.851 1.53.851h12.276l-4.156 4.16a2.425 2.425 0 00-.708 1.734c0 .708.293 1.409.807 1.922a2.738 2.738 0 001.919.806c.664 0 1.28-.251 1.739-.708l9.977-10.076a.502.502 0 00-.004-.708z\"></path>' + '</svg>');
  slideshowTheme.setThemeVariable('slidePlayToggletBtnClassList', ['dcf-d-flex', 'dcf-ai-center', 'dcf-pt-4', 'dcf-pb-4', 'dcf-inverse']);
  slideshowTheme.setThemeVariable('slidePlayBtnInnerHTML', '<svg class=\"dcf-h-4 dcf-w-4 dcf-fill-current\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" focusable=\"false\" aria-hidden=\"true\">' + '<path d=\"M21.759 11.577L2.786.077a.499.499 0 0 0-.759.428v23a.498.498 0 0 0 .5.5c.09 0 .18-.024.259-.072l18.973-11.5a.5.5 0 0 0 0-.856z\"></path>' + '</svg>');
  slideshowTheme.setThemeVariable('slidePauseBtnInnerHTML', '<svg class=\"dcf-h-4 dcf-w-4 dcf-fill-current\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" focusable=\"false\" aria-hidden=\"true\">' + '<path d=\"M10.5 0h-5C5.224 0 5 .224 5 .5v23C5 23.776 5.224 24 5.5 24h5c.276 0 .5-.224.5-.5v-23C11 .224 10.776 0 10.5 0zM18.5 0h-5C13.224 0 13 .224 13 .5v23c0 .276.224.5.5.5h5c.276 0 .5-.224.5-.5v-23C19 .224 18.776 0 18.5 0z\"></path>' + '</svg>');
  slideshowTheme.setThemeVariable('figureCaptionBtnInnerHTML', \"<svg class=\\\"dcf-h-4 dcf-w-4 dcf-fill-current\\\" width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\" focusable=\\\"false\\\" aria-hidden=\\\"true\\\">\\n    <path class=\\\"unl-icon-slide-caption-open\\\" d=\\\"M1,3h19c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H1C0.4,1,0,1.4,0,2C0,2.6,0.4,3,1,3z\\\"/>\\n    <path class=\\\"unl-icon-slide-caption-open\\\" d=\\\"M1,8h15c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H1C0.4,6,0,6.4,0,7C0,7.6,0.4,8,1,8z\\\"/>\\n    <path class=\\\"unl-icon-slide-caption-close-1\\\" d=\\\"M1,13h22c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1C0,12.6,0.4,13,1,13z\\\"/>\\n    <path class=\\\"unl-icon-slide-caption-close-2\\\" d=\\\"M1,13h22c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1C0,12.6,0.4,13,1,13z\\\"/>\\n    <path class=\\\"unl-icon-slide-caption-open\\\" d=\\\"M1,18h18c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1C0,17.6,0.4,18,1,18z\\\"/>\\n    <path class=\\\"unl-icon-slide-caption-open\\\" d=\\\"M1,23h15c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1C0,22.6,0.4,23,1,23z\\\"/>\\n</svg>\");

  var figureCaptionToggleTransition = function figureCaptionToggleTransition(button) {
    var keyframesClose1 = [{
      transform: 'rotate(45deg)',
      transformOrigin: '50% 50%'
    }, {
      transform: 'rotate(0deg)',
      transformOrigin: '50% 50%'
    }];
    var keyframesClose2 = [{
      transform: 'rotate(-45deg)',
      transformOrigin: '50% 50%'
    }, {
      transform: 'rotate(0deg)',
      transformOrigin: '50% 50%'
    }];
    var keyframesOpen1 = [{
      transform: 'rotate(0deg)',
      transformOrigin: '50% 50%'
    }, {
      transform: 'rotate(45deg)',
      transformOrigin: '50% 50%'
    }];
    var keyframesOpen2 = [{
      transform: 'rotate(0deg)',
      transformOrigin: '50% 50%'
    }, {
      transform: 'rotate(-45deg)',
      transformOrigin: '50% 50%'
    }];
    var options = {
      duration: 250,
      fill: 'forwards'
    };
    var caption = button.previousElementSibling;
    var close1 = button.querySelector('.unl-icon-slide-caption-close-1');
    var close2 = button.querySelector('.unl-icon-slide-caption-close-2');
    caption.addEventListener(DCFSlideshowModule.DCFSlideshow.events('openCaption'), function () {
      close1.animate(keyframesClose1, options);
      close2.animate(keyframesClose2, options);
    }, false);
    caption.addEventListener(DCFSlideshowModule.DCFSlideshow.events('closeCaption'), function () {
      close1.animate(keyframesOpen1, options);
      close2.animate(keyframesOpen2, options);
    }, false);
  };

  slideshowTheme.setThemeVariable('figureCaptionToggleTransition', figureCaptionToggleTransition);
  var slideToggleTransitionDuration = 1000;
  slideshowTheme.setThemeVariable('slideToggleTransitionDuration', slideToggleTransitionDuration);

  var slideToggleTransition = function slideToggleTransition(slide) {
    var keyframesShowSlide = [{
      opacity: 0
    }, {
      opacity: 1
    }];
    var keyframesHideSlide = [{
      opacity: 1
    }, {
      opacity: 0
    }];
    var options = {
      duration: slideToggleTransitionDuration,
      fill: 'forwards'
    };
    slide.addEventListener('showSlide', function () {
      slide.animate(keyframesShowSlide, options);
    }, false);
    slide.addEventListener('hideSlide', function () {
      slide.animate(keyframesHideSlide, options);
    }, false);
  };

  slideshowTheme.setThemeVariable('slideToggleTransition', slideToggleTransition);
  var slideshow = new DCFSlideshowModule.DCFSlideshow(slideshows, slideshowTheme);
  slideshow.initialize();
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/slideshows.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\"use strict\";

require(['dcf-slideshow', 'css!js-css/slideshows'], function (DCFSlideshowModule) {
  var slideshows = document.querySelectorAll('.dcf-slideshow');
  var slideshowTheme = new DCFSlideshowModule.DCFSlideshowTheme();
  slideshowTheme.setThemeVariable('slideBtnClassList', ['dcf-d-flex', 'dcf-ai-center', 'dcf-pt-4', 'dcf-pb-4', 'dcf-white']);
  slideshowTheme.setThemeVariable('slidePrevBtnClassList', ['dcf-d-flex', 'dcf-ai-center', 'dcf-pt-4', 'dcf-pb-4', 'dcf-inverse']);
  slideshowTheme.setThemeVariable('slidePrevBtnInnerHTML', '<svg class=\"dcf-h-4 dcf-w-4 dcf-fill-current\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" focusable=\"false\" aria-hidden=\"true\">' + '<path d=\"M23.509 9.856c-.38-.55-.928-.852-1.542-.852H9.74l4.311-4.151c.995-.994.961-2.646-.074-3.682-1.001-1-2.722-1.033-3.68-.077L.148 11.144a.5.5 0 00-.003.707l9.978 10.079a2.445 2.445 0 001.737.705c.707 0 1.407-.294 1.92-.806a2.737 2.737 0 00.807-1.923 2.431 2.431 0 00-.708-1.733l-4.156-4.16h12.276c.618 0 1.161-.302 1.53-.851.304-.451.471-1.041.471-1.658 0-.596-.179-1.196-.491-1.648z\"></path>' + '</svg>');
  slideshowTheme.setThemeVariable('slideNextBtnClassList', ['dcf-d-flex', 'dcf-ai-center', 'dcf-pt-4', 'dcf-pb-4', 'dcf-inverse']);
  slideshowTheme.setThemeVariable('slideNextBtnInnerHTML', '<svg class=\"dcf-h-4 dcf-w-4 dcf-fill-current\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" focusable=\"false\" aria-hidden=\"true\">' + '<path d=\"M23.852 11.144L13.703 1.096c-.96-.96-2.678-.924-3.68.075-1.036 1.035-1.07 2.687-.069 3.69l4.321 4.143H2.03c-1.27 0-2.03 1.272-2.03 2.5 0 .617.168 1.207.472 1.659.369.549.913.851 1.53.851h12.276l-4.156 4.16a2.425 2.425 0 00-.708 1.734c0 .708.293 1.409.807 1.922a2.738 2.738 0 001.919.806c.664 0 1.28-.251 1.739-.708l9.977-10.076a.502.502 0 00-.004-.708z\"></path>' + '</svg>');
  slideshowTheme.setThemeVariable('slidePlayToggletBtnClassList', ['dcf-d-flex', 'dcf-ai-center', 'dcf-pt-4', 'dcf-pb-4', 'dcf-inverse']);
  slideshowTheme.setThemeVariable('slidePlayBtnInnerHTML', '<svg class=\"dcf-h-4 dcf-w-4 dcf-fill-current\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" focusable=\"false\" aria-hidden=\"true\">' + '<path d=\"M21.759 11.577L2.786.077a.499.499 0 0 0-.759.428v23a.498.498 0 0 0 .5.5c.09 0 .18-.024.259-.072l18.973-11.5a.5.5 0 0 0 0-.856z\"></path>' + '</svg>');
  slideshowTheme.setThemeVariable('slidePauseBtnInnerHTML', '<svg class=\"dcf-h-4 dcf-w-4 dcf-fill-current\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" focusable=\"false\" aria-hidden=\"true\">' + '<path d=\"M10.5 0h-5C5.224 0 5 .224 5 .5v23C5 23.776 5.224 24 5.5 24h5c.276 0 .5-.224.5-.5v-23C11 .224 10.776 0 10.5 0zM18.5 0h-5C13.224 0 13 .224 13 .5v23c0 .276.224.5.5.5h5c.276 0 .5-.224.5-.5v-23C19 .224 18.776 0 18.5 0z\"></path>' + '</svg>');
  slideshowTheme.setThemeVariable('figureCaptionBtnInnerHTML', \"<svg class=\\\"dcf-h-4 dcf-w-4 dcf-fill-current\\\" width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\" focusable=\\\"false\\\" aria-hidden=\\\"true\\\">\\n    <path class=\\\"unl-icon-slide-caption-open\\\" d=\\\"M1,3h19c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H1C0.4,1,0,1.4,0,2C0,2.6,0.4,3,1,3z\\\"/>\\n    <path class=\\\"unl-icon-slide-caption-open\\\" d=\\\"M1,8h15c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H1C0.4,6,0,6.4,0,7C0,7.6,0.4,8,1,8z\\\"/>\\n    <path class=\\\"unl-icon-slide-caption-close-1\\\" d=\\\"M1,13h22c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1C0,12.6,0.4,13,1,13z\\\"/>\\n    <path class=\\\"unl-icon-slide-caption-close-2\\\" d=\\\"M1,13h22c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1C0,12.6,0.4,13,1,13z\\\"/>\\n    <path class=\\\"unl-icon-slide-caption-open\\\" d=\\\"M1,18h18c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1C0,17.6,0.4,18,1,18z\\\"/>\\n    <path class=\\\"unl-icon-slide-caption-open\\\" d=\\\"M1,23h15c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1C0,22.6,0.4,23,1,23z\\\"/>\\n</svg>\");

  var figureCaptionToggleTransition = function figureCaptionToggleTransition(button) {
    var keyframesClose1 = [{
      transform: 'rotate(45deg)',
      transformOrigin: '50% 50%'
    }, {
      transform: 'rotate(0deg)',
      transformOrigin: '50% 50%'
    }];
    var keyframesClose2 = [{
      transform: 'rotate(-45deg)',
      transformOrigin: '50% 50%'
    }, {
      transform: 'rotate(0deg)',
      transformOrigin: '50% 50%'
    }];
    var keyframesOpen1 = [{
      transform: 'rotate(0deg)',
      transformOrigin: '50% 50%'
    }, {
      transform: 'rotate(45deg)',
      transformOrigin: '50% 50%'
    }];
    var keyframesOpen2 = [{
      transform: 'rotate(0deg)',
      transformOrigin: '50% 50%'
    }, {
      transform: 'rotate(-45deg)',
      transformOrigin: '50% 50%'
    }];
    var options = {
      duration: 250,
      fill: 'forwards'
    };
    var caption = button.previousElementSibling;
    var close1 = button.querySelector('.unl-icon-slide-caption-close-1');
    var close2 = button.querySelector('.unl-icon-slide-caption-close-2');
    caption.addEventListener(DCFSlideshowModule.DCFSlideshow.events('openCaption'), function () {
      close1.animate(keyframesClose1, options);
      close2.animate(keyframesClose2, options);
    }, false);
    caption.addEventListener(DCFSlideshowModule.DCFSlideshow.events('closeCaption'), function () {
      close1.animate(keyframesOpen1, options);
      close2.animate(keyframesOpen2, options);
    }, false);
  };

  slideshowTheme.setThemeVariable('figureCaptionToggleTransition', figureCaptionToggleTransition);
  var slideToggleTransitionDuration = 1000;
  slideshowTheme.setThemeVariable('slideToggleTransitionDuration', slideToggleTransitionDuration);

  var slideToggleTransition = function slideToggleTransition(slide) {
    var keyframesShowSlide = [{
      opacity: 0
    }, {
      opacity: 1
    }];
    var keyframesHideSlide = [{
      opacity: 1
    }, {
      opacity: 0
    }];
    var options = {
      duration: slideToggleTransitionDuration,
      fill: 'forwards'
    };
    slide.addEventListener('showSlide', function () {
      slide.animate(keyframesShowSlide, options);
    }, false);
    slide.addEventListener('hideSlide', function () {
      slide.animate(keyframesHideSlide, options);
    }, false);
  };

  slideshowTheme.setThemeVariable('slideToggleTransition', slideToggleTransition);
  var slideshow = new DCFSlideshowModule.DCFSlideshow(slideshows, slideshowTheme);
  slideshow.initialize();
});
", "wdn/templates_5.3/js/slideshows.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/slideshows.js");
    }
}