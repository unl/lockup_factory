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

/* wdn/templates_5.1/js/js-css/slideshows.css */
class __TwigTemplate_6e7da9856fdaa27f5c5eb414c6ed8331 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/js-css/slideshows.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/js-css/slideshows.css"));

        // line 1
        echo ".unl .dcf-slide-deck{-webkit-clip-path:polygon(100% 0,100% calc(100% - 2.25rem - 7px),calc(100% - 5.5rem - 13px) calc(100% - 2.25rem - 7px),calc(100% - 5.5rem - 13px) 100%,0 100%,0 0);clip-path:polygon(100% 0,100% calc(100% - 2.25rem - 7px),calc(100% - 5.5rem - 13px) calc(100% - 2.25rem - 7px),calc(100% - 5.5rem - 13px) 100%,0 100%,0 0);scrollbar-width:none}.unl .dcf-slide-deck::-webkit-scrollbar{display:none}.unl .dcf-slide-caption[aria-hidden=true]{opacity:0;pointer-events:none;-webkit-transition:opacity .4s ease-out;transition:opacity .4s ease-out}.unl .dcf-slide-caption[aria-hidden=false]{opacity:1;pointer-events:auto;-webkit-transition:opacity .2s ease-out;transition:opacity .2s ease-out}.unl .dcf-btn-slide-caption{border-color:transparent;bottom:3px;left:3px}.unl .dcf-btn-slide-caption,.unl .dcf-slide-caption{background-color:rgba(36,36,35,.95);color:#fefdfa;position:absolute;z-index:1}.unl .dcf-slide-caption{-webkit-clip-path:polygon(100% 0,100% 100%,calc(10px + 2.75rem) 100%,calc(10px + 2.75rem) calc(100% - 10px - 2.25rem),0 calc(100% - 10px - 2.25rem),0 0);clip-path:polygon(100% 0,100% 100%,calc(10px + 2.75rem) 100%,calc(10px + 2.75rem) calc(100% - 10px - 2.25rem),0 calc(100% - 10px - 2.25rem),0 0);height:100%;left:0;padding:1em 1.13em;top:0;width:100%}.dcf-btn-slide-caption[aria-expanded=false] .unl-icon-slide-caption-open{opacity:1;-webkit-transition:opacity .25s ease-out 125ms;transition:opacity .25s ease-out 125ms}.dcf-btn-slide-caption[aria-expanded=true] .unl-icon-slide-caption-open{opacity:0;-webkit-transition:opacity .25s ease-out;transition:opacity .25s ease-out}
/*# sourceMappingURL=slideshows.css.map */";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.1/js/js-css/slideshows.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".unl .dcf-slide-deck{-webkit-clip-path:polygon(100% 0,100% calc(100% - 2.25rem - 7px),calc(100% - 5.5rem - 13px) calc(100% - 2.25rem - 7px),calc(100% - 5.5rem - 13px) 100%,0 100%,0 0);clip-path:polygon(100% 0,100% calc(100% - 2.25rem - 7px),calc(100% - 5.5rem - 13px) calc(100% - 2.25rem - 7px),calc(100% - 5.5rem - 13px) 100%,0 100%,0 0);scrollbar-width:none}.unl .dcf-slide-deck::-webkit-scrollbar{display:none}.unl .dcf-slide-caption[aria-hidden=true]{opacity:0;pointer-events:none;-webkit-transition:opacity .4s ease-out;transition:opacity .4s ease-out}.unl .dcf-slide-caption[aria-hidden=false]{opacity:1;pointer-events:auto;-webkit-transition:opacity .2s ease-out;transition:opacity .2s ease-out}.unl .dcf-btn-slide-caption{border-color:transparent;bottom:3px;left:3px}.unl .dcf-btn-slide-caption,.unl .dcf-slide-caption{background-color:rgba(36,36,35,.95);color:#fefdfa;position:absolute;z-index:1}.unl .dcf-slide-caption{-webkit-clip-path:polygon(100% 0,100% 100%,calc(10px + 2.75rem) 100%,calc(10px + 2.75rem) calc(100% - 10px - 2.25rem),0 calc(100% - 10px - 2.25rem),0 0);clip-path:polygon(100% 0,100% 100%,calc(10px + 2.75rem) 100%,calc(10px + 2.75rem) calc(100% - 10px - 2.25rem),0 calc(100% - 10px - 2.25rem),0 0);height:100%;left:0;padding:1em 1.13em;top:0;width:100%}.dcf-btn-slide-caption[aria-expanded=false] .unl-icon-slide-caption-open{opacity:1;-webkit-transition:opacity .25s ease-out 125ms;transition:opacity .25s ease-out 125ms}.dcf-btn-slide-caption[aria-expanded=true] .unl-icon-slide-caption-open{opacity:0;-webkit-transition:opacity .25s ease-out;transition:opacity .25s ease-out}
/*# sourceMappingURL=slideshows.css.map */", "wdn/templates_5.1/js/js-css/slideshows.css", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/js/js-css/slideshows.css");
    }
}
