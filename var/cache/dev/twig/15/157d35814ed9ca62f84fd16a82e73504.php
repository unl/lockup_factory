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

/* wdn/templates_5.3/js/compressed/modals.js */
class __TwigTemplate_3b6f8897d6633d60f93ec1eea8b1c1d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/modals.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/modals.js"));

        // line 1
        echo "require([\"dcf-modal\",\"plugins/body-scroll-lock\"],function(e,t){function a(e){var t=e.getElementsByTagName(\"video\");t&&t.length>0&&(document.addEventListener(\"ModalOpenEvent_\"+e.id,function(e){Array.prototype.forEach.call(t,function(e){e.hasAttribute(\"data-autoplay\")&&e.play()})},!1),document.addEventListener(\"ModalCloseEvent_\"+e.id,function(a){Array.prototype.forEach.call(t,function(e){e.pause(),e.load()});var n=e.getElementsByClassName(\"mejs-overlay-play\");n&&n.length>0&&Array.prototype.forEach.call(n,function(e){\"none\"===e.style.display&&(e.style.display=\"block\")})},!1));var a=e.getElementsByTagName(\"iframe\");a&&a.length>0&&Array.prototype.forEach.call(a,function(t){var a=t.getAttribute(\"src\"),n=t.getAttribute(\"allow\");if(n&&n.includes(\"autoplay\")){if(!a.includes(\"mediahub.unl.edu\"))try{var o=new URL(t.getAttribute(\"src\"));o.searchParams.has(\"autoplay\")&&(o.searchParams.delete(\"autoplay\"),t.src=o.toString())}catch(e){}document.addEventListener(\"ModalOpenEvent_\"+e.id,function(e){var n=t.getAttribute(\"src\");if(n.includes(\"mediahub.unl.edu\"))t.contentWindow.postMessage(\"mh-play-video\",\"https://mediahub.unl.edu\");else try{var o=new URL(n);o.searchParams.set(\"autoplay\",\"1\");var r=o.toString();n!=r&&(t.src=r)}catch(e){t.src=a}},!1),document.addEventListener(\"ModalCloseEvent_\"+e.id,function(e){var n=t.getAttribute(\"src\");if(n.includes(\"mediahub.unl.edu\"))t.contentWindow.postMessage(\"mh-reset-video\",\"https://mediahub.unl.edu\");else try{var o=new URL(n);o.searchParams.has(\"autoplay\")&&(o.searchParams.delete(\"autoplay\"),n=o.toString()),t.src=n}catch(e){t.src=a}},!1)}else document.addEventListener(\"ModalCloseEvent_\"+e.id,function(e){a.includes(\"mediahub.unl.edu\")?t.contentWindow.postMessage(\"mh-pause-video\",\"https://mediahub.unl.edu\"):t.src=a},!1)})}var n=document.querySelectorAll(\".dcf-modal\");new e.DCFModal(n,t).initialize(),n.forEach(function(e){a(e)})});
//# sourceMappingURL=modals.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/modals.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("require([\"dcf-modal\",\"plugins/body-scroll-lock\"],function(e,t){function a(e){var t=e.getElementsByTagName(\"video\");t&&t.length>0&&(document.addEventListener(\"ModalOpenEvent_\"+e.id,function(e){Array.prototype.forEach.call(t,function(e){e.hasAttribute(\"data-autoplay\")&&e.play()})},!1),document.addEventListener(\"ModalCloseEvent_\"+e.id,function(a){Array.prototype.forEach.call(t,function(e){e.pause(),e.load()});var n=e.getElementsByClassName(\"mejs-overlay-play\");n&&n.length>0&&Array.prototype.forEach.call(n,function(e){\"none\"===e.style.display&&(e.style.display=\"block\")})},!1));var a=e.getElementsByTagName(\"iframe\");a&&a.length>0&&Array.prototype.forEach.call(a,function(t){var a=t.getAttribute(\"src\"),n=t.getAttribute(\"allow\");if(n&&n.includes(\"autoplay\")){if(!a.includes(\"mediahub.unl.edu\"))try{var o=new URL(t.getAttribute(\"src\"));o.searchParams.has(\"autoplay\")&&(o.searchParams.delete(\"autoplay\"),t.src=o.toString())}catch(e){}document.addEventListener(\"ModalOpenEvent_\"+e.id,function(e){var n=t.getAttribute(\"src\");if(n.includes(\"mediahub.unl.edu\"))t.contentWindow.postMessage(\"mh-play-video\",\"https://mediahub.unl.edu\");else try{var o=new URL(n);o.searchParams.set(\"autoplay\",\"1\");var r=o.toString();n!=r&&(t.src=r)}catch(e){t.src=a}},!1),document.addEventListener(\"ModalCloseEvent_\"+e.id,function(e){var n=t.getAttribute(\"src\");if(n.includes(\"mediahub.unl.edu\"))t.contentWindow.postMessage(\"mh-reset-video\",\"https://mediahub.unl.edu\");else try{var o=new URL(n);o.searchParams.has(\"autoplay\")&&(o.searchParams.delete(\"autoplay\"),n=o.toString()),t.src=n}catch(e){t.src=a}},!1)}else document.addEventListener(\"ModalCloseEvent_\"+e.id,function(e){a.includes(\"mediahub.unl.edu\")?t.contentWindow.postMessage(\"mh-pause-video\",\"https://mediahub.unl.edu\"):t.src=a},!1)})}var n=document.querySelectorAll(\".dcf-modal\");new e.DCFModal(n,t).initialize(),n.forEach(function(e){a(e)})});
//# sourceMappingURL=modals.js.map", "wdn/templates_5.3/js/compressed/modals.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/modals.js");
    }
}
