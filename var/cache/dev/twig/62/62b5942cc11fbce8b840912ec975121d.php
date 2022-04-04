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

/* wdn/templates_5.2/js/monthwidget.js */
class __TwigTemplate_70d87777e3dc522644befe508f34d211 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/monthwidget.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/monthwidget.js"));

        // line 1
        echo "define([
  'wdn',
  'jquery',
  'moment',
  'plugins/hoverIntent/hoverintent',
  'css!js-css/monthwidget'
], function(WDN, \$, moment) {
  var initd = true;

  var getLocalEventSettings = function() {
    var \$eventLink = \$('link[rel=events]'),
    eventParams = WDN.getPluginParam('events');

    if (\$eventLink.length) {
      return {
        href: \$eventLink[0].href,
        title: \$eventLink[0].title
      };
    }

    return eventParams || {};
  },
  container = '#monthwidget',
  defaultCal = 'https://events.unl.edu/';

  var display = function(data, config) {
    var \$container = \$(config.container);
    \$container.hide().html(data);
    \$('#prev_month', \$container).removeAttr('id').addClass('prev');
    \$('#next_month', \$container).removeAttr('id').addClass('next');

    var now = new Date(), today = now.getDate();
    var month = \$('span.monthvalue a', \$container).attr('href');
    month = month.substr(month.length - 3, 2);
    if (month.charAt(0) == '/') {
      month = month.substr(1);
    }

    var \$days = \$('tbody td', \$container).not('.prev, .next');

    if (month - 1 == now.getMonth()) {
      \$days.each(function() {
        var \$this = \$(this);
        if (\$this.text() == today) {
          \$this.addClass('today');
          return false;
        }
      });
    }

    \$days.wrapInner('<div/>');

    \$container.show();
  };

  var setup = function(config) {
    var localSettings = getLocalEventSettings(),
    defaultConfig = {
      url: localSettings.href || defaultCal,
      container: container
    },
    localConfig = \$.extend({}, defaultConfig, config);

    // ensure that the URL we are about to use is forced into an https:// protocol. (add https if it starts with //)
    if (localConfig.url && localConfig.url.match(/^\\/\\//)) {
      localConfig.url = 'https:' + localConfig.url;
    } else if (localConfig.url && localConfig.url.match(/^http:\\/\\//)) {
      localConfig.url = localConfig.url.replace('http://', 'https://');
    }

    if (localConfig.url && \$(localConfig.container).length) {
      \$.get(localConfig.url + '?monthwidget&format=hcalendar', function(data) {
        display(data, localConfig);
      });
    }
  };

  return {
    initialize : function(config) {
      \$(function() {
        setup(config);
      });
    },

    setup : setup,
  };
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/monthwidget.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define([
  'wdn',
  'jquery',
  'moment',
  'plugins/hoverIntent/hoverintent',
  'css!js-css/monthwidget'
], function(WDN, \$, moment) {
  var initd = true;

  var getLocalEventSettings = function() {
    var \$eventLink = \$('link[rel=events]'),
    eventParams = WDN.getPluginParam('events');

    if (\$eventLink.length) {
      return {
        href: \$eventLink[0].href,
        title: \$eventLink[0].title
      };
    }

    return eventParams || {};
  },
  container = '#monthwidget',
  defaultCal = 'https://events.unl.edu/';

  var display = function(data, config) {
    var \$container = \$(config.container);
    \$container.hide().html(data);
    \$('#prev_month', \$container).removeAttr('id').addClass('prev');
    \$('#next_month', \$container).removeAttr('id').addClass('next');

    var now = new Date(), today = now.getDate();
    var month = \$('span.monthvalue a', \$container).attr('href');
    month = month.substr(month.length - 3, 2);
    if (month.charAt(0) == '/') {
      month = month.substr(1);
    }

    var \$days = \$('tbody td', \$container).not('.prev, .next');

    if (month - 1 == now.getMonth()) {
      \$days.each(function() {
        var \$this = \$(this);
        if (\$this.text() == today) {
          \$this.addClass('today');
          return false;
        }
      });
    }

    \$days.wrapInner('<div/>');

    \$container.show();
  };

  var setup = function(config) {
    var localSettings = getLocalEventSettings(),
    defaultConfig = {
      url: localSettings.href || defaultCal,
      container: container
    },
    localConfig = \$.extend({}, defaultConfig, config);

    // ensure that the URL we are about to use is forced into an https:// protocol. (add https if it starts with //)
    if (localConfig.url && localConfig.url.match(/^\\/\\//)) {
      localConfig.url = 'https:' + localConfig.url;
    } else if (localConfig.url && localConfig.url.match(/^http:\\/\\//)) {
      localConfig.url = localConfig.url.replace('http://', 'https://');
    }

    if (localConfig.url && \$(localConfig.container).length) {
      \$.get(localConfig.url + '?monthwidget&format=hcalendar', function(data) {
        display(data, localConfig);
      });
    }
  };

  return {
    initialize : function(config) {
      \$(function() {
        setup(config);
      });
    },

    setup : setup,
  };
});
", "wdn/templates_5.2/js/monthwidget.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/monthwidget.js");
    }
}
