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

/* wdn/templates_5.3/includes/local/footer-local.html */
class __TwigTemplate_03464d6cad03db9009e2e7336addd795 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/local/footer-local.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/includes/local/footer-local.html"));

        // line 1
        echo "<div id=\"dcf-footer-group-1\">
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


<!--
  <ul class=\"dcf-list-bare dcf-mb-0\">
    <li class=\"dcf-list-inline-item\">
      <a class=\"dcf-d-block dcf-h-6 dcf-w-6\" href=\"https://www.facebook.com/UNLincoln\" aria-label=\"Facebook\">
        <svg class=\"dcf-h-100% dcf-w-100% dcf-fill-current\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
          <path d=\"M45.35 0H2.65A2.65 2.65 0 0 0 0 2.65v42.7A2.65 2.65 0 0 0 2.65 48h23V29.41h-6.27v-7.24h6.26v-5.34c0-6.2 3.79-9.58 9.32-9.58a51.28 51.28 0 0 1 5.59.29V14h-3.84c-3 0-3.59 1.43-3.59 3.53v4.62h7.17l-.93 7.24h-6.24V48h12.23A2.65 2.65 0 0 0 48 45.35V2.65A2.65 2.65 0 0 0 45.35 0z\"/>
        </svg>
      </a>
    </li>
    <li class=\"dcf-list-inline-item\">
      <a class=\"dcf-d-block dcf-h-6 dcf-w-6\" href=\"https://twitter.com/UNLincoln\" aria-label=\"Twitter\">
        <svg class=\"dcf-h-100% dcf-w-100% dcf-fill-current\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
          <path d=\"M15.1 43.5c18.11 0 28-15 28-28v-1.27A20 20 0 0 0 48 9.11a19.66 19.66 0 0 1-5.66 1.55 9.88 9.88 0 0 0 4.33-5.45 19.74 19.74 0 0 1-6.25 2.39 9.86 9.86 0 0 0-16.78 9A28 28 0 0 1 3.34 6.3a9.86 9.86 0 0 0 3 13.15 9.77 9.77 0 0 1-4.47-1.23v.12A9.85 9.85 0 0 0 9.82 28a9.83 9.83 0 0 1-4.45.17 9.86 9.86 0 0 0 9.2 6.83 19.76 19.76 0 0 1-12.23 4.22A20 20 0 0 1 0 39.08a27.88 27.88 0 0 0 15.1 4.42\"/>
        </svg>
      </a>
    </li>
    <li class=\"dcf-list-inline-item\">
      <a class=\"dcf-d-block dcf-h-6 dcf-w-6\" href=\"https://www.youtube.com/user/unl\" aria-label=\"YouTube\">
        <svg class=\"dcf-h-100% dcf-w-100% dcf-fill-current\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
          <path d=\"M47 12.37a6 6 0 0 0-4.25-4.27C39 7.09 24 7.09 24 7.09s-15 0-18.75 1A6 6 0 0 0 1 12.37C0 16.14 0 24 0 24s0 7.86 1 11.63a6 6 0 0 0 4.25 4.27c3.74 1 18.75 1 18.75 1s15 0 18.75-1A6 6 0 0 0 47 35.63C48 31.86 48 24 48 24s0-7.86-1-11.63zM19.09 31.14V16.86L31.64 24z\"/>
        </svg>
      </a>
    </li>
    <li class=\"dcf-list-inline-item\">
      <a class=\"dcf-d-block dcf-h-6 dcf-w-6\" href=\"https://www.instagram.com/unlincoln/\" aria-label=\"Instagram\">
        <svg class=\"dcf-h-100% dcf-w-100% dcf-fill-current\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
          <path d=\"M24 4.33c6.41 0 7.17 0 9.7.14a13.28 13.28 0 0 1 4.46.83 7.44 7.44 0 0 1 2.76 1.79 7.44 7.44 0 0 1 1.79 2.76 13.28 13.28 0 0 1 .83 4.46c.12 2.53.14 3.29.14 9.7s0 7.17-.14 9.7a13.28 13.28 0 0 1-.83 4.46 8 8 0 0 1-4.55 4.55 13.28 13.28 0 0 1-4.46.83c-2.53.12-3.29.14-9.7.14s-7.17 0-9.7-.14a13.28 13.28 0 0 1-4.46-.83 7.44 7.44 0 0 1-2.76-1.79 7.44 7.44 0 0 1-1.79-2.76 13.28 13.28 0 0 1-.83-4.46c-.12-2.53-.14-3.29-.14-9.7s0-7.17.14-9.7a13.28 13.28 0 0 1 .83-4.46 7.44 7.44 0 0 1 1.8-2.77 7.44 7.44 0 0 1 2.76-1.79 13.28 13.28 0 0 1 4.46-.83c2.53-.12 3.29-.14 9.7-.14M24 0c-6.52 0-7.34 0-9.9.14a17.61 17.61 0 0 0-5.82 1.12A11.76 11.76 0 0 0 4 4a11.76 11.76 0 0 0-2.74 4.28 17.6 17.6 0 0 0-1.12 5.83C0 16.66 0 17.48 0 24s0 7.34.14 9.9a17.6 17.6 0 0 0 1.11 5.82A11.76 11.76 0 0 0 4 44a11.76 11.76 0 0 0 4.25 2.77 17.59 17.59 0 0 0 5.83 1.12c2.55.12 3.38.14 9.9.14s7.34 0 9.9-.14a17.56 17.56 0 0 0 5.82-1.12 12.27 12.27 0 0 0 7-7 17.59 17.59 0 0 0 1.12-5.83c.18-2.6.18-3.42.18-9.94s0-7.34-.14-9.9a17.56 17.56 0 0 0-1.12-5.82A11.76 11.76 0 0 0 44 4a11.76 11.76 0 0 0-4.25-2.77A17.6 17.6 0 0 0 33.9.15C31.34 0 30.52 0 24 0zm0 11.68A12.32 12.32 0 1 0 36.32 24 12.32 12.32 0 0 0 24 11.67zM24 32a8 8 0 1 1 8-8 8 8 0 0 1-8 8zM36.81 8.31a2.88 2.88 0 1 0 2.88 2.88 2.88 2.88 0 0 0-2.88-2.88z\"/>
        </svg>
      </a>
    </li>
    <li class=\"dcf-list-inline-item\">
      <a class=\"dcf-d-block dcf-h-6 dcf-w-6\" href=\"https://www.linkedin.com/edu/school?id=18836\" aria-label=\"LinkedIn\">
        <svg class=\"dcf-h-100% dcf-w-100% dcf-fill-current\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
          <path d=\"M44.45 0H3.54A3.5 3.5 0 0 0 0 3.46v41.08A3.5 3.5 0 0 0 3.54 48h40.91A3.51 3.51 0 0 0 48 44.54V3.46A3.51 3.51 0 0 0 44.45 0zM14.24 40.9H7.11V18h7.13zm-3.56-26a4.13 4.13 0 1 1 4.13-4.13 4.13 4.13 0 0 1-4.13 4.1zm30.23 26h-7.12V29.76c0-2.66 0-6.07-3.7-6.07s-4.27 2.9-4.27 5.88V40.9h-7.11V18h6.82v3.13h.1a7.48 7.48 0 0 1 6.74-3.7c7.21 0 8.54 4.74 8.54 10.91z\"/>
        </svg>
      </a>
    </li>
    <li class=\"dcf-list-inline-item\">
      <a class=\"dcf-d-block dcf-h-6 dcf-w-6\" href=\"https://www.pinterest.com/unlincoln/boards/\" aria-label=\"Facebook\">
        <svg class=\"dcf-h-100% dcf-w-100% dcf-fill-current\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
          <path d=\"M24 0a24 24 0 0 0-8.75 46.35 23 23 0 0 1 .08-6.88l2.81-11.93a8.66 8.66 0 0 1-.71-3.54c0-3.34 1.93-5.83 4.34-5.83 2 0 3 1.54 3 3.38 0 2.06-1.31 5.14-2 8a3.48 3.48 0 0 0 3.55 4.34c4.27 0 7.54-4.5 7.54-11 0-5.75-4.13-9.76-10-9.76a10.39 10.39 0 0 0-10.8 10.38A9.34 9.34 0 0 0 14.85 29a.72.72 0 0 1 .17.69c-.18.76-.59 2.39-.67 2.72s-.35.53-.8.32c-3-1.4-4.87-5.78-4.87-9.3 0-7.57 5.5-14.52 15.86-14.52 8.33 0 14.8 5.93 14.8 13.86 0 8.27-5.22 14.93-12.45 14.93-2.43 0-4.72-1.26-5.5-2.76l-1.5 5.71a26.83 26.83 0 0 1-3 6.29A24 24 0 1 0 24 0z\"/>
        </svg>
      </a>
    </li>
    <li class=\"dcf-list-inline-item\">
      <a class=\"dcf-d-block dcf-h-6 dcf-w-6\" href=\"https://go.unl.edu/spotify/\" aria-label=\"Spotify\">
        <svg class=\"dcf-h-100% dcf-w-100% dcf-fill-current\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
          <path d=\"M24 0a24 24 0 1 0 24 24A24 24 0 0 0 24 0zm11 34.61a1.5 1.5 0 0 1-2.06.5c-5.63-3.44-12.73-4.22-21.08-2.31a1.5 1.5 0 0 1-.67-2.92c9.14-2.09 17-1.19 23.31 2.68a1.5 1.5 0 0 1 .5 2.05zm2.94-6.54a1.87 1.87 0 0 1-2.57.62c-6.45-4-16.28-5.11-23.92-2.8a1.87 1.87 0 1 1-1.09-3.58c8.72-2.64 19.55-1.36 27 3.19a1.87 1.87 0 0 1 .62 2.57zm.25-6.8c-7.74-4.59-20.5-5-27.88-2.78A2.24 2.24 0 1 1 9 14.2c8.48-2.57 22.57-2.08 31.48 3.21a2.24 2.24 0 1 1-2.29 3.86z\"/>
        </svg>
      </a>
    </li>
    <li class=\"dcf-list-inline-item\">
      <a class=\"dcf-d-block dcf-h-6 dcf-w-6\" href=\"snapchat://?u=unlincoln\" aria-label=\"Snapchat\">
        <svg class=\"dcf-h-100% dcf-w-100% dcf-fill-current\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
          <path d=\"M24.46 1.44h-.95A12.77 12.77 0 0 0 11.66 9.1c-1.06 2.39-.81 6.44-.6 9.7 0 .38 0 .78.07 1.17a1.91 1.91 0 0 1-.93.2 5.36 5.36 0 0 1-2.2-.58 1.78 1.78 0 0 0-.76-.16A2.38 2.38 0 0 0 4.89 21c-.13.69.18 1.7 2.4 2.58.2.08.44.16.7.24.92.29 2.31.73 2.68 1.62a2.13 2.13 0 0 1-.23 1.76c-.12.28-3.06 7-9.58 8.06a1 1 0 0 0-.83 1 1.34 1.34 0 0 0 .11.45c.49 1.14 2.56 2 6.32 2.57a4.67 4.67 0 0 1 .34 1.14c.08.36.16.73.28 1.13a1.11 1.11 0 0 0 1.16.85 6.05 6.05 0 0 0 1.08-.15 12.67 12.67 0 0 1 2.56-.29 11.27 11.27 0 0 1 1.83.15 8.7 8.7 0 0 1 3.4 1.89c1.71 1.21 3.65 2.58 6.59 2.58h.59c2.94 0 4.88-1.37 6.59-2.58a8.7 8.7 0 0 1 3.44-1.78 11.25 11.25 0 0 1 1.83-.15 12.75 12.75 0 0 1 2.56.27 6 6 0 0 0 1.08.13h.05a1.08 1.08 0 0 0 1.16-.85c.11-.38.19-.75.27-1.11a4.64 4.64 0 0 1 .34-1.13c3.76-.58 5.83-1.42 6.31-2.56a1.32 1.32 0 0 0 .11-.45 1 1 0 0 0-.83-1c-6.53-1.08-9.46-7.77-9.58-8.06a2.13 2.13 0 0 1-.23-1.76c.38-.89 1.76-1.33 2.68-1.62.26-.08.5-.16.7-.24 1.63-.64 2.44-1.43 2.43-2.35a2 2 0 0 0-1.46-1.68 2.67 2.67 0 0 0-1-.19 2.21 2.21 0 0 0-.92.19 5.6 5.6 0 0 1-2.07.59 1.84 1.84 0 0 1-.81-.2c0-.33 0-.67.06-1v-.14c.21-3.26.46-7.32-.6-9.71a12.79 12.79 0 0 0-11.94-7.76z\"/>
        </svg>
      </a>
    </li>
  </ul>
-->
</div>
<div id=\"dcf-footer-group-2\">
  <h2 id=\"dcf-footer-group-2-heading\">Related Links</h2>
  <ul aria-labelledby=\"dcf-footer-group-2-heading\">
    <li><a href=\"#\">Inceptos Tellus Cursus</a></li>
    <li><a href=\"#\">Pellentesque Euismod</a></li>
    <li><a href=\"#\">Venenatis Cursus Aenean</a></li>
    <li><a href=\"#\">Condimentum</a></li>
    <li><a href=\"#\">Quam Nullam</a></li>
  </ul>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/includes/local/footer-local.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"dcf-footer-group-1\">
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


<!--
  <ul class=\"dcf-list-bare dcf-mb-0\">
    <li class=\"dcf-list-inline-item\">
      <a class=\"dcf-d-block dcf-h-6 dcf-w-6\" href=\"https://www.facebook.com/UNLincoln\" aria-label=\"Facebook\">
        <svg class=\"dcf-h-100% dcf-w-100% dcf-fill-current\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
          <path d=\"M45.35 0H2.65A2.65 2.65 0 0 0 0 2.65v42.7A2.65 2.65 0 0 0 2.65 48h23V29.41h-6.27v-7.24h6.26v-5.34c0-6.2 3.79-9.58 9.32-9.58a51.28 51.28 0 0 1 5.59.29V14h-3.84c-3 0-3.59 1.43-3.59 3.53v4.62h7.17l-.93 7.24h-6.24V48h12.23A2.65 2.65 0 0 0 48 45.35V2.65A2.65 2.65 0 0 0 45.35 0z\"/>
        </svg>
      </a>
    </li>
    <li class=\"dcf-list-inline-item\">
      <a class=\"dcf-d-block dcf-h-6 dcf-w-6\" href=\"https://twitter.com/UNLincoln\" aria-label=\"Twitter\">
        <svg class=\"dcf-h-100% dcf-w-100% dcf-fill-current\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
          <path d=\"M15.1 43.5c18.11 0 28-15 28-28v-1.27A20 20 0 0 0 48 9.11a19.66 19.66 0 0 1-5.66 1.55 9.88 9.88 0 0 0 4.33-5.45 19.74 19.74 0 0 1-6.25 2.39 9.86 9.86 0 0 0-16.78 9A28 28 0 0 1 3.34 6.3a9.86 9.86 0 0 0 3 13.15 9.77 9.77 0 0 1-4.47-1.23v.12A9.85 9.85 0 0 0 9.82 28a9.83 9.83 0 0 1-4.45.17 9.86 9.86 0 0 0 9.2 6.83 19.76 19.76 0 0 1-12.23 4.22A20 20 0 0 1 0 39.08a27.88 27.88 0 0 0 15.1 4.42\"/>
        </svg>
      </a>
    </li>
    <li class=\"dcf-list-inline-item\">
      <a class=\"dcf-d-block dcf-h-6 dcf-w-6\" href=\"https://www.youtube.com/user/unl\" aria-label=\"YouTube\">
        <svg class=\"dcf-h-100% dcf-w-100% dcf-fill-current\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
          <path d=\"M47 12.37a6 6 0 0 0-4.25-4.27C39 7.09 24 7.09 24 7.09s-15 0-18.75 1A6 6 0 0 0 1 12.37C0 16.14 0 24 0 24s0 7.86 1 11.63a6 6 0 0 0 4.25 4.27c3.74 1 18.75 1 18.75 1s15 0 18.75-1A6 6 0 0 0 47 35.63C48 31.86 48 24 48 24s0-7.86-1-11.63zM19.09 31.14V16.86L31.64 24z\"/>
        </svg>
      </a>
    </li>
    <li class=\"dcf-list-inline-item\">
      <a class=\"dcf-d-block dcf-h-6 dcf-w-6\" href=\"https://www.instagram.com/unlincoln/\" aria-label=\"Instagram\">
        <svg class=\"dcf-h-100% dcf-w-100% dcf-fill-current\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
          <path d=\"M24 4.33c6.41 0 7.17 0 9.7.14a13.28 13.28 0 0 1 4.46.83 7.44 7.44 0 0 1 2.76 1.79 7.44 7.44 0 0 1 1.79 2.76 13.28 13.28 0 0 1 .83 4.46c.12 2.53.14 3.29.14 9.7s0 7.17-.14 9.7a13.28 13.28 0 0 1-.83 4.46 8 8 0 0 1-4.55 4.55 13.28 13.28 0 0 1-4.46.83c-2.53.12-3.29.14-9.7.14s-7.17 0-9.7-.14a13.28 13.28 0 0 1-4.46-.83 7.44 7.44 0 0 1-2.76-1.79 7.44 7.44 0 0 1-1.79-2.76 13.28 13.28 0 0 1-.83-4.46c-.12-2.53-.14-3.29-.14-9.7s0-7.17.14-9.7a13.28 13.28 0 0 1 .83-4.46 7.44 7.44 0 0 1 1.8-2.77 7.44 7.44 0 0 1 2.76-1.79 13.28 13.28 0 0 1 4.46-.83c2.53-.12 3.29-.14 9.7-.14M24 0c-6.52 0-7.34 0-9.9.14a17.61 17.61 0 0 0-5.82 1.12A11.76 11.76 0 0 0 4 4a11.76 11.76 0 0 0-2.74 4.28 17.6 17.6 0 0 0-1.12 5.83C0 16.66 0 17.48 0 24s0 7.34.14 9.9a17.6 17.6 0 0 0 1.11 5.82A11.76 11.76 0 0 0 4 44a11.76 11.76 0 0 0 4.25 2.77 17.59 17.59 0 0 0 5.83 1.12c2.55.12 3.38.14 9.9.14s7.34 0 9.9-.14a17.56 17.56 0 0 0 5.82-1.12 12.27 12.27 0 0 0 7-7 17.59 17.59 0 0 0 1.12-5.83c.18-2.6.18-3.42.18-9.94s0-7.34-.14-9.9a17.56 17.56 0 0 0-1.12-5.82A11.76 11.76 0 0 0 44 4a11.76 11.76 0 0 0-4.25-2.77A17.6 17.6 0 0 0 33.9.15C31.34 0 30.52 0 24 0zm0 11.68A12.32 12.32 0 1 0 36.32 24 12.32 12.32 0 0 0 24 11.67zM24 32a8 8 0 1 1 8-8 8 8 0 0 1-8 8zM36.81 8.31a2.88 2.88 0 1 0 2.88 2.88 2.88 2.88 0 0 0-2.88-2.88z\"/>
        </svg>
      </a>
    </li>
    <li class=\"dcf-list-inline-item\">
      <a class=\"dcf-d-block dcf-h-6 dcf-w-6\" href=\"https://www.linkedin.com/edu/school?id=18836\" aria-label=\"LinkedIn\">
        <svg class=\"dcf-h-100% dcf-w-100% dcf-fill-current\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
          <path d=\"M44.45 0H3.54A3.5 3.5 0 0 0 0 3.46v41.08A3.5 3.5 0 0 0 3.54 48h40.91A3.51 3.51 0 0 0 48 44.54V3.46A3.51 3.51 0 0 0 44.45 0zM14.24 40.9H7.11V18h7.13zm-3.56-26a4.13 4.13 0 1 1 4.13-4.13 4.13 4.13 0 0 1-4.13 4.1zm30.23 26h-7.12V29.76c0-2.66 0-6.07-3.7-6.07s-4.27 2.9-4.27 5.88V40.9h-7.11V18h6.82v3.13h.1a7.48 7.48 0 0 1 6.74-3.7c7.21 0 8.54 4.74 8.54 10.91z\"/>
        </svg>
      </a>
    </li>
    <li class=\"dcf-list-inline-item\">
      <a class=\"dcf-d-block dcf-h-6 dcf-w-6\" href=\"https://www.pinterest.com/unlincoln/boards/\" aria-label=\"Facebook\">
        <svg class=\"dcf-h-100% dcf-w-100% dcf-fill-current\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
          <path d=\"M24 0a24 24 0 0 0-8.75 46.35 23 23 0 0 1 .08-6.88l2.81-11.93a8.66 8.66 0 0 1-.71-3.54c0-3.34 1.93-5.83 4.34-5.83 2 0 3 1.54 3 3.38 0 2.06-1.31 5.14-2 8a3.48 3.48 0 0 0 3.55 4.34c4.27 0 7.54-4.5 7.54-11 0-5.75-4.13-9.76-10-9.76a10.39 10.39 0 0 0-10.8 10.38A9.34 9.34 0 0 0 14.85 29a.72.72 0 0 1 .17.69c-.18.76-.59 2.39-.67 2.72s-.35.53-.8.32c-3-1.4-4.87-5.78-4.87-9.3 0-7.57 5.5-14.52 15.86-14.52 8.33 0 14.8 5.93 14.8 13.86 0 8.27-5.22 14.93-12.45 14.93-2.43 0-4.72-1.26-5.5-2.76l-1.5 5.71a26.83 26.83 0 0 1-3 6.29A24 24 0 1 0 24 0z\"/>
        </svg>
      </a>
    </li>
    <li class=\"dcf-list-inline-item\">
      <a class=\"dcf-d-block dcf-h-6 dcf-w-6\" href=\"https://go.unl.edu/spotify/\" aria-label=\"Spotify\">
        <svg class=\"dcf-h-100% dcf-w-100% dcf-fill-current\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
          <path d=\"M24 0a24 24 0 1 0 24 24A24 24 0 0 0 24 0zm11 34.61a1.5 1.5 0 0 1-2.06.5c-5.63-3.44-12.73-4.22-21.08-2.31a1.5 1.5 0 0 1-.67-2.92c9.14-2.09 17-1.19 23.31 2.68a1.5 1.5 0 0 1 .5 2.05zm2.94-6.54a1.87 1.87 0 0 1-2.57.62c-6.45-4-16.28-5.11-23.92-2.8a1.87 1.87 0 1 1-1.09-3.58c8.72-2.64 19.55-1.36 27 3.19a1.87 1.87 0 0 1 .62 2.57zm.25-6.8c-7.74-4.59-20.5-5-27.88-2.78A2.24 2.24 0 1 1 9 14.2c8.48-2.57 22.57-2.08 31.48 3.21a2.24 2.24 0 1 1-2.29 3.86z\"/>
        </svg>
      </a>
    </li>
    <li class=\"dcf-list-inline-item\">
      <a class=\"dcf-d-block dcf-h-6 dcf-w-6\" href=\"snapchat://?u=unlincoln\" aria-label=\"Snapchat\">
        <svg class=\"dcf-h-100% dcf-w-100% dcf-fill-current\" focusable=\"false\" height=\"16\" width=\"16\" viewBox=\"0 0 48 48\">
          <path d=\"M24.46 1.44h-.95A12.77 12.77 0 0 0 11.66 9.1c-1.06 2.39-.81 6.44-.6 9.7 0 .38 0 .78.07 1.17a1.91 1.91 0 0 1-.93.2 5.36 5.36 0 0 1-2.2-.58 1.78 1.78 0 0 0-.76-.16A2.38 2.38 0 0 0 4.89 21c-.13.69.18 1.7 2.4 2.58.2.08.44.16.7.24.92.29 2.31.73 2.68 1.62a2.13 2.13 0 0 1-.23 1.76c-.12.28-3.06 7-9.58 8.06a1 1 0 0 0-.83 1 1.34 1.34 0 0 0 .11.45c.49 1.14 2.56 2 6.32 2.57a4.67 4.67 0 0 1 .34 1.14c.08.36.16.73.28 1.13a1.11 1.11 0 0 0 1.16.85 6.05 6.05 0 0 0 1.08-.15 12.67 12.67 0 0 1 2.56-.29 11.27 11.27 0 0 1 1.83.15 8.7 8.7 0 0 1 3.4 1.89c1.71 1.21 3.65 2.58 6.59 2.58h.59c2.94 0 4.88-1.37 6.59-2.58a8.7 8.7 0 0 1 3.44-1.78 11.25 11.25 0 0 1 1.83-.15 12.75 12.75 0 0 1 2.56.27 6 6 0 0 0 1.08.13h.05a1.08 1.08 0 0 0 1.16-.85c.11-.38.19-.75.27-1.11a4.64 4.64 0 0 1 .34-1.13c3.76-.58 5.83-1.42 6.31-2.56a1.32 1.32 0 0 0 .11-.45 1 1 0 0 0-.83-1c-6.53-1.08-9.46-7.77-9.58-8.06a2.13 2.13 0 0 1-.23-1.76c.38-.89 1.76-1.33 2.68-1.62.26-.08.5-.16.7-.24 1.63-.64 2.44-1.43 2.43-2.35a2 2 0 0 0-1.46-1.68 2.67 2.67 0 0 0-1-.19 2.21 2.21 0 0 0-.92.19 5.6 5.6 0 0 1-2.07.59 1.84 1.84 0 0 1-.81-.2c0-.33 0-.67.06-1v-.14c.21-3.26.46-7.32-.6-9.71a12.79 12.79 0 0 0-11.94-7.76z\"/>
        </svg>
      </a>
    </li>
  </ul>
-->
</div>
<div id=\"dcf-footer-group-2\">
  <h2 id=\"dcf-footer-group-2-heading\">Related Links</h2>
  <ul aria-labelledby=\"dcf-footer-group-2-heading\">
    <li><a href=\"#\">Inceptos Tellus Cursus</a></li>
    <li><a href=\"#\">Pellentesque Euismod</a></li>
    <li><a href=\"#\">Venenatis Cursus Aenean</a></li>
    <li><a href=\"#\">Condimentum</a></li>
    <li><a href=\"#\">Quam Nullam</a></li>
  </ul>
</div>
", "wdn/templates_5.3/includes/local/footer-local.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/includes/local/footer-local.html");
    }
}
