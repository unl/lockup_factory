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

/* wdn/templates_5.0/js/plugins/flatpickr/plugins/rangePlugin.js */
class __TwigTemplate_fd61c47bd3f8d0236797e483b0e22650 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/plugins/rangePlugin.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.0/js/plugins/flatpickr/plugins/rangePlugin.js"));

        // line 1
        echo "/* flatpickr v4.5.2, @license MIT */
(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() :
    typeof define === 'function' && define.amd ? define(factory) :
    (global.rangePlugin = factory());
}(this, (function () { 'use strict';

    function rangePlugin(config) {
      if (config === void 0) {
        config = {};
      }

      return function (fp) {
        var dateFormat = \"\",
            secondInput,
            _secondInputFocused,
            _prevDates;

        var createSecondInput = function createSecondInput() {
          if (config.input) {
            secondInput = config.input instanceof Element ? config.input : window.document.querySelector(config.input);
          } else {
            secondInput = fp._input.cloneNode();
            secondInput.removeAttribute(\"id\");
            secondInput._flatpickr = undefined;
          }

          if (secondInput.value) {
            var parsedDate = fp.parseDate(secondInput.value);
            if (parsedDate) fp.selectedDates.push(parsedDate);
          }

          secondInput.setAttribute(\"data-fp-omit\", \"\");

          fp._bind(secondInput, [\"focus\", \"click\"], function () {
            if (fp.selectedDates[1]) {
              fp.latestSelectedDateObj = fp.selectedDates[1];

              fp._setHoursFromDate(fp.selectedDates[1]);

              fp.jumpToDate(fp.selectedDates[1]);
            }
            _secondInputFocused = true;
            fp.isOpen = false;
            fp.open(undefined, secondInput);
          });

          fp._bind(fp._input, [\"focus\", \"click\"], function (e) {
            e.preventDefault();
            fp.isOpen = false;
            fp.open();
          });

          if (fp.config.allowInput) fp._bind(secondInput, \"keydown\", function (e) {
            if (e.key === \"Enter\") {
              fp.setDate([fp.selectedDates[0], secondInput.value], true, dateFormat);
              secondInput.click();
            }
          });
          if (!config.input) fp._input.parentNode && fp._input.parentNode.insertBefore(secondInput, fp._input.nextSibling);
        };

        var plugin = {
          onParseConfig: function onParseConfig() {
            fp.config.mode = \"range\";
            dateFormat = fp.config.altInput ? fp.config.altFormat : fp.config.dateFormat;
          },
          onReady: function onReady() {
            createSecondInput();
            fp.config.ignoredFocusElements.push(secondInput);

            if (fp.config.allowInput) {
              fp._input.removeAttribute(\"readonly\");

              secondInput.removeAttribute(\"readonly\");
            } else {
              secondInput.setAttribute(\"readonly\", \"readonly\");
            }

            fp._bind(fp._input, \"focus\", function () {
              fp.latestSelectedDateObj = fp.selectedDates[0];

              fp._setHoursFromDate(fp.selectedDates[0]);
              _secondInputFocused = false;
              fp.jumpToDate(fp.selectedDates[0]);
            });

            if (fp.config.allowInput) fp._bind(fp._input, \"keydown\", function (e) {
              if (e.key === \"Enter\") fp.setDate([fp._input.value, fp.selectedDates[1]], true, dateFormat);
            });
            fp.setDate(fp.selectedDates, false);
            plugin.onValueUpdate(fp.selectedDates);
          },
          onPreCalendarPosition: function onPreCalendarPosition() {
            if (_secondInputFocused) {
              fp._positionElement = secondInput;
              setTimeout(function () {
                fp._positionElement = fp._input;
              }, 0);
            }
          },
          onChange: function onChange() {
            if (!fp.selectedDates.length) {
              setTimeout(function () {
                if (fp.selectedDates.length) return;
                secondInput.value = \"\";
                _prevDates = [];
              }, 10);
            }

            if (_secondInputFocused) {
              setTimeout(function () {
                secondInput.focus();
              }, 0);
            }
          },
          onDestroy: function onDestroy() {
            if (!config.input) secondInput.parentNode && secondInput.parentNode.removeChild(secondInput);
          },
          onValueUpdate: function onValueUpdate(selDates) {
            if (!secondInput) return;
            _prevDates = !_prevDates || selDates.length >= _prevDates.length ? selDates.concat() : _prevDates;

            if (_prevDates.length > selDates.length) {
              var newSelectedDate = selDates[0];
              var newDates = _secondInputFocused ? [_prevDates[0], newSelectedDate] : [newSelectedDate, _prevDates[1]];
              fp.setDate(newDates, false);
              _prevDates = newDates.concat();
            }

            var _fp\$selectedDates\$map = fp.selectedDates.map(function (d) {
              return fp.formatDate(d, dateFormat);
            });

            var _fp\$selectedDates\$map2 = _fp\$selectedDates\$map[0];
            fp._input.value = _fp\$selectedDates\$map2 === void 0 ? \"\" : _fp\$selectedDates\$map2;
            var _fp\$selectedDates\$map3 = _fp\$selectedDates\$map[1];
            secondInput.value = _fp\$selectedDates\$map3 === void 0 ? \"\" : _fp\$selectedDates\$map3;
          }
        };
        return plugin;
      };
    }

    return rangePlugin;

})));
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.0/js/plugins/flatpickr/plugins/rangePlugin.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/* flatpickr v4.5.2, @license MIT */
(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() :
    typeof define === 'function' && define.amd ? define(factory) :
    (global.rangePlugin = factory());
}(this, (function () { 'use strict';

    function rangePlugin(config) {
      if (config === void 0) {
        config = {};
      }

      return function (fp) {
        var dateFormat = \"\",
            secondInput,
            _secondInputFocused,
            _prevDates;

        var createSecondInput = function createSecondInput() {
          if (config.input) {
            secondInput = config.input instanceof Element ? config.input : window.document.querySelector(config.input);
          } else {
            secondInput = fp._input.cloneNode();
            secondInput.removeAttribute(\"id\");
            secondInput._flatpickr = undefined;
          }

          if (secondInput.value) {
            var parsedDate = fp.parseDate(secondInput.value);
            if (parsedDate) fp.selectedDates.push(parsedDate);
          }

          secondInput.setAttribute(\"data-fp-omit\", \"\");

          fp._bind(secondInput, [\"focus\", \"click\"], function () {
            if (fp.selectedDates[1]) {
              fp.latestSelectedDateObj = fp.selectedDates[1];

              fp._setHoursFromDate(fp.selectedDates[1]);

              fp.jumpToDate(fp.selectedDates[1]);
            }
            _secondInputFocused = true;
            fp.isOpen = false;
            fp.open(undefined, secondInput);
          });

          fp._bind(fp._input, [\"focus\", \"click\"], function (e) {
            e.preventDefault();
            fp.isOpen = false;
            fp.open();
          });

          if (fp.config.allowInput) fp._bind(secondInput, \"keydown\", function (e) {
            if (e.key === \"Enter\") {
              fp.setDate([fp.selectedDates[0], secondInput.value], true, dateFormat);
              secondInput.click();
            }
          });
          if (!config.input) fp._input.parentNode && fp._input.parentNode.insertBefore(secondInput, fp._input.nextSibling);
        };

        var plugin = {
          onParseConfig: function onParseConfig() {
            fp.config.mode = \"range\";
            dateFormat = fp.config.altInput ? fp.config.altFormat : fp.config.dateFormat;
          },
          onReady: function onReady() {
            createSecondInput();
            fp.config.ignoredFocusElements.push(secondInput);

            if (fp.config.allowInput) {
              fp._input.removeAttribute(\"readonly\");

              secondInput.removeAttribute(\"readonly\");
            } else {
              secondInput.setAttribute(\"readonly\", \"readonly\");
            }

            fp._bind(fp._input, \"focus\", function () {
              fp.latestSelectedDateObj = fp.selectedDates[0];

              fp._setHoursFromDate(fp.selectedDates[0]);
              _secondInputFocused = false;
              fp.jumpToDate(fp.selectedDates[0]);
            });

            if (fp.config.allowInput) fp._bind(fp._input, \"keydown\", function (e) {
              if (e.key === \"Enter\") fp.setDate([fp._input.value, fp.selectedDates[1]], true, dateFormat);
            });
            fp.setDate(fp.selectedDates, false);
            plugin.onValueUpdate(fp.selectedDates);
          },
          onPreCalendarPosition: function onPreCalendarPosition() {
            if (_secondInputFocused) {
              fp._positionElement = secondInput;
              setTimeout(function () {
                fp._positionElement = fp._input;
              }, 0);
            }
          },
          onChange: function onChange() {
            if (!fp.selectedDates.length) {
              setTimeout(function () {
                if (fp.selectedDates.length) return;
                secondInput.value = \"\";
                _prevDates = [];
              }, 10);
            }

            if (_secondInputFocused) {
              setTimeout(function () {
                secondInput.focus();
              }, 0);
            }
          },
          onDestroy: function onDestroy() {
            if (!config.input) secondInput.parentNode && secondInput.parentNode.removeChild(secondInput);
          },
          onValueUpdate: function onValueUpdate(selDates) {
            if (!secondInput) return;
            _prevDates = !_prevDates || selDates.length >= _prevDates.length ? selDates.concat() : _prevDates;

            if (_prevDates.length > selDates.length) {
              var newSelectedDate = selDates[0];
              var newDates = _secondInputFocused ? [_prevDates[0], newSelectedDate] : [newSelectedDate, _prevDates[1]];
              fp.setDate(newDates, false);
              _prevDates = newDates.concat();
            }

            var _fp\$selectedDates\$map = fp.selectedDates.map(function (d) {
              return fp.formatDate(d, dateFormat);
            });

            var _fp\$selectedDates\$map2 = _fp\$selectedDates\$map[0];
            fp._input.value = _fp\$selectedDates\$map2 === void 0 ? \"\" : _fp\$selectedDates\$map2;
            var _fp\$selectedDates\$map3 = _fp\$selectedDates\$map[1];
            secondInput.value = _fp\$selectedDates\$map3 === void 0 ? \"\" : _fp\$selectedDates\$map3;
          }
        };
        return plugin;
      };
    }

    return rangePlugin;

})));
", "wdn/templates_5.0/js/plugins/flatpickr/plugins/rangePlugin.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.0/js/plugins/flatpickr/plugins/rangePlugin.js");
    }
}
