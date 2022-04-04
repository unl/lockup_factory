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

/* wdn/templates_5.2/js/js-css/tabs.css.map */
class __TwigTemplate_efa42843fb6d0538f2e698afb62ef373 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/js-css/tabs.css.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/js-css/tabs.css.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"../../js-src/js-css/tabs.scss\",\"../../scss/variables/_variables.tabs.scss\",\"../../../../node_modules/dcf/scss/mixins/_mixins.media-queries.scss\"],\"names\":[],\"mappings\":\"AAQA,cACE,kBAAqC,CACtC,AAGD,6BAME,8BCaoB,ADbpB,0CCaoB,CDZrB,AAGD,iCACE,eAAgB,CACjB,AEwBG,2CFlBF,mCACE,sBAAsB,AACtB,mCAA6D,AAC7D,oCAA8D,AAC9D,kCAA4D,AAC5D,eAAgB,CACjB,AAGD,kDACE,iBAAkB,CACnB,AAGD,yDACE,sCAA8C,AAC9C,qCAA6C,AAC7C,mCAA2C,AAC3C,WAAW,AACX,OAAO,AACP,kBAAkB,AAClB,QAAQ,AACR,mCAA2B,AAA3B,0BAA2B,CAC5B,CAAA\",\"file\":\"tabs.css\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/js-css/tabs.css.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"../../js-src/js-css/tabs.scss\",\"../../scss/variables/_variables.tabs.scss\",\"../../../../node_modules/dcf/scss/mixins/_mixins.media-queries.scss\"],\"names\":[],\"mappings\":\"AAQA,cACE,kBAAqC,CACtC,AAGD,6BAME,8BCaoB,ADbpB,0CCaoB,CDZrB,AAGD,iCACE,eAAgB,CACjB,AEwBG,2CFlBF,mCACE,sBAAsB,AACtB,mCAA6D,AAC7D,oCAA8D,AAC9D,kCAA4D,AAC5D,eAAgB,CACjB,AAGD,kDACE,iBAAkB,CACnB,AAGD,yDACE,sCAA8C,AAC9C,qCAA6C,AAC7C,mCAA2C,AAC3C,WAAW,AACX,OAAO,AACP,kBAAkB,AAClB,QAAQ,AACR,mCAA2B,AAA3B,0BAA2B,CAC5B,CAAA\",\"file\":\"tabs.css\"}", "wdn/templates_5.2/js/js-css/tabs.css.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/js-css/tabs.css.map");
    }
}
