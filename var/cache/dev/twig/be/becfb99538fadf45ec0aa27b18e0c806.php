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

/* wdn/templates_5.3/js/plugins/validator/jquery.validator.js */
class __TwigTemplate_7c7624c1099d7646c4cf647f08cf8e96 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/plugins/validator/jquery.validator.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/plugins/validator/jquery.validator.js"));

        // line 1
        echo "(function(factory) {
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
\tvar version = '2.0',
\tsValidation = 'validation',
\tsDataValidation = sValidation,
\tsValidate = 'validate',
\tsInput = ':input',
\tsVisible = ':visible',
\tsChecked = ':checked',
\tsClickInput = '[type=\"radio\"], [type=\"checkbox\"]',
\tsReset = '[type=\"reset\"]',
\tsAdvice = 'advice',
\tsAdviceCnt = sAdvice + '-container',
\tsCntCls = 'input-box',
\tsReqCls = 'required-entry',
\tsPass = 'passed',
\tsFail = 'failed',
\tsError = 'error',
\tsVPassCls = sValidation + '-' + sPass,
\tsVFailCls = sValidation + '-' + sFail,
\tsVErrorCls = sValidation + '-' + sError,
\tsVAdviceCls = sValidation + '-' + sAdvice,
\tsAdvicesSel = '.' + sVAdviceCls + ' li',
\tsEvtForm = sValidate + '-form',
\tsEvtElm = sValidate + '-element',
\tsEvtUpdate = sValidate + '-update';

\tvar K = function(x) { return x; };
\tvar parseNumber = function(v) {
\t    if (typeof v != 'string') {
\t        return parseFloat(v);
\t    }

\t    var isDot  = v.indexOf('.');
\t    var isComa = v.indexOf(',');

\t    if (isDot != -1 && isComa != -1) {
\t        if (isComa > isDot) {
\t            v = v.replace('.', '').replace(',', '.');
\t        }
\t        else {
\t            v = v.replace(',', '');
\t        }
\t    }
\t    else if (isComa != -1) {
\t        v = v.replace(',', '.');
\t    }

\t    return parseFloat(v);
\t};

\t\$.all = function(collection, callback) {
\t\tvar result = true;
\t\tif (collection) {
\t\t\tcallback = callback || K;
\t\t\t\$.each(collection, function(idx, val) {
\t\t\t\tresult = result && callback(val, idx);
\t\t\t\treturn result;
\t\t\t});
\t\t}
\t\treturn result;
\t};
\t\$.any = function(collection, callback) {
\t\tvar result = false;
\t\tif (collection) {
\t\t\tcallback = callback || K;
\t\t\t\$.each(collection, function(idx, val) {
\t\t\t\tresult = callback(val, idx);
\t\t\t\treturn !result;
\t\t\t});
\t\t}
\t\treturn result;
\t};

\tvar Validator, Validation;

\tValidator = function(className, error, test, options) {
\t\tif (typeof test == 'function') {
\t\t\tthis.options = options;
\t\t\tthis._test = test;
\t\t} else {
\t\t\tthis.options = test;
\t\t\tthis._test = function() { return true; };
\t\t}
\t\tthis.error = error || 'Validation failed.';
\t};
\tValidator.prototype = {
\t\ttest : function(v, elm, suite) {
\t\t\tvar result = this._test(v, elm, suite);
\t\t\tif (result) {
\t\t\t\tresult = \$.all(this.options, function(value, key) {
\t\t\t\t\tif (Validator.methods[key]) {
\t\t\t\t\t\treturn Validator.methods[key](v, elm, value, suite);
\t\t\t\t\t}
\t\t\t\t\treturn true;
\t\t\t\t});
\t\t\t}
\t\t\treturn result;
\t\t}
\t};

\tValidator.methods = {
\t\tpattern : function(v,elm,opt) {
\t\t\treturn opt.test(v);
\t\t},
\t\tminLength : function(v,elm,opt) {
\t\t\treturn v.length >= opt;
\t\t},
\t\tmaxLength : function(v,elm,opt) {
\t\t\treturn v.length <= opt;
\t\t},
\t\tmin : function(v,elm,opt) {
\t\t\treturn v >= parseFloat(opt);
\t\t},
\t\tmax : function(v,elm,opt) {
\t\t\treturn v <= parseFloat(opt);
\t\t},
\t\tnotOneOf : function(v,elm,opt) {
\t\t\treturn \$.all(opt, function(value) {
\t\t\t\treturn v != value;
\t\t\t});
\t\t},
\t\toneOf : function(v,elm,opt) {
\t\t\treturn \$.any(opt, function(value) {
\t\t\t\treturn v == value;
\t\t\t});
\t\t},
\t\tis : function(v,elm,opt) {
\t\t\treturn v == opt;
\t\t},
\t\tisNot : function(v,elm,opt) {
\t\t\treturn v != opt;
\t\t},
\t\tequalToField : function(v,elm,opt) {
\t\t\treturn v == \$(opt).val();
\t\t},
\t\tnotEqualToField : function(v,elm,opt) {
\t\t\treturn v != \$(opt).val();
\t\t},
\t\tinclude : function(v,elm,opt,suite) {
\t\t\treturn \$.all(opt, function(value) {
\t\t\t\tif (Validation.methods[value]) {
\t\t\t\t\treturn Validation.methods[value].test(v,elm,suite);
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t}
\t};

\tValidation = function(form, options) {
\t\tthis.form = form;
\t\tif (!this.form) {
\t\t\treturn;
\t\t}
\t\tthis.options = options;

\t\tif (this.options.onSubmit) {
\t\t\tthis.form.submit(\$.proxy(this.onSubmit, this));
\t\t}

\t\tif (this.options.immediate) {
\t\t\tthis.form.on('change blur', sInput, \$.proxy(this.onChange, this));
\t\t}

\t\tif (this.options.onReset) {
\t\t\tthis.form.on('click', sReset, \$.proxy(this.reset, this));
\t\t}
\t};
\tValidation.prototype = {
\t\tonChange : function(ev) {
\t\t\tValidation.isOnChange = true;
\t\t\tvar elm = ev.target;
\t\t\tthis.resetElement(elm);
\t\t\tthis.validateField(elm);
\t\t\tValidation.isOnChange = false;
\t\t},
\t\tonSubmit : function() {
\t\t\tif (!this.validate()) {
\t\t\t\treturn false;
\t\t\t}
\t\t},
\t\tvalidate : function() {
\t\t\tvar result = false,
\t\t\tresults = [],
\t\t\tself = this;

\t\t\t\$(sAdvicesSel, this.form).hide();
\t\t\ttry {
\t\t\t\t\$(sInput, this.form).each(function() {
\t\t\t\t\tvar result = self.validateField(this);
\t\t\t\t\tresults.push(result);
\t\t\t\t\tif (self.options.stopOnFirst && !result) {
\t\t\t\t\t\treturn result;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t} catch (e) {
\t\t\t\tresults.push(false);
\t\t\t}

\t\t\tvar result = \$.all(results);
\t\t\tif (!result && this.options.focusOnError) {
\t\t\t\t\$('.' + sVFailCls, this.form).filter(sInput + sVisible).first().focus();
\t\t\t}
\t\t\tthis.form.triggerHandler(sEvtForm, [result]);

\t\t\treturn result;
\t\t},
\t\tvalidateField : function(elm) {
\t\t\tvar self = this,
\t\t\tclasslist = elm.classList || elm.className.split(/\\s+/);
\t\t\telm = \$(elm);

\t\t\tvar result = \$.all(classlist, function (item) {
\t\t\t\tif (item && Validation.methods[item]) {
\t\t\t\t\tvar test = self.validateTest(item, elm);
\t\t\t\t\telm.triggerHandler(sEvtElm, [test]);
\t\t\t\t\treturn test;
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t\treturn result;
\t\t},
\t\tvalidateTest : function(name, elm) {
\t\t\tvar v = Validation.methods[name];
\t\t\tif (elm.is(sVisible) && !v.test(elm.val(), elm, this)) {
\t\t\t\tValidation.showAdvice(name, elm, this.options);
\t\t\t\telm.triggerHandler(sEvtUpdate, [sFail]);

\t\t\t\treturn false;
\t\t\t} else {
\t\t\t\telm.triggerHandler(sEvtUpdate, [sPass]);
\t\t\t\telm.removeClass(sVFailCls).addClass(sVPassCls);
\t            if (this.options.addClassNameToContainer) {
\t            \tvar container = Validation.getContainer(elm, this.options);
\t            \tif (!\$('.' + sVFailCls, container).length) {
\t            \t\tif (\$.trim(elm.val()) || !elm.is(sVisible)) {
\t            \t\t\tcontainer.addClass(sVPassCls);
\t            \t\t} else {
\t            \t\t\tcontainer.removeClass(sVPassCls);
\t            \t\t}
\t            \t\tcontainer.removeClass(sVErrorCls);
\t            \t}
\t            }

\t            return true;
\t\t\t}
\t\t},
\t\treset : function() {
\t\t\tvar self = this;
\t\t\t\$(sInput, this.form).each(function() {
\t\t\t\tself.resetElement(this);
\t\t\t});
\t\t},
\t\tresetElement : function (elm) {
\t\t\telm = \$(elm);
\t\t\tvar advices = Validation.getAdviceContainer(elm, this.options);
\t\t\t\$(sAdvicesSel, advices).hide();
\t\t\telm.removeClass(sVFailCls);
            elm.removeClass(sVPassCls);
            if (this.options.addClassNameToContainer) {
            \tvar container = Validation.getContainer(elm, this.options);
            \tcontainer.removeClass(sVPassCls).removeClass(sVFailCls);
            }
\t\t}
\t};

\tvar tmpName = 'IsEmpty', emptyTest = tmpName, m = {};

\tm[tmpName] = new Validator(tmpName, '', function(v) {
\t\treturn \$.trim(v) === '';
\t});

\ttmpName = sReqCls;
\tm[tmpName] = new Validator(tmpName, 'This is a required field.', function(v) {
\t\treturn !m[emptyTest].test(v);
\t});

\ttmpName = sValidate + '-number';
\tm[tmpName] = new Validator(tmpName, 'Please enter a valid number in this field.', function(v) {
\t\treturn m[emptyTest].test(v) || !isNaN(parseNumber(v));
\t});

\ttmpName = sValidate + '-digits';
\tm[tmpName] = new Validator(tmpName, 'Please use numbers only in this field. please avoid spaces or other characters such as dots or commas.', function(v) {
\t\treturn m[emptyTest].test(v) ||  !/[^\\d]/.test(v);
\t});

\ttmpName = sValidate + '-alpha';
\tm[tmpName] = new Validator(tmpName, 'Please use letters only (a-z or A-Z) in this field.', function(v) {
\t\t return m[emptyTest].test(v) ||  /^[a-zA-Z]+\$/.test(v);
\t});

\ttmpName = sValidate + '-code';
\tm[tmpName] = new Validator(tmpName, 'Please use only letters (a-z), numbers (0-9) or underscore(_) in this field, first character should be a letter.', function(v) {
\t\treturn m[emptyTest].test(v) ||  /^[a-z]+[a-z0-9_]+\$/.test(v);
\t});

\ttmpName = sValidate + '-alphanum';
\tm[tmpName] = new Validator(tmpName, 'Please use only letters (a-z or A-Z) or numbers (0-9) only in this field. No spaces or other characters are allowed.', function(v) {
\t\treturn m[emptyTest].test(v) ||  /^[a-zA-Z0-9]+\$/.test(v);
\t});

\ttmpName = sValidate + '-phoneStrict';
\tm[tmpName] = new Validator(tmpName, 'Please enter a valid phone number. For example (123) 456-7890 or 123-456-7890.', function(v) {
\t\treturn m[emptyTest].test(v) || /^(\\()?\\d{3}(\\))?(-|\\s)?\\d{3}(-|\\s)\\d{4}\$/.test(v);
\t});

\ttmpName = sValidate + '-phoneLax';
\tm[tmpName] = new Validator(tmpName, 'Please enter a valid phone number. For example (123) 456-7890 or 123-456-7890.', function(v) {
\t\treturn m[emptyTest].test(v) || /^((\\d[-. ]?)?((\\(\\d{3}\\))|\\d{3}))?[-. ]?\\d{3}[-. ]?\\d{4}\$/.test(v);
\t});

\ttmpName = sValidate + '-date';
\tm[tmpName] = new Validator(tmpName, 'Please enter a valid date.', function(v) {
\t\tvar test = new Date(v);
        return m[emptyTest].test(v) || !isNaN(test);
\t});

\ttmpName = sValidate + '-email';
\tm[tmpName] = new Validator(tmpName, 'Please enter a valid email address. For example johndoe@domain.com', function(v) {
\t\treturn m[emptyTest].test(v) || /^[a-z0-9,!\\#\\\$%&'\\*\\+\\/=\\?\\^_`\\{\\|\\}~-]+(\\.[a-z0-9,!\\#\\\$%&'\\*\\+\\/=\\?\\^_`\\{\\|\\}~-]+)*@[a-z0-9-]+(\\.[a-z0-9-]+)*\\.([a-z]{2,})/i.test(v);
\t});

\ttmpName = sValidate + '-url';
\tm[tmpName] = new Validator(tmpName, 'Please enter a valid URL. http:// is required', function(v) {
\t\treturn m[emptyTest].test(v) || /^(http|https|ftp):\\/\\/(([A-Z0-9][A-Z0-9_-]*)(\\.[A-Z0-9][A-Z0-9_-]*)+)(:(\\d+))?\\/?/i.test(v);
\t});

\ttmpName = sValidate + '-zip';
\tm[tmpName] = new Validator(tmpName, 'Please enter a valid zip code. For example 90602 or 90602-1234.', function(v) {
\t\treturn m[emptyTest].test(v) || /^\\d{5}(-\\d{4})?\$/.test(v);
\t});

\ttmpName = sValidate + '-currency-dollar';
\tm[tmpName] = new Validator(tmpName, 'Please enter a valid \$ amount. For example \$100.00.', function(v) {
\t\treturn m[emptyTest].test(v) ||  /^\\\$?\\-?([1-9]{1}[0-9]{0,2}(\\,[0-9]{3})*(\\.[0-9]{0,2})?|[1-9]{1}\\d*(\\.[0-9]{0,2})?|0(\\.[0-9]{0,2})?|(\\.[0-9]{1,2})?)\$/.test(v);
\t});

\ttmpName = sValidate + '-one-required';
\tm[tmpName] = new Validator(tmpName, 'Please select one of the above options.', function(v, elm, suite) {
\t\tvar options = \$(sInput, Validation.getContainer(elm, suite.options));
\t\treturn \$.any(options, function(elm) {
\t\t\tvar r = \$(elm).val();
\t\t\tif (\$(elm).is(sClickInput)) {
\t\t\t\tr = r && \$(elm).is(sChecked);
\t\t\t}
\t\t\treturn r;
\t\t});
\t});

\ttmpName = sValidate + '-one-required-by-name';
\tm[tmpName] = new Validator(tmpName, 'Please select one of the options.', function(v, elm) {
\t\tvar cleanName = elm.attr('name').replace(/([\\\\\"])/g, '\\\\\$1'),
\t\tinputs = \$('input[name=\"' + cleanName + '\"]' + sChecked, elm[0].form);
\t\treturn inputs.length > 0;
\t});

\ttmpName = sValidate + '-unsigned-number';
\tm[tmpName] = new Validator(tmpName, 'Please enter a valid number in this field.', function(v) {
\t\tv = parseNumber(v);
        return (!isNaN(v) && v>=0);
\t});

\ttmpName = sValidate + '-greater-than-zero';
\tm[tmpName] = new Validator(tmpName, 'Please enter a number greater than 0 in this field.', function(v) {
\t\tif (v.length) {
\t\t\treturn parseFloat(v) > 0;
\t\t}
\t\treturn true;
\t});

\ttmpName = sValidate + '-zero-or-greater';
\tm[tmpName] = new Validator(tmpName, 'Please enter a number 0 or greater in this field.', function(v) {
\t\tif (v.length) {
\t\t\treturn parseFloat(v) >= 0;
\t\t}
\t\treturn true;
\t});

\ttmpName = sValidate + '-percents';
\tm[tmpName] = new Validator(tmpName, 'Please enter a number lower than 100', {min:0, max:100});

\tValidation.methods = m;

\tValidation.getContainer = function(elm, options) {
\t\tvar container;
\t\tif (options.containerClassName) {
\t\t\tvar parents = elm.parents('.' + options.containerClassName);
\t\t\tif (parents.length) {
\t\t\t\tcontainer = parents.first();
\t\t\t}
\t\t}
\t\tif (!container) {
\t\t\tcontainer = elm.parent();
\t\t}

\t\treturn container;
\t};
\tValidation.getAdviceContainer = function(elm, options) {
\t\tvar adviceContainer = elm.closest('.' + sAdviceCnt);
\t\tif (!adviceContainer.length) {
\t\t\tadviceContainer = Validation.getContainer(elm, options);
\t\t}

\t\treturn adviceContainer;
\t};
\tValidation.showAdvice = function(name, elm, options) {
\t\tvar container = Validation.getContainer(elm, options);
\t\tif (options.addClassNameToContainer) {
\t\t\tcontainer.removeClass(sVPassCls).addClass(sVErrorCls);
\t\t}

\t\tvar adviceContainer = elm.closest('.' + sAdviceCnt);
\t\tif (!adviceContainer.length) {
\t\t\telm.removeClass(sVPassCls).addClass(sVFailCls);
\t\t} else {
\t\t\tadviceContainer.removeClass(sVPassCls).addClass(sVFailCls);
\t\t\tcontainer = adviceContainer;
\t\t}

\t\tvar advices = container.children('.' + sVAdviceCls);
\t\tif (!advices.length) {
\t\t\tadvices = \$('<ul/>', { \"class\": sVAdviceCls});
\t\t\tcontainer.append(advices);
\t\t}

\t\tvar cls = sAdvice + '-' + name, advice = \$('li.' + cls, advices);
\t\tif (!advice.length) {
\t\t\tadvice = \$('<li/>', {\"class\": cls}).hide();
\t\t\tvar v = Validation.methods[name];
\t\t\tvar errorMsg;
\t\t\tif (options.useTitles && elm.attr('title')) {
\t\t\t\terrorMsg = elm.attr('title');
\t\t\t}
\t\t\tif (!errorMsg) {
\t\t\t\terrorMsg = v.error;
\t\t\t}
\t\t\tadvice.text(errorMsg).appendTo(advices);
\t\t}

\t\tadvice.show();
\t};

\t\$.fn.validation = function(options) {
\t\tvar opts = \$.extend({}, \$.fn.validation.defaults, options);

\t\tthis.each(function() {
\t\t\tif (!\$(this).data(sDataValidation)) {
\t\t\t\t\$(this).data(sDataValidation, new Validation(\$(this), opts));
\t\t\t}
\t\t});

\t\treturn this;
\t};

\t\$.fn.validation.defaults = {
\t\tonSubmit : true,
\t\tonReset : true,
\t\tstopOnFirst : false,
\t\timmediate : false,
\t\tfocusOnError : true,
\t\tuseTitles : false,
\t\taddClassNameToContainer: false,
\t\tcontainerClassName: sCntCls
\t};

\t\$.validation = {
\t\taddMethod : function(className, error, test, options) {
\t\t\tValidation.methods[className] = new Validator(className, error, test, options);
\t\t},
\t\tversion : version
\t};
}));
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/plugins/validator/jquery.validator.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("(function(factory) {
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
\tvar version = '2.0',
\tsValidation = 'validation',
\tsDataValidation = sValidation,
\tsValidate = 'validate',
\tsInput = ':input',
\tsVisible = ':visible',
\tsChecked = ':checked',
\tsClickInput = '[type=\"radio\"], [type=\"checkbox\"]',
\tsReset = '[type=\"reset\"]',
\tsAdvice = 'advice',
\tsAdviceCnt = sAdvice + '-container',
\tsCntCls = 'input-box',
\tsReqCls = 'required-entry',
\tsPass = 'passed',
\tsFail = 'failed',
\tsError = 'error',
\tsVPassCls = sValidation + '-' + sPass,
\tsVFailCls = sValidation + '-' + sFail,
\tsVErrorCls = sValidation + '-' + sError,
\tsVAdviceCls = sValidation + '-' + sAdvice,
\tsAdvicesSel = '.' + sVAdviceCls + ' li',
\tsEvtForm = sValidate + '-form',
\tsEvtElm = sValidate + '-element',
\tsEvtUpdate = sValidate + '-update';

\tvar K = function(x) { return x; };
\tvar parseNumber = function(v) {
\t    if (typeof v != 'string') {
\t        return parseFloat(v);
\t    }

\t    var isDot  = v.indexOf('.');
\t    var isComa = v.indexOf(',');

\t    if (isDot != -1 && isComa != -1) {
\t        if (isComa > isDot) {
\t            v = v.replace('.', '').replace(',', '.');
\t        }
\t        else {
\t            v = v.replace(',', '');
\t        }
\t    }
\t    else if (isComa != -1) {
\t        v = v.replace(',', '.');
\t    }

\t    return parseFloat(v);
\t};

\t\$.all = function(collection, callback) {
\t\tvar result = true;
\t\tif (collection) {
\t\t\tcallback = callback || K;
\t\t\t\$.each(collection, function(idx, val) {
\t\t\t\tresult = result && callback(val, idx);
\t\t\t\treturn result;
\t\t\t});
\t\t}
\t\treturn result;
\t};
\t\$.any = function(collection, callback) {
\t\tvar result = false;
\t\tif (collection) {
\t\t\tcallback = callback || K;
\t\t\t\$.each(collection, function(idx, val) {
\t\t\t\tresult = callback(val, idx);
\t\t\t\treturn !result;
\t\t\t});
\t\t}
\t\treturn result;
\t};

\tvar Validator, Validation;

\tValidator = function(className, error, test, options) {
\t\tif (typeof test == 'function') {
\t\t\tthis.options = options;
\t\t\tthis._test = test;
\t\t} else {
\t\t\tthis.options = test;
\t\t\tthis._test = function() { return true; };
\t\t}
\t\tthis.error = error || 'Validation failed.';
\t};
\tValidator.prototype = {
\t\ttest : function(v, elm, suite) {
\t\t\tvar result = this._test(v, elm, suite);
\t\t\tif (result) {
\t\t\t\tresult = \$.all(this.options, function(value, key) {
\t\t\t\t\tif (Validator.methods[key]) {
\t\t\t\t\t\treturn Validator.methods[key](v, elm, value, suite);
\t\t\t\t\t}
\t\t\t\t\treturn true;
\t\t\t\t});
\t\t\t}
\t\t\treturn result;
\t\t}
\t};

\tValidator.methods = {
\t\tpattern : function(v,elm,opt) {
\t\t\treturn opt.test(v);
\t\t},
\t\tminLength : function(v,elm,opt) {
\t\t\treturn v.length >= opt;
\t\t},
\t\tmaxLength : function(v,elm,opt) {
\t\t\treturn v.length <= opt;
\t\t},
\t\tmin : function(v,elm,opt) {
\t\t\treturn v >= parseFloat(opt);
\t\t},
\t\tmax : function(v,elm,opt) {
\t\t\treturn v <= parseFloat(opt);
\t\t},
\t\tnotOneOf : function(v,elm,opt) {
\t\t\treturn \$.all(opt, function(value) {
\t\t\t\treturn v != value;
\t\t\t});
\t\t},
\t\toneOf : function(v,elm,opt) {
\t\t\treturn \$.any(opt, function(value) {
\t\t\t\treturn v == value;
\t\t\t});
\t\t},
\t\tis : function(v,elm,opt) {
\t\t\treturn v == opt;
\t\t},
\t\tisNot : function(v,elm,opt) {
\t\t\treturn v != opt;
\t\t},
\t\tequalToField : function(v,elm,opt) {
\t\t\treturn v == \$(opt).val();
\t\t},
\t\tnotEqualToField : function(v,elm,opt) {
\t\t\treturn v != \$(opt).val();
\t\t},
\t\tinclude : function(v,elm,opt,suite) {
\t\t\treturn \$.all(opt, function(value) {
\t\t\t\tif (Validation.methods[value]) {
\t\t\t\t\treturn Validation.methods[value].test(v,elm,suite);
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t}
\t};

\tValidation = function(form, options) {
\t\tthis.form = form;
\t\tif (!this.form) {
\t\t\treturn;
\t\t}
\t\tthis.options = options;

\t\tif (this.options.onSubmit) {
\t\t\tthis.form.submit(\$.proxy(this.onSubmit, this));
\t\t}

\t\tif (this.options.immediate) {
\t\t\tthis.form.on('change blur', sInput, \$.proxy(this.onChange, this));
\t\t}

\t\tif (this.options.onReset) {
\t\t\tthis.form.on('click', sReset, \$.proxy(this.reset, this));
\t\t}
\t};
\tValidation.prototype = {
\t\tonChange : function(ev) {
\t\t\tValidation.isOnChange = true;
\t\t\tvar elm = ev.target;
\t\t\tthis.resetElement(elm);
\t\t\tthis.validateField(elm);
\t\t\tValidation.isOnChange = false;
\t\t},
\t\tonSubmit : function() {
\t\t\tif (!this.validate()) {
\t\t\t\treturn false;
\t\t\t}
\t\t},
\t\tvalidate : function() {
\t\t\tvar result = false,
\t\t\tresults = [],
\t\t\tself = this;

\t\t\t\$(sAdvicesSel, this.form).hide();
\t\t\ttry {
\t\t\t\t\$(sInput, this.form).each(function() {
\t\t\t\t\tvar result = self.validateField(this);
\t\t\t\t\tresults.push(result);
\t\t\t\t\tif (self.options.stopOnFirst && !result) {
\t\t\t\t\t\treturn result;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t} catch (e) {
\t\t\t\tresults.push(false);
\t\t\t}

\t\t\tvar result = \$.all(results);
\t\t\tif (!result && this.options.focusOnError) {
\t\t\t\t\$('.' + sVFailCls, this.form).filter(sInput + sVisible).first().focus();
\t\t\t}
\t\t\tthis.form.triggerHandler(sEvtForm, [result]);

\t\t\treturn result;
\t\t},
\t\tvalidateField : function(elm) {
\t\t\tvar self = this,
\t\t\tclasslist = elm.classList || elm.className.split(/\\s+/);
\t\t\telm = \$(elm);

\t\t\tvar result = \$.all(classlist, function (item) {
\t\t\t\tif (item && Validation.methods[item]) {
\t\t\t\t\tvar test = self.validateTest(item, elm);
\t\t\t\t\telm.triggerHandler(sEvtElm, [test]);
\t\t\t\t\treturn test;
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t\treturn result;
\t\t},
\t\tvalidateTest : function(name, elm) {
\t\t\tvar v = Validation.methods[name];
\t\t\tif (elm.is(sVisible) && !v.test(elm.val(), elm, this)) {
\t\t\t\tValidation.showAdvice(name, elm, this.options);
\t\t\t\telm.triggerHandler(sEvtUpdate, [sFail]);

\t\t\t\treturn false;
\t\t\t} else {
\t\t\t\telm.triggerHandler(sEvtUpdate, [sPass]);
\t\t\t\telm.removeClass(sVFailCls).addClass(sVPassCls);
\t            if (this.options.addClassNameToContainer) {
\t            \tvar container = Validation.getContainer(elm, this.options);
\t            \tif (!\$('.' + sVFailCls, container).length) {
\t            \t\tif (\$.trim(elm.val()) || !elm.is(sVisible)) {
\t            \t\t\tcontainer.addClass(sVPassCls);
\t            \t\t} else {
\t            \t\t\tcontainer.removeClass(sVPassCls);
\t            \t\t}
\t            \t\tcontainer.removeClass(sVErrorCls);
\t            \t}
\t            }

\t            return true;
\t\t\t}
\t\t},
\t\treset : function() {
\t\t\tvar self = this;
\t\t\t\$(sInput, this.form).each(function() {
\t\t\t\tself.resetElement(this);
\t\t\t});
\t\t},
\t\tresetElement : function (elm) {
\t\t\telm = \$(elm);
\t\t\tvar advices = Validation.getAdviceContainer(elm, this.options);
\t\t\t\$(sAdvicesSel, advices).hide();
\t\t\telm.removeClass(sVFailCls);
            elm.removeClass(sVPassCls);
            if (this.options.addClassNameToContainer) {
            \tvar container = Validation.getContainer(elm, this.options);
            \tcontainer.removeClass(sVPassCls).removeClass(sVFailCls);
            }
\t\t}
\t};

\tvar tmpName = 'IsEmpty', emptyTest = tmpName, m = {};

\tm[tmpName] = new Validator(tmpName, '', function(v) {
\t\treturn \$.trim(v) === '';
\t});

\ttmpName = sReqCls;
\tm[tmpName] = new Validator(tmpName, 'This is a required field.', function(v) {
\t\treturn !m[emptyTest].test(v);
\t});

\ttmpName = sValidate + '-number';
\tm[tmpName] = new Validator(tmpName, 'Please enter a valid number in this field.', function(v) {
\t\treturn m[emptyTest].test(v) || !isNaN(parseNumber(v));
\t});

\ttmpName = sValidate + '-digits';
\tm[tmpName] = new Validator(tmpName, 'Please use numbers only in this field. please avoid spaces or other characters such as dots or commas.', function(v) {
\t\treturn m[emptyTest].test(v) ||  !/[^\\d]/.test(v);
\t});

\ttmpName = sValidate + '-alpha';
\tm[tmpName] = new Validator(tmpName, 'Please use letters only (a-z or A-Z) in this field.', function(v) {
\t\t return m[emptyTest].test(v) ||  /^[a-zA-Z]+\$/.test(v);
\t});

\ttmpName = sValidate + '-code';
\tm[tmpName] = new Validator(tmpName, 'Please use only letters (a-z), numbers (0-9) or underscore(_) in this field, first character should be a letter.', function(v) {
\t\treturn m[emptyTest].test(v) ||  /^[a-z]+[a-z0-9_]+\$/.test(v);
\t});

\ttmpName = sValidate + '-alphanum';
\tm[tmpName] = new Validator(tmpName, 'Please use only letters (a-z or A-Z) or numbers (0-9) only in this field. No spaces or other characters are allowed.', function(v) {
\t\treturn m[emptyTest].test(v) ||  /^[a-zA-Z0-9]+\$/.test(v);
\t});

\ttmpName = sValidate + '-phoneStrict';
\tm[tmpName] = new Validator(tmpName, 'Please enter a valid phone number. For example (123) 456-7890 or 123-456-7890.', function(v) {
\t\treturn m[emptyTest].test(v) || /^(\\()?\\d{3}(\\))?(-|\\s)?\\d{3}(-|\\s)\\d{4}\$/.test(v);
\t});

\ttmpName = sValidate + '-phoneLax';
\tm[tmpName] = new Validator(tmpName, 'Please enter a valid phone number. For example (123) 456-7890 or 123-456-7890.', function(v) {
\t\treturn m[emptyTest].test(v) || /^((\\d[-. ]?)?((\\(\\d{3}\\))|\\d{3}))?[-. ]?\\d{3}[-. ]?\\d{4}\$/.test(v);
\t});

\ttmpName = sValidate + '-date';
\tm[tmpName] = new Validator(tmpName, 'Please enter a valid date.', function(v) {
\t\tvar test = new Date(v);
        return m[emptyTest].test(v) || !isNaN(test);
\t});

\ttmpName = sValidate + '-email';
\tm[tmpName] = new Validator(tmpName, 'Please enter a valid email address. For example johndoe@domain.com', function(v) {
\t\treturn m[emptyTest].test(v) || /^[a-z0-9,!\\#\\\$%&'\\*\\+\\/=\\?\\^_`\\{\\|\\}~-]+(\\.[a-z0-9,!\\#\\\$%&'\\*\\+\\/=\\?\\^_`\\{\\|\\}~-]+)*@[a-z0-9-]+(\\.[a-z0-9-]+)*\\.([a-z]{2,})/i.test(v);
\t});

\ttmpName = sValidate + '-url';
\tm[tmpName] = new Validator(tmpName, 'Please enter a valid URL. http:// is required', function(v) {
\t\treturn m[emptyTest].test(v) || /^(http|https|ftp):\\/\\/(([A-Z0-9][A-Z0-9_-]*)(\\.[A-Z0-9][A-Z0-9_-]*)+)(:(\\d+))?\\/?/i.test(v);
\t});

\ttmpName = sValidate + '-zip';
\tm[tmpName] = new Validator(tmpName, 'Please enter a valid zip code. For example 90602 or 90602-1234.', function(v) {
\t\treturn m[emptyTest].test(v) || /^\\d{5}(-\\d{4})?\$/.test(v);
\t});

\ttmpName = sValidate + '-currency-dollar';
\tm[tmpName] = new Validator(tmpName, 'Please enter a valid \$ amount. For example \$100.00.', function(v) {
\t\treturn m[emptyTest].test(v) ||  /^\\\$?\\-?([1-9]{1}[0-9]{0,2}(\\,[0-9]{3})*(\\.[0-9]{0,2})?|[1-9]{1}\\d*(\\.[0-9]{0,2})?|0(\\.[0-9]{0,2})?|(\\.[0-9]{1,2})?)\$/.test(v);
\t});

\ttmpName = sValidate + '-one-required';
\tm[tmpName] = new Validator(tmpName, 'Please select one of the above options.', function(v, elm, suite) {
\t\tvar options = \$(sInput, Validation.getContainer(elm, suite.options));
\t\treturn \$.any(options, function(elm) {
\t\t\tvar r = \$(elm).val();
\t\t\tif (\$(elm).is(sClickInput)) {
\t\t\t\tr = r && \$(elm).is(sChecked);
\t\t\t}
\t\t\treturn r;
\t\t});
\t});

\ttmpName = sValidate + '-one-required-by-name';
\tm[tmpName] = new Validator(tmpName, 'Please select one of the options.', function(v, elm) {
\t\tvar cleanName = elm.attr('name').replace(/([\\\\\"])/g, '\\\\\$1'),
\t\tinputs = \$('input[name=\"' + cleanName + '\"]' + sChecked, elm[0].form);
\t\treturn inputs.length > 0;
\t});

\ttmpName = sValidate + '-unsigned-number';
\tm[tmpName] = new Validator(tmpName, 'Please enter a valid number in this field.', function(v) {
\t\tv = parseNumber(v);
        return (!isNaN(v) && v>=0);
\t});

\ttmpName = sValidate + '-greater-than-zero';
\tm[tmpName] = new Validator(tmpName, 'Please enter a number greater than 0 in this field.', function(v) {
\t\tif (v.length) {
\t\t\treturn parseFloat(v) > 0;
\t\t}
\t\treturn true;
\t});

\ttmpName = sValidate + '-zero-or-greater';
\tm[tmpName] = new Validator(tmpName, 'Please enter a number 0 or greater in this field.', function(v) {
\t\tif (v.length) {
\t\t\treturn parseFloat(v) >= 0;
\t\t}
\t\treturn true;
\t});

\ttmpName = sValidate + '-percents';
\tm[tmpName] = new Validator(tmpName, 'Please enter a number lower than 100', {min:0, max:100});

\tValidation.methods = m;

\tValidation.getContainer = function(elm, options) {
\t\tvar container;
\t\tif (options.containerClassName) {
\t\t\tvar parents = elm.parents('.' + options.containerClassName);
\t\t\tif (parents.length) {
\t\t\t\tcontainer = parents.first();
\t\t\t}
\t\t}
\t\tif (!container) {
\t\t\tcontainer = elm.parent();
\t\t}

\t\treturn container;
\t};
\tValidation.getAdviceContainer = function(elm, options) {
\t\tvar adviceContainer = elm.closest('.' + sAdviceCnt);
\t\tif (!adviceContainer.length) {
\t\t\tadviceContainer = Validation.getContainer(elm, options);
\t\t}

\t\treturn adviceContainer;
\t};
\tValidation.showAdvice = function(name, elm, options) {
\t\tvar container = Validation.getContainer(elm, options);
\t\tif (options.addClassNameToContainer) {
\t\t\tcontainer.removeClass(sVPassCls).addClass(sVErrorCls);
\t\t}

\t\tvar adviceContainer = elm.closest('.' + sAdviceCnt);
\t\tif (!adviceContainer.length) {
\t\t\telm.removeClass(sVPassCls).addClass(sVFailCls);
\t\t} else {
\t\t\tadviceContainer.removeClass(sVPassCls).addClass(sVFailCls);
\t\t\tcontainer = adviceContainer;
\t\t}

\t\tvar advices = container.children('.' + sVAdviceCls);
\t\tif (!advices.length) {
\t\t\tadvices = \$('<ul/>', { \"class\": sVAdviceCls});
\t\t\tcontainer.append(advices);
\t\t}

\t\tvar cls = sAdvice + '-' + name, advice = \$('li.' + cls, advices);
\t\tif (!advice.length) {
\t\t\tadvice = \$('<li/>', {\"class\": cls}).hide();
\t\t\tvar v = Validation.methods[name];
\t\t\tvar errorMsg;
\t\t\tif (options.useTitles && elm.attr('title')) {
\t\t\t\terrorMsg = elm.attr('title');
\t\t\t}
\t\t\tif (!errorMsg) {
\t\t\t\terrorMsg = v.error;
\t\t\t}
\t\t\tadvice.text(errorMsg).appendTo(advices);
\t\t}

\t\tadvice.show();
\t};

\t\$.fn.validation = function(options) {
\t\tvar opts = \$.extend({}, \$.fn.validation.defaults, options);

\t\tthis.each(function() {
\t\t\tif (!\$(this).data(sDataValidation)) {
\t\t\t\t\$(this).data(sDataValidation, new Validation(\$(this), opts));
\t\t\t}
\t\t});

\t\treturn this;
\t};

\t\$.fn.validation.defaults = {
\t\tonSubmit : true,
\t\tonReset : true,
\t\tstopOnFirst : false,
\t\timmediate : false,
\t\tfocusOnError : true,
\t\tuseTitles : false,
\t\taddClassNameToContainer: false,
\t\tcontainerClassName: sCntCls
\t};

\t\$.validation = {
\t\taddMethod : function(className, error, test, options) {
\t\t\tValidation.methods[className] = new Validator(className, error, test, options);
\t\t},
\t\tversion : version
\t};
}));
", "wdn/templates_5.3/js/plugins/validator/jquery.validator.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/plugins/validator/jquery.validator.js");
    }
}
