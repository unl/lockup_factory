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

/* wdn/templates_5.3/js-src/cta-nav.babel.js */
class __TwigTemplate_07e694a36bde88b199819011b3800e01 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js-src/cta-nav.babel.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js-src/cta-nav.babel.js"));

        // line 1
        echo "define([], function() {

  let initialized = false;

  let Plugin = {
    initialize : function() {
      if (initialized) {
        return;
      }

      let ctaHeader = document.querySelector('.dcf-cta-header');
      let ctaLinks = document.querySelectorAll('.dcf-link-cta');
      let ctaButtons = document.querySelectorAll('.dcf-btn-toggle-cta');
      let ctaLists = document.querySelectorAll('.dcf-list-cta');

      if (window.matchMedia('(min-width: 56.12em)').matches) {

        // Remove fallback links
        for (let i = 0; i < ctaLinks.length; i++) {
          let ctaLink = ctaLinks[i];
          ctaLink.setAttribute('hidden', '');
        }

        // Show buttons (instead of fallback links) to toggle display of options popovers
        for (let i = 0; i < ctaButtons.length; i++) {
          let ctaButton = ctaButtons[i];
          ctaButton.removeAttribute('hidden');
        }

        // Close all popovers when Esc key is pressed
        function onKeyUp(e) {
          if (e.keyCode === 27) {
            closeAllPopovers();
          }
        }

        let toggleButtonOnClick = function() {
          if (this.getAttribute('aria-pressed') == 'true') {
            closePopover(this);
          } else {
            openPopover(this);
          }
        };

        let openButtonOnMouseover = function() {
          if (this.getAttribute('aria-pressed') == 'false') {
            openPopover(this);
          }
        };

        let openPopover = function(ctabtn) {
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

        let closePopover = function(ctabtn) {
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

        let closeAllPopovers = function() {
          for (var i = 0; i < ctaButtons.length; ++i) {
            if (ctaButtons[i].getAttribute('aria-pressed') == 'true') {
              closePopover(ctaButtons[i]);
            }
          }
        }

        // Set events for each button in CTA nav
        for (let i = 0; i < ctaButtons.length; i++) {
          ctaButtons[i].addEventListener('click', toggleButtonOnClick);
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
        return "wdn/templates_5.3/js-src/cta-nav.babel.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define([], function() {

  let initialized = false;

  let Plugin = {
    initialize : function() {
      if (initialized) {
        return;
      }

      let ctaHeader = document.querySelector('.dcf-cta-header');
      let ctaLinks = document.querySelectorAll('.dcf-link-cta');
      let ctaButtons = document.querySelectorAll('.dcf-btn-toggle-cta');
      let ctaLists = document.querySelectorAll('.dcf-list-cta');

      if (window.matchMedia('(min-width: 56.12em)').matches) {

        // Remove fallback links
        for (let i = 0; i < ctaLinks.length; i++) {
          let ctaLink = ctaLinks[i];
          ctaLink.setAttribute('hidden', '');
        }

        // Show buttons (instead of fallback links) to toggle display of options popovers
        for (let i = 0; i < ctaButtons.length; i++) {
          let ctaButton = ctaButtons[i];
          ctaButton.removeAttribute('hidden');
        }

        // Close all popovers when Esc key is pressed
        function onKeyUp(e) {
          if (e.keyCode === 27) {
            closeAllPopovers();
          }
        }

        let toggleButtonOnClick = function() {
          if (this.getAttribute('aria-pressed') == 'true') {
            closePopover(this);
          } else {
            openPopover(this);
          }
        };

        let openButtonOnMouseover = function() {
          if (this.getAttribute('aria-pressed') == 'false') {
            openPopover(this);
          }
        };

        let openPopover = function(ctabtn) {
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

        let closePopover = function(ctabtn) {
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

        let closeAllPopovers = function() {
          for (var i = 0; i < ctaButtons.length; ++i) {
            if (ctaButtons[i].getAttribute('aria-pressed') == 'true') {
              closePopover(ctaButtons[i]);
            }
          }
        }

        // Set events for each button in CTA nav
        for (let i = 0; i < ctaButtons.length; i++) {
          ctaButtons[i].addEventListener('click', toggleButtonOnClick);
        }

      }
    }
  };

  return Plugin;
});
", "wdn/templates_5.3/js-src/cta-nav.babel.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js-src/cta-nav.babel.js");
    }
}
