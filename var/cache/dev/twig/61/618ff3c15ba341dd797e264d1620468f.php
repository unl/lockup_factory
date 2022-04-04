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

/* wdn/templates_5.3/js/cta-nav.js */
class __TwigTemplate_eb4e111acdb54670f08278db088a61e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/cta-nav.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/cta-nav.js"));

        // line 1
        echo "\"use strict\";

define([], function () {
  var initialized = false;
  var Plugin = {
    initialize: function initialize() {
      if (initialized) {
        return;
      }

      var ctaHeader = document.querySelector('.dcf-cta-header');
      var ctaLinks = document.querySelectorAll('.dcf-link-cta');
      var ctaButtons = document.querySelectorAll('.dcf-btn-toggle-cta');
      var ctaLists = document.querySelectorAll('.dcf-list-cta');

      if (window.matchMedia('(min-width: 56.12em)').matches) {
        // Close all popovers when Esc key is pressed
        var onKeyUp = function onKeyUp(e) {
          if (e.keyCode === 27) {
            closeAllPopovers();
          }
        };

        // Remove fallback links
        for (var i = 0; i < ctaLinks.length; i++) {
          var ctaLink = ctaLinks[i];
          ctaLink.setAttribute('hidden', '');
        } // Show buttons (instead of fallback links) to toggle display of options popovers


        for (var _i = 0; _i < ctaButtons.length; _i++) {
          var ctaButton = ctaButtons[_i];
          ctaButton.removeAttribute('hidden');
        }

        var toggleButtonOnClick = function toggleButtonOnClick() {
          if (this.getAttribute('aria-pressed') == 'true') {
            closePopover(this);
          } else {
            openPopover(this);
          }
        };

        var openButtonOnMouseover = function openButtonOnMouseover() {
          if (this.getAttribute('aria-pressed') == 'false') {
            openPopover(this);
          }
        };

        var openPopover = function openPopover(ctabtn) {
          if (ctabtn.getAttribute('aria-pressed') == 'true') {
            // already open
            return;
          }

          closeAllPopovers();
          ctabtn.setAttribute('aria-pressed', 'true');
          ctabtn.nextElementSibling.setAttribute('aria-expanded', 'true');
          ctabtn.nextElementSibling.removeAttribute('hidden');
          ctabtn.focus();
          document.addEventListener('keyup', onKeyUp);
        };

        var closePopover = function closePopover(ctabtn) {
          if (ctabtn.getAttribute('aria-pressed') == 'false') {
            // already closed
            return;
          }

          ctabtn.setAttribute('aria-pressed', 'false');
          ctabtn.nextElementSibling.setAttribute('aria-expanded', 'false');
          ctabtn.nextElementSibling.setAttribute('hidden', '');
          ctabtn.focus();
          document.removeEventListener('keyup', onKeyUp);
        };

        var closeAllPopovers = function closeAllPopovers() {
          for (var i = 0; i < ctaButtons.length; ++i) {
            if (ctaButtons[i].getAttribute('aria-pressed') == 'true') {
              closePopover(ctaButtons[i]);
            }
          }
        }; // Set events for each button in CTA nav


        for (var _i2 = 0; _i2 < ctaButtons.length; _i2++) {
          ctaButtons[_i2].addEventListener('click', toggleButtonOnClick);
        }
      }
    }
  };
  return Plugin;
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/cta-nav.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\"use strict\";

define([], function () {
  var initialized = false;
  var Plugin = {
    initialize: function initialize() {
      if (initialized) {
        return;
      }

      var ctaHeader = document.querySelector('.dcf-cta-header');
      var ctaLinks = document.querySelectorAll('.dcf-link-cta');
      var ctaButtons = document.querySelectorAll('.dcf-btn-toggle-cta');
      var ctaLists = document.querySelectorAll('.dcf-list-cta');

      if (window.matchMedia('(min-width: 56.12em)').matches) {
        // Close all popovers when Esc key is pressed
        var onKeyUp = function onKeyUp(e) {
          if (e.keyCode === 27) {
            closeAllPopovers();
          }
        };

        // Remove fallback links
        for (var i = 0; i < ctaLinks.length; i++) {
          var ctaLink = ctaLinks[i];
          ctaLink.setAttribute('hidden', '');
        } // Show buttons (instead of fallback links) to toggle display of options popovers


        for (var _i = 0; _i < ctaButtons.length; _i++) {
          var ctaButton = ctaButtons[_i];
          ctaButton.removeAttribute('hidden');
        }

        var toggleButtonOnClick = function toggleButtonOnClick() {
          if (this.getAttribute('aria-pressed') == 'true') {
            closePopover(this);
          } else {
            openPopover(this);
          }
        };

        var openButtonOnMouseover = function openButtonOnMouseover() {
          if (this.getAttribute('aria-pressed') == 'false') {
            openPopover(this);
          }
        };

        var openPopover = function openPopover(ctabtn) {
          if (ctabtn.getAttribute('aria-pressed') == 'true') {
            // already open
            return;
          }

          closeAllPopovers();
          ctabtn.setAttribute('aria-pressed', 'true');
          ctabtn.nextElementSibling.setAttribute('aria-expanded', 'true');
          ctabtn.nextElementSibling.removeAttribute('hidden');
          ctabtn.focus();
          document.addEventListener('keyup', onKeyUp);
        };

        var closePopover = function closePopover(ctabtn) {
          if (ctabtn.getAttribute('aria-pressed') == 'false') {
            // already closed
            return;
          }

          ctabtn.setAttribute('aria-pressed', 'false');
          ctabtn.nextElementSibling.setAttribute('aria-expanded', 'false');
          ctabtn.nextElementSibling.setAttribute('hidden', '');
          ctabtn.focus();
          document.removeEventListener('keyup', onKeyUp);
        };

        var closeAllPopovers = function closeAllPopovers() {
          for (var i = 0; i < ctaButtons.length; ++i) {
            if (ctaButtons[i].getAttribute('aria-pressed') == 'true') {
              closePopover(ctaButtons[i]);
            }
          }
        }; // Set events for each button in CTA nav


        for (var _i2 = 0; _i2 < ctaButtons.length; _i2++) {
          ctaButtons[_i2].addEventListener('click', toggleButtonOnClick);
        }
      }
    }
  };
  return Plugin;
});
", "wdn/templates_5.3/js/cta-nav.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/cta-nav.js");
    }
}
