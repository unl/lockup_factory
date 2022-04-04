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

/* wdn/templates_5.3/scss/variables/_variables.modular-scale.scss */
class __TwigTemplate_f1aea2b46a9e1001533f0e200bad29ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.modular-scale.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.modular-scale.scss"));

        // line 1
        echo "////////////////////////////////////
// THEME / VARIABLES / MODULAR SCALE
////////////////////////////////////


// Modular Scale - https://github.com/modularscale/modularscale-sass
// @import 'modularscale';


// Defaults and variables

// @import 'modularscale/vars';
// Ratios
\$double-octave    : 4                 ;
\$pi               : 3.14159265359     ;
\$major-twelfth    : 3                 ;
\$major-eleventh   : 2.666666667       ;
\$major-tenth      : 2.5               ;
\$octave           : 2                 ;
\$major-seventh    : 1.875             ;
\$minor-seventh    : 1.777777778       ;
\$major-sixth      : 1.666666667       ;
\$phi              : 1.618034          ;
\$golden           : \$phi              ;
\$minor-sixth      : 1.6               ;
\$fifth            : 1.5               ;
\$augmented-fourth : 1.41421           ;
\$fourth           : 1.333333333       ;
\$major-third      : 1.25              ;
\$minor-third      : 1.2               ;
\$major-second     : 1.125             ;
\$minor-second     : 1.066666667       ;

// Base config
\$ms-base          : 1em       !default;
\$ms-ratio         : \$fifth    !default;
\$modularscale     : ()        !default;


// Core functions

// @import 'modularscale/settings';
// Parse settings starting with defaults.
// Settings should cascade down like you would expect in CSS.
// More specific overrides previous settings.

@function ms-settings(\$b: false, \$r: false, \$t: false, \$m: \$modularscale) {
  \$base: \$ms-base;
  \$ratio: \$ms-ratio;
  \$thread: map-get(\$m, \$t);

  // Override with user settings
  @if map-get(\$m, base) {
    \$base: map-get(\$m, base);
  }
  @if map-get(\$m, ratio) {
    \$ratio: map-get(\$m, ratio);
  }

  // Override with thread settings
  @if \$thread {
    @if map-get(\$thread, base) {
      \$base: map-get(\$thread, base);
    }
    @if map-get(\$thread, ratio) {
      \$ratio: map-get(\$thread, ratio);
    }
  }

  // Override with inline settings
  @if \$b {
    \$base: \$b;
  }
  @if \$r {
    \$ratio: \$r;
  }

  @return \$base \$ratio;
}


// @import 'modularscale/pow';
// Sass does not have native pow() support so this needs to be added.
// Compass and other libs implement this more extensively.
// In order to keep this simple, use those when they are avalible.
// Issue for pow() support in Sass: https://github.com/sass/sass/issues/684

@function ms-pow(\$b,\$e) {

  // Return 1 if exponent is 0
  @if \$e == 0 {
    @return 1;
  }

  // If pow() exists (compass or mathsass) use that.
  @if function-exists('pow') {
    @return pow(\$b,\$e);
  }

  // This does not support non-integer exponents,
  // Check and return an error if a non-integer exponent is passed.
  @if (floor(\$e) != \$e) {
    @error 'Non-integer values are not supported in modularscale by default. Try using mathsass in your project to add non-integer scale support. https://github.com/terkel/mathsass'
  }

  // Seed the return.
  \$ms-return: \$b;

  // Multiply or divide by the specified number of times.
  @if \$e > 0 {
    @for \$i from 1 to \$e {
    \$ms-return: \$ms-return * \$b;
    }
  }
  @if \$e < 0 {
    @for \$i from \$e through 0 {
    \$ms-return: \$ms-return / \$b;
    }
  }
  @return \$ms-return;
}


// @import 'modularscale/strip-units';
// Stripping units is not a best practice
// This function should not be used elsewhere
// It is used here because calc() doesn't do unit logic
// AND target ratios use units as a hack to get a number.
@function ms-unitless(\$val) {
  @return (\$val / (\$val - \$val + 1));
}


// @import 'modularscale/sort';
// Basic list sorting
// Would like to replace with http://sassmeister.com/gist/30e4863bd03ce0e1617c
// Unfortunately libsass has a bug with passing arguments into the min() funciton.

@function ms-sort(\$l) {

  // loop until the list is confirmed to be sorted
  \$sorted: false;
  @while \$sorted == false {

    // Start with the assumption that the lists are sorted.
    \$sorted: true;

    // Loop through the list, checking each value with the one next to it.
    // Swap the values if they need to be swapped.
    // Not super fast but simple and modular scale doesn't lean hard on sorting.
    @for \$i from 2 through length(\$l) {
      \$n1: nth(\$l,\$i - 1);
      \$n2: nth(\$l,\$i);

      // If the first value is greater than the 2nd, swap them.
      @if \$n1 > \$n2 {
        \$l: set-nth(\$l, \$i, \$n1);
        \$l: set-nth(\$l, \$i - 1, \$n2);

        // The list isn't sorted and needs to be looped through again.
        \$sorted: false;
      }
    }
  }

  // Return the sorted list.
  @return \$l;
}


// @import 'modularscale/target';
// Convert number string to number
@function ms-to-num(\$n) {
  \$l: str-length(\$n);
  \$r: 0;
  \$m: str-index(\$n,'.');
  @if \$m == null {
    \$m: \$l + 1;
  }
  // Loop through digits and convert to numbers
  @for \$i from 1 through \$l {
    \$v: str-slice(\$n,\$i,\$i);
    @if \$v == '1' { \$v: 1; }
    @else if \$v == '2' { \$v: 2; }
    @else if \$v == '3' { \$v: 3; }
    @else if \$v == '4' { \$v: 4; }
    @else if \$v == '5' { \$v: 5; }
    @else if \$v == '6' { \$v: 6; }
    @else if \$v == '7' { \$v: 7; }
    @else if \$v == '8' { \$v: 8; }
    @else if \$v == '9' { \$v: 9; }
    @else if \$v == '0' { \$v: 0; }
    @else { \$v: null; }
    @if \$v != null {
      \$m: \$m - 1;
      \$r: \$r + ms-pow(10,\$m - 1) * \$v;
    } @else {
      \$l: \$l - 1;
    }
  }
  @return \$r;
  }

  // Find a ratio based on a target value
  @function ms-target(\$t,\$b) {
  // Convert to string
  \$t: \$t + '';
  // Remove base units to calulate ratio
  \$b: ms-unitless(nth(\$b,1));
  // Find where 'at' is in the string
  \$at: str-index(\$t,'at');

  // Slice the value and target out
  // and convert strings to numbers
  \$v: ms-to-num(str-slice(\$t,0,\$at - 1));
  \$t: ms-to-num(str-slice(\$t,\$at + 2));

  // Solve the modular scale function for the ratio.
  @return ms-pow((\$v/\$b),(1/\$t));
}


// @import 'modularscale/function';
@function ms-function(\$v: 0, \$base: false, \$ratio: false, \$thread: false, \$settings: \$modularscale) {

  // Parse settings
  \$ms-settings: ms-settings(\$base,\$ratio,\$thread,\$settings);
  \$base: nth(\$ms-settings, 1);
  \$ratio: nth(\$ms-settings, 2);

  // Render target values from settings.
  @if unit(\$ratio) != '' {
    \$ratio: ms-target(\$ratio,\$base)
  }

  // Fast calc if not multi stranded
  @if(length(\$base) == 1) {
    @return ms-pow(\$ratio, \$v) * \$base;
  }

  // Create new base array
  \$ms-bases: nth(\$base,1);

  // Normalize base values
  @for \$i from 2 through length(\$base) {
    // initial base value
    \$ms-base: nth(\$base,\$i);
    // If the base is bigger than the main base
    @if(\$ms-base > nth(\$base,1)) {
      // divide the value until it aligns with main base.
      @while(\$ms-base > nth(\$base,1)) {
        \$ms-base: \$ms-base / \$ratio;
      }
      \$ms-base: \$ms-base * \$ratio;
      }
      // If the base is smaller than the main base.
      @else if (\$ms-base < nth(\$base,1)) {
      // pump up the value until it aligns with main base.
      @while \$ms-base < nth(\$base,1) {
        \$ms-base: \$ms-base * \$ratio;
      }
    }
    // Push into new array
    \$ms-bases: append(\$ms-bases,\$ms-base);
  }

  // Sort array from smallest to largest.
  \$ms-bases: ms-sort(\$ms-bases);

  // Find step to use in calculation
  \$vtep: floor(\$v / length(\$ms-bases));
  // Find base to use in calculation
  \$ms-base: round((\$v / length(\$ms-bases) - \$vtep) * length(\$ms-bases)) + 1;

  @return ms-pow(\$ratio, \$vtep) * nth(\$ms-bases,\$ms-base);
}


// @import 'modularscale/round-px';
@function ms-round-px(\$r) {
  @if unit(\$r) == 'px' {
    @return round(\$r);
  }
  @warn \"ms-round-px is no longer used by modular scale and will be removed in the 3.1.0 release.\";
  @return \$r;
}


// Mixins

// @import 'modularscale/respond';
// Generate calc() function
// based on Mike Riethmuller's Precise control over responsive typography
// http://madebymike.com.au/writing/precise-control-responsive-typography/
@function ms-fluid(\$val1: 1em, \$val2: 1em, \$break1: 0, \$break2: 0) {
  \$diff: ms-unitless(\$val2) - ms-unitless(\$val1);

  // v1 + (v2 - v1) * ( (100vw - b1) / b2 - b1 )
  @return calc( #{\$val1} + #{ms-unitless(\$val2) - ms-unitless(\$val1)} * ( ( 100vw - #{\$break1}) / #{ms-unitless(\$break2) - ms-unitless(\$break1)} ) );
  }

  // Main responsive mixin
  @mixin ms-respond(\$prop, \$val, \$map: \$modularscale, \$ms-important: false) {
  \$base: \$ms-base;
  \$ratio: \$ms-ratio;

  \$first-write: true;
  \$last-break: null;

  \$important: '';

  @if \$ms-important == true {
    \$important: ' !important';
  }

  // loop through all settings with a breakpoint type value
  @each \$v, \$s in \$map {
    @if type-of(\$v) == number {
    @if unit(\$v) != '' {

      // Write out the first value without a media query.
      @if \$first-write {
        #{\$prop}: unquote(\"#{ms-function(\$val, \$thread: \$v, \$settings: \$map)}#{\$important}\");

        // Not the first write anymore, reset to false to move on.
        \$first-write: false;
        \$last-break: \$v;
      }

        // Write intermediate breakpoints.
      @else {
        @media (min-width: \$last-break) and (max-width: \$v) {
          \$val1: ms-function(\$val, \$thread: \$last-break, \$settings: \$map);
          \$val2: ms-function(\$val, \$thread: \$v, \$settings: \$map);
          #{\$prop}: unquote(\"#{ms-fluid(\$val1,\$val2,\$last-break,\$v)}#{\$important}\");
        }
        \$last-break: \$v;
        }
      }
    }
  }

  // Write the last breakpoint.
  @if \$last-break {
    @media (min-width: \$last-break) {
    #{\$prop}: unquote(\"#{ms-function(\$val, \$thread: \$last-break, \$settings: \$map)}#{\$important}\");
    }
  }
}


// Syntax sugar

// @import 'modularscale/sugar';
// To attempt to avoid conflicts with other libraries
// all funcitons are namespaced with `ms-`.
// However, to increase usability, a shorthand function is included here.

@function ms(\$v: 0, \$base: false, \$ratio: false, \$thread: false, \$settings: \$modularscale) {
  @return ms-function(\$v, \$base, \$ratio, \$thread, \$settings);
}


// WDN Theme Settings
\$modularscale: (
  base: 1 1.5,    // Define primary and secondary strands
  ratio: \$fourth, // Define ratio
);
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.modular-scale.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("////////////////////////////////////
// THEME / VARIABLES / MODULAR SCALE
////////////////////////////////////


// Modular Scale - https://github.com/modularscale/modularscale-sass
// @import 'modularscale';


// Defaults and variables

// @import 'modularscale/vars';
// Ratios
\$double-octave    : 4                 ;
\$pi               : 3.14159265359     ;
\$major-twelfth    : 3                 ;
\$major-eleventh   : 2.666666667       ;
\$major-tenth      : 2.5               ;
\$octave           : 2                 ;
\$major-seventh    : 1.875             ;
\$minor-seventh    : 1.777777778       ;
\$major-sixth      : 1.666666667       ;
\$phi              : 1.618034          ;
\$golden           : \$phi              ;
\$minor-sixth      : 1.6               ;
\$fifth            : 1.5               ;
\$augmented-fourth : 1.41421           ;
\$fourth           : 1.333333333       ;
\$major-third      : 1.25              ;
\$minor-third      : 1.2               ;
\$major-second     : 1.125             ;
\$minor-second     : 1.066666667       ;

// Base config
\$ms-base          : 1em       !default;
\$ms-ratio         : \$fifth    !default;
\$modularscale     : ()        !default;


// Core functions

// @import 'modularscale/settings';
// Parse settings starting with defaults.
// Settings should cascade down like you would expect in CSS.
// More specific overrides previous settings.

@function ms-settings(\$b: false, \$r: false, \$t: false, \$m: \$modularscale) {
  \$base: \$ms-base;
  \$ratio: \$ms-ratio;
  \$thread: map-get(\$m, \$t);

  // Override with user settings
  @if map-get(\$m, base) {
    \$base: map-get(\$m, base);
  }
  @if map-get(\$m, ratio) {
    \$ratio: map-get(\$m, ratio);
  }

  // Override with thread settings
  @if \$thread {
    @if map-get(\$thread, base) {
      \$base: map-get(\$thread, base);
    }
    @if map-get(\$thread, ratio) {
      \$ratio: map-get(\$thread, ratio);
    }
  }

  // Override with inline settings
  @if \$b {
    \$base: \$b;
  }
  @if \$r {
    \$ratio: \$r;
  }

  @return \$base \$ratio;
}


// @import 'modularscale/pow';
// Sass does not have native pow() support so this needs to be added.
// Compass and other libs implement this more extensively.
// In order to keep this simple, use those when they are avalible.
// Issue for pow() support in Sass: https://github.com/sass/sass/issues/684

@function ms-pow(\$b,\$e) {

  // Return 1 if exponent is 0
  @if \$e == 0 {
    @return 1;
  }

  // If pow() exists (compass or mathsass) use that.
  @if function-exists('pow') {
    @return pow(\$b,\$e);
  }

  // This does not support non-integer exponents,
  // Check and return an error if a non-integer exponent is passed.
  @if (floor(\$e) != \$e) {
    @error 'Non-integer values are not supported in modularscale by default. Try using mathsass in your project to add non-integer scale support. https://github.com/terkel/mathsass'
  }

  // Seed the return.
  \$ms-return: \$b;

  // Multiply or divide by the specified number of times.
  @if \$e > 0 {
    @for \$i from 1 to \$e {
    \$ms-return: \$ms-return * \$b;
    }
  }
  @if \$e < 0 {
    @for \$i from \$e through 0 {
    \$ms-return: \$ms-return / \$b;
    }
  }
  @return \$ms-return;
}


// @import 'modularscale/strip-units';
// Stripping units is not a best practice
// This function should not be used elsewhere
// It is used here because calc() doesn't do unit logic
// AND target ratios use units as a hack to get a number.
@function ms-unitless(\$val) {
  @return (\$val / (\$val - \$val + 1));
}


// @import 'modularscale/sort';
// Basic list sorting
// Would like to replace with http://sassmeister.com/gist/30e4863bd03ce0e1617c
// Unfortunately libsass has a bug with passing arguments into the min() funciton.

@function ms-sort(\$l) {

  // loop until the list is confirmed to be sorted
  \$sorted: false;
  @while \$sorted == false {

    // Start with the assumption that the lists are sorted.
    \$sorted: true;

    // Loop through the list, checking each value with the one next to it.
    // Swap the values if they need to be swapped.
    // Not super fast but simple and modular scale doesn't lean hard on sorting.
    @for \$i from 2 through length(\$l) {
      \$n1: nth(\$l,\$i - 1);
      \$n2: nth(\$l,\$i);

      // If the first value is greater than the 2nd, swap them.
      @if \$n1 > \$n2 {
        \$l: set-nth(\$l, \$i, \$n1);
        \$l: set-nth(\$l, \$i - 1, \$n2);

        // The list isn't sorted and needs to be looped through again.
        \$sorted: false;
      }
    }
  }

  // Return the sorted list.
  @return \$l;
}


// @import 'modularscale/target';
// Convert number string to number
@function ms-to-num(\$n) {
  \$l: str-length(\$n);
  \$r: 0;
  \$m: str-index(\$n,'.');
  @if \$m == null {
    \$m: \$l + 1;
  }
  // Loop through digits and convert to numbers
  @for \$i from 1 through \$l {
    \$v: str-slice(\$n,\$i,\$i);
    @if \$v == '1' { \$v: 1; }
    @else if \$v == '2' { \$v: 2; }
    @else if \$v == '3' { \$v: 3; }
    @else if \$v == '4' { \$v: 4; }
    @else if \$v == '5' { \$v: 5; }
    @else if \$v == '6' { \$v: 6; }
    @else if \$v == '7' { \$v: 7; }
    @else if \$v == '8' { \$v: 8; }
    @else if \$v == '9' { \$v: 9; }
    @else if \$v == '0' { \$v: 0; }
    @else { \$v: null; }
    @if \$v != null {
      \$m: \$m - 1;
      \$r: \$r + ms-pow(10,\$m - 1) * \$v;
    } @else {
      \$l: \$l - 1;
    }
  }
  @return \$r;
  }

  // Find a ratio based on a target value
  @function ms-target(\$t,\$b) {
  // Convert to string
  \$t: \$t + '';
  // Remove base units to calulate ratio
  \$b: ms-unitless(nth(\$b,1));
  // Find where 'at' is in the string
  \$at: str-index(\$t,'at');

  // Slice the value and target out
  // and convert strings to numbers
  \$v: ms-to-num(str-slice(\$t,0,\$at - 1));
  \$t: ms-to-num(str-slice(\$t,\$at + 2));

  // Solve the modular scale function for the ratio.
  @return ms-pow((\$v/\$b),(1/\$t));
}


// @import 'modularscale/function';
@function ms-function(\$v: 0, \$base: false, \$ratio: false, \$thread: false, \$settings: \$modularscale) {

  // Parse settings
  \$ms-settings: ms-settings(\$base,\$ratio,\$thread,\$settings);
  \$base: nth(\$ms-settings, 1);
  \$ratio: nth(\$ms-settings, 2);

  // Render target values from settings.
  @if unit(\$ratio) != '' {
    \$ratio: ms-target(\$ratio,\$base)
  }

  // Fast calc if not multi stranded
  @if(length(\$base) == 1) {
    @return ms-pow(\$ratio, \$v) * \$base;
  }

  // Create new base array
  \$ms-bases: nth(\$base,1);

  // Normalize base values
  @for \$i from 2 through length(\$base) {
    // initial base value
    \$ms-base: nth(\$base,\$i);
    // If the base is bigger than the main base
    @if(\$ms-base > nth(\$base,1)) {
      // divide the value until it aligns with main base.
      @while(\$ms-base > nth(\$base,1)) {
        \$ms-base: \$ms-base / \$ratio;
      }
      \$ms-base: \$ms-base * \$ratio;
      }
      // If the base is smaller than the main base.
      @else if (\$ms-base < nth(\$base,1)) {
      // pump up the value until it aligns with main base.
      @while \$ms-base < nth(\$base,1) {
        \$ms-base: \$ms-base * \$ratio;
      }
    }
    // Push into new array
    \$ms-bases: append(\$ms-bases,\$ms-base);
  }

  // Sort array from smallest to largest.
  \$ms-bases: ms-sort(\$ms-bases);

  // Find step to use in calculation
  \$vtep: floor(\$v / length(\$ms-bases));
  // Find base to use in calculation
  \$ms-base: round((\$v / length(\$ms-bases) - \$vtep) * length(\$ms-bases)) + 1;

  @return ms-pow(\$ratio, \$vtep) * nth(\$ms-bases,\$ms-base);
}


// @import 'modularscale/round-px';
@function ms-round-px(\$r) {
  @if unit(\$r) == 'px' {
    @return round(\$r);
  }
  @warn \"ms-round-px is no longer used by modular scale and will be removed in the 3.1.0 release.\";
  @return \$r;
}


// Mixins

// @import 'modularscale/respond';
// Generate calc() function
// based on Mike Riethmuller's Precise control over responsive typography
// http://madebymike.com.au/writing/precise-control-responsive-typography/
@function ms-fluid(\$val1: 1em, \$val2: 1em, \$break1: 0, \$break2: 0) {
  \$diff: ms-unitless(\$val2) - ms-unitless(\$val1);

  // v1 + (v2 - v1) * ( (100vw - b1) / b2 - b1 )
  @return calc( #{\$val1} + #{ms-unitless(\$val2) - ms-unitless(\$val1)} * ( ( 100vw - #{\$break1}) / #{ms-unitless(\$break2) - ms-unitless(\$break1)} ) );
  }

  // Main responsive mixin
  @mixin ms-respond(\$prop, \$val, \$map: \$modularscale, \$ms-important: false) {
  \$base: \$ms-base;
  \$ratio: \$ms-ratio;

  \$first-write: true;
  \$last-break: null;

  \$important: '';

  @if \$ms-important == true {
    \$important: ' !important';
  }

  // loop through all settings with a breakpoint type value
  @each \$v, \$s in \$map {
    @if type-of(\$v) == number {
    @if unit(\$v) != '' {

      // Write out the first value without a media query.
      @if \$first-write {
        #{\$prop}: unquote(\"#{ms-function(\$val, \$thread: \$v, \$settings: \$map)}#{\$important}\");

        // Not the first write anymore, reset to false to move on.
        \$first-write: false;
        \$last-break: \$v;
      }

        // Write intermediate breakpoints.
      @else {
        @media (min-width: \$last-break) and (max-width: \$v) {
          \$val1: ms-function(\$val, \$thread: \$last-break, \$settings: \$map);
          \$val2: ms-function(\$val, \$thread: \$v, \$settings: \$map);
          #{\$prop}: unquote(\"#{ms-fluid(\$val1,\$val2,\$last-break,\$v)}#{\$important}\");
        }
        \$last-break: \$v;
        }
      }
    }
  }

  // Write the last breakpoint.
  @if \$last-break {
    @media (min-width: \$last-break) {
    #{\$prop}: unquote(\"#{ms-function(\$val, \$thread: \$last-break, \$settings: \$map)}#{\$important}\");
    }
  }
}


// Syntax sugar

// @import 'modularscale/sugar';
// To attempt to avoid conflicts with other libraries
// all funcitons are namespaced with `ms-`.
// However, to increase usability, a shorthand function is included here.

@function ms(\$v: 0, \$base: false, \$ratio: false, \$thread: false, \$settings: \$modularscale) {
  @return ms-function(\$v, \$base, \$ratio, \$thread, \$settings);
}


// WDN Theme Settings
\$modularscale: (
  base: 1 1.5,    // Define primary and secondary strands
  ratio: \$fourth, // Define ratio
);
", "wdn/templates_5.3/scss/variables/_variables.modular-scale.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.modular-scale.scss");
    }
}