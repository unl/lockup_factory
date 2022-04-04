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

/* wdn/templates_5.1/js/dropdown-widget.js */
class __TwigTemplate_262012682a1bfaf394734d72676dfa87 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/dropdown-widget.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.1/js/dropdown-widget.js"));

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
\t\"use strict\";

\t/**
  * @param container DOM object (NOT a jquery object)
  * @constructor
  */

\tfunction DropDownWidget(container, type) {
\t\tthis.container = container;
\t\tthis.type = type || null;
\t\tthis.button = this.container.querySelector('button[aria-expanded=\"false\"]');

\t\tvar id = this.button.getAttribute('aria-controls');
\t\tif (id) {
\t\t\tthis.controls = document.getElementById(id);
\t\t} else {
\t\t\t//Assume that it is controlling the next sibling element
\t\t\tthis.controls = this.button.nextElementSibling;
\t\t}

\t\t//Determine which element should receive focus
\t\tthis.focusTarget = this.controls.querySelector('h2, a, button');
\t\tthis.focusTarget.setAttribute('tabindex', '0'); //Ensure that the element is focusable.

\t\t//Close
\t\tdocument.addEventListener('closeDropDownWidget', function (e) {
\t\t\tif (this.type == e.detail.type && this.isExpanded()) {
\t\t\t\tthis.close();
\t\t\t}
\t\t}.bind(this));

\t\t//Toggle
\t\tthis.button.addEventListener('click', function (e) {
\t\t\t// pass menu item node to select method
\t\t\tthis.toggle();
\t\t}.bind(this));

\t\t//Handle the escape action
\t\tdocument.addEventListener('keydown', function (e) {
\t\t\t// If escape, refocus menu button
\t\t\tif (e.keyCode === 27) {
\t\t\t\tthis.close();
\t\t\t}
\t\t}.bind(this));
\t}

\tDropDownWidget.prototype.open = function () {
\t\tthis.button.setAttribute('aria-expanded', 'true');
\t\tthis.controls.hidden = false;
\t\t//Send focus to the first item
\t\tthis.focusTarget.focus();
\t\tvar openEvent = new CustomEvent('openDropDownWidget', { detail: { type: this.type } });
\t\tdocument.dispatchEvent(openEvent);
\t};

\tDropDownWidget.prototype.close = function () {
\t\tthis.button.setAttribute('aria-expanded', 'false');
\t\tthis.controls.hidden = true;

\t\t//Send focus back to the button if a child of the menu is currently selected
\t\tif (document.activeElement && this.controls.contains(document.activeElement)) {
\t\t\tthis.button.focus();
\t\t}
\t};

\tDropDownWidget.prototype.toggle = function () {
\t\tif (this.isExpanded()) {
\t\t\tthis.close();
\t\t} else {
\t\t\tthis.open();
\t\t}
\t};

\tDropDownWidget.prototype.isExpanded = function () {
\t\treturn this.button.getAttribute('aria-expanded') === 'true';
\t};

\treturn DropDownWidget;
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.1/js/dropdown-widget.js";
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
\t\"use strict\";

\t/**
  * @param container DOM object (NOT a jquery object)
  * @constructor
  */

\tfunction DropDownWidget(container, type) {
\t\tthis.container = container;
\t\tthis.type = type || null;
\t\tthis.button = this.container.querySelector('button[aria-expanded=\"false\"]');

\t\tvar id = this.button.getAttribute('aria-controls');
\t\tif (id) {
\t\t\tthis.controls = document.getElementById(id);
\t\t} else {
\t\t\t//Assume that it is controlling the next sibling element
\t\t\tthis.controls = this.button.nextElementSibling;
\t\t}

\t\t//Determine which element should receive focus
\t\tthis.focusTarget = this.controls.querySelector('h2, a, button');
\t\tthis.focusTarget.setAttribute('tabindex', '0'); //Ensure that the element is focusable.

\t\t//Close
\t\tdocument.addEventListener('closeDropDownWidget', function (e) {
\t\t\tif (this.type == e.detail.type && this.isExpanded()) {
\t\t\t\tthis.close();
\t\t\t}
\t\t}.bind(this));

\t\t//Toggle
\t\tthis.button.addEventListener('click', function (e) {
\t\t\t// pass menu item node to select method
\t\t\tthis.toggle();
\t\t}.bind(this));

\t\t//Handle the escape action
\t\tdocument.addEventListener('keydown', function (e) {
\t\t\t// If escape, refocus menu button
\t\t\tif (e.keyCode === 27) {
\t\t\t\tthis.close();
\t\t\t}
\t\t}.bind(this));
\t}

\tDropDownWidget.prototype.open = function () {
\t\tthis.button.setAttribute('aria-expanded', 'true');
\t\tthis.controls.hidden = false;
\t\t//Send focus to the first item
\t\tthis.focusTarget.focus();
\t\tvar openEvent = new CustomEvent('openDropDownWidget', { detail: { type: this.type } });
\t\tdocument.dispatchEvent(openEvent);
\t};

\tDropDownWidget.prototype.close = function () {
\t\tthis.button.setAttribute('aria-expanded', 'false');
\t\tthis.controls.hidden = true;

\t\t//Send focus back to the button if a child of the menu is currently selected
\t\tif (document.activeElement && this.controls.contains(document.activeElement)) {
\t\t\tthis.button.focus();
\t\t}
\t};

\tDropDownWidget.prototype.toggle = function () {
\t\tif (this.isExpanded()) {
\t\t\tthis.close();
\t\t} else {
\t\t\tthis.open();
\t\t}
\t};

\tDropDownWidget.prototype.isExpanded = function () {
\t\treturn this.button.getAttribute('aria-expanded') === 'true';
\t};

\treturn DropDownWidget;
});
", "wdn/templates_5.1/js/dropdown-widget.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.1/js/dropdown-widget.js");
    }
}
