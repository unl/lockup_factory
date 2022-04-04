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

/* wdn/templates_5.0/js/compressed/dropdown-widget.js.map */
class __TwigTemplate_4337de2fa46d1d5809cefcecb0a080d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/dropdown-widget.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/dropdown-widget.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"?\"],\"names\":[\"define\",\"DropDownWidget\",\"container\",\"type\",\"this\",\"button\",\"querySelector\",\"id\",\"getAttribute\",\"controls\",\"document\",\"getElementById\",\"nextElementSibling\",\"focusTarget\",\"setAttribute\",\"addEventListener\",\"e\",\"detail\",\"isExpanded\",\"close\",\"bind\",\"toggle\",\"keyCode\",\"prototype\",\"open\",\"hidden\",\"focus\",\"openEvent\",\"CustomEvent\",\"dispatchEvent\",\"activeElement\",\"contains\"],\"mappings\":\"AAmBAA,UAAW,WACV,YAOA,SAASC,GAAeC,EAAWC,GAClCC,KAAKF,UAAYA,EACjBE,KAAKD,KAAOA,GAAQ,KACpBC,KAAKC,OAASD,KAAKF,UAAUI,cAAc,gCAE3C,IAAIC,GAAKH,KAAKC,OAAOG,aAAa,gBAEjCJ,MAAKK,SADFF,EACaG,SAASC,eAAeJ,GAGxBH,KAAKC,OAAOO,mBAI7BR,KAAKS,YAAcT,KAAKK,SAASH,cAAc,iBAC/CF,KAAKS,YAAYC,aAAa,WAAY,KAG1CJ,SAASK,iBAAiB,sBAAuB,SAAUC,GACtDZ,KAAKD,MAAQa,EAAEC,OAAOd,MAAQC,KAAKc,cACtCd,KAAKe,SAELC,KAAKhB,OAGPA,KAAKC,OAAOU,iBAAiB,QAAS,SAAUC,GAE/CZ,KAAKiB,UACJD,KAAKhB,OAGPM,SAASK,iBAAiB,UAAW,SAAUC,GAE5B,KAAdA,EAAEM,SACLlB,KAAKe,SAELC,KAAKhB,OAkCR,MA/BAH,GAAesB,UAAUC,KAAO,WAC/BpB,KAAKC,OAAOS,aAAa,gBAAiB,QAC1CV,KAAKK,SAASgB,QAAS,EAEvBrB,KAAKS,YAAYa,OACjB,IAAIC,GAAY,GAAIC,aAAY,sBAAwBX,QAAUd,KAAMC,KAAKD,OAC7EO,UAASmB,cAAcF,IAGxB1B,EAAesB,UAAUJ,MAAQ,WAChCf,KAAKC,OAAOS,aAAa,gBAAiB,SAC1CV,KAAKK,SAASgB,QAAS,EAGnBf,SAASoB,eAAiB1B,KAAKK,SAASsB,SAASrB,SAASoB,gBAC7D1B,KAAKC,OAAOqB,SAIdzB,EAAesB,UAAUF,OAAS,WAC7BjB,KAAKc,aACRd,KAAKe,QAELf,KAAKoB,QAIPvB,EAAesB,UAAUL,WAAa,WACrC,MAAqD,SAA9Cd,KAAKC,OAAOG,aAAa,kBAG1BP\",\"file\":\"dropdown-widget.js\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/compressed/dropdown-widget.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"?\"],\"names\":[\"define\",\"DropDownWidget\",\"container\",\"type\",\"this\",\"button\",\"querySelector\",\"id\",\"getAttribute\",\"controls\",\"document\",\"getElementById\",\"nextElementSibling\",\"focusTarget\",\"setAttribute\",\"addEventListener\",\"e\",\"detail\",\"isExpanded\",\"close\",\"bind\",\"toggle\",\"keyCode\",\"prototype\",\"open\",\"hidden\",\"focus\",\"openEvent\",\"CustomEvent\",\"dispatchEvent\",\"activeElement\",\"contains\"],\"mappings\":\"AAmBAA,UAAW,WACV,YAOA,SAASC,GAAeC,EAAWC,GAClCC,KAAKF,UAAYA,EACjBE,KAAKD,KAAOA,GAAQ,KACpBC,KAAKC,OAASD,KAAKF,UAAUI,cAAc,gCAE3C,IAAIC,GAAKH,KAAKC,OAAOG,aAAa,gBAEjCJ,MAAKK,SADFF,EACaG,SAASC,eAAeJ,GAGxBH,KAAKC,OAAOO,mBAI7BR,KAAKS,YAAcT,KAAKK,SAASH,cAAc,iBAC/CF,KAAKS,YAAYC,aAAa,WAAY,KAG1CJ,SAASK,iBAAiB,sBAAuB,SAAUC,GACtDZ,KAAKD,MAAQa,EAAEC,OAAOd,MAAQC,KAAKc,cACtCd,KAAKe,SAELC,KAAKhB,OAGPA,KAAKC,OAAOU,iBAAiB,QAAS,SAAUC,GAE/CZ,KAAKiB,UACJD,KAAKhB,OAGPM,SAASK,iBAAiB,UAAW,SAAUC,GAE5B,KAAdA,EAAEM,SACLlB,KAAKe,SAELC,KAAKhB,OAkCR,MA/BAH,GAAesB,UAAUC,KAAO,WAC/BpB,KAAKC,OAAOS,aAAa,gBAAiB,QAC1CV,KAAKK,SAASgB,QAAS,EAEvBrB,KAAKS,YAAYa,OACjB,IAAIC,GAAY,GAAIC,aAAY,sBAAwBX,QAAUd,KAAMC,KAAKD,OAC7EO,UAASmB,cAAcF,IAGxB1B,EAAesB,UAAUJ,MAAQ,WAChCf,KAAKC,OAAOS,aAAa,gBAAiB,SAC1CV,KAAKK,SAASgB,QAAS,EAGnBf,SAASoB,eAAiB1B,KAAKK,SAASsB,SAASrB,SAASoB,gBAC7D1B,KAAKC,OAAOqB,SAIdzB,EAAesB,UAAUF,OAAS,WAC7BjB,KAAKc,aACRd,KAAKe,QAELf,KAAKoB,QAIPvB,EAAesB,UAAUL,WAAa,WACrC,MAAqD,SAA9Cd,KAAKC,OAAOG,aAAa,kBAG1BP\",\"file\":\"dropdown-widget.js\"}", "wdn/templates_5.0/js/compressed/dropdown-widget.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/compressed/dropdown-widget.js.map");
    }
}
