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

/* wdn/templates_5.3/scss/variables/_variables.color-palette.scss */
class __TwigTemplate_27bdaa1dc5fadf67cea118dc899b93f4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.color-palette.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/scss/variables/_variables.color-palette.scss"));

        // line 1
        echo "////////////////////////////////////
// THEME / VARIABLES / COLOR PALETTE
////////////////////////////////////


// PRIMARY BRAND
\$brand-alpha: #d00000;    // Scarlet
\$brand-beta: #fefdfa;     // Cream
\$brand-gamma: #c7c8ca;    // Gray

\$scarlet: \$brand-alpha;
\$cream: \$brand-beta;
\$gray: \$brand-gamma;

\$scarlet-shade: scale-color(\$scarlet, \$saturation: 10%, \$lightness: -24%);
\$scarlet-tint: #f6e6e3;


// SECONDARY BRAND
\$brand-delta: #001738;    // Navy
\$brand-epsilon: #42a7c6;  // Cerulean

\$navy: \$brand-delta;
\$cerulean: \$brand-epsilon;

\$light-cerulean: mix(\$cream, \$cerulean, 25%);     // #71bdd3
\$lighter-cerulean: mix(\$cream, \$cerulean, 50%);   // #


// TERTIARY / SCREEN
\$brand-zeta: #00784e;     // Green
\$brand-eta: #007197;      // Blue
\$brand-theta: #b32d9c;    // Purple
\$brand-iota: #ffd74e;     // Yellow

\$green: \$brand-zeta;
\$blue: \$brand-eta;
\$purple: \$brand-theta;
\$yellow: \$brand-iota;

\$light-green: #e7f1ea;
\$light-blue: #e7f0f0;
\$light-purple: #f7eaf1;


// NEUTRALS
\$white: #fff;
\$black: #000;

// Mix cream and gray brand colors for base color
\$mix-cream-gray: mix(\$cream, \$gray);            // #e3e3e2

\$lightest-gray: lighten(\$mix-cream-gray, 7.5%); // #f6f6f5;
\$lighter-gray: lighten(\$mix-cream-gray, 3.2%);  // #ebebea
\$light-gray: \$mix-cream-gray;                   // #e3e3e2

\$gray-s1: darken(\$mix-cream-gray, 25%);         // #a4a4a1

\$dark-gray: darken(\$mix-cream-gray, 47.5%);     // #6b6b68

\$darker-gray: darken(\$mix-cream-gray, 63.3%);   // #424240
\$darker-gray-s1: darken(\$mix-cream-gray, 67%);  // #393937
\$darker-gray-s2: darken(\$mix-cream-gray, 69%);  // #333332
\$darker-gray-s3: darken(\$mix-cream-gray, 71%);  // #2e2e2d
\$darker-gray-s4: darken(\$mix-cream-gray, 73%);  // #292928

\$darkest-gray: darken(\$mix-cream-gray, 75%);    // #242423
\$darkest-gray-s1: darken(\$mix-cream-gray, 77%); // #1f1f1e


// CONTEXTUAL COLORS
\$info: \$blue;
\$success: \$green;
\$warning: #d53f25;
\$danger: \$scarlet-shade;

\$highlight: #ff0;
\$kbd: #0f0;


// SOCIAL MEDIA COLORS
\$facebook: #3b5998;   // Facebook
\$instagram: #c13584;  // Instagram
\$linkedin: #0077b5;   // LinkedIn
\$pinterest: #bd081c;  // Pinterest
\$snapchat: #fffc00;   // SnapChat
\$twitter: #1da1f2;    // Twitter
\$youtube: #cd201f;    // YouTube
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/scss/variables/_variables.color-palette.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("////////////////////////////////////
// THEME / VARIABLES / COLOR PALETTE
////////////////////////////////////


// PRIMARY BRAND
\$brand-alpha: #d00000;    // Scarlet
\$brand-beta: #fefdfa;     // Cream
\$brand-gamma: #c7c8ca;    // Gray

\$scarlet: \$brand-alpha;
\$cream: \$brand-beta;
\$gray: \$brand-gamma;

\$scarlet-shade: scale-color(\$scarlet, \$saturation: 10%, \$lightness: -24%);
\$scarlet-tint: #f6e6e3;


// SECONDARY BRAND
\$brand-delta: #001738;    // Navy
\$brand-epsilon: #42a7c6;  // Cerulean

\$navy: \$brand-delta;
\$cerulean: \$brand-epsilon;

\$light-cerulean: mix(\$cream, \$cerulean, 25%);     // #71bdd3
\$lighter-cerulean: mix(\$cream, \$cerulean, 50%);   // #


// TERTIARY / SCREEN
\$brand-zeta: #00784e;     // Green
\$brand-eta: #007197;      // Blue
\$brand-theta: #b32d9c;    // Purple
\$brand-iota: #ffd74e;     // Yellow

\$green: \$brand-zeta;
\$blue: \$brand-eta;
\$purple: \$brand-theta;
\$yellow: \$brand-iota;

\$light-green: #e7f1ea;
\$light-blue: #e7f0f0;
\$light-purple: #f7eaf1;


// NEUTRALS
\$white: #fff;
\$black: #000;

// Mix cream and gray brand colors for base color
\$mix-cream-gray: mix(\$cream, \$gray);            // #e3e3e2

\$lightest-gray: lighten(\$mix-cream-gray, 7.5%); // #f6f6f5;
\$lighter-gray: lighten(\$mix-cream-gray, 3.2%);  // #ebebea
\$light-gray: \$mix-cream-gray;                   // #e3e3e2

\$gray-s1: darken(\$mix-cream-gray, 25%);         // #a4a4a1

\$dark-gray: darken(\$mix-cream-gray, 47.5%);     // #6b6b68

\$darker-gray: darken(\$mix-cream-gray, 63.3%);   // #424240
\$darker-gray-s1: darken(\$mix-cream-gray, 67%);  // #393937
\$darker-gray-s2: darken(\$mix-cream-gray, 69%);  // #333332
\$darker-gray-s3: darken(\$mix-cream-gray, 71%);  // #2e2e2d
\$darker-gray-s4: darken(\$mix-cream-gray, 73%);  // #292928

\$darkest-gray: darken(\$mix-cream-gray, 75%);    // #242423
\$darkest-gray-s1: darken(\$mix-cream-gray, 77%); // #1f1f1e


// CONTEXTUAL COLORS
\$info: \$blue;
\$success: \$green;
\$warning: #d53f25;
\$danger: \$scarlet-shade;

\$highlight: #ff0;
\$kbd: #0f0;


// SOCIAL MEDIA COLORS
\$facebook: #3b5998;   // Facebook
\$instagram: #c13584;  // Instagram
\$linkedin: #0077b5;   // LinkedIn
\$pinterest: #bd081c;  // Pinterest
\$snapchat: #fffc00;   // SnapChat
\$twitter: #1da1f2;    // Twitter
\$youtube: #cd201f;    // YouTube
", "wdn/templates_5.3/scss/variables/_variables.color-palette.scss", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/scss/variables/_variables.color-palette.scss");
    }
}
