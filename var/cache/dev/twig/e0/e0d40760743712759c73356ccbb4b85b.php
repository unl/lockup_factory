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

/* wdn/templates_5.2/js/compressed/modals.js */
class __TwigTemplate_7d15ff4f7973f6379c6d8b1827157269 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/modals.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/modals.js"));

        // line 1
        echo "require([\"dcf-utility\",\"dcf-modal\",\"plugins/body-scroll-lock\"],function(e,t,n){function o(e){var t=e.getElementsByTagName(\"video\");t&&t.length>0&&(document.addEventListener(\"ModalOpenEvent_\"+e.id,function(e){Array.prototype.forEach.call(t,function(e){e.hasAttribute(\"data-autoplay\")&&e.play()})},!1),document.addEventListener(\"ModalCloseEvent_\"+e.id,function(n){Array.prototype.forEach.call(t,function(e){e.pause(),e.load()});var o=e.getElementsByClassName(\"mejs-overlay-play\");o&&o.length>0&&Array.prototype.forEach.call(o,function(e){\"none\"===e.style.display&&(e.style.display=\"block\")})},!1));var n=e.getElementsByTagName(\"iframe\");n&&n.length>0&&Array.prototype.forEach.call(n,function(t){var n=t.getAttribute(\"allow\");n&&n.includes(\"autoplay\")?(document.addEventListener(\"ModalOpenEvent_\"+e.id,function(e){t.contentWindow.postMessage(\"mh-play-video\",\"https://mediahub.unl.edu\")},!1),document.addEventListener(\"ModalCloseEvent_\"+e.id,function(e){t.contentWindow.postMessage(\"mh-reset-video\",\"https://mediahub.unl.edu\")},!1)):document.addEventListener(\"ModalCloseEvent_\"+e.id,function(e){t.contentWindow.postMessage(\"mh-pause-video\",\"https://mediahub.unl.edu\")},!1)})}var a=document.querySelectorAll(\".dcf-modal\");new DCFModal(a,n).initialize(),a.forEach(function(e){o(e)})});
//# sourceMappingURL=modals.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/compressed/modals.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("require([\"dcf-utility\",\"dcf-modal\",\"plugins/body-scroll-lock\"],function(e,t,n){function o(e){var t=e.getElementsByTagName(\"video\");t&&t.length>0&&(document.addEventListener(\"ModalOpenEvent_\"+e.id,function(e){Array.prototype.forEach.call(t,function(e){e.hasAttribute(\"data-autoplay\")&&e.play()})},!1),document.addEventListener(\"ModalCloseEvent_\"+e.id,function(n){Array.prototype.forEach.call(t,function(e){e.pause(),e.load()});var o=e.getElementsByClassName(\"mejs-overlay-play\");o&&o.length>0&&Array.prototype.forEach.call(o,function(e){\"none\"===e.style.display&&(e.style.display=\"block\")})},!1));var n=e.getElementsByTagName(\"iframe\");n&&n.length>0&&Array.prototype.forEach.call(n,function(t){var n=t.getAttribute(\"allow\");n&&n.includes(\"autoplay\")?(document.addEventListener(\"ModalOpenEvent_\"+e.id,function(e){t.contentWindow.postMessage(\"mh-play-video\",\"https://mediahub.unl.edu\")},!1),document.addEventListener(\"ModalCloseEvent_\"+e.id,function(e){t.contentWindow.postMessage(\"mh-reset-video\",\"https://mediahub.unl.edu\")},!1)):document.addEventListener(\"ModalCloseEvent_\"+e.id,function(e){t.contentWindow.postMessage(\"mh-pause-video\",\"https://mediahub.unl.edu\")},!1)})}var a=document.querySelectorAll(\".dcf-modal\");new DCFModal(a,n).initialize(),a.forEach(function(e){o(e)})});
//# sourceMappingURL=modals.js.map", "wdn/templates_5.2/js/compressed/modals.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/compressed/modals.js");
    }
}
