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

/* wdn/templates_5.3/includes/global/header-global-1.html */
class __TwigTemplate_878d5c807beba3e511f3b1fd9cd3f2c0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/global/header-global-1.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/global/header-global-1.html"));

        // line 1
        echo "<script>
    // WDN Notice Banner Display
    function displayWDNNoticeBanner() {
\t    var bannerEnabled = true;
\t    if (bannerEnabled) {
\t\t    var messageContent = false;
\t\t    var messageSessionKey = 'wndNoticeMessage';
\t\t    var sessionContent = sessionStorage.getItem(messageSessionKey);

\t\t    // clear saved message every five minutes
\t\t    setInterval(function(){ sessionStorage.removeItem(messageSessionKey); }, 300000);

\t\t    if (sessionContent) {
\t\t\t\tmessageContent = sessionContent;
\t\t\t\tdisplayWDNNoticeBannerMessage(messageContent);
\t\t    } else {
\t\t\t\tvar xhr = new XMLHttpRequest();
\t\t\t\tvar bannerContentURL = 'https://its-unl-cms-prd-s3.s3.amazonaws.com/wdn-message.html';
\t\t\t\txhr.open('GET', bannerContentURL);
\t\t\t\txhr.send(null);
\t\t\t\txhr.onload = function(e) {
\t\t\t\t\tif (xhr.status === 200) {
\t\t\t\t\t\tmessageContent = xhr.responseText;
\t\t\t\t\t\tsessionStorage.setItem(messageSessionKey, messageContent);
\t\t\t\t\t\tdisplayWDNNoticeBannerMessage(messageContent);
\t\t\t\t\t}
\t\t\t\t}
\t\t    }
\t\t}

\t\tfunction displayWDNNoticeBannerMessage(messageContent) {
\t\t\tif (messageContent) {
\t\t\t\tvar skipNav = document.getElementById('dcf-skip-nav');
\t\t\t\tvar banner = document.createElement('div');
\t\t\t\tbanner.setAttribute('role', 'navigation');
\t\t\t\tbanner.classList.add('dcf-d-none@print');
\t\t\t\tbanner.innerHTML = messageContent;
\t\t\t\tif (skipNav) {
\t\t\t\t\tskipNav.parentNode.insertBefore(banner, skipNav.nextSibling);
\t\t\t\t} else {
\t\t\t\t\tdocument.body.prepend(banner);
\t\t\t\t}
\t\t\t}
\t\t}
\t}
\tdisplayWDNNoticeBanner();
</script>
<div class=\"dcf-header-global dcf-wrapper dcf-d-flex dcf-flex-row dcf-flex-nowrap dcf-ai-center dcf-jc-between dcf-relative dcf-bt-solid dcf-bt-3 unl-bt-scarlet\">
  <a class=\"dcf-institution-title dcf-flex-shrink-0 dcf-pt-3 dcf-pb-3 dcf-txt-xs unl-ls-3\" id=\"dcf-institution-title\" href=\"https://www.unl.edu/\">
    <span class=\"dcf-uppercase unl-font-serif-ltd-caps\">University</span> <span class=\"dcf-italic unl-font-serif-ltd-italic\">of</span><span class=\"unl-institution-title-ls\"> </span><span class=\"dcf-uppercase unl-font-serif-ltd-caps\">Nebraska&ndash;Lincoln</span>
  </a>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/includes/global/header-global-1.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    // WDN Notice Banner Display
    function displayWDNNoticeBanner() {
\t    var bannerEnabled = true;
\t    if (bannerEnabled) {
\t\t    var messageContent = false;
\t\t    var messageSessionKey = 'wndNoticeMessage';
\t\t    var sessionContent = sessionStorage.getItem(messageSessionKey);

\t\t    // clear saved message every five minutes
\t\t    setInterval(function(){ sessionStorage.removeItem(messageSessionKey); }, 300000);

\t\t    if (sessionContent) {
\t\t\t\tmessageContent = sessionContent;
\t\t\t\tdisplayWDNNoticeBannerMessage(messageContent);
\t\t    } else {
\t\t\t\tvar xhr = new XMLHttpRequest();
\t\t\t\tvar bannerContentURL = 'https://its-unl-cms-prd-s3.s3.amazonaws.com/wdn-message.html';
\t\t\t\txhr.open('GET', bannerContentURL);
\t\t\t\txhr.send(null);
\t\t\t\txhr.onload = function(e) {
\t\t\t\t\tif (xhr.status === 200) {
\t\t\t\t\t\tmessageContent = xhr.responseText;
\t\t\t\t\t\tsessionStorage.setItem(messageSessionKey, messageContent);
\t\t\t\t\t\tdisplayWDNNoticeBannerMessage(messageContent);
\t\t\t\t\t}
\t\t\t\t}
\t\t    }
\t\t}

\t\tfunction displayWDNNoticeBannerMessage(messageContent) {
\t\t\tif (messageContent) {
\t\t\t\tvar skipNav = document.getElementById('dcf-skip-nav');
\t\t\t\tvar banner = document.createElement('div');
\t\t\t\tbanner.setAttribute('role', 'navigation');
\t\t\t\tbanner.classList.add('dcf-d-none@print');
\t\t\t\tbanner.innerHTML = messageContent;
\t\t\t\tif (skipNav) {
\t\t\t\t\tskipNav.parentNode.insertBefore(banner, skipNav.nextSibling);
\t\t\t\t} else {
\t\t\t\t\tdocument.body.prepend(banner);
\t\t\t\t}
\t\t\t}
\t\t}
\t}
\tdisplayWDNNoticeBanner();
</script>
<div class=\"dcf-header-global dcf-wrapper dcf-d-flex dcf-flex-row dcf-flex-nowrap dcf-ai-center dcf-jc-between dcf-relative dcf-bt-solid dcf-bt-3 unl-bt-scarlet\">
  <a class=\"dcf-institution-title dcf-flex-shrink-0 dcf-pt-3 dcf-pb-3 dcf-txt-xs unl-ls-3\" id=\"dcf-institution-title\" href=\"https://www.unl.edu/\">
    <span class=\"dcf-uppercase unl-font-serif-ltd-caps\">University</span> <span class=\"dcf-italic unl-font-serif-ltd-italic\">of</span><span class=\"unl-institution-title-ls\"> </span><span class=\"dcf-uppercase unl-font-serif-ltd-caps\">Nebraska&ndash;Lincoln</span>
  </a>
", "wdn/templates_5.3/includes/global/header-global-1.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/includes/global/header-global-1.html");
    }
}
