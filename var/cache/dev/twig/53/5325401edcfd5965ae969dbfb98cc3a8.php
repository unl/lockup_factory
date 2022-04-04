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

/* wdn/templates_4.1/scripts/compressed/plugins/placeholder/jquery.placeholder.js.src.js */
class __TwigTemplate_2c9e44391628730299b17cd6dc597e3d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/plugins/placeholder/jquery.placeholder.js.src.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/plugins/placeholder/jquery.placeholder.js.src.js"));

        // line 1
        echo "/*! http://mths.be/placeholder v2.1.2 by @mathias */
(function(factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD
        define(['jquery'], factory);
    } else if (typeof module === 'object' && module.exports) {
        factory(require('jquery'));
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function(\$) {

    // Opera Mini v7 doesn't support placeholder although its DOM seems to indicate so
    var isOperaMini = Object.prototype.toString.call(window.operamini) === '[object OperaMini]';
    var isInputSupported = 'placeholder' in document.createElement('input') && !isOperaMini;
    var isTextareaSupported = 'placeholder' in document.createElement('textarea') && !isOperaMini;
    var valHooks = \$.valHooks;
    var propHooks = \$.propHooks;
    var hooks;
    var placeholder;
    var settings = {};

    if (isInputSupported && isTextareaSupported) {

        placeholder = \$.fn.placeholder = function() {
            return this;
        };

        placeholder.input = true;
        placeholder.textarea = true;

    } else {

        placeholder = \$.fn.placeholder = function(options) {

            var defaults = {customClass: 'placeholder'};
            settings = \$.extend({}, defaults, options);

            return this.filter((isInputSupported ? 'textarea' : ':input') + '[placeholder]')
                .not('.'+settings.customClass)
                .bind({
                    'focus.placeholder': clearPlaceholder,
                    'blur.placeholder': setPlaceholder
                })
                .data('placeholder-enabled', true)
                .trigger('blur.placeholder');
        };

        placeholder.input = isInputSupported;
        placeholder.textarea = isTextareaSupported;

        hooks = {
            'get': function(element) {

                var \$element = \$(element);
                var \$passwordInput = \$element.data('placeholder-password');

                if (\$passwordInput) {
                    return \$passwordInput[0].value;
                }

                return \$element.data('placeholder-enabled') && \$element.hasClass(settings.customClass) ? '' : element.value;
            },
            'set': function(element, value) {

                var \$element = \$(element);
                var \$replacement;
                var \$passwordInput;

                if (value !== '') {

                    \$replacement = \$element.data('placeholder-textinput');
                    \$passwordInput = \$element.data('placeholder-password');

                    if (\$replacement) {
                        clearPlaceholder.call(\$replacement[0], true, value) || (element.value = value);
                        \$replacement[0].value = value;

                    } else if (\$passwordInput) {
                        clearPlaceholder.call(element, true, value) || (\$passwordInput[0].value = value);
                        element.value = value;
                    }
                }

                if (!\$element.data('placeholder-enabled')) {
                    element.value = value;
                    return \$element;
                }

                if (value === '') {
                    
                    element.value = value;
                    
                    // Setting the placeholder causes problems if the element continues to have focus.
                    if (element != safeActiveElement()) {
                        // We can't use `triggerHandler` here because of dummy text/password inputs :(
                        setPlaceholder.call(element);
                    }

                } else {
                    
                    if (\$element.hasClass(settings.customClass)) {
                        clearPlaceholder.call(element);
                    }

                    element.value = value;
                }
                // `set` can not return `undefined`; see http://jsapi.info/jquery/1.7.1/val#L2363
                return \$element;
            }
        };

        if (!isInputSupported) {
            valHooks.input = hooks;
            propHooks.value = hooks;
        }

        if (!isTextareaSupported) {
            valHooks.textarea = hooks;
            propHooks.value = hooks;
        }

        \$(function() {
            // Look for forms
            \$(document).delegate('form', 'submit.placeholder', function() {
                
                // Clear the placeholder values so they don't get submitted
                var \$inputs = \$('.'+settings.customClass, this).each(function() {
                    clearPlaceholder.call(this, true, '');
                });

                setTimeout(function() {
                    \$inputs.each(setPlaceholder);
                }, 10);
            });
        });

        // Clear placeholder values upon page reload
        \$(window).bind('beforeunload.placeholder', function() {
            \$('.'+settings.customClass).each(function() {
                this.value = '';
            });
        });
    }

    function args(elem) {
        // Return an object of element attributes
        var newAttrs = {};
        var rinlinejQuery = /^jQuery\\d+\$/;

        \$.each(elem.attributes, function(i, attr) {
            if (attr.specified && !rinlinejQuery.test(attr.name)) {
                newAttrs[attr.name] = attr.value;
            }
        });

        return newAttrs;
    }

    function clearPlaceholder(event, value) {
        
        var input = this;
        var \$input = \$(input);
        
        if (input.value === \$input.attr('placeholder') && \$input.hasClass(settings.customClass)) {
            
            input.value = '';
            \$input.removeClass(settings.customClass);

            if (\$input.data('placeholder-password')) {

                \$input = \$input.hide().nextAll('input[type=\"password\"]:first').show().attr('id', \$input.removeAttr('id').data('placeholder-id'));
                
                // If `clearPlaceholder` was called from `\$.valHooks.input.set`
                if (event === true) {
                    \$input[0].value = value;

                    return value;
                }

                \$input.focus();

            } else {
                input == safeActiveElement() && input.select();
            }
        }
    }

    function setPlaceholder(event) {
        var \$replacement;
        var input = this;
        var \$input = \$(input);
        var id = input.id;

        // If the placeholder is activated, triggering blur event (`\$input.trigger('blur')`) should do nothing.
        if (event && event.type === 'blur') {
            
            if (\$input.hasClass(settings.customClass)) {
                return;
            }

            if (input.type === 'password') {
                \$replacement = \$input.prevAll('input[type=\"text\"]:first');
                if (\$replacement.length > 0 && \$replacement.is(':visible')) {
                    return;
                }
            }
        }

        if (input.value === '') {
            if (input.type === 'password') {
                if (!\$input.data('placeholder-textinput')) {
                    
                    try {
                        \$replacement = \$input.clone().prop({ 'type': 'text' });
                    } catch(e) {
                        \$replacement = \$('<input>').attr(\$.extend(args(this), { 'type': 'text' }));
                    }

                    \$replacement
                        .removeAttr('name')
                        .data({
                            'placeholder-enabled': true,
                            'placeholder-password': \$input,
                            'placeholder-id': id
                        })
                        .bind('focus.placeholder', clearPlaceholder);

                    \$input
                        .data({
                            'placeholder-textinput': \$replacement,
                            'placeholder-id': id
                        })
                        .before(\$replacement);
                }

                input.value = '';
                \$input = \$input.removeAttr('id').hide().prevAll('input[type=\"text\"]:first').attr('id', \$input.data('placeholder-id')).show();

            } else {
                
                var \$passwordInput = \$input.data('placeholder-password');

                if (\$passwordInput) {
                    \$passwordInput[0].value = '';
                    \$input.attr('id', \$input.data('placeholder-id')).show().nextAll('input[type=\"password\"]:last').hide().removeAttr('id');
                }
            }

            \$input.addClass(settings.customClass);
            \$input[0].value = \$input.attr('placeholder');

        } else {
            \$input.removeClass(settings.customClass);
        }
    }

    function safeActiveElement() {
        // Avoid IE9 `document.activeElement` of death
        try {
            return document.activeElement;
        } catch (exception) {}
    }
}));";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/plugins/placeholder/jquery.placeholder.js.src.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/*! http://mths.be/placeholder v2.1.2 by @mathias */
(function(factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD
        define(['jquery'], factory);
    } else if (typeof module === 'object' && module.exports) {
        factory(require('jquery'));
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function(\$) {

    // Opera Mini v7 doesn't support placeholder although its DOM seems to indicate so
    var isOperaMini = Object.prototype.toString.call(window.operamini) === '[object OperaMini]';
    var isInputSupported = 'placeholder' in document.createElement('input') && !isOperaMini;
    var isTextareaSupported = 'placeholder' in document.createElement('textarea') && !isOperaMini;
    var valHooks = \$.valHooks;
    var propHooks = \$.propHooks;
    var hooks;
    var placeholder;
    var settings = {};

    if (isInputSupported && isTextareaSupported) {

        placeholder = \$.fn.placeholder = function() {
            return this;
        };

        placeholder.input = true;
        placeholder.textarea = true;

    } else {

        placeholder = \$.fn.placeholder = function(options) {

            var defaults = {customClass: 'placeholder'};
            settings = \$.extend({}, defaults, options);

            return this.filter((isInputSupported ? 'textarea' : ':input') + '[placeholder]')
                .not('.'+settings.customClass)
                .bind({
                    'focus.placeholder': clearPlaceholder,
                    'blur.placeholder': setPlaceholder
                })
                .data('placeholder-enabled', true)
                .trigger('blur.placeholder');
        };

        placeholder.input = isInputSupported;
        placeholder.textarea = isTextareaSupported;

        hooks = {
            'get': function(element) {

                var \$element = \$(element);
                var \$passwordInput = \$element.data('placeholder-password');

                if (\$passwordInput) {
                    return \$passwordInput[0].value;
                }

                return \$element.data('placeholder-enabled') && \$element.hasClass(settings.customClass) ? '' : element.value;
            },
            'set': function(element, value) {

                var \$element = \$(element);
                var \$replacement;
                var \$passwordInput;

                if (value !== '') {

                    \$replacement = \$element.data('placeholder-textinput');
                    \$passwordInput = \$element.data('placeholder-password');

                    if (\$replacement) {
                        clearPlaceholder.call(\$replacement[0], true, value) || (element.value = value);
                        \$replacement[0].value = value;

                    } else if (\$passwordInput) {
                        clearPlaceholder.call(element, true, value) || (\$passwordInput[0].value = value);
                        element.value = value;
                    }
                }

                if (!\$element.data('placeholder-enabled')) {
                    element.value = value;
                    return \$element;
                }

                if (value === '') {
                    
                    element.value = value;
                    
                    // Setting the placeholder causes problems if the element continues to have focus.
                    if (element != safeActiveElement()) {
                        // We can't use `triggerHandler` here because of dummy text/password inputs :(
                        setPlaceholder.call(element);
                    }

                } else {
                    
                    if (\$element.hasClass(settings.customClass)) {
                        clearPlaceholder.call(element);
                    }

                    element.value = value;
                }
                // `set` can not return `undefined`; see http://jsapi.info/jquery/1.7.1/val#L2363
                return \$element;
            }
        };

        if (!isInputSupported) {
            valHooks.input = hooks;
            propHooks.value = hooks;
        }

        if (!isTextareaSupported) {
            valHooks.textarea = hooks;
            propHooks.value = hooks;
        }

        \$(function() {
            // Look for forms
            \$(document).delegate('form', 'submit.placeholder', function() {
                
                // Clear the placeholder values so they don't get submitted
                var \$inputs = \$('.'+settings.customClass, this).each(function() {
                    clearPlaceholder.call(this, true, '');
                });

                setTimeout(function() {
                    \$inputs.each(setPlaceholder);
                }, 10);
            });
        });

        // Clear placeholder values upon page reload
        \$(window).bind('beforeunload.placeholder', function() {
            \$('.'+settings.customClass).each(function() {
                this.value = '';
            });
        });
    }

    function args(elem) {
        // Return an object of element attributes
        var newAttrs = {};
        var rinlinejQuery = /^jQuery\\d+\$/;

        \$.each(elem.attributes, function(i, attr) {
            if (attr.specified && !rinlinejQuery.test(attr.name)) {
                newAttrs[attr.name] = attr.value;
            }
        });

        return newAttrs;
    }

    function clearPlaceholder(event, value) {
        
        var input = this;
        var \$input = \$(input);
        
        if (input.value === \$input.attr('placeholder') && \$input.hasClass(settings.customClass)) {
            
            input.value = '';
            \$input.removeClass(settings.customClass);

            if (\$input.data('placeholder-password')) {

                \$input = \$input.hide().nextAll('input[type=\"password\"]:first').show().attr('id', \$input.removeAttr('id').data('placeholder-id'));
                
                // If `clearPlaceholder` was called from `\$.valHooks.input.set`
                if (event === true) {
                    \$input[0].value = value;

                    return value;
                }

                \$input.focus();

            } else {
                input == safeActiveElement() && input.select();
            }
        }
    }

    function setPlaceholder(event) {
        var \$replacement;
        var input = this;
        var \$input = \$(input);
        var id = input.id;

        // If the placeholder is activated, triggering blur event (`\$input.trigger('blur')`) should do nothing.
        if (event && event.type === 'blur') {
            
            if (\$input.hasClass(settings.customClass)) {
                return;
            }

            if (input.type === 'password') {
                \$replacement = \$input.prevAll('input[type=\"text\"]:first');
                if (\$replacement.length > 0 && \$replacement.is(':visible')) {
                    return;
                }
            }
        }

        if (input.value === '') {
            if (input.type === 'password') {
                if (!\$input.data('placeholder-textinput')) {
                    
                    try {
                        \$replacement = \$input.clone().prop({ 'type': 'text' });
                    } catch(e) {
                        \$replacement = \$('<input>').attr(\$.extend(args(this), { 'type': 'text' }));
                    }

                    \$replacement
                        .removeAttr('name')
                        .data({
                            'placeholder-enabled': true,
                            'placeholder-password': \$input,
                            'placeholder-id': id
                        })
                        .bind('focus.placeholder', clearPlaceholder);

                    \$input
                        .data({
                            'placeholder-textinput': \$replacement,
                            'placeholder-id': id
                        })
                        .before(\$replacement);
                }

                input.value = '';
                \$input = \$input.removeAttr('id').hide().prevAll('input[type=\"text\"]:first').attr('id', \$input.data('placeholder-id')).show();

            } else {
                
                var \$passwordInput = \$input.data('placeholder-password');

                if (\$passwordInput) {
                    \$passwordInput[0].value = '';
                    \$input.attr('id', \$input.data('placeholder-id')).show().nextAll('input[type=\"password\"]:last').hide().removeAttr('id');
                }
            }

            \$input.addClass(settings.customClass);
            \$input[0].value = \$input.attr('placeholder');

        } else {
            \$input.removeClass(settings.customClass);
        }
    }

    function safeActiveElement() {
        // Avoid IE9 `document.activeElement` of death
        try {
            return document.activeElement;
        } catch (exception) {}
    }
}));", "wdn/templates_4.1/scripts/compressed/plugins/placeholder/jquery.placeholder.js.src.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/plugins/placeholder/jquery.placeholder.js.src.js");
    }
}
