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

/* wdn/templates_5.3/js/tabs.js */
class __TwigTemplate_4678346cedc3454e02663ea835d3a812 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/tabs.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/tabs.js"));

        // line 1
        echo "\"use strict\";

require(['dcf-tabs', 'css!js-css/tabs'], function (tabsModule) {
  var tabs = document.querySelectorAll('.dcf-tabs');
  var unlTabs = new tabsModule.DCFTabs(tabs);
  unlTabs.initialize();
});

define(['jquery', 'wdn', 'require'], function (\$, WDN, require) {
  var useHashChange = true,
      hashPlugin = 'plugins/hashchange/jquery.hashchange',
      tabSelector = 'ul.wdn_tabs',
      contentSelector = '.wdn_tabs_content',
      selected = 'selected',
      validRE = /^[a-z][\\w:\\-\\.]*\$/i,
      jq = function jq(id) {
    return '#' + id.replace(/(:|\\.)/g, '\\\\\$1');
  },
      getHashFromLink = function getHashFromLink(link) {
    var uri = link.href.split('#');

    if (!uri[1]) {
      return false;
    }

    var currentPage = window.location.href.split('#')[0],
        base = document.getElementsByTagName('base')[0];

    if (currentPage !== uri[0] && base && base.href !== uri[0]) {
      return false;
    }

    return uri[1];
  },
      getCleanHash = function getCleanHash() {
    return window.location.hash.replace('#', '');
  },
      updateInterface = function updateInterface(trig) {
    var tabs = trig.closest(tabSelector),
        curr = trig.closest('li').siblings('.' + selected),
        sibs = trig.siblings(),
        parentTabs = trig.parents('li'),
        nsel; // Remove any selected tab class

    \$('li.' + selected, tabs).removeClass(selected); // Hide any subtabs

    \$('ul', tabs).hide(); // Add the selected class to the tab (and sub-tab)

    parentTabs.addClass(selected); // Show any relevant sub-tabs

    if (sibs.length || parentTabs.length > 1) {
      if (!sibs.length) {
        sibs = trig.closest('ul');
      }

      sibs.show();
    }

    nsel = trig.closest('li').siblings('.' + selected);
    trig.trigger('tabchanged', [curr, nsel, tabs]);
  },
      firstTrig;

  var Plugin = {
    initialize: function initialize() {
      \$(function () {
        if (WDN.getPluginParam('tabs', 'useHashChange') === false) {
          useHashChange = false;
        } // Set up the event for when a tab is clicked


        var hashFromTabClick = false,
            \$tabsWithSwitch = \$(tabSelector).not('.disableSwitching');
        \$tabsWithSwitch.on('click', 'a', function () {
          //do something when a tab is clicked
          var trig = \$(this),
              hash = getHashFromLink(this);

          if (!hash) {
            return true;
          }

          updateInterface(trig);

          if (!useHashChange) {
            Plugin.displayFromHash(hash);
          } else {
            hashFromTabClick = true;

            if (getCleanHash() != hash) {
              window.location.hash = hash;
            }
          }

          return false;
        }); // If we have some tabs setup the hash stuff

        if (\$tabsWithSwitch.length) {
          var isValidTabHash = function isValidTabHash(hash) {
            return validRE.test(hash);
          },
              isTabExists = function isTabExists(hash) {
            return isValidTabHash(hash) && \$(contentSelector + ' ' + jq(hash)).length;
          },
              setupFirstHash = function setupFirstHash(hash) {
            var ignoreTabs = \$();

            if (hash) {
              ignoreTabs = \$(jq(hash)).closest(contentSelector).prev(tabSelector);
            }

            var tabs = \$tabsWithSwitch.not(ignoreTabs);

            if (!firstTrig) {
              firstTrig = [];
              tabs.each(function () {
                var selPrefix = 'li.selected';

                if (!\$(selPrefix, this).length) {
                  selPrefix = '> li';
                }

                firstTrig.push(\$(selPrefix + ':first a:first', this)[0]);
              });
              firstTrig = \$(firstTrig);
            }

            firstTrig.each(function () {
              var innerTrig = \$(this);
              var hash = getHashFromLink(this);

              if (!hash || !isValidTabHash(hash)) {
                return;
              }

              updateInterface(innerTrig);
              Plugin.displayFromHash(hash);
            });
          };

          if (useHashChange) {
            var setupHashChange = function setupHashChange() {
              var firstRun = true;
              \$(window).off('.wdn_tabs').on('hashchange.wdn_tabs', function () {
                var hash = getCleanHash();

                if (hash && !isValidTabHash(hash)) {
                  return true;
                }

                if (isTabExists(hash)) {
                  Plugin.displayFromHash(hash, firstRun || !hashFromTabClick);

                  if (firstRun) {
                    setupFirstHash(hash);
                    firstRun = false;
                  }

                  if (hashFromTabClick) {
                    hashFromTabClick = false;
                  }

                  return false; //consume this hash event
                } else if (firstRun || hash === '') {
                  setupFirstHash();
                  firstRun = false;
                  return true; //we simulated a hash event (allow others to consume);
                }
              });
              \$(window).hashchange();
            };

            if (!\$.fn.hashchange) {
              require([hashPlugin], setupHashChange);
            } else {
              setupHashChange();
            }
          } else {
            // No hashchange listener, so simulate first run
            var hash = getCleanHash();

            if (isTabExists(hash)) {
              Plugin.displayFromHash(hash, true);
            } else {
              hash = '';
            }

            setupFirstHash(hash);
          }
        }
      });
    },
    displayFromHash: function displayFromHash(hash, forceUpdate) {
      var sel = \$(jq(hash)),
          tabContents = sel.closest(contentSelector);
      tabContents.children().hide();
      sel.show().parentsUntil(contentSelector).show();
      sel.find('ul.slides').css({
        'height': 'auto'
      });

      if (forceUpdate) {
        var trig = \$(tabSelector + ' li a[href\$=\"' + jq(hash) + '\"]');

        if (trig.length) {
          updateInterface(trig.first());
          trig.get(0).scrollIntoView();
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
        return "wdn/templates_5.3/js/tabs.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\"use strict\";

require(['dcf-tabs', 'css!js-css/tabs'], function (tabsModule) {
  var tabs = document.querySelectorAll('.dcf-tabs');
  var unlTabs = new tabsModule.DCFTabs(tabs);
  unlTabs.initialize();
});

define(['jquery', 'wdn', 'require'], function (\$, WDN, require) {
  var useHashChange = true,
      hashPlugin = 'plugins/hashchange/jquery.hashchange',
      tabSelector = 'ul.wdn_tabs',
      contentSelector = '.wdn_tabs_content',
      selected = 'selected',
      validRE = /^[a-z][\\w:\\-\\.]*\$/i,
      jq = function jq(id) {
    return '#' + id.replace(/(:|\\.)/g, '\\\\\$1');
  },
      getHashFromLink = function getHashFromLink(link) {
    var uri = link.href.split('#');

    if (!uri[1]) {
      return false;
    }

    var currentPage = window.location.href.split('#')[0],
        base = document.getElementsByTagName('base')[0];

    if (currentPage !== uri[0] && base && base.href !== uri[0]) {
      return false;
    }

    return uri[1];
  },
      getCleanHash = function getCleanHash() {
    return window.location.hash.replace('#', '');
  },
      updateInterface = function updateInterface(trig) {
    var tabs = trig.closest(tabSelector),
        curr = trig.closest('li').siblings('.' + selected),
        sibs = trig.siblings(),
        parentTabs = trig.parents('li'),
        nsel; // Remove any selected tab class

    \$('li.' + selected, tabs).removeClass(selected); // Hide any subtabs

    \$('ul', tabs).hide(); // Add the selected class to the tab (and sub-tab)

    parentTabs.addClass(selected); // Show any relevant sub-tabs

    if (sibs.length || parentTabs.length > 1) {
      if (!sibs.length) {
        sibs = trig.closest('ul');
      }

      sibs.show();
    }

    nsel = trig.closest('li').siblings('.' + selected);
    trig.trigger('tabchanged', [curr, nsel, tabs]);
  },
      firstTrig;

  var Plugin = {
    initialize: function initialize() {
      \$(function () {
        if (WDN.getPluginParam('tabs', 'useHashChange') === false) {
          useHashChange = false;
        } // Set up the event for when a tab is clicked


        var hashFromTabClick = false,
            \$tabsWithSwitch = \$(tabSelector).not('.disableSwitching');
        \$tabsWithSwitch.on('click', 'a', function () {
          //do something when a tab is clicked
          var trig = \$(this),
              hash = getHashFromLink(this);

          if (!hash) {
            return true;
          }

          updateInterface(trig);

          if (!useHashChange) {
            Plugin.displayFromHash(hash);
          } else {
            hashFromTabClick = true;

            if (getCleanHash() != hash) {
              window.location.hash = hash;
            }
          }

          return false;
        }); // If we have some tabs setup the hash stuff

        if (\$tabsWithSwitch.length) {
          var isValidTabHash = function isValidTabHash(hash) {
            return validRE.test(hash);
          },
              isTabExists = function isTabExists(hash) {
            return isValidTabHash(hash) && \$(contentSelector + ' ' + jq(hash)).length;
          },
              setupFirstHash = function setupFirstHash(hash) {
            var ignoreTabs = \$();

            if (hash) {
              ignoreTabs = \$(jq(hash)).closest(contentSelector).prev(tabSelector);
            }

            var tabs = \$tabsWithSwitch.not(ignoreTabs);

            if (!firstTrig) {
              firstTrig = [];
              tabs.each(function () {
                var selPrefix = 'li.selected';

                if (!\$(selPrefix, this).length) {
                  selPrefix = '> li';
                }

                firstTrig.push(\$(selPrefix + ':first a:first', this)[0]);
              });
              firstTrig = \$(firstTrig);
            }

            firstTrig.each(function () {
              var innerTrig = \$(this);
              var hash = getHashFromLink(this);

              if (!hash || !isValidTabHash(hash)) {
                return;
              }

              updateInterface(innerTrig);
              Plugin.displayFromHash(hash);
            });
          };

          if (useHashChange) {
            var setupHashChange = function setupHashChange() {
              var firstRun = true;
              \$(window).off('.wdn_tabs').on('hashchange.wdn_tabs', function () {
                var hash = getCleanHash();

                if (hash && !isValidTabHash(hash)) {
                  return true;
                }

                if (isTabExists(hash)) {
                  Plugin.displayFromHash(hash, firstRun || !hashFromTabClick);

                  if (firstRun) {
                    setupFirstHash(hash);
                    firstRun = false;
                  }

                  if (hashFromTabClick) {
                    hashFromTabClick = false;
                  }

                  return false; //consume this hash event
                } else if (firstRun || hash === '') {
                  setupFirstHash();
                  firstRun = false;
                  return true; //we simulated a hash event (allow others to consume);
                }
              });
              \$(window).hashchange();
            };

            if (!\$.fn.hashchange) {
              require([hashPlugin], setupHashChange);
            } else {
              setupHashChange();
            }
          } else {
            // No hashchange listener, so simulate first run
            var hash = getCleanHash();

            if (isTabExists(hash)) {
              Plugin.displayFromHash(hash, true);
            } else {
              hash = '';
            }

            setupFirstHash(hash);
          }
        }
      });
    },
    displayFromHash: function displayFromHash(hash, forceUpdate) {
      var sel = \$(jq(hash)),
          tabContents = sel.closest(contentSelector);
      tabContents.children().hide();
      sel.show().parentsUntil(contentSelector).show();
      sel.find('ul.slides').css({
        'height': 'auto'
      });

      if (forceUpdate) {
        var trig = \$(tabSelector + ' li a[href\$=\"' + jq(hash) + '\"]');

        if (trig.length) {
          updateInterface(trig.first());
          trig.get(0).scrollIntoView();
        }
      }
    }
  };
  return Plugin;
});
", "wdn/templates_5.3/js/tabs.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/tabs.js");
    }
}
