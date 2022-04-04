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

/* wdn/templates_4.1/scripts/compressed/loadCSS.js.src.js */
class __TwigTemplate_a35e4ba8e631c12e34a5b433722605c5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/loadCSS.js.src.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_4.1/scripts/compressed/loadCSS.js.src.js"));

        // line 1
        echo "/*! loadCSS. [c]2017 Filament Group, Inc. MIT License */
(function(w){
\t\"use strict\";
\t/* exported loadCSS */
\tvar loadCSS = function( href, before, media ){
\t\t// Arguments explained:
\t\t// `href` [REQUIRED] is the URL for your CSS file.
\t\t// `before` [OPTIONAL] is the element the script should use as a reference for injecting our stylesheet <link> before
\t\t\t// By default, loadCSS attempts to inject the link after the last stylesheet or script in the DOM. However, you might desire a more specific location in your document.
\t\t// `media` [OPTIONAL] is the media type or query of the stylesheet. By default it will be 'all'
\t\tvar doc = w.document;
\t\tvar ss = doc.createElement( \"link\" );
\t\tvar ref;
\t\tif( before ){
\t\t\tref = before;
\t\t}
\t\telse {
\t\t\tvar refs = ( doc.body || doc.getElementsByTagName( \"head\" )[ 0 ] ).childNodes;
\t\t\tref = refs[ refs.length - 1];
\t\t}

\t\tvar sheets = doc.styleSheets;
\t\tss.rel = \"stylesheet\";
\t\tss.href = href;
\t\t// temporarily set media to something inapplicable to ensure it'll fetch without blocking render
\t\tss.media = \"only x\";

\t\t// wait until body is defined before injecting link. This ensures a non-blocking load in IE11.
\t\tfunction ready( cb ){
\t\t\tif( doc.body ){
\t\t\t\treturn cb();
\t\t\t}
\t\t\tsetTimeout(function(){
\t\t\t\tready( cb );
\t\t\t});
\t\t}
\t\t// Inject link
\t\t\t// Note: the ternary preserves the existing behavior of \"before\" argument, but we could choose to change the argument to \"after\" in a later release and standardize on ref.nextSibling for all refs
\t\t\t// Note: `insertBefore` is used instead of `appendChild`, for safety re: http://www.paulirish.com/2011/surefire-dom-element-insertion/
\t\tready( function(){
\t\t\tref.parentNode.insertBefore( ss, ( before ? ref : ref.nextSibling ) );
\t\t});
\t\t// A method (exposed on return object for external use) that mimics onload by polling document.styleSheets until it includes the new sheet.
\t\tvar onloadcssdefined = function( cb ){
\t\t\tvar resolvedHref = ss.href;
\t\t\tvar i = sheets.length;
\t\t\twhile( i-- ){
\t\t\t\tif( sheets[ i ].href === resolvedHref ){
\t\t\t\t\treturn cb();
\t\t\t\t}
\t\t\t}
\t\t\tsetTimeout(function() {
\t\t\t\tonloadcssdefined( cb );
\t\t\t});
\t\t};

\t\tfunction loadCB(){
\t\t\tif( ss.addEventListener ){
\t\t\t\tss.removeEventListener( \"load\", loadCB );
\t\t\t}
\t\t\tss.media = media || \"all\";
\t\t}

\t\t// once loaded, set link's media back to `all` so that the stylesheet applies once it loads
\t\tif( ss.addEventListener ){
\t\t\tss.addEventListener( \"load\", loadCB);
\t\t}
\t\tss.onloadcssdefined = onloadcssdefined;
\t\tonloadcssdefined( loadCB );
\t\treturn ss;
\t};
\t// commonjs
\tif( typeof exports !== \"undefined\" ){
\t\texports.loadCSS = loadCSS;
\t}
\telse {
\t\tw.loadCSS = loadCSS;
\t}
}( typeof global !== \"undefined\" ? global : this ));
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_4.1/scripts/compressed/loadCSS.js.src.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/*! loadCSS. [c]2017 Filament Group, Inc. MIT License */
(function(w){
\t\"use strict\";
\t/* exported loadCSS */
\tvar loadCSS = function( href, before, media ){
\t\t// Arguments explained:
\t\t// `href` [REQUIRED] is the URL for your CSS file.
\t\t// `before` [OPTIONAL] is the element the script should use as a reference for injecting our stylesheet <link> before
\t\t\t// By default, loadCSS attempts to inject the link after the last stylesheet or script in the DOM. However, you might desire a more specific location in your document.
\t\t// `media` [OPTIONAL] is the media type or query of the stylesheet. By default it will be 'all'
\t\tvar doc = w.document;
\t\tvar ss = doc.createElement( \"link\" );
\t\tvar ref;
\t\tif( before ){
\t\t\tref = before;
\t\t}
\t\telse {
\t\t\tvar refs = ( doc.body || doc.getElementsByTagName( \"head\" )[ 0 ] ).childNodes;
\t\t\tref = refs[ refs.length - 1];
\t\t}

\t\tvar sheets = doc.styleSheets;
\t\tss.rel = \"stylesheet\";
\t\tss.href = href;
\t\t// temporarily set media to something inapplicable to ensure it'll fetch without blocking render
\t\tss.media = \"only x\";

\t\t// wait until body is defined before injecting link. This ensures a non-blocking load in IE11.
\t\tfunction ready( cb ){
\t\t\tif( doc.body ){
\t\t\t\treturn cb();
\t\t\t}
\t\t\tsetTimeout(function(){
\t\t\t\tready( cb );
\t\t\t});
\t\t}
\t\t// Inject link
\t\t\t// Note: the ternary preserves the existing behavior of \"before\" argument, but we could choose to change the argument to \"after\" in a later release and standardize on ref.nextSibling for all refs
\t\t\t// Note: `insertBefore` is used instead of `appendChild`, for safety re: http://www.paulirish.com/2011/surefire-dom-element-insertion/
\t\tready( function(){
\t\t\tref.parentNode.insertBefore( ss, ( before ? ref : ref.nextSibling ) );
\t\t});
\t\t// A method (exposed on return object for external use) that mimics onload by polling document.styleSheets until it includes the new sheet.
\t\tvar onloadcssdefined = function( cb ){
\t\t\tvar resolvedHref = ss.href;
\t\t\tvar i = sheets.length;
\t\t\twhile( i-- ){
\t\t\t\tif( sheets[ i ].href === resolvedHref ){
\t\t\t\t\treturn cb();
\t\t\t\t}
\t\t\t}
\t\t\tsetTimeout(function() {
\t\t\t\tonloadcssdefined( cb );
\t\t\t});
\t\t};

\t\tfunction loadCB(){
\t\t\tif( ss.addEventListener ){
\t\t\t\tss.removeEventListener( \"load\", loadCB );
\t\t\t}
\t\t\tss.media = media || \"all\";
\t\t}

\t\t// once loaded, set link's media back to `all` so that the stylesheet applies once it loads
\t\tif( ss.addEventListener ){
\t\t\tss.addEventListener( \"load\", loadCB);
\t\t}
\t\tss.onloadcssdefined = onloadcssdefined;
\t\tonloadcssdefined( loadCB );
\t\treturn ss;
\t};
\t// commonjs
\tif( typeof exports !== \"undefined\" ){
\t\texports.loadCSS = loadCSS;
\t}
\telse {
\t\tw.loadCSS = loadCSS;
\t}
}( typeof global !== \"undefined\" ? global : this ));
", "wdn/templates_4.1/scripts/compressed/loadCSS.js.src.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_4.1/scripts/compressed/loadCSS.js.src.js");
    }
}
