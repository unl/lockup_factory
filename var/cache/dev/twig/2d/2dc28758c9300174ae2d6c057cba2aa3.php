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

/* wdn/templates_5.0/js/compressed/plugins/flatpickr/l10n/hu.js.map */
class __TwigTemplate_c3a872dca2e18ca4973f32f730da89f0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/plugins/flatpickr/l10n/hu.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/compressed/plugins/flatpickr/l10n/hu.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"?\"],\"names\":[\"global\",\"factory\",\"exports\",\"module\",\"define\",\"amd\",\"hu\",\"this\",\"fp\",\"window\",\"undefined\",\"flatpickr\",\"l10ns\",\"Hungarian\",\"firstDayOfWeek\",\"weekdays\",\"shorthand\",\"longhand\",\"months\",\"ordinal\",\"weekAbbreviation\",\"scrollTitle\",\"toggleTitle\",\"default\",\"Object\",\"defineProperty\",\"value\"],\"mappings\":\"CACC,SAAUA,EAAQC,GACI,gBAAZC,UAA0C,mBAAXC,QAAyBF,EAAQC,SACrD,kBAAXE,SAAyBA,OAAOC,IAAMD,QAAQ,WAAYH,GAChEA,EAASD,EAAOM,QACnBC,KAAM,SAAWL,GAAW,YAE1B,IAAIM,GAAuB,mBAAXC,aAA+CC,KAArBD,OAAOE,UAA0BF,OAAOE,WAChFC,UAEEC,GACFC,eAAgB,EAChBC,UACEC,WAAY,IAAK,IAAK,IAAK,KAAM,KAAM,IAAK,OAC5CC,UAAW,WAAY,QAAS,OAAQ,SAAU,YAAa,SAAU,YAE3EC,QACEF,WAAY,MAAO,MAAO,MAAO,MAAO,MAAO,MAAO,MAAO,MAAO,OAAQ,MAAO,MAAO,OAC1FC,UAAW,SAAU,UAAW,UAAW,UAAW,QAAS,SAAU,SAAU,YAAa,aAAc,UAAW,WAAY,aAEvIE,QAAS,WACP,MAAO,KAETC,iBAAkB,MAClBC,YAAa,YACbC,YAAa,yBAEfd,GAAGI,MAAMN,GAAKO,CACd,IAAIP,GAAKE,EAAGI,KAEZV,GAAQW,UAAYA,EACpBX,EAAQqB,QAAUjB,EAElBkB,OAAOC,eAAevB,EAAS,cAAgBwB,OAAO\",\"file\":\"hu.js\"}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/compressed/plugins/flatpickr/l10n/hu.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"?\"],\"names\":[\"global\",\"factory\",\"exports\",\"module\",\"define\",\"amd\",\"hu\",\"this\",\"fp\",\"window\",\"undefined\",\"flatpickr\",\"l10ns\",\"Hungarian\",\"firstDayOfWeek\",\"weekdays\",\"shorthand\",\"longhand\",\"months\",\"ordinal\",\"weekAbbreviation\",\"scrollTitle\",\"toggleTitle\",\"default\",\"Object\",\"defineProperty\",\"value\"],\"mappings\":\"CACC,SAAUA,EAAQC,GACI,gBAAZC,UAA0C,mBAAXC,QAAyBF,EAAQC,SACrD,kBAAXE,SAAyBA,OAAOC,IAAMD,QAAQ,WAAYH,GAChEA,EAASD,EAAOM,QACnBC,KAAM,SAAWL,GAAW,YAE1B,IAAIM,GAAuB,mBAAXC,aAA+CC,KAArBD,OAAOE,UAA0BF,OAAOE,WAChFC,UAEEC,GACFC,eAAgB,EAChBC,UACEC,WAAY,IAAK,IAAK,IAAK,KAAM,KAAM,IAAK,OAC5CC,UAAW,WAAY,QAAS,OAAQ,SAAU,YAAa,SAAU,YAE3EC,QACEF,WAAY,MAAO,MAAO,MAAO,MAAO,MAAO,MAAO,MAAO,MAAO,OAAQ,MAAO,MAAO,OAC1FC,UAAW,SAAU,UAAW,UAAW,UAAW,QAAS,SAAU,SAAU,YAAa,aAAc,UAAW,WAAY,aAEvIE,QAAS,WACP,MAAO,KAETC,iBAAkB,MAClBC,YAAa,YACbC,YAAa,yBAEfd,GAAGI,MAAMN,GAAKO,CACd,IAAIP,GAAKE,EAAGI,KAEZV,GAAQW,UAAYA,EACpBX,EAAQqB,QAAUjB,EAElBkB,OAAOC,eAAevB,EAAS,cAAgBwB,OAAO\",\"file\":\"hu.js\"}", "wdn/templates_5.0/js/compressed/plugins/flatpickr/l10n/hu.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/compressed/plugins/flatpickr/l10n/hu.js.map");
    }
}
