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

/* wdn/templates_4.1/scripts/compressed/images.js.src.js */
class __TwigTemplate_2cce54d1f37824b044c70ab11dca3da7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/images.js.src.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/images.js.src.js"));

        // line 1
        echo "define(['jquery'], function(\$) {
    \"use strict\";

    var initd = false;

    var imageCls = 'wdn_image_swap',
    currentPoint,
    checkPoints = [320,480,600,768,960,1040],
    failPoint = 4,
    reImgFile = /(.*)\\.(jpe?g|png|gif)\$/i,
    rePointSuffix = new RegExp('_(' + checkPoints.join('|') + ')\$'),

    resizeTimeout = 500,
    resizeTimer;

    function checkFileExistence(fileUrl, image) {
    \t\$.ajax(fileUrl, {
    \t\ttype: 'HEAD',
    \t\tsuccess: function() {
    \t\t\timage.setAttribute('src', fileUrl);
    \t\t}
    \t});
    }

    function swapSource(newWidthBreakpoint) {
    \t\$('.' + imageCls).each(function() {
    \t\tvar deconstructedPath, imagePath;
    \t\tdeconstructedPath = reImgFile.exec(this.getAttribute('src'));
    \t\tif (deconstructedPath) {
    \t\t\timagePath = deconstructedPath[1].replace(rePointSuffix, '') + '_' + newWidthBreakpoint + '.' + deconstructedPath[2];
    \t\t\tcheckFileExistence(imagePath, this);
    \t\t}
    \t});
    }

    function getMqPoint() {
    \tvar j;

    \t\tfor (j = checkPoints.length - 1; j >= 0; j--) {
    \t\t\tif (matchMedia('(min-width: ' + checkPoints[j] + 'px)').matches) {
    \t\t\t\treturn checkPoints[j];
    \t\t\t}
    \t\t}

    \treturn checkPoints[0];
    }

\treturn {
\t\tinitialize : function () {
\t\t    currentPoint = getMqPoint();
\t\t    if (currentPoint > checkPoints[0]) {
\t\t    \t\$(function() {
\t\t    \t\tswapSource(currentPoint);
\t\t    \t});
\t\t    }

\t\t    if (initd) {
\t\t    \treturn;
\t\t    }
\t\t    initd = true;

\t\t    \$(window).resize(function() {
\t\t    \tif (resizeTimer) {
\t\t    \t\tclearTimeout(resizeTimer);
\t\t    \t}
\t\t    \tresizeTimer = setTimeout(function () {
\t\t    \t\tvar newPoint = getMqPoint();
\t\t    \t\tif (newPoint > currentPoint) {
\t\t    \t\t\tcurrentPoint = newPoint;
\t\t    \t\t\tswapSource(newPoint);
\t\t    \t\t}
\t\t    \t}, resizeTimeout);
\t\t    });
\t\t}
\t};
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/images.js.src.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define(['jquery'], function(\$) {
    \"use strict\";

    var initd = false;

    var imageCls = 'wdn_image_swap',
    currentPoint,
    checkPoints = [320,480,600,768,960,1040],
    failPoint = 4,
    reImgFile = /(.*)\\.(jpe?g|png|gif)\$/i,
    rePointSuffix = new RegExp('_(' + checkPoints.join('|') + ')\$'),

    resizeTimeout = 500,
    resizeTimer;

    function checkFileExistence(fileUrl, image) {
    \t\$.ajax(fileUrl, {
    \t\ttype: 'HEAD',
    \t\tsuccess: function() {
    \t\t\timage.setAttribute('src', fileUrl);
    \t\t}
    \t});
    }

    function swapSource(newWidthBreakpoint) {
    \t\$('.' + imageCls).each(function() {
    \t\tvar deconstructedPath, imagePath;
    \t\tdeconstructedPath = reImgFile.exec(this.getAttribute('src'));
    \t\tif (deconstructedPath) {
    \t\t\timagePath = deconstructedPath[1].replace(rePointSuffix, '') + '_' + newWidthBreakpoint + '.' + deconstructedPath[2];
    \t\t\tcheckFileExistence(imagePath, this);
    \t\t}
    \t});
    }

    function getMqPoint() {
    \tvar j;

    \t\tfor (j = checkPoints.length - 1; j >= 0; j--) {
    \t\t\tif (matchMedia('(min-width: ' + checkPoints[j] + 'px)').matches) {
    \t\t\t\treturn checkPoints[j];
    \t\t\t}
    \t\t}

    \treturn checkPoints[0];
    }

\treturn {
\t\tinitialize : function () {
\t\t    currentPoint = getMqPoint();
\t\t    if (currentPoint > checkPoints[0]) {
\t\t    \t\$(function() {
\t\t    \t\tswapSource(currentPoint);
\t\t    \t});
\t\t    }

\t\t    if (initd) {
\t\t    \treturn;
\t\t    }
\t\t    initd = true;

\t\t    \$(window).resize(function() {
\t\t    \tif (resizeTimer) {
\t\t    \t\tclearTimeout(resizeTimer);
\t\t    \t}
\t\t    \tresizeTimer = setTimeout(function () {
\t\t    \t\tvar newPoint = getMqPoint();
\t\t    \t\tif (newPoint > currentPoint) {
\t\t    \t\t\tcurrentPoint = newPoint;
\t\t    \t\t\tswapSource(newPoint);
\t\t    \t\t}
\t\t    \t}, resizeTimeout);
\t\t    });
\t\t}
\t};
});
", "wdn/templates_4.1/scripts/compressed/images.js.src.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/images.js.src.js");
    }
}
