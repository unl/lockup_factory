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

/* wdn/templates_4.1/scripts/compressed/qa.js.src.js */
class __TwigTemplate_22803995798eb0bb799db8acd1fed373 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/qa.js.src.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/qa.js.src.js"));

        // line 1
        echo "define(['jquery'], function(\$) {
    //Wait a little bit, then send a request to Web Audit to determine this site's current score.
    var success = function(data) {
        
        if (!data) {
            //no closest site was found
            return;
        }
        
        var gpa = parseFloat(data.gpa);
        var \$link = \$('a[href=\"https://webaudit.unl.edu/qa-test/\"]');
        if (gpa === 100) {
            \$link.after('<span class=\"wdn-qa-star wdn-qa-gold wdn-icon-star-circled\" aria-hidden=\"true\"></span><span class=\"wdn-text-hidden\">100% (gold star)</span>');
        } else if (gpa >= 90) {
            \$link.after('<span class=\"wdn-qa-star wdn-qa-silver wdn-icon-star-circled\" aria-hidden=\"true\"></span><span class=\"wdn-text-hidden\">90% (silver star)</span>');
        }
    };
    
    var getBaseUrl = function()
    {
        //Reduce the load on webaudit by using the base url if available (will result in more cached hits)
        var \$base = \$('base');
        if (\$base.length) {
            return \$base.attr('href');
        }
        
        //Otherwise use the current page URL which will result in a request to webaudit for every page on the site
        return window.location;
    };
    
    //Wait a little bit and then send check for the score
    setTimeout(function(){
        \$.ajax({
            url: 'https://webaudit.unl.edu/registry/closest/?format=json&query='+encodeURIComponent(getBaseUrl()),
            timeout: 1000,
            success: success
        });
    }, 1000);
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/qa.js.src.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("define(['jquery'], function(\$) {
    //Wait a little bit, then send a request to Web Audit to determine this site's current score.
    var success = function(data) {
        
        if (!data) {
            //no closest site was found
            return;
        }
        
        var gpa = parseFloat(data.gpa);
        var \$link = \$('a[href=\"https://webaudit.unl.edu/qa-test/\"]');
        if (gpa === 100) {
            \$link.after('<span class=\"wdn-qa-star wdn-qa-gold wdn-icon-star-circled\" aria-hidden=\"true\"></span><span class=\"wdn-text-hidden\">100% (gold star)</span>');
        } else if (gpa >= 90) {
            \$link.after('<span class=\"wdn-qa-star wdn-qa-silver wdn-icon-star-circled\" aria-hidden=\"true\"></span><span class=\"wdn-text-hidden\">90% (silver star)</span>');
        }
    };
    
    var getBaseUrl = function()
    {
        //Reduce the load on webaudit by using the base url if available (will result in more cached hits)
        var \$base = \$('base');
        if (\$base.length) {
            return \$base.attr('href');
        }
        
        //Otherwise use the current page URL which will result in a request to webaudit for every page on the site
        return window.location;
    };
    
    //Wait a little bit and then send check for the score
    setTimeout(function(){
        \$.ajax({
            url: 'https://webaudit.unl.edu/registry/closest/?format=json&query='+encodeURIComponent(getBaseUrl()),
            timeout: 1000,
            success: success
        });
    }, 1000);
});
", "wdn/templates_4.1/scripts/compressed/qa.js.src.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/qa.js.src.js");
    }
}
