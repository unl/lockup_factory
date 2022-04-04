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

/* wdn/templates_5.2/css/critical.css */
class __TwigTemplate_ceed92ed45a33476221ec1fd2532a6bf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/css/critical.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/css/critical.css"));

        // line 1
        echo "@charset \"UTF-8\";html{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;font-family:Gotham SSm A,Gotham SSm B,Verdana,sans-serif;font-style:normal;font-weight:400}svg:not(:root){overflow:hidden}button,figure,input,optgroup,select,textarea{margin:0}button{overflow:visible;text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}:not([role=dialog])[hidden]{display:none!important}[role=dialog][hidden]{display:block!important;visibility:hidden!important}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box}:root{--bg-body:#fefdfa;--bg-btn-inverse-primary:#e3e3e2;--bg-btn-inverse-secondary:transparent;--bg-btn-inverse-tertiary:transparent;--bg-btn-primary:#d00000;--bg-btn-secondary:#fefdfa;--bg-btn-tertiary:transparent;--b:#e3e3e2;--b-btn-primary:#d00000;--b-btn-secondary:currentColor;--b-btn-tertiary:transparent;--b-btn-inverse-primary:#e3e3e2;--b-btn-inverse-secondary:currentColor;--b-btn-inverse-tertiary:transparent;--body:#424240;--btn-primary:#fefdfa;--btn-secondary:#d00000;--btn-tertiary:#d00000;--btn-inverse-primary:#d00000;--btn-inverse-secondary:#e3e3e2;--btn-inverse-tertiary:#e3e3e2;--heading:#242423;--inverse:#fefdfa;--link:#d00000;font-size:1em;line-height:1.5}@media (prefers-color-scheme:dark){:root{--bg-body:#171716;--bg-btn-inverse-primary:#e3e3e2;--bg-btn-inverse-secondary:transparent;--bg-btn-inverse-tertiary:transparent;--bg-btn-primary:#e3e3e2;--bg-btn-secondary:transparent;--bg-btn-tertiary:transparent;--b:#424240;--b-btn-primary:#e3e3e2;--b-btn-secondary:currentColor;--b-btn-tertiary:transparent;--b-btn-inverse-primary:#e3e3e2;--b-btn-inverse-secondary:currentColor;--b-btn-inverse-tertiary:transparent;--body:#f6f6f5;--btn-inverse-primary:#d00000;--btn-inverse-secondary:#e3e3e2;--btn-inverse-tertiary:#e3e3e2;--btn-primary:#d00000;--btn-secondary:#e3e3e2;--btn-tertiary:#e3e3e2;--heading:#fefdfa;--link:#f6f6f5}}@media screen and (min-width:31.57em){:root{font-size:calc(.93em + .23vw)}}@media screen and (min-width:177.38em){:root{font-size:1.33em}}a,a:link{color:var(--link)}body{background-color:var(--bg-body);color:var(--body);margin:0;overflow-x:hidden}button,input[type=button],input[type=submit]{display:inline-block;font-family:inherit;font-size:1em;line-height:1.5;padding:.56em 1em;text-align:center}h1{font-size:2em}h2{font-size:1.78em}h3{font-size:1.5em}h1,h2,h3{color:var(--heading);line-height:1.13;margin-bottom:1rem;margin-top:0}h1+h2,h2+h2,h2+h3,h3+h3,h3+h4,ol+h2,ol+h3,p:not(.dcf-subhead)+h2,p:not(.dcf-subhead)+h3,p:not(.dcf-subhead)+h4,p:not(.dcf-subhead)+h5,p:not(.dcf-subhead)+h6,ul+h2,ul+h3{margin-top:1.33em}img{height:auto;max-width:100%}ol,ul{padding-left:1.78em}dl,ol,ul{margin-bottom:1em;margin-top:0}main{display:block}p{margin-bottom:1rem;margin-top:0}body:lang(en){quotes:\"“\" \"”\" \"‘\" \"’\" \"“\" \"”\" \"‘\" \"’\"}q:before{content:open-quote}q:after{content:close-quote}small{font-size:1rem}.dcf-bleed{left:50%;margin-left:-50vw;margin-right:-50vw;position:relative;right:50%;width:100vw}.dcf-wrapper{padding-left:5.62vw;padding-right:5.62vw}.dcf-breadcrumbs li{-webkit-box-align:center;align-items:center;display:-webkit-box;display:flex}.dcf-btn{-webkit-appearance:none;-moz-appearance:none;appearance:none;display:inline-block;text-align:center}.dcf-header a,.dcf-header a:link,a.dcf-btn-primary,a.dcf-btn-secondary{text-decoration:none}.dcf-nav-local ul{list-style:url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'/%3E\");margin-bottom:0;padding-left:0}.unl .dcf-breadcrumbs{font-size:.63em}.unl .dcf-breadcrumbs ol{display:-webkit-box;display:flex;flex-wrap:nowrap;list-style:url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'/%3E\");padding-left:5.62vw}.unl .dcf-breadcrumbs li{margin-bottom:0}.unl .dcf-breadcrumbs li:last-child{padding-right:5.62vw}.unl .dcf-breadcrumbs li:not(:last-child){margin-right:.56em}.unl .dcf-breadcrumbs li:not(:last-child):after{border-bottom:.32em solid transparent;border-left:.32em solid #c7c8ca;border-top:.32em solid transparent;content:\"\";margin-left:.56em}.unl .dcf-btn{border-style:solid;border-width:2px;font-size:.84em;font-weight:700;padding:.75em 1em}.unl .dcf-btn-inverse-primary{background-color:var(--bg-btn-inverse-primary);border-color:var(--b-btn-inverse-primary);color:var(--btn-inverse-primary)}.unl .dcf-btn-inverse-secondary{background-color:var(--bg-btn-inverse-secondary);border-color:var(--b-btn-inverse-secondary);color:var(--btn-inverse-secondary)}.unl .dcf-btn-inverse-tertiary{background-color:var(--bg-btn-inverse-tertiary);border-color:var(--b-btn-inverse-tertiary);color:var(--btn-inverse-tertiary)}.unl .dcf-btn-primary{background-color:var(--bg-btn-primary);border-color:var(--b-btn-primary);color:var(--btn-primary)}.unl .dcf-btn-secondary{background-color:var(--bg-btn-secondary);border-color:var(--b-btn-secondary);color:var(--btn-secondary)}.unl .dcf-btn-tertiary{background-color:var(--bg-btn-tertiary);border-color:var(--b-btn-tertiary);color:var(--btn-tertiary)}.unl-institution-title-ls{letter-spacing:.32em}.unl .dcf-site-group{min-height:3.16em}.unl .dcf-site-affiliation a{display:inline-block;padding-bottom:.42em}.unl .dcf-site-affiliation a,.unl .dcf-site-title a{color:var(--heading)}.unl h1,.unl h2,.unl h3{font-weight:700;letter-spacing:-.03em;margin-left:-.03em}.unl h1 a,.unl h2 a,.unl h3 a{text-decoration:none}.unl .dcf-subhead{font-weight:400;font-size:.75rem;letter-spacing:.1em;line-height:1.33;margin-bottom:.75em;text-transform:uppercase}.unl .dcf-hero-default .dcf-page-title{padding-left:5.62vw;padding-right:5.62vw;padding-top:1.78em}.unl .dcf-page-title h1{margin-top:0}.unl .dcf-page-title h1,.unl .dcf-page-title h1+.dcf-subhead{margin-bottom:0}.unl .dcf-page-title h1+.dcf-subhead{margin-top:1rem}.unl .dcf-nav-local a:link{color:#fefdfa}.unl .dcf-nav-local>ul:first-child{display:grid}.unl .dcf-nav-menu li{margin-bottom:0}.unl .dcf-nav-menu-child a,.unl .dcf-nav-menu-child button{color:#fefdfa;display:block;line-height:1.33;padding:1em 1rem}.unl .dcf-nav-menu-child>ul>li>a,.unl .dcf-nav-menu-child button{font-weight:700}.unl .dcf-nav-toggle-btn{-webkit-appearance:none;-moz-appearance:none;appearance:none}.unl.app .dcf-app-controls button{background-color:transparent;border:0}.dcf-bg-transparent{background-color:transparent!important}.dcf-circle{border-radius:50%!important}.dcf-b-solid{border-style:solid!important}.dcf-bt-solid{border-top-style:solid!important}.dcf-b-0{border-width:0!important}.dcf-b-1{border-width:1px!important}.dcf-bt-2{border-top-width:2px!important}.dcf-bt-3{border-top-width:3px!important}.dcf-ai-flex-end{-webkit-box-align:end!important;align-items:flex-end!important}.dcf-ai-center{-webkit-box-align:center!important;align-items:center!important}.dcf-jc-flex-end{-webkit-box-pack:end!important;justify-content:flex-end!important}.dcf-jc-center{-webkit-box-pack:center!important;justify-content:center!important}.dcf-jc-between{-webkit-box-pack:justify!important;justify-content:space-between!important}.dcf-d-none{display:none!important}.dcf-d-block{display:block!important}.dcf-d-flex{display:-webkit-box!important;display:flex!important}.dcf-flex-col{-webkit-box-orient:vertical!important;flex-direction:column!important}.dcf-flex-col,.dcf-flex-row{-webkit-box-direction:normal!important}.dcf-flex-row{-webkit-box-orient:horizontal!important;flex-direction:row!important}.dcf-flex-wrap{flex-wrap:wrap!important}.dcf-flex-nowrap{flex-wrap:nowrap!important}.dcf-flex-grow-1{-webkit-box-flex:1!important;flex-grow:1!important}.dcf-flex-shrink-0{flex-shrink:0!important}.dcf-h-4{height:1em!important}.dcf-h-5{height:1.33em!important}.dcf-h-6{height:1.78em!important}.dcf-h-8{height:3.16em!important}.dcf-h-9{height:4.21em!important}.dcf-h-100\\%{height:100%!important}.dcf-w-4{width:1em!important}.dcf-w-5{width:1.33em!important}.dcf-w-6{width:1.78em!important}.dcf-w-8{width:3.16em!important}.dcf-w-9{width:4.21em!important}.dcf-w-100\\%{width:100%!important}.dcf-w-min-0{min-width:0!important}.dcf-list-bare{list-style:url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'/%3E\");padding-left:0}.dcf-mt-1{margin-top:.42em!important}.dcf-mr-3{margin-right:.75em!important}.dcf-mr-4{margin-right:1em!important}.dcf-mb-1{margin-bottom:.42em!important}.dcf-mb-6{margin-bottom:1.78em!important}.dcf-obj-fit-contain{font-family:\"object-fit:contain\"!important;object-fit:contain!important}.dcf-obj-fit-contain,.dcf-obj-fit-cover{height:100%!important;width:100%!important}.dcf-obj-fit-cover{font-family:\"object-fit:cover\"!important;object-fit:cover!important}.dcf-overflow-hidden{overflow:hidden!important}.dcf-p-0{padding:0!important}.dcf-pt-3{padding-top:.75em!important}.dcf-pb-3{padding-bottom:.75em!important}.dcf-relative{position:relative!important}.dcf-absolute{position:absolute!important}.dcf-fixed{position:fixed!important}.dcf-pin-bottom{bottom:0!important}.dcf-fill-current{fill:currentColor!important}.dcf-txt-left{text-align:left!important}.dcf-italic{font-style:italic!important}.dcf-bold{font-weight:700!important}.dcf-lh-2{line-height:1.13!important}.dcf-lh-3{line-height:1.33!important}.dcf-uppercase{text-transform:uppercase!important}.dcf-txt-vertical-lr{-webkit-transform:translateY(-100%) rotate(90deg);transform:translateY(-100%) rotate(90deg);-webkit-transform-origin:0 100%;transform-origin:0 100%}@supports ((-webkit-writing-mode:vertical-lr) or (writing-mode:vertical-lr)){.dcf-txt-vertical-lr{-webkit-transform:none;transform:none;-webkit-writing-mode:vertical-lr;-ms-writing-mode:tb-lr;writing-mode:vertical-lr}}.dcf-invisible{visibility:hidden!important}.dcf-show-on-focus:not(:focus):not(:active),.dcf-sr-only{clip:rect(0 0 0 0)!important;-webkit-clip-path:inset(50%)!important;clip-path:inset(50%)!important;height:1px!important;overflow:hidden!important;position:absolute!important;width:1px!important;white-space:nowrap!important}.unl-bg-scarlet{background-color:#d00000!important}.unl-bg-cream{background-color:var(--bg-body)!important}.unl-b-scarlet{border-color:#d00000!important}.unl-bt-scarlet{border-top-color:#d00000!important}.unl-scarlet,a.unl-scarlet,a.unl-scarlet:link{color:var(--link)!important}.unl-cream,a.unl-cream,a.unl-cream:link{color:var(--inverse)!important}.unl-font-serif-ltd-caps{font-family:Mercury SSm Ltd Caps A,Mercury SSm Ltd Caps B,Georgia,serif!important}.unl-font-serif-ltd-italic{font-family:Mercury SSm Ltd Italic A,Mercury SSm Ltd Italic B,Georgia,serif!important}.unl .dcf-txt-3xs{font-size:.56em!important}.unl .dcf-txt-2xs{font-size:.63em!important}.unl .dcf-txt-xs{font-size:.75em!important}.unl .dcf-txt-sm{font-size:.84em!important}.unl .dcf-txt-h6{font-size:1em!important}.unl .dcf-txt-h5{font-size:1.13em!important}.unl .dcf-txt-h1{font-size:2em!important}.unl-ls-1{letter-spacing:.01em!important}.unl-ls-2{letter-spacing:.06em!important}.unl-ls-3{letter-spacing:.1em!important}@media only screen and (max-width:56.12em){.unl .dcf-breadcrumbs{height:4.21em;overflow:hidden}.unl .dcf-breadcrumbs ol{padding-bottom:4.21em;overflow-x:auto;overflow-y:hidden}.unl .dcf-breadcrumbs li{flex-shrink:0}.unl .dcf-logo-lockup{padding-bottom:1em;padding-top:1.33em}.unl-site-title a{font-size:1em}.unl .dcf-idm-login{-webkit-box-orient:vertical;-webkit-box-direction:normal;flex-direction:column}.unl .dcf-nav-toggle-group{display:-webkit-box;display:flex;z-index:999}.unl .dcf-nav-toggle-btn{flex-basis:25%}.unl .dcf-nav-menu{opacity:0;pointer-events:none;visibility:hidden}.unl .dcf-cta-header,.unl .dcf-header .dcf-institution-title,.unl .dcf-idm-toggle,.unl .dcf-search-toggle-wrapper{display:none}}@media only screen and (min-width:56.12em){h1{font-size:2.37em}h2{font-size:2em}h3{font-size:1.78em}.unl .dcf-breadcrumbs li:first-child,.unl .dcf-breadcrumbs li:last-child{flex-shrink:0}.unl .dcf-breadcrumbs li:not(:first-child),.unl .dcf-breadcrumbs li:not(:last-child){min-width:0}.unl .dcf-breadcrumbs li a{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.unl .dcf-header-global{border-bottom:1px solid var(--b);padding-top:.18em}.unl .dcf-header-global-item{margin-left:3.16vw}.unl .dcf-cta-header{display:-webkit-box;display:flex;-webkit-box-flex:3;flex-grow:3;font-size:.63em;-webkit-box-pack:end;justify-content:flex-end;margin-bottom:0}.unl .dcf-logo-lockup{padding-bottom:1.13em;padding-top:1.33em}.unl .dcf-idm-login{-webkit-box-orient:horizontal;-webkit-box-direction:reverse;flex-direction:row-reverse}.unl .dcf-idm-img{fill:#e3e3e2}.unl .dcf-nav-local>ul:first-child{grid-template-columns:repeat(6,1fr);overflow:hidden;width:100%}.unl .dcf-nav-local li:not(:last-child){margin-right:0}.unl .dcf-nav-local>ul>li>a{border-left:1px solid #a00000;height:100%}.unl .dcf-nav-toggle-btn-menu~.dcf-nav-local ul ul{position:absolute;visibility:hidden}.unl .dcf-nav-menu{background-color:#d00000;display:-webkit-box;display:flex;flex-wrap:nowrap;padding-left:5.62vw;padding-right:5.62vw}.unl .dcf-nav-menu a,.unl .dcf-nav-menu button{font-size:.75em}.unl .dcf-search{max-width:13.32em}.unl .dcf-idm-toggle,.unl .dcf-nav-menu .dcf-nav-toggle-btn-menu,.unl .dcf-search-toggle-wrapper{display:-webkit-box;display:flex}.unl .dcf-search-toggle-label{padding:.42em 3.16em .42em .75em}.unl .dcf-txt-h6{font-size:1.13em!important}.unl .dcf-txt-h5{font-size:1.33em!important}.unl .dcf-txt-h1{font-size:2.37em!important}.unl .dcf-cta-nav,.unl .dcf-nav-toggle-group{display:none}}.dcf-modal-overlay[aria-hidden=true]{opacity:0;pointer-events:none;visibility:hidden}
/*# sourceMappingURL=critical.css.map */";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/css/critical.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@charset \"UTF-8\";html{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;font-family:Gotham SSm A,Gotham SSm B,Verdana,sans-serif;font-style:normal;font-weight:400}svg:not(:root){overflow:hidden}button,figure,input,optgroup,select,textarea{margin:0}button{overflow:visible;text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}:not([role=dialog])[hidden]{display:none!important}[role=dialog][hidden]{display:block!important;visibility:hidden!important}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box}:root{--bg-body:#fefdfa;--bg-btn-inverse-primary:#e3e3e2;--bg-btn-inverse-secondary:transparent;--bg-btn-inverse-tertiary:transparent;--bg-btn-primary:#d00000;--bg-btn-secondary:#fefdfa;--bg-btn-tertiary:transparent;--b:#e3e3e2;--b-btn-primary:#d00000;--b-btn-secondary:currentColor;--b-btn-tertiary:transparent;--b-btn-inverse-primary:#e3e3e2;--b-btn-inverse-secondary:currentColor;--b-btn-inverse-tertiary:transparent;--body:#424240;--btn-primary:#fefdfa;--btn-secondary:#d00000;--btn-tertiary:#d00000;--btn-inverse-primary:#d00000;--btn-inverse-secondary:#e3e3e2;--btn-inverse-tertiary:#e3e3e2;--heading:#242423;--inverse:#fefdfa;--link:#d00000;font-size:1em;line-height:1.5}@media (prefers-color-scheme:dark){:root{--bg-body:#171716;--bg-btn-inverse-primary:#e3e3e2;--bg-btn-inverse-secondary:transparent;--bg-btn-inverse-tertiary:transparent;--bg-btn-primary:#e3e3e2;--bg-btn-secondary:transparent;--bg-btn-tertiary:transparent;--b:#424240;--b-btn-primary:#e3e3e2;--b-btn-secondary:currentColor;--b-btn-tertiary:transparent;--b-btn-inverse-primary:#e3e3e2;--b-btn-inverse-secondary:currentColor;--b-btn-inverse-tertiary:transparent;--body:#f6f6f5;--btn-inverse-primary:#d00000;--btn-inverse-secondary:#e3e3e2;--btn-inverse-tertiary:#e3e3e2;--btn-primary:#d00000;--btn-secondary:#e3e3e2;--btn-tertiary:#e3e3e2;--heading:#fefdfa;--link:#f6f6f5}}@media screen and (min-width:31.57em){:root{font-size:calc(.93em + .23vw)}}@media screen and (min-width:177.38em){:root{font-size:1.33em}}a,a:link{color:var(--link)}body{background-color:var(--bg-body);color:var(--body);margin:0;overflow-x:hidden}button,input[type=button],input[type=submit]{display:inline-block;font-family:inherit;font-size:1em;line-height:1.5;padding:.56em 1em;text-align:center}h1{font-size:2em}h2{font-size:1.78em}h3{font-size:1.5em}h1,h2,h3{color:var(--heading);line-height:1.13;margin-bottom:1rem;margin-top:0}h1+h2,h2+h2,h2+h3,h3+h3,h3+h4,ol+h2,ol+h3,p:not(.dcf-subhead)+h2,p:not(.dcf-subhead)+h3,p:not(.dcf-subhead)+h4,p:not(.dcf-subhead)+h5,p:not(.dcf-subhead)+h6,ul+h2,ul+h3{margin-top:1.33em}img{height:auto;max-width:100%}ol,ul{padding-left:1.78em}dl,ol,ul{margin-bottom:1em;margin-top:0}main{display:block}p{margin-bottom:1rem;margin-top:0}body:lang(en){quotes:\"“\" \"”\" \"‘\" \"’\" \"“\" \"”\" \"‘\" \"’\"}q:before{content:open-quote}q:after{content:close-quote}small{font-size:1rem}.dcf-bleed{left:50%;margin-left:-50vw;margin-right:-50vw;position:relative;right:50%;width:100vw}.dcf-wrapper{padding-left:5.62vw;padding-right:5.62vw}.dcf-breadcrumbs li{-webkit-box-align:center;align-items:center;display:-webkit-box;display:flex}.dcf-btn{-webkit-appearance:none;-moz-appearance:none;appearance:none;display:inline-block;text-align:center}.dcf-header a,.dcf-header a:link,a.dcf-btn-primary,a.dcf-btn-secondary{text-decoration:none}.dcf-nav-local ul{list-style:url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'/%3E\");margin-bottom:0;padding-left:0}.unl .dcf-breadcrumbs{font-size:.63em}.unl .dcf-breadcrumbs ol{display:-webkit-box;display:flex;flex-wrap:nowrap;list-style:url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'/%3E\");padding-left:5.62vw}.unl .dcf-breadcrumbs li{margin-bottom:0}.unl .dcf-breadcrumbs li:last-child{padding-right:5.62vw}.unl .dcf-breadcrumbs li:not(:last-child){margin-right:.56em}.unl .dcf-breadcrumbs li:not(:last-child):after{border-bottom:.32em solid transparent;border-left:.32em solid #c7c8ca;border-top:.32em solid transparent;content:\"\";margin-left:.56em}.unl .dcf-btn{border-style:solid;border-width:2px;font-size:.84em;font-weight:700;padding:.75em 1em}.unl .dcf-btn-inverse-primary{background-color:var(--bg-btn-inverse-primary);border-color:var(--b-btn-inverse-primary);color:var(--btn-inverse-primary)}.unl .dcf-btn-inverse-secondary{background-color:var(--bg-btn-inverse-secondary);border-color:var(--b-btn-inverse-secondary);color:var(--btn-inverse-secondary)}.unl .dcf-btn-inverse-tertiary{background-color:var(--bg-btn-inverse-tertiary);border-color:var(--b-btn-inverse-tertiary);color:var(--btn-inverse-tertiary)}.unl .dcf-btn-primary{background-color:var(--bg-btn-primary);border-color:var(--b-btn-primary);color:var(--btn-primary)}.unl .dcf-btn-secondary{background-color:var(--bg-btn-secondary);border-color:var(--b-btn-secondary);color:var(--btn-secondary)}.unl .dcf-btn-tertiary{background-color:var(--bg-btn-tertiary);border-color:var(--b-btn-tertiary);color:var(--btn-tertiary)}.unl-institution-title-ls{letter-spacing:.32em}.unl .dcf-site-group{min-height:3.16em}.unl .dcf-site-affiliation a{display:inline-block;padding-bottom:.42em}.unl .dcf-site-affiliation a,.unl .dcf-site-title a{color:var(--heading)}.unl h1,.unl h2,.unl h3{font-weight:700;letter-spacing:-.03em;margin-left:-.03em}.unl h1 a,.unl h2 a,.unl h3 a{text-decoration:none}.unl .dcf-subhead{font-weight:400;font-size:.75rem;letter-spacing:.1em;line-height:1.33;margin-bottom:.75em;text-transform:uppercase}.unl .dcf-hero-default .dcf-page-title{padding-left:5.62vw;padding-right:5.62vw;padding-top:1.78em}.unl .dcf-page-title h1{margin-top:0}.unl .dcf-page-title h1,.unl .dcf-page-title h1+.dcf-subhead{margin-bottom:0}.unl .dcf-page-title h1+.dcf-subhead{margin-top:1rem}.unl .dcf-nav-local a:link{color:#fefdfa}.unl .dcf-nav-local>ul:first-child{display:grid}.unl .dcf-nav-menu li{margin-bottom:0}.unl .dcf-nav-menu-child a,.unl .dcf-nav-menu-child button{color:#fefdfa;display:block;line-height:1.33;padding:1em 1rem}.unl .dcf-nav-menu-child>ul>li>a,.unl .dcf-nav-menu-child button{font-weight:700}.unl .dcf-nav-toggle-btn{-webkit-appearance:none;-moz-appearance:none;appearance:none}.unl.app .dcf-app-controls button{background-color:transparent;border:0}.dcf-bg-transparent{background-color:transparent!important}.dcf-circle{border-radius:50%!important}.dcf-b-solid{border-style:solid!important}.dcf-bt-solid{border-top-style:solid!important}.dcf-b-0{border-width:0!important}.dcf-b-1{border-width:1px!important}.dcf-bt-2{border-top-width:2px!important}.dcf-bt-3{border-top-width:3px!important}.dcf-ai-flex-end{-webkit-box-align:end!important;align-items:flex-end!important}.dcf-ai-center{-webkit-box-align:center!important;align-items:center!important}.dcf-jc-flex-end{-webkit-box-pack:end!important;justify-content:flex-end!important}.dcf-jc-center{-webkit-box-pack:center!important;justify-content:center!important}.dcf-jc-between{-webkit-box-pack:justify!important;justify-content:space-between!important}.dcf-d-none{display:none!important}.dcf-d-block{display:block!important}.dcf-d-flex{display:-webkit-box!important;display:flex!important}.dcf-flex-col{-webkit-box-orient:vertical!important;flex-direction:column!important}.dcf-flex-col,.dcf-flex-row{-webkit-box-direction:normal!important}.dcf-flex-row{-webkit-box-orient:horizontal!important;flex-direction:row!important}.dcf-flex-wrap{flex-wrap:wrap!important}.dcf-flex-nowrap{flex-wrap:nowrap!important}.dcf-flex-grow-1{-webkit-box-flex:1!important;flex-grow:1!important}.dcf-flex-shrink-0{flex-shrink:0!important}.dcf-h-4{height:1em!important}.dcf-h-5{height:1.33em!important}.dcf-h-6{height:1.78em!important}.dcf-h-8{height:3.16em!important}.dcf-h-9{height:4.21em!important}.dcf-h-100\\%{height:100%!important}.dcf-w-4{width:1em!important}.dcf-w-5{width:1.33em!important}.dcf-w-6{width:1.78em!important}.dcf-w-8{width:3.16em!important}.dcf-w-9{width:4.21em!important}.dcf-w-100\\%{width:100%!important}.dcf-w-min-0{min-width:0!important}.dcf-list-bare{list-style:url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'/%3E\");padding-left:0}.dcf-mt-1{margin-top:.42em!important}.dcf-mr-3{margin-right:.75em!important}.dcf-mr-4{margin-right:1em!important}.dcf-mb-1{margin-bottom:.42em!important}.dcf-mb-6{margin-bottom:1.78em!important}.dcf-obj-fit-contain{font-family:\"object-fit:contain\"!important;object-fit:contain!important}.dcf-obj-fit-contain,.dcf-obj-fit-cover{height:100%!important;width:100%!important}.dcf-obj-fit-cover{font-family:\"object-fit:cover\"!important;object-fit:cover!important}.dcf-overflow-hidden{overflow:hidden!important}.dcf-p-0{padding:0!important}.dcf-pt-3{padding-top:.75em!important}.dcf-pb-3{padding-bottom:.75em!important}.dcf-relative{position:relative!important}.dcf-absolute{position:absolute!important}.dcf-fixed{position:fixed!important}.dcf-pin-bottom{bottom:0!important}.dcf-fill-current{fill:currentColor!important}.dcf-txt-left{text-align:left!important}.dcf-italic{font-style:italic!important}.dcf-bold{font-weight:700!important}.dcf-lh-2{line-height:1.13!important}.dcf-lh-3{line-height:1.33!important}.dcf-uppercase{text-transform:uppercase!important}.dcf-txt-vertical-lr{-webkit-transform:translateY(-100%) rotate(90deg);transform:translateY(-100%) rotate(90deg);-webkit-transform-origin:0 100%;transform-origin:0 100%}@supports ((-webkit-writing-mode:vertical-lr) or (writing-mode:vertical-lr)){.dcf-txt-vertical-lr{-webkit-transform:none;transform:none;-webkit-writing-mode:vertical-lr;-ms-writing-mode:tb-lr;writing-mode:vertical-lr}}.dcf-invisible{visibility:hidden!important}.dcf-show-on-focus:not(:focus):not(:active),.dcf-sr-only{clip:rect(0 0 0 0)!important;-webkit-clip-path:inset(50%)!important;clip-path:inset(50%)!important;height:1px!important;overflow:hidden!important;position:absolute!important;width:1px!important;white-space:nowrap!important}.unl-bg-scarlet{background-color:#d00000!important}.unl-bg-cream{background-color:var(--bg-body)!important}.unl-b-scarlet{border-color:#d00000!important}.unl-bt-scarlet{border-top-color:#d00000!important}.unl-scarlet,a.unl-scarlet,a.unl-scarlet:link{color:var(--link)!important}.unl-cream,a.unl-cream,a.unl-cream:link{color:var(--inverse)!important}.unl-font-serif-ltd-caps{font-family:Mercury SSm Ltd Caps A,Mercury SSm Ltd Caps B,Georgia,serif!important}.unl-font-serif-ltd-italic{font-family:Mercury SSm Ltd Italic A,Mercury SSm Ltd Italic B,Georgia,serif!important}.unl .dcf-txt-3xs{font-size:.56em!important}.unl .dcf-txt-2xs{font-size:.63em!important}.unl .dcf-txt-xs{font-size:.75em!important}.unl .dcf-txt-sm{font-size:.84em!important}.unl .dcf-txt-h6{font-size:1em!important}.unl .dcf-txt-h5{font-size:1.13em!important}.unl .dcf-txt-h1{font-size:2em!important}.unl-ls-1{letter-spacing:.01em!important}.unl-ls-2{letter-spacing:.06em!important}.unl-ls-3{letter-spacing:.1em!important}@media only screen and (max-width:56.12em){.unl .dcf-breadcrumbs{height:4.21em;overflow:hidden}.unl .dcf-breadcrumbs ol{padding-bottom:4.21em;overflow-x:auto;overflow-y:hidden}.unl .dcf-breadcrumbs li{flex-shrink:0}.unl .dcf-logo-lockup{padding-bottom:1em;padding-top:1.33em}.unl-site-title a{font-size:1em}.unl .dcf-idm-login{-webkit-box-orient:vertical;-webkit-box-direction:normal;flex-direction:column}.unl .dcf-nav-toggle-group{display:-webkit-box;display:flex;z-index:999}.unl .dcf-nav-toggle-btn{flex-basis:25%}.unl .dcf-nav-menu{opacity:0;pointer-events:none;visibility:hidden}.unl .dcf-cta-header,.unl .dcf-header .dcf-institution-title,.unl .dcf-idm-toggle,.unl .dcf-search-toggle-wrapper{display:none}}@media only screen and (min-width:56.12em){h1{font-size:2.37em}h2{font-size:2em}h3{font-size:1.78em}.unl .dcf-breadcrumbs li:first-child,.unl .dcf-breadcrumbs li:last-child{flex-shrink:0}.unl .dcf-breadcrumbs li:not(:first-child),.unl .dcf-breadcrumbs li:not(:last-child){min-width:0}.unl .dcf-breadcrumbs li a{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.unl .dcf-header-global{border-bottom:1px solid var(--b);padding-top:.18em}.unl .dcf-header-global-item{margin-left:3.16vw}.unl .dcf-cta-header{display:-webkit-box;display:flex;-webkit-box-flex:3;flex-grow:3;font-size:.63em;-webkit-box-pack:end;justify-content:flex-end;margin-bottom:0}.unl .dcf-logo-lockup{padding-bottom:1.13em;padding-top:1.33em}.unl .dcf-idm-login{-webkit-box-orient:horizontal;-webkit-box-direction:reverse;flex-direction:row-reverse}.unl .dcf-idm-img{fill:#e3e3e2}.unl .dcf-nav-local>ul:first-child{grid-template-columns:repeat(6,1fr);overflow:hidden;width:100%}.unl .dcf-nav-local li:not(:last-child){margin-right:0}.unl .dcf-nav-local>ul>li>a{border-left:1px solid #a00000;height:100%}.unl .dcf-nav-toggle-btn-menu~.dcf-nav-local ul ul{position:absolute;visibility:hidden}.unl .dcf-nav-menu{background-color:#d00000;display:-webkit-box;display:flex;flex-wrap:nowrap;padding-left:5.62vw;padding-right:5.62vw}.unl .dcf-nav-menu a,.unl .dcf-nav-menu button{font-size:.75em}.unl .dcf-search{max-width:13.32em}.unl .dcf-idm-toggle,.unl .dcf-nav-menu .dcf-nav-toggle-btn-menu,.unl .dcf-search-toggle-wrapper{display:-webkit-box;display:flex}.unl .dcf-search-toggle-label{padding:.42em 3.16em .42em .75em}.unl .dcf-txt-h6{font-size:1.13em!important}.unl .dcf-txt-h5{font-size:1.33em!important}.unl .dcf-txt-h1{font-size:2.37em!important}.unl .dcf-cta-nav,.unl .dcf-nav-toggle-group{display:none}}.dcf-modal-overlay[aria-hidden=true]{opacity:0;pointer-events:none;visibility:hidden}
/*# sourceMappingURL=critical.css.map */", "wdn/templates_5.2/css/critical.css", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/css/critical.css");
    }
}
