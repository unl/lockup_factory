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

/* wdn/templates_5.3/examples/index.shtml */
class __TwigTemplate_7bdfed1489fc0d2a12998ee12dd92513 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/index.shtml"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/index.shtml"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"en\"><!-- InstanceBegin template=\"/Templates/debug.dwt\" codeOutsideHTMLIsLocked=\"false\" -->
<head>
  <!--#include virtual=\"/wdn/templates_5.3/includes/global/head-1.html\" -->
  <!-- InstanceBeginEditable name=\"doctitle\" -->
  <title>WDN Content Resource Examples | University of Nebraska&ndash;Lincoln</title>
  <!-- InstanceEndEditable -->
  <!--#include virtual=\"/wdn/templates_5.3/includes/global/head-2-local.html\" -->
  <!-- InstanceBeginEditable name=\"head\" -->
  <!-- Place optional header elements here -->
<link rel=\"home\" href=\"http://wdn.unl.edu\" />
<style>
.wdn-examples-grid { grid-template-columns: repeat(auto-fill, minmax(13.32em,1fr)); }
.wdn-examples-grid li { min-height: 4.21em; }

#source {
  display: none;
}

#example_code {
  font-family: monospace;
  white-space: pre-line;
}

#example.jqueryui #sortable li,
#example.jqueryui #selectable li {
  margin: 0 3px 3px 3px;
  padding: .4em;
  padding-left: 1.5em;
  list-style: none;
}

.ui-effects-transfer {
  border: 2px dotted gray;
}

#example.layouts [class^=\"wdn-col\"] {
  margin: 4px 0;
}

#example.layouts [class^=\"wdn-col\"] {
  text-align: center;
  background-clip: content-box;
  background-color: rgba(167,206,229,.5);
  margin-bottom: 1rem !important;
}
</style>
  <!-- InstanceEndEditable -->
  <!-- TemplateParam name=\"class\" type=\"text\" value=\"debug\" -->
</head>
<body class=\"debug unl\" data-version=\"5.3\">
  <!--#include virtual=\"/wdn/templates_5.3/includes/global/skip-nav.html\" -->
  <header class=\"dcf-header\" id=\"dcf-header\" role=\"banner\">
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/header-global-1.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/cta-header-1.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/visit-header-1.html\" -->
    <!-- InstanceBeginEditable name=\"headervisit\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/local/visit-local.html\" -->
    <!-- InstanceEndEditable -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/visit-header-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/apply-header-1.html\" -->
    <!-- InstanceBeginEditable name=\"headerapply\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/local/apply-local.html\" -->
    <!-- InstanceEndEditable -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/apply-header-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/give-header-1.html\" -->
    <!-- InstanceBeginEditable name=\"headergive\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/local/give-local.html\" -->
    <!-- InstanceEndEditable -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/give-header-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/cta-header-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/idm.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/search.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/header-global-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/logo-lockup-1.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/site-affiliation-1.html\" -->
    <!-- InstanceBeginEditable name=\"affiliation\" -->
    <a href=\"http://arts.unl.edu/\">Hixson-Lied College of Fine &amp; Performing Arts</a>
    <!-- InstanceEndEditable -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/site-affiliation-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/site-title-1.html\" -->
    <!-- InstanceBeginEditable name=\"titlegraphic\" -->
    <a class=\"dcf-txt-h6\" href=\"https://arts.unl.edu/music\">
      Glenn Korff School of Music
    </a>
    <!-- InstanceEndEditable -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/site-title-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/logo-lockup-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/nav-toggle-group.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/nav-menu-1.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/nav-toggle-btn.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/nav-menu-child-1.html\" -->
    <!-- InstanceBeginEditable name=\"navlinks\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/local/nav-local.html\" -->
    <!-- InstanceEndEditable -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/cta-nav-1.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/visit-nav-1.html\" -->
    <!-- InstanceBeginEditable name=\"navvisit\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/local/visit-local.html\" -->
    <!-- InstanceEndEditable -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/visit-nav-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/apply-nav-1.html\" -->
    <!-- InstanceBeginEditable name=\"navapply\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/local/apply-local.html\" -->
    <!-- InstanceEndEditable -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/apply-nav-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/give-nav-1.html\" -->
    <!-- InstanceBeginEditable name=\"navgive\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/local/give-local.html\" -->
    <!-- InstanceEndEditable -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/give-nav-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/cta-nav-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/nav-menu-child-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/nav-menu-2.html\" -->
  </header>
  <main class=\"dcf-wrapper\" id=\"dcf-main\" role=\"main\" tabindex=\"-1\">
    <div class=\"dcf-bleed\">
      <div class=\"dcf-wrapper dcf-pt-10 dcf-pb-7\">
        <div id=\"dcf-page-title\">
          <!-- InstanceBeginEditable name=\"pagetitle\" -->
          <h1>Content Resource Examples</h1>
          <!-- InstanceEndEditable -->
        </div>
      </div>
    </div>
    <!-- InstanceBeginEditable name=\"maincontentarea\" -->
    <span style=\"display:none\" id=\"show-all\">
      <button class=\"dcf-mb-6 dcf-btn dcf-btn-primary\">Show All</button>
    </span>
    <div class=\"dcf-mb-8\" id=\"examples_band\">
      <ul class=\"dcf-list-bare dcf-d-grid wdn-examples-grid dcf-col-gap-vw dcf-row-gap-4 dcf-mb-0\" id=\"examples\">
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"audioplayer.html\">Audio Player <span class=\"dcf-d-block dcf-case-reset dcf-txt-xs dcf-regular unl-ls-0 unl-dark-gray\">(mediahub.unl.edu)</span></a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"band_imagery.html\">Band Imagery</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"buttons.html\">Buttons</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"carousel.html\">Carousel</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"colorbox.html\">Colorbox</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"events.html\">Events</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"formvalidator.html\">Form Validator</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"forms.html\">Forms</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"hero.html\">Hero Content</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"idm.html\"><span class=\"dcf-txt-nowrap\"><abbr>IdM</abbr> <span class=\"dcf-case-reset dcf-txt-xs dcf-regular unl-ls-0 unl-dark-gray\">(Identity Management)</span> / </span><span class=\"dcf-txt-nowrap\"><abbr>SSO</abbr> <span class=\"dcf-case-reset dcf-txt-xs dcf-regular unl-ls-0 unl-dark-gray\">(Single Sign-On)</span></span></a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"image.html\">Images</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"infographics.html\">Infographics</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"jqueryui.html\">jQuery UI</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"notice.html\">Notice</a></li>
<!--         <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"layouts.html\">Page Layouts</a></li> -->
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"pagination.html\">Pagination</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"promo_image.html\">Promo Image <span class=\"dcf-d-block dcf-case-reset dcf-txt-xs dcf-regular unl-ls-0 unl-dark-gray\">(Text Over Image)</span></a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"quote.html\">Quotes</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"randomizer.html\">Randomizer</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"table.html\">Responsive Table</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"tabs.html\">Tabs</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"videoplayer.html\">Video Player <span class=\"dcf-d-block dcf-case-reset dcf-txt-xs dcf-regular unl-ls-0 unl-dark-gray\">(mediahub.unl.edu)</span></a></li>
      </ul>
    </div>
    <div id=\"example\"></div>
    <div class=\"dcf-mt-6 dcf-mb-8\" id=\"source\">
      <h2>Here's how you do it</h2>
      <label for=\"example_code\">Source code</label>
      <textarea class=\"dcf-w-100% dcf-overflow-auto\" id=\"example_code\" rows=\"25\" cols=\"78\"></textarea>
    </div>
    <!-- InstanceEndEditable -->
  </main>
  <footer class=\"dcf-footer\" id=\"dcf-footer\" role=\"contentinfo\">
    <!-- InstanceBeginEditable name=\"optionalfooter\" -->
    <!-- InstanceEndEditable -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/footer-global-1.html\" -->
    <!-- InstanceBeginEditable name=\"contactinfo\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/local/footer-local.html\" -->
    <!-- InstanceEndEditable -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/footer-global-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/noscript.html\" -->
  </footer>
  <!--#include virtual=\"/wdn/templates_5.3/includes/global/js-body-local.html\" -->
  <script>
    document.addEventListener('DOMContentLoaded', function(event) {
      require(['jquery', 'wdn', 'require', 'legacy', 'navigation', 'wdn_jquery'], function(\$, WDN, require, legacy, navigation) {
          /*
          navigation.fetchSiteNavigation('http://wdn.unl.edu/', function(data, textStatus) {
            if (textStatus == 'success') {
              \$(function() {
                \$('#navigation').prepend(data);
                navigation.initialize();
              });
            }
          });
          */

        \$(function() {
          var cache = { '' : ' ' },
          loadExample = function(data, url) {
            \$('#examples_band').slideUp(300);
            var \$example = \$('#example');
            var exampleClass = url.substring(0, url.indexOf('.'));
            \$example.removeClass().addClass(exampleClass).html(data);
            if (\$('.wdn-band', \$example).length) {
              \$example.addClass('wdn-band');
            }
            legacy();
            \$('#show-all').slideDown(300);
            \$('#source').show();
            \$('#example_code').attr('wrap', 'off').val(data);
          },
          returnHome = function(full) {
            \$('#show-all').slideUp(300);
            \$('#examples_band').slideDown(300).attr('tabindex', '-1').focus();

            if (full !== false) {
              \$('#example').empty();
              \$('#source').hide();
            }

            if (!!(window.history && history.pushState)) {
              history.pushState(\"\", document.title, window.location.pathname);
            }
          };

          \$('#examples a').not('.external').click(function(e){
            e.preventDefault();
            window.location.hash = \$(this).attr('href'); // this.href returns the whole URL
          });

          \$('#show-all').click(function(e) {
            returnHome(false);
          });

          require(['plugins/hashchange/jquery.hashchange'], function() {
            var lastHash;
            \$(window).bind('hashchange' ,function(e) {
              var url = location.hash.replace('#', '');
              if (!url) {
                returnHome();
              }

              if (!url.match(/\\.html\$/i) || url == lastHash) {
                return true;
              }
              lastHash = url;

              if (url && !cache[url]) {
                WDN.get('./'+url, null, function(data, textStatus) {
                  data = \$(data).filter('#example-code').html();
                  if (textStatus == 'success') {
                    cache[url] = data;
                    loadExample(data, url);
                  }
                });
              } else if (url) {
                loadExample(cache[url], url);
              }
            });

            \$(window).trigger('hashchange');
          });

          \$('#example_code').bind('keyup', function() {
            loadExample(\$('#example_code').val(), 'custom.');
          });
        });
      });
    });
  </script>
  <!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/examples/index.shtml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"no-js\" lang=\"en\"><!-- InstanceBegin template=\"/Templates/debug.dwt\" codeOutsideHTMLIsLocked=\"false\" -->
<head>
  <!--#include virtual=\"/wdn/templates_5.3/includes/global/head-1.html\" -->
  <!-- InstanceBeginEditable name=\"doctitle\" -->
  <title>WDN Content Resource Examples | University of Nebraska&ndash;Lincoln</title>
  <!-- InstanceEndEditable -->
  <!--#include virtual=\"/wdn/templates_5.3/includes/global/head-2-local.html\" -->
  <!-- InstanceBeginEditable name=\"head\" -->
  <!-- Place optional header elements here -->
<link rel=\"home\" href=\"http://wdn.unl.edu\" />
<style>
.wdn-examples-grid { grid-template-columns: repeat(auto-fill, minmax(13.32em,1fr)); }
.wdn-examples-grid li { min-height: 4.21em; }

#source {
  display: none;
}

#example_code {
  font-family: monospace;
  white-space: pre-line;
}

#example.jqueryui #sortable li,
#example.jqueryui #selectable li {
  margin: 0 3px 3px 3px;
  padding: .4em;
  padding-left: 1.5em;
  list-style: none;
}

.ui-effects-transfer {
  border: 2px dotted gray;
}

#example.layouts [class^=\"wdn-col\"] {
  margin: 4px 0;
}

#example.layouts [class^=\"wdn-col\"] {
  text-align: center;
  background-clip: content-box;
  background-color: rgba(167,206,229,.5);
  margin-bottom: 1rem !important;
}
</style>
  <!-- InstanceEndEditable -->
  <!-- TemplateParam name=\"class\" type=\"text\" value=\"debug\" -->
</head>
<body class=\"debug unl\" data-version=\"5.3\">
  <!--#include virtual=\"/wdn/templates_5.3/includes/global/skip-nav.html\" -->
  <header class=\"dcf-header\" id=\"dcf-header\" role=\"banner\">
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/header-global-1.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/cta-header-1.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/visit-header-1.html\" -->
    <!-- InstanceBeginEditable name=\"headervisit\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/local/visit-local.html\" -->
    <!-- InstanceEndEditable -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/visit-header-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/apply-header-1.html\" -->
    <!-- InstanceBeginEditable name=\"headerapply\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/local/apply-local.html\" -->
    <!-- InstanceEndEditable -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/apply-header-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/give-header-1.html\" -->
    <!-- InstanceBeginEditable name=\"headergive\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/local/give-local.html\" -->
    <!-- InstanceEndEditable -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/give-header-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/cta-header-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/idm.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/search.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/header-global-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/logo-lockup-1.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/site-affiliation-1.html\" -->
    <!-- InstanceBeginEditable name=\"affiliation\" -->
    <a href=\"http://arts.unl.edu/\">Hixson-Lied College of Fine &amp; Performing Arts</a>
    <!-- InstanceEndEditable -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/site-affiliation-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/site-title-1.html\" -->
    <!-- InstanceBeginEditable name=\"titlegraphic\" -->
    <a class=\"dcf-txt-h6\" href=\"https://arts.unl.edu/music\">
      Glenn Korff School of Music
    </a>
    <!-- InstanceEndEditable -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/site-title-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/logo-lockup-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/nav-toggle-group.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/nav-menu-1.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/nav-toggle-btn.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/nav-menu-child-1.html\" -->
    <!-- InstanceBeginEditable name=\"navlinks\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/local/nav-local.html\" -->
    <!-- InstanceEndEditable -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/cta-nav-1.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/visit-nav-1.html\" -->
    <!-- InstanceBeginEditable name=\"navvisit\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/local/visit-local.html\" -->
    <!-- InstanceEndEditable -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/visit-nav-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/apply-nav-1.html\" -->
    <!-- InstanceBeginEditable name=\"navapply\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/local/apply-local.html\" -->
    <!-- InstanceEndEditable -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/apply-nav-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/give-nav-1.html\" -->
    <!-- InstanceBeginEditable name=\"navgive\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/local/give-local.html\" -->
    <!-- InstanceEndEditable -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/give-nav-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/cta-nav-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/nav-menu-child-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/nav-menu-2.html\" -->
  </header>
  <main class=\"dcf-wrapper\" id=\"dcf-main\" role=\"main\" tabindex=\"-1\">
    <div class=\"dcf-bleed\">
      <div class=\"dcf-wrapper dcf-pt-10 dcf-pb-7\">
        <div id=\"dcf-page-title\">
          <!-- InstanceBeginEditable name=\"pagetitle\" -->
          <h1>Content Resource Examples</h1>
          <!-- InstanceEndEditable -->
        </div>
      </div>
    </div>
    <!-- InstanceBeginEditable name=\"maincontentarea\" -->
    <span style=\"display:none\" id=\"show-all\">
      <button class=\"dcf-mb-6 dcf-btn dcf-btn-primary\">Show All</button>
    </span>
    <div class=\"dcf-mb-8\" id=\"examples_band\">
      <ul class=\"dcf-list-bare dcf-d-grid wdn-examples-grid dcf-col-gap-vw dcf-row-gap-4 dcf-mb-0\" id=\"examples\">
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"audioplayer.html\">Audio Player <span class=\"dcf-d-block dcf-case-reset dcf-txt-xs dcf-regular unl-ls-0 unl-dark-gray\">(mediahub.unl.edu)</span></a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"band_imagery.html\">Band Imagery</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"buttons.html\">Buttons</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"carousel.html\">Carousel</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"colorbox.html\">Colorbox</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"events.html\">Events</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"formvalidator.html\">Form Validator</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"forms.html\">Forms</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"hero.html\">Hero Content</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"idm.html\"><span class=\"dcf-txt-nowrap\"><abbr>IdM</abbr> <span class=\"dcf-case-reset dcf-txt-xs dcf-regular unl-ls-0 unl-dark-gray\">(Identity Management)</span> / </span><span class=\"dcf-txt-nowrap\"><abbr>SSO</abbr> <span class=\"dcf-case-reset dcf-txt-xs dcf-regular unl-ls-0 unl-dark-gray\">(Single Sign-On)</span></span></a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"image.html\">Images</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"infographics.html\">Infographics</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"jqueryui.html\">jQuery UI</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"notice.html\">Notice</a></li>
<!--         <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"layouts.html\">Page Layouts</a></li> -->
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"pagination.html\">Pagination</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"promo_image.html\">Promo Image <span class=\"dcf-d-block dcf-case-reset dcf-txt-xs dcf-regular unl-ls-0 unl-dark-gray\">(Text Over Image)</span></a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"quote.html\">Quotes</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"randomizer.html\">Randomizer</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"table.html\">Responsive Table</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"tabs.html\">Tabs</a></li>
        <li class=\"dcf-mb-0\"><a class=\"dcf-d-flex dcf-flex-col dcf-ai-center dcf-jc-center dcf-h-100% dcf-btn dcf-btn-secondary\" href=\"videoplayer.html\">Video Player <span class=\"dcf-d-block dcf-case-reset dcf-txt-xs dcf-regular unl-ls-0 unl-dark-gray\">(mediahub.unl.edu)</span></a></li>
      </ul>
    </div>
    <div id=\"example\"></div>
    <div class=\"dcf-mt-6 dcf-mb-8\" id=\"source\">
      <h2>Here's how you do it</h2>
      <label for=\"example_code\">Source code</label>
      <textarea class=\"dcf-w-100% dcf-overflow-auto\" id=\"example_code\" rows=\"25\" cols=\"78\"></textarea>
    </div>
    <!-- InstanceEndEditable -->
  </main>
  <footer class=\"dcf-footer\" id=\"dcf-footer\" role=\"contentinfo\">
    <!-- InstanceBeginEditable name=\"optionalfooter\" -->
    <!-- InstanceEndEditable -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/footer-global-1.html\" -->
    <!-- InstanceBeginEditable name=\"contactinfo\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/local/footer-local.html\" -->
    <!-- InstanceEndEditable -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/footer-global-2.html\" -->
    <!--#include virtual=\"/wdn/templates_5.3/includes/global/noscript.html\" -->
  </footer>
  <!--#include virtual=\"/wdn/templates_5.3/includes/global/js-body-local.html\" -->
  <script>
    document.addEventListener('DOMContentLoaded', function(event) {
      require(['jquery', 'wdn', 'require', 'legacy', 'navigation', 'wdn_jquery'], function(\$, WDN, require, legacy, navigation) {
          /*
          navigation.fetchSiteNavigation('http://wdn.unl.edu/', function(data, textStatus) {
            if (textStatus == 'success') {
              \$(function() {
                \$('#navigation').prepend(data);
                navigation.initialize();
              });
            }
          });
          */

        \$(function() {
          var cache = { '' : ' ' },
          loadExample = function(data, url) {
            \$('#examples_band').slideUp(300);
            var \$example = \$('#example');
            var exampleClass = url.substring(0, url.indexOf('.'));
            \$example.removeClass().addClass(exampleClass).html(data);
            if (\$('.wdn-band', \$example).length) {
              \$example.addClass('wdn-band');
            }
            legacy();
            \$('#show-all').slideDown(300);
            \$('#source').show();
            \$('#example_code').attr('wrap', 'off').val(data);
          },
          returnHome = function(full) {
            \$('#show-all').slideUp(300);
            \$('#examples_band').slideDown(300).attr('tabindex', '-1').focus();

            if (full !== false) {
              \$('#example').empty();
              \$('#source').hide();
            }

            if (!!(window.history && history.pushState)) {
              history.pushState(\"\", document.title, window.location.pathname);
            }
          };

          \$('#examples a').not('.external').click(function(e){
            e.preventDefault();
            window.location.hash = \$(this).attr('href'); // this.href returns the whole URL
          });

          \$('#show-all').click(function(e) {
            returnHome(false);
          });

          require(['plugins/hashchange/jquery.hashchange'], function() {
            var lastHash;
            \$(window).bind('hashchange' ,function(e) {
              var url = location.hash.replace('#', '');
              if (!url) {
                returnHome();
              }

              if (!url.match(/\\.html\$/i) || url == lastHash) {
                return true;
              }
              lastHash = url;

              if (url && !cache[url]) {
                WDN.get('./'+url, null, function(data, textStatus) {
                  data = \$(data).filter('#example-code').html();
                  if (textStatus == 'success') {
                    cache[url] = data;
                    loadExample(data, url);
                  }
                });
              } else if (url) {
                loadExample(cache[url], url);
              }
            });

            \$(window).trigger('hashchange');
          });

          \$('#example_code').bind('keyup', function() {
            loadExample(\$('#example_code').val(), 'custom.');
          });
        });
      });
    });
  </script>
  <!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
", "wdn/templates_5.3/examples/index.shtml", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/examples/index.shtml");
    }
}
