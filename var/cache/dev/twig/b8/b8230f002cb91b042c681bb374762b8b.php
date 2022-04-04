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

/* wdn/templates_5.2/css/print.css */
class __TwigTemplate_dca0eb10cacf157c8495c25229234cf2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/css/print.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/css/print.css"));

        // line 1
        echo ".dcf-d-none\\@print{display:none!important}.dcf-main .dcf-d-flex,.dcf-main .dcf-d-grid,.dcf-main [class*=\" dcf-grid\"],.dcf-main [class^=dcf-grid]{display:block!important}*,:after,:before{background:transparent!important;color:#000!important;-webkit-box-shadow:none!important;box-shadow:none!important;text-shadow:none!important}.unl abbr[title]:after{content:\" (\" attr(title) \")\"}.unl img{max-width:100%!important}.unl h2,.unl h3,.unl p{orphans:3;widows:3}.unl h2,.unl h3{page-break-after:avoid}.unl input[type=submit]{display:none}.unl blockquote,.unl pre{border:1px solid #999;page-break-inside:avoid}.unl .dcf-header-global{border-bottom:1px solid #ccc!important;border-top:none!important;margin-bottom:1em}.unl .dcf-main a,.unl .dcf-main a:visited{text-decoration:underline}.unl .dcf-main a[href]:after{content:\" (\" attr(href) \")\";font-size:80%;word-wrap:break-word}.unl .dcf-main a[href^=\"http://\"]:after,.unl .dcf-main a[href^=\"https://\"]:after{content:\" [\" attr(href) \"]\"}.unl .dcf-main a[href^=\"#\"]:after,.unl .dcf-main a[href^=\"javascript:\"]:after{content:\"\"}
/*# sourceMappingURL=print.css.map */";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/css/print.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".dcf-d-none\\@print{display:none!important}.dcf-main .dcf-d-flex,.dcf-main .dcf-d-grid,.dcf-main [class*=\" dcf-grid\"],.dcf-main [class^=dcf-grid]{display:block!important}*,:after,:before{background:transparent!important;color:#000!important;-webkit-box-shadow:none!important;box-shadow:none!important;text-shadow:none!important}.unl abbr[title]:after{content:\" (\" attr(title) \")\"}.unl img{max-width:100%!important}.unl h2,.unl h3,.unl p{orphans:3;widows:3}.unl h2,.unl h3{page-break-after:avoid}.unl input[type=submit]{display:none}.unl blockquote,.unl pre{border:1px solid #999;page-break-inside:avoid}.unl .dcf-header-global{border-bottom:1px solid #ccc!important;border-top:none!important;margin-bottom:1em}.unl .dcf-main a,.unl .dcf-main a:visited{text-decoration:underline}.unl .dcf-main a[href]:after{content:\" (\" attr(href) \")\";font-size:80%;word-wrap:break-word}.unl .dcf-main a[href^=\"http://\"]:after,.unl .dcf-main a[href^=\"https://\"]:after{content:\" [\" attr(href) \"]\"}.unl .dcf-main a[href^=\"#\"]:after,.unl .dcf-main a[href^=\"javascript:\"]:after{content:\"\"}
/*# sourceMappingURL=print.css.map */", "wdn/templates_5.2/css/print.css", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/css/print.css");
    }
}
