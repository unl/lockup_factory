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

/* wdn/templates_5.3/js/dropdown-widget.js */
class __TwigTemplate_19d9c23879fc056efe0ebedd261cb98e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/dropdown-widget.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/dropdown-widget.js"));

        // line 1
        echo "'use strict';
/**
 * This creates a dropdown widget and enforces accessibility best practices including:
 * 1) use aria-expanded to describe when the drop-down is open or closed
 * 2) when opened, send focus to the first focusable element
 * 3) when closed, return focus back to the button (escape key will also close)
 *
 * This is different from an aria dropdown MENU because the a 'menu' in aria describes a desktop application like menu structure. Not links or other content.
 *
 * <div> //container (for a navigation dropdown, this should be <nav>
 *     <button aria-expanded=\"false\">text</button>
 *     <div hidden> //this is what the button controls. It needs to be either the element following the button, or referenced by aria-controls.
 *         <a href=\"\">example</a> //This element will be focused
 *     </div>
 * </div>
 *
 */

define([], function () {
  \"use strict\";
  /**
   * @param container DOM object (NOT a jquery object)
   * @constructor
   */

  function DropDownWidget(container, type) {
    this.container = container;
    this.type = type || null;
    this.button = this.container.querySelector('button[aria-expanded=\"false\"]');
    var id = this.button.getAttribute('aria-controls');

    if (id) {
      this.controls = document.getElementById(id);
    } else {
      //Assume that it is controlling the next sibling element
      this.controls = this.button.nextElementSibling;
    } //Determine which element should receive focus


    this.focusTarget = this.controls.querySelector('h2, a, button');
    this.focusTarget.setAttribute('tabindex', '0'); //Ensure that the element is focusable.
    //Close

    document.addEventListener('closeDropDownWidget', function (e) {
      if (this.type == e.detail.type && this.isExpanded()) {
        this.close();
      }
    }.bind(this)); //Toggle

    this.button.addEventListener('click', function (e) {
      // pass menu item node to select method
      this.toggle();
    }.bind(this)); //Handle the escape action

    document.addEventListener('keydown', function (e) {
      // If escape, refocus menu button
      if (e.keyCode === 27) {
        this.close();
      }
    }.bind(this));
  }

  DropDownWidget.prototype.open = function () {
    this.button.setAttribute('aria-expanded', 'true');
    this.controls.hidden = false; //Send focus to the first item

    this.focusTarget.focus();
    var openEvent = new CustomEvent('openDropDownWidget', {
      detail: {
        type: this.type
      }
    });
    document.dispatchEvent(openEvent);
  };

  DropDownWidget.prototype.close = function () {
    this.button.setAttribute('aria-expanded', 'false');
    this.controls.hidden = true; //Send focus back to the button if a child of the menu is currently selected

    if (document.activeElement && this.controls.contains(document.activeElement)) {
      this.button.focus();
    }
  };

  DropDownWidget.prototype.toggle = function () {
    if (this.isExpanded()) {
      this.close();
    } else {
      this.open();
    }
  };

  DropDownWidget.prototype.isExpanded = function () {
    return this.button.getAttribute('aria-expanded') === 'true';
  };

  return DropDownWidget;
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/dropdown-widget.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("'use strict';
/**
 * This creates a dropdown widget and enforces accessibility best practices including:
 * 1) use aria-expanded to describe when the drop-down is open or closed
 * 2) when opened, send focus to the first focusable element
 * 3) when closed, return focus back to the button (escape key will also close)
 *
 * This is different from an aria dropdown MENU because the a 'menu' in aria describes a desktop application like menu structure. Not links or other content.
 *
 * <div> //container (for a navigation dropdown, this should be <nav>
 *     <button aria-expanded=\"false\">text</button>
 *     <div hidden> //this is what the button controls. It needs to be either the element following the button, or referenced by aria-controls.
 *         <a href=\"\">example</a> //This element will be focused
 *     </div>
 * </div>
 *
 */

define([], function () {
  \"use strict\";
  /**
   * @param container DOM object (NOT a jquery object)
   * @constructor
   */

  function DropDownWidget(container, type) {
    this.container = container;
    this.type = type || null;
    this.button = this.container.querySelector('button[aria-expanded=\"false\"]');
    var id = this.button.getAttribute('aria-controls');

    if (id) {
      this.controls = document.getElementById(id);
    } else {
      //Assume that it is controlling the next sibling element
      this.controls = this.button.nextElementSibling;
    } //Determine which element should receive focus


    this.focusTarget = this.controls.querySelector('h2, a, button');
    this.focusTarget.setAttribute('tabindex', '0'); //Ensure that the element is focusable.
    //Close

    document.addEventListener('closeDropDownWidget', function (e) {
      if (this.type == e.detail.type && this.isExpanded()) {
        this.close();
      }
    }.bind(this)); //Toggle

    this.button.addEventListener('click', function (e) {
      // pass menu item node to select method
      this.toggle();
    }.bind(this)); //Handle the escape action

    document.addEventListener('keydown', function (e) {
      // If escape, refocus menu button
      if (e.keyCode === 27) {
        this.close();
      }
    }.bind(this));
  }

  DropDownWidget.prototype.open = function () {
    this.button.setAttribute('aria-expanded', 'true');
    this.controls.hidden = false; //Send focus to the first item

    this.focusTarget.focus();
    var openEvent = new CustomEvent('openDropDownWidget', {
      detail: {
        type: this.type
      }
    });
    document.dispatchEvent(openEvent);
  };

  DropDownWidget.prototype.close = function () {
    this.button.setAttribute('aria-expanded', 'false');
    this.controls.hidden = true; //Send focus back to the button if a child of the menu is currently selected

    if (document.activeElement && this.controls.contains(document.activeElement)) {
      this.button.focus();
    }
  };

  DropDownWidget.prototype.toggle = function () {
    if (this.isExpanded()) {
      this.close();
    } else {
      this.open();
    }
  };

  DropDownWidget.prototype.isExpanded = function () {
    return this.button.getAttribute('aria-expanded') === 'true';
  };

  return DropDownWidget;
});
", "wdn/templates_5.3/js/dropdown-widget.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/dropdown-widget.js");
    }
}
