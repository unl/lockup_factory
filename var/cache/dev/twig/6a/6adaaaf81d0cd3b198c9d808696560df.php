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

/* wdn/templates_5.3/js/js-css/notices.css */
class __TwigTemplate_f4c0906a24bcb3abaa0526cbdca346bf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/js-css/notices.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/js-css/notices.css"));

        // line 1
        echo ".wdn_notice{background-color:#007197;background-image:url(https://unlcms.unl.edu/wdn/templates_5.3/js/js-css/img/information.svg);background-position:1em 50%;background-repeat:no-repeat;background-size:1.78em;border-radius:3px;-webkit-box-shadow:0 1px 1px 0 rgba(36,36,35,.5);box-shadow:0 1px 1px 0 rgba(36,36,35,.5);color:#fefdfa;margin-bottom:1em;padding:1em}.wdn_notice.affirm{background-color:#00784e;background-image:url(https://unlcms.unl.edu/wdn/templates_5.3/js/js-css/img/check-circle-2.svg)}.wdn_notice.negate{background-color:#9e0000;background-image:url(https://unlcms.unl.edu/wdn/templates_5.3/js/js-css/img/cross-bubble.svg)}.wdn_notice.alert{background-color:#d53f25;background-image:url(https://unlcms.unl.edu/wdn/templates_5.3/js/js-css/img/alert-2.svg)}.wdn_notice a,.wdn_notice a:hover{color:#fefdfa}.wdn_notice .message{padding-left:3.16em;padding-right:1.33em}.wdn_notice .message *{color:inherit;margin:0}.wdn_notice .message .title,.wdn_notice .message h4{letter-spacing:.01em;line-height:1.33;text-transform:uppercase}.wdn_notice .close{float:right}.wdn_notice .close a,.wdn_notice .close a:hover{background:transparent url(https://unlcms.unl.edu/wdn/templates_5.3/js/js-css/img/delete-1.svg) 50% 50%/contain no-repeat;display:block;height:1em;position:relative;text-decoration:none;text-indent:-9999em;width:1em;z-index:1}.wdn_notice.overlay{left:5.62vw;margin-left:auto;margin-right:auto;max-width:56.12em;position:absolute;right:5.62vw;text-align:left;top:3.16em;z-index:999}
/*# sourceMappingURL=notices.css.map */";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/js-css/notices.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".wdn_notice{background-color:#007197;background-image:url(https://unlcms.unl.edu/wdn/templates_5.3/js/js-css/img/information.svg);background-position:1em 50%;background-repeat:no-repeat;background-size:1.78em;border-radius:3px;-webkit-box-shadow:0 1px 1px 0 rgba(36,36,35,.5);box-shadow:0 1px 1px 0 rgba(36,36,35,.5);color:#fefdfa;margin-bottom:1em;padding:1em}.wdn_notice.affirm{background-color:#00784e;background-image:url(https://unlcms.unl.edu/wdn/templates_5.3/js/js-css/img/check-circle-2.svg)}.wdn_notice.negate{background-color:#9e0000;background-image:url(https://unlcms.unl.edu/wdn/templates_5.3/js/js-css/img/cross-bubble.svg)}.wdn_notice.alert{background-color:#d53f25;background-image:url(https://unlcms.unl.edu/wdn/templates_5.3/js/js-css/img/alert-2.svg)}.wdn_notice a,.wdn_notice a:hover{color:#fefdfa}.wdn_notice .message{padding-left:3.16em;padding-right:1.33em}.wdn_notice .message *{color:inherit;margin:0}.wdn_notice .message .title,.wdn_notice .message h4{letter-spacing:.01em;line-height:1.33;text-transform:uppercase}.wdn_notice .close{float:right}.wdn_notice .close a,.wdn_notice .close a:hover{background:transparent url(https://unlcms.unl.edu/wdn/templates_5.3/js/js-css/img/delete-1.svg) 50% 50%/contain no-repeat;display:block;height:1em;position:relative;text-decoration:none;text-indent:-9999em;width:1em;z-index:1}.wdn_notice.overlay{left:5.62vw;margin-left:auto;margin-right:auto;max-width:56.12em;position:absolute;right:5.62vw;text-align:left;top:3.16em;z-index:999}
/*# sourceMappingURL=notices.css.map */", "wdn/templates_5.3/js/js-css/notices.css", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/js-css/notices.css");
    }
}
