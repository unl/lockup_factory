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

/* wdn/templates_5.3/includes/local/affiliate-footer.html */
class __TwigTemplate_a77fea35a04c49364d58126398c04226 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/local/affiliate-footer.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/local/affiliate-footer.html"));

        // line 1
        echo "<div class=\"dcf-bleed dcf-wrapper dcf-pt-8 dcf-pb-8\">
  <div class=\"dcf-grid-halves@sm dcf-grid-fourths@md dcf-col-gap-vw dcf-row-gap-8 dcf-pb-7 dcf-lh-3\">
    <div class=\"dcf-txt-sm\" id=\"dcf-footer-group-1\">
      <h2 id=\"dcf-footer-group-1-heading\">Glenn Korff School of Music</h2>
      <dl aria-labelledby=\"dcf-footer-group-1-heading\">
        <dt class=\"dcf-sr-only\">Address</dt>
        <dd class=\"dcf-d-inline-block dcf-relative dcf-pl-6\">
          <svg class=\"dcf-icon dcf-icon-hang dcf-h-4 dcf-w-4 dcf-fill-current\" aria-hidden=\"true\" focusable=\"false\" fill-opacity=\".5\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
            <path d=\"M24 0A16 16 0 0 0 8 16c0 8.49 14.55 30.61 15.17 31.55a1 1 0 0 0 1.67 0C25.45 46.61 40 24.49 40 16A16 16 0 0 0 24 0zm0 23a7 7 0 1 1 7-7 7 7 0 0 1-7 7z\"/>
          </svg>
          <address itemscope=\"\" itemtype=\"http://schema.org/PostalAddress\" translate=\"no\">
            <a href=\"https://maps.unl.edu/WAB\">
              <span class=\"dcf-sr-only\"><span itemprop=\"name\">College of Fine and Performing Arts</span><br></span>
              <span itemprop=\"streetAddress\">102 Woods Art Building</span><br>
              <span itemprop=\"addressLocality\">Lincoln</span>, <abbr title=\"Nebraska\" itemprop=\"addressRegion\">NE</abbr> <span itemprop=\"postalCode\">68588-0144</span> <abbr class=\"dcf-d-none\" itemprop=\"addressCountry\">US</abbr>
            </a>
          </address>
        </dd>
        <dt class=\"dcf-sr-only\">Phone</dt>
        <dd>
          <a class=\"dcf-d-inline-block dcf-relative dcf-pl-6\" href=\"tel:+14024729339\">
            <svg class=\"dcf-icon dcf-icon-hang dcf-fill-current\" aria-hidden=\"true\" focusable=\"false\" fill=\"currentcolor\" fill-opacity=\".5\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
              <path d=\"M10 10h28v28H10zM10 40v3a5 5 0 0 0 5 5h18a5 5 0 0 0 5-5v-3zm14 5a2 2 0 1 1 2-2 2 2 0 0 1-2 2zM38 8V5a5 5 0 0 0-5-5H15a5 5 0 0 0-5 5v3zM19 4h10a1 1 0 1 1 0 2H19a1 1 0 0 1 0-2z\"/>
            </svg>
            <span class=\"dcf-txt-nowrap\">402-472-9339</span>
          </a>
        </dd>
        <dt class=\"dcf-sr-only\">Fax</dt>
        <dd class=\"dcf-d-inline-block dcf-relative dcf-pl-6\">
          <svg class=\"dcf-icon dcf-icon-hang dcf-fill-current\" aria-hidden=\"true\" focusable=\"false\" fill=\"currentcolor\" fill-opacity=\".5\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
            <path d=\"M1 15v26a3 3 0 0 0 3 3h1V12H4a3 3 0 0 0-3 3zM16 6h-3V1a1 1 0 0 0-2 0v5.1A5 5 0 0 0 7 11v32a5 5 0 0 0 5 5h4a5 5 0 0 0 5-5V11a5 5 0 0 0-5-5zM45 12.18V5a1 1 0 0 0-.37-.78l-5-4A1 1 0 0 0 39 0H26a1 1 0 0 0-1 1v11h-2v32h21a3 3 0 0 0 3-3V15a3 3 0 0 0-2-2.82zM27 2h11.65L43 5.48V12H27zm2 34h-2v-2h2zm0-4h-2v-2h2zm0-4h-2v-2h2zm6 8h-2v-2h2zm0-4h-2v-2h2zm0-4h-2v-2h2zm6 8h-2v-2h2zm0-4h-2v-2h2zm0-4h-2v-2h2zm0-7a1 1 0 0 1-1 1H28a1 1 0 0 1-1-1v-4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1z\"/>
          </svg>
          <span class=\"dcf-txt-nowrap\">402-472-9353</span>
        </dd>
        <dt class=\"dcf-sr-only\">Email</dt>
        <dd>
          <address>
            <a class=\"dcf-d-inline-block dcf-relative dcf-pl-6\" href=\"mailto:unlarts@unl.edu\">
              <svg class=\"dcf-icon dcf-icon-hang dcf-fill-current\" aria-hidden=\"true\" focusable=\"false\" fill=\"currentcolor\" fill-opacity=\".5\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
                <path d=\"M24 0a24 24 0 1 0 13.57 43.82 2 2 0 0 0-2.26-3.3A20 20 0 1 1 44 24v1.91a4.7 4.7 0 0 1-9.39 0V24a10.63 10.63 0 1 0-2.48 6.81A8.69 8.69 0 0 0 48 25.91V24A24 24 0 0 0 24 0zm0 30.61A6.61 6.61 0 1 1 30.61 24 6.62 6.62 0 0 1 24 30.61z\"/>
              </svg>unlarts@unl.edu
            </a>
          </address>
        </dd>
        <dt class=\"dcf-sr-only\">Social Media</dt>
        <dd class=\"dcf-d-inline-block dcf-pt-4 dcf-pr-3\">
          <address>
            <a class=\"dcf-d-block dcf-h-6 dcf-w-6\" href=\"http://www.facebook.com/HLCFPA\" aria-label=\"Facebook\">
              <svg class=\"dcf-h-100% dcf-w-100% dcf-fill-current\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
                <path d=\"M45.35 0H2.65A2.65 2.65 0 0 0 0 2.65v42.7A2.65 2.65 0 0 0 2.65 48h23V29.41h-6.27v-7.24h6.26v-5.34c0-6.2 3.79-9.58 9.32-9.58a51.28 51.28 0 0 1 5.59.29V14h-3.84c-3 0-3.59 1.43-3.59 3.53v4.62h7.17l-.93 7.24h-6.24V48h12.23A2.65 2.65 0 0 0 48 45.35V2.65A2.65 2.65 0 0 0 45.35 0z\"/>
              </svg>
            </a>
          </address>
        </dd>
        <dd class=\"dcf-d-inline-block dcf-pt-4 dcf-pr-3\">
          <address>
            <a class=\"dcf-d-block dcf-h-6 dcf-w-6\" href=\"https://twitter.com/UNLArts\" aria-label=\"Twitter\">
              <svg class=\"dcf-h-100% dcf-w-100% dcf-fill-current\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
                <path d=\"M15.1 43.5c18.11 0 28-15 28-28v-1.27A20 20 0 0 0 48 9.11a19.66 19.66 0 0 1-5.66 1.55 9.88 9.88 0 0 0 4.33-5.45 19.74 19.74 0 0 1-6.25 2.39 9.86 9.86 0 0 0-16.78 9A28 28 0 0 1 3.34 6.3a9.86 9.86 0 0 0 3 13.15 9.77 9.77 0 0 1-4.47-1.23v.12A9.85 9.85 0 0 0 9.82 28a9.83 9.83 0 0 1-4.45.17 9.86 9.86 0 0 0 9.2 6.83 19.76 19.76 0 0 1-12.23 4.22A20 20 0 0 1 0 39.08a27.88 27.88 0 0 0 15.1 4.42\"/>
              </svg>
            </a>
          </address>
        </dd>
        <dd class=\"dcf-d-inline-block dcf-pt-4 dcf-pr-3\">
          <address>
            <a class=\"dcf-d-block dcf-h-6 dcf-w-6\" href=\"https://www.youtube.com/playlist?list=PLF73450E01A25D4CD\" aria-label=\"YouTube\">
              <svg class=\"dcf-h-100% dcf-w-100% dcf-fill-current\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
                <path d=\"M47 12.37a6 6 0 0 0-4.25-4.27C39 7.09 24 7.09 24 7.09s-15 0-18.75 1A6 6 0 0 0 1 12.37C0 16.14 0 24 0 24s0 7.86 1 11.63a6 6 0 0 0 4.25 4.27c3.74 1 18.75 1 18.75 1s15 0 18.75-1A6 6 0 0 0 47 35.63C48 31.86 48 24 48 24s0-7.86-1-11.63zM19.09 31.14V16.86L31.64 24z\"/>
              </svg>
            </a>
          </address>
        </dd>
        <dd class=\"dcf-d-inline-block dcf-pt-4 dcf-pr-3\">
          <address>
            <a class=\"dcf-d-block dcf-h-6 dcf-w-6\" href=\"https://www.instagram.com/UNLArts/\" aria-label=\"Instagram\">
              <svg class=\"dcf-h-100% dcf-w-100% dcf-fill-current\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
                <path d=\"M24 4.33c6.41 0 7.17 0 9.7.14a13.28 13.28 0 0 1 4.46.83 7.44 7.44 0 0 1 2.76 1.79 7.44 7.44 0 0 1 1.79 2.76 13.28 13.28 0 0 1 .83 4.46c.12 2.53.14 3.29.14 9.7s0 7.17-.14 9.7a13.28 13.28 0 0 1-.83 4.46 8 8 0 0 1-4.55 4.55 13.28 13.28 0 0 1-4.46.83c-2.53.12-3.29.14-9.7.14s-7.17 0-9.7-.14a13.28 13.28 0 0 1-4.46-.83 7.44 7.44 0 0 1-2.76-1.79 7.44 7.44 0 0 1-1.79-2.76 13.28 13.28 0 0 1-.83-4.46c-.12-2.53-.14-3.29-.14-9.7s0-7.17.14-9.7a13.28 13.28 0 0 1 .83-4.46 7.44 7.44 0 0 1 1.8-2.77 7.44 7.44 0 0 1 2.76-1.79 13.28 13.28 0 0 1 4.46-.83c2.53-.12 3.29-.14 9.7-.14M24 0c-6.52 0-7.34 0-9.9.14a17.61 17.61 0 0 0-5.82 1.12A11.76 11.76 0 0 0 4 4a11.76 11.76 0 0 0-2.74 4.28 17.6 17.6 0 0 0-1.12 5.83C0 16.66 0 17.48 0 24s0 7.34.14 9.9a17.6 17.6 0 0 0 1.11 5.82A11.76 11.76 0 0 0 4 44a11.76 11.76 0 0 0 4.25 2.77 17.59 17.59 0 0 0 5.83 1.12c2.55.12 3.38.14 9.9.14s7.34 0 9.9-.14a17.56 17.56 0 0 0 5.82-1.12 12.27 12.27 0 0 0 7-7 17.59 17.59 0 0 0 1.12-5.83c.18-2.6.18-3.42.18-9.94s0-7.34-.14-9.9a17.56 17.56 0 0 0-1.12-5.82A11.76 11.76 0 0 0 44 4a11.76 11.76 0 0 0-4.25-2.77A17.6 17.6 0 0 0 33.9.15C31.34 0 30.52 0 24 0zm0 11.68A12.32 12.32 0 1 0 36.32 24 12.32 12.32 0 0 0 24 11.67zM24 32a8 8 0 1 1 8-8 8 8 0 0 1-8 8zM36.81 8.31a2.88 2.88 0 1 0 2.88 2.88 2.88 2.88 0 0 0-2.88-2.88z\"/>
              </svg>
            </a>
          </address>
        </dd>
      </dl>
    </div>
    <div class=\"dcf-txt-sm\" id=\"dcf-footer-group-2\">
      <h2 id=\"dcf-footer-group-2-heading\">Related Links</h2>
      <ul aria-labelledby=\"dcf-footer-group-2-heading\">
        <li><a href=\"#\">Inceptos Tellus Cursus</a></li>
        <li><a href=\"#\">Pellentesque Euismod</a></li>
        <li><a href=\"#\">Venenatis Cursus Aenean</a></li>
        <li><a href=\"#\">Condimentum</a></li>
        <li><a href=\"#\">Quam Nullam</a></li>
      </ul>
    </div>
  </div>
  <div class=\"unl-wdn-qa dcf-pb-4 dcf-txt-2xs\">UNL web framework and quality assurance provided by the <a href=\"https://wdn.unl.edu/\">Web Developer Network</a> &middot; <a id=\"qa-test\" href=\"https://webaudit.unl.edu/qa-test/\">QA Test</a></div>
  <div class=\"dcf-grid-halves@sm dcf-col-gap-vw dcf-ai-baseline dcf-pt-1 dcf-bt-1 dcf-bt-solid\">
    <div class=\"unl-footer-unl\">
      <a class=\"dcf-institution-title dcf-d-inline-block dcf-txt-2xs dcf-txt-decor-hover\" href=\"https://www.unl.edu/\">An Affiliate of the University of Nebraska–Lincoln</a>
    </div>
    <small class=\"dcf-txt-2xs\">Copyright 2022</small>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/includes/local/affiliate-footer.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"dcf-bleed dcf-wrapper dcf-pt-8 dcf-pb-8\">
  <div class=\"dcf-grid-halves@sm dcf-grid-fourths@md dcf-col-gap-vw dcf-row-gap-8 dcf-pb-7 dcf-lh-3\">
    <div class=\"dcf-txt-sm\" id=\"dcf-footer-group-1\">
      <h2 id=\"dcf-footer-group-1-heading\">Glenn Korff School of Music</h2>
      <dl aria-labelledby=\"dcf-footer-group-1-heading\">
        <dt class=\"dcf-sr-only\">Address</dt>
        <dd class=\"dcf-d-inline-block dcf-relative dcf-pl-6\">
          <svg class=\"dcf-icon dcf-icon-hang dcf-h-4 dcf-w-4 dcf-fill-current\" aria-hidden=\"true\" focusable=\"false\" fill-opacity=\".5\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
            <path d=\"M24 0A16 16 0 0 0 8 16c0 8.49 14.55 30.61 15.17 31.55a1 1 0 0 0 1.67 0C25.45 46.61 40 24.49 40 16A16 16 0 0 0 24 0zm0 23a7 7 0 1 1 7-7 7 7 0 0 1-7 7z\"/>
          </svg>
          <address itemscope=\"\" itemtype=\"http://schema.org/PostalAddress\" translate=\"no\">
            <a href=\"https://maps.unl.edu/WAB\">
              <span class=\"dcf-sr-only\"><span itemprop=\"name\">College of Fine and Performing Arts</span><br></span>
              <span itemprop=\"streetAddress\">102 Woods Art Building</span><br>
              <span itemprop=\"addressLocality\">Lincoln</span>, <abbr title=\"Nebraska\" itemprop=\"addressRegion\">NE</abbr> <span itemprop=\"postalCode\">68588-0144</span> <abbr class=\"dcf-d-none\" itemprop=\"addressCountry\">US</abbr>
            </a>
          </address>
        </dd>
        <dt class=\"dcf-sr-only\">Phone</dt>
        <dd>
          <a class=\"dcf-d-inline-block dcf-relative dcf-pl-6\" href=\"tel:+14024729339\">
            <svg class=\"dcf-icon dcf-icon-hang dcf-fill-current\" aria-hidden=\"true\" focusable=\"false\" fill=\"currentcolor\" fill-opacity=\".5\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
              <path d=\"M10 10h28v28H10zM10 40v3a5 5 0 0 0 5 5h18a5 5 0 0 0 5-5v-3zm14 5a2 2 0 1 1 2-2 2 2 0 0 1-2 2zM38 8V5a5 5 0 0 0-5-5H15a5 5 0 0 0-5 5v3zM19 4h10a1 1 0 1 1 0 2H19a1 1 0 0 1 0-2z\"/>
            </svg>
            <span class=\"dcf-txt-nowrap\">402-472-9339</span>
          </a>
        </dd>
        <dt class=\"dcf-sr-only\">Fax</dt>
        <dd class=\"dcf-d-inline-block dcf-relative dcf-pl-6\">
          <svg class=\"dcf-icon dcf-icon-hang dcf-fill-current\" aria-hidden=\"true\" focusable=\"false\" fill=\"currentcolor\" fill-opacity=\".5\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
            <path d=\"M1 15v26a3 3 0 0 0 3 3h1V12H4a3 3 0 0 0-3 3zM16 6h-3V1a1 1 0 0 0-2 0v5.1A5 5 0 0 0 7 11v32a5 5 0 0 0 5 5h4a5 5 0 0 0 5-5V11a5 5 0 0 0-5-5zM45 12.18V5a1 1 0 0 0-.37-.78l-5-4A1 1 0 0 0 39 0H26a1 1 0 0 0-1 1v11h-2v32h21a3 3 0 0 0 3-3V15a3 3 0 0 0-2-2.82zM27 2h11.65L43 5.48V12H27zm2 34h-2v-2h2zm0-4h-2v-2h2zm0-4h-2v-2h2zm6 8h-2v-2h2zm0-4h-2v-2h2zm0-4h-2v-2h2zm6 8h-2v-2h2zm0-4h-2v-2h2zm0-4h-2v-2h2zm0-7a1 1 0 0 1-1 1H28a1 1 0 0 1-1-1v-4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1z\"/>
          </svg>
          <span class=\"dcf-txt-nowrap\">402-472-9353</span>
        </dd>
        <dt class=\"dcf-sr-only\">Email</dt>
        <dd>
          <address>
            <a class=\"dcf-d-inline-block dcf-relative dcf-pl-6\" href=\"mailto:unlarts@unl.edu\">
              <svg class=\"dcf-icon dcf-icon-hang dcf-fill-current\" aria-hidden=\"true\" focusable=\"false\" fill=\"currentcolor\" fill-opacity=\".5\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
                <path d=\"M24 0a24 24 0 1 0 13.57 43.82 2 2 0 0 0-2.26-3.3A20 20 0 1 1 44 24v1.91a4.7 4.7 0 0 1-9.39 0V24a10.63 10.63 0 1 0-2.48 6.81A8.69 8.69 0 0 0 48 25.91V24A24 24 0 0 0 24 0zm0 30.61A6.61 6.61 0 1 1 30.61 24 6.62 6.62 0 0 1 24 30.61z\"/>
              </svg>unlarts@unl.edu
            </a>
          </address>
        </dd>
        <dt class=\"dcf-sr-only\">Social Media</dt>
        <dd class=\"dcf-d-inline-block dcf-pt-4 dcf-pr-3\">
          <address>
            <a class=\"dcf-d-block dcf-h-6 dcf-w-6\" href=\"http://www.facebook.com/HLCFPA\" aria-label=\"Facebook\">
              <svg class=\"dcf-h-100% dcf-w-100% dcf-fill-current\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
                <path d=\"M45.35 0H2.65A2.65 2.65 0 0 0 0 2.65v42.7A2.65 2.65 0 0 0 2.65 48h23V29.41h-6.27v-7.24h6.26v-5.34c0-6.2 3.79-9.58 9.32-9.58a51.28 51.28 0 0 1 5.59.29V14h-3.84c-3 0-3.59 1.43-3.59 3.53v4.62h7.17l-.93 7.24h-6.24V48h12.23A2.65 2.65 0 0 0 48 45.35V2.65A2.65 2.65 0 0 0 45.35 0z\"/>
              </svg>
            </a>
          </address>
        </dd>
        <dd class=\"dcf-d-inline-block dcf-pt-4 dcf-pr-3\">
          <address>
            <a class=\"dcf-d-block dcf-h-6 dcf-w-6\" href=\"https://twitter.com/UNLArts\" aria-label=\"Twitter\">
              <svg class=\"dcf-h-100% dcf-w-100% dcf-fill-current\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
                <path d=\"M15.1 43.5c18.11 0 28-15 28-28v-1.27A20 20 0 0 0 48 9.11a19.66 19.66 0 0 1-5.66 1.55 9.88 9.88 0 0 0 4.33-5.45 19.74 19.74 0 0 1-6.25 2.39 9.86 9.86 0 0 0-16.78 9A28 28 0 0 1 3.34 6.3a9.86 9.86 0 0 0 3 13.15 9.77 9.77 0 0 1-4.47-1.23v.12A9.85 9.85 0 0 0 9.82 28a9.83 9.83 0 0 1-4.45.17 9.86 9.86 0 0 0 9.2 6.83 19.76 19.76 0 0 1-12.23 4.22A20 20 0 0 1 0 39.08a27.88 27.88 0 0 0 15.1 4.42\"/>
              </svg>
            </a>
          </address>
        </dd>
        <dd class=\"dcf-d-inline-block dcf-pt-4 dcf-pr-3\">
          <address>
            <a class=\"dcf-d-block dcf-h-6 dcf-w-6\" href=\"https://www.youtube.com/playlist?list=PLF73450E01A25D4CD\" aria-label=\"YouTube\">
              <svg class=\"dcf-h-100% dcf-w-100% dcf-fill-current\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
                <path d=\"M47 12.37a6 6 0 0 0-4.25-4.27C39 7.09 24 7.09 24 7.09s-15 0-18.75 1A6 6 0 0 0 1 12.37C0 16.14 0 24 0 24s0 7.86 1 11.63a6 6 0 0 0 4.25 4.27c3.74 1 18.75 1 18.75 1s15 0 18.75-1A6 6 0 0 0 47 35.63C48 31.86 48 24 48 24s0-7.86-1-11.63zM19.09 31.14V16.86L31.64 24z\"/>
              </svg>
            </a>
          </address>
        </dd>
        <dd class=\"dcf-d-inline-block dcf-pt-4 dcf-pr-3\">
          <address>
            <a class=\"dcf-d-block dcf-h-6 dcf-w-6\" href=\"https://www.instagram.com/UNLArts/\" aria-label=\"Instagram\">
              <svg class=\"dcf-h-100% dcf-w-100% dcf-fill-current\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
                <path d=\"M24 4.33c6.41 0 7.17 0 9.7.14a13.28 13.28 0 0 1 4.46.83 7.44 7.44 0 0 1 2.76 1.79 7.44 7.44 0 0 1 1.79 2.76 13.28 13.28 0 0 1 .83 4.46c.12 2.53.14 3.29.14 9.7s0 7.17-.14 9.7a13.28 13.28 0 0 1-.83 4.46 8 8 0 0 1-4.55 4.55 13.28 13.28 0 0 1-4.46.83c-2.53.12-3.29.14-9.7.14s-7.17 0-9.7-.14a13.28 13.28 0 0 1-4.46-.83 7.44 7.44 0 0 1-2.76-1.79 7.44 7.44 0 0 1-1.79-2.76 13.28 13.28 0 0 1-.83-4.46c-.12-2.53-.14-3.29-.14-9.7s0-7.17.14-9.7a13.28 13.28 0 0 1 .83-4.46 7.44 7.44 0 0 1 1.8-2.77 7.44 7.44 0 0 1 2.76-1.79 13.28 13.28 0 0 1 4.46-.83c2.53-.12 3.29-.14 9.7-.14M24 0c-6.52 0-7.34 0-9.9.14a17.61 17.61 0 0 0-5.82 1.12A11.76 11.76 0 0 0 4 4a11.76 11.76 0 0 0-2.74 4.28 17.6 17.6 0 0 0-1.12 5.83C0 16.66 0 17.48 0 24s0 7.34.14 9.9a17.6 17.6 0 0 0 1.11 5.82A11.76 11.76 0 0 0 4 44a11.76 11.76 0 0 0 4.25 2.77 17.59 17.59 0 0 0 5.83 1.12c2.55.12 3.38.14 9.9.14s7.34 0 9.9-.14a17.56 17.56 0 0 0 5.82-1.12 12.27 12.27 0 0 0 7-7 17.59 17.59 0 0 0 1.12-5.83c.18-2.6.18-3.42.18-9.94s0-7.34-.14-9.9a17.56 17.56 0 0 0-1.12-5.82A11.76 11.76 0 0 0 44 4a11.76 11.76 0 0 0-4.25-2.77A17.6 17.6 0 0 0 33.9.15C31.34 0 30.52 0 24 0zm0 11.68A12.32 12.32 0 1 0 36.32 24 12.32 12.32 0 0 0 24 11.67zM24 32a8 8 0 1 1 8-8 8 8 0 0 1-8 8zM36.81 8.31a2.88 2.88 0 1 0 2.88 2.88 2.88 2.88 0 0 0-2.88-2.88z\"/>
              </svg>
            </a>
          </address>
        </dd>
      </dl>
    </div>
    <div class=\"dcf-txt-sm\" id=\"dcf-footer-group-2\">
      <h2 id=\"dcf-footer-group-2-heading\">Related Links</h2>
      <ul aria-labelledby=\"dcf-footer-group-2-heading\">
        <li><a href=\"#\">Inceptos Tellus Cursus</a></li>
        <li><a href=\"#\">Pellentesque Euismod</a></li>
        <li><a href=\"#\">Venenatis Cursus Aenean</a></li>
        <li><a href=\"#\">Condimentum</a></li>
        <li><a href=\"#\">Quam Nullam</a></li>
      </ul>
    </div>
  </div>
  <div class=\"unl-wdn-qa dcf-pb-4 dcf-txt-2xs\">UNL web framework and quality assurance provided by the <a href=\"https://wdn.unl.edu/\">Web Developer Network</a> &middot; <a id=\"qa-test\" href=\"https://webaudit.unl.edu/qa-test/\">QA Test</a></div>
  <div class=\"dcf-grid-halves@sm dcf-col-gap-vw dcf-ai-baseline dcf-pt-1 dcf-bt-1 dcf-bt-solid\">
    <div class=\"unl-footer-unl\">
      <a class=\"dcf-institution-title dcf-d-inline-block dcf-txt-2xs dcf-txt-decor-hover\" href=\"https://www.unl.edu/\">An Affiliate of the University of Nebraska–Lincoln</a>
    </div>
    <small class=\"dcf-txt-2xs\">Copyright 2022</small>
  </div>
</div>
", "wdn/templates_5.3/includes/local/affiliate-footer.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/includes/local/affiliate-footer.html");
    }
}
