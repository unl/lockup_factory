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

/* wdn/templates_5.3/examples/colorbox.html */
class __TwigTemplate_431815b7f7ac39defa8cb21e3407386b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/colorbox.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/colorbox.html"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <title>Colorbox Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <script>
        WDN.initializePlugin('modal', [function() {
          var \$ = require('jquery');
          //Examples of how to assign the ColorBox event to elements
          \$('.group1').colorbox({rel:'group1'});
          \$('.group2').colorbox({rel:'group2', transition:'fade'});
          \$('.group3').colorbox({rel:'group3', transition:'none', width:'75%', height:'75%'});
          \$('.group4').colorbox({rel:'group4', slideshow:true});
          \$('.ajax').colorbox();
          \$('.youtube').colorbox({iframe:true, innerWidth:640, innerHeight:390});
          \$('.vimeo').colorbox({iframe:true, innerWidth:640, innerHeight:390});
          \$('.iframe').colorbox({iframe:true, width:'80%', height:'80%'});
          \$('.inline').colorbox({inline:true, width:'50%'});
          \$('.callbacks').colorbox({
            onOpen:function(){ alert('onOpen: colorbox is about to open'); },
            onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
            onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
            onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
            onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
          });

          \$('.non-retina').colorbox({rel:'group5', transition:'none'})
          \$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});

          //Example of preserving a JavaScript event for inline calls.
          \$('#click').click(function(){
            \$('#click').css({'background-color':'#f00', 'color':'#fff', 'cursor':'inherit'}).text('Open this window again and this message will still be here.');
            return false;
          });
        }]);
      </script>

      <h3>Elastic Transition</h3>
      <p><a href=\"samplecontent/stadium.jpg\" class=\"group1\">Grouped Photo 1</a></p>
      <p><a href=\"samplecontent/kauffman.jpg\" class=\"group1\">Grouped Photo 2</a></p>
      <p><a href=\"samplecontent/love.jpg\" class=\"group1\">Grouped Photo 3</a></p>

      <h3>Fade Transition</h3>
      <p><a href=\"samplecontent/stadium.jpg\" class=\"group2\">Grouped Photo 1</a></p>
      <p><a href=\"samplecontent/kauffman.jpg\" class=\"group2\">Grouped Photo 2</a></p>
      <p><a href=\"samplecontent/love.jpg\" class=\"group2\">Grouped Photo 3</a></p>

      <h3>No Transition + fixed width and height (75% of screen size)</h3>
      <p><a href=\"samplecontent/stadium.jpg\" class=\"group3 ohoopee\">Grouped Photo 1</a></p>
      <p><a href=\"samplecontent/kauffman.jpg\" class=\"group3 ohoopee\">Grouped Photo 2</a></p>
      <p><a href=\"samplecontent/love.jpg\" class=\"group3 ohoopee\">Grouped Photo 3</a></p>

      <h3>Slideshow</h3>
      <p><a href=\"samplecontent/stadium.jpg\" class=\"group4 slideshow\">Grouped Photo 1</a></p>
      <p><a href=\"samplecontent/kauffman.jpg\" class=\"group4 slideshow\">Grouped Photo 2</a></p>
      <p><a href=\"samplecontent/love.jpg\" class=\"group4 slideshow\">Grouped Photo 3</a></p>

      <h3>Other Content Types</h3>
      <p><a class='ajax' href=\"samplecontent/ajax.html\">Outside HTML (Ajax)</a></p>
      <p><a class='youtube' href=\"https://www.youtube.com/embed/SxPE9xwsXTs\">Flash / Video (Iframe/Direct Link To YouTube)</a></p>
      <p><a class='vimeo' href=\"https://player.vimeo.com/video/48222241\">Flash / Video (Iframe/Direct Link To Vimeo)</a></p>
      <p><a class='iframe' href=\"http://wdn.unl.edu/\">Outside Webpage (Iframe)</a></p>
      <p><a class='inline' href=\"#inline_content\">Inline HTML</a></p>

      <h3>Demonstration of using callbacks</h3>
      <p><a class='callbacks' href=\"samplecontent/carouselGraduation.jpg\">Example with alerts</a>. Callbacks and event-hooks allow users to extend functionality without having to rewrite parts of the plugin.</p>

      <h2>Retina Images</h2>
      <p><a class=\"retina\" href=\"samplecontent/unsplash_527bf5fd7f5f6.jpg\">Retina</a></p>
      <p><a class=\"non-retina\" href=\"samplecontent/unsplash_527bf5fd7f5f6.jpg\">Non-Retina</a></p>

      <!-- This contains the hidden content for inline calls -->
      <div class=\"hidden\">
        <div id=\"inline_content\" style=\"padding:10px; background:#fff;\">
          <p><strong>This content comes from a hidden element on this page.</strong></p>
          <p>The inline option preserves bound JavaScript events and changes, and it puts the content back where it came from when it is closed.</p>
          <p><a id=\"click\" href=\"#\" style=\"padding:5px; background:#ccc;\">Click me, it will be preserved!</a></p>
          <p><strong>If you try to open a new ColorBox while it is already open, it will update itself with the new content.</strong></p>
          <p>Updating Content Example:<br />
          <a class=\"ajax\" href=\"samplecontent/ajax.html\">Click here to load new content</a></p>
        </div>
      </div>
    </div>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/examples/colorbox.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <title>Colorbox Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <script>
        WDN.initializePlugin('modal', [function() {
          var \$ = require('jquery');
          //Examples of how to assign the ColorBox event to elements
          \$('.group1').colorbox({rel:'group1'});
          \$('.group2').colorbox({rel:'group2', transition:'fade'});
          \$('.group3').colorbox({rel:'group3', transition:'none', width:'75%', height:'75%'});
          \$('.group4').colorbox({rel:'group4', slideshow:true});
          \$('.ajax').colorbox();
          \$('.youtube').colorbox({iframe:true, innerWidth:640, innerHeight:390});
          \$('.vimeo').colorbox({iframe:true, innerWidth:640, innerHeight:390});
          \$('.iframe').colorbox({iframe:true, width:'80%', height:'80%'});
          \$('.inline').colorbox({inline:true, width:'50%'});
          \$('.callbacks').colorbox({
            onOpen:function(){ alert('onOpen: colorbox is about to open'); },
            onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
            onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
            onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
            onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
          });

          \$('.non-retina').colorbox({rel:'group5', transition:'none'})
          \$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});

          //Example of preserving a JavaScript event for inline calls.
          \$('#click').click(function(){
            \$('#click').css({'background-color':'#f00', 'color':'#fff', 'cursor':'inherit'}).text('Open this window again and this message will still be here.');
            return false;
          });
        }]);
      </script>

      <h3>Elastic Transition</h3>
      <p><a href=\"samplecontent/stadium.jpg\" class=\"group1\">Grouped Photo 1</a></p>
      <p><a href=\"samplecontent/kauffman.jpg\" class=\"group1\">Grouped Photo 2</a></p>
      <p><a href=\"samplecontent/love.jpg\" class=\"group1\">Grouped Photo 3</a></p>

      <h3>Fade Transition</h3>
      <p><a href=\"samplecontent/stadium.jpg\" class=\"group2\">Grouped Photo 1</a></p>
      <p><a href=\"samplecontent/kauffman.jpg\" class=\"group2\">Grouped Photo 2</a></p>
      <p><a href=\"samplecontent/love.jpg\" class=\"group2\">Grouped Photo 3</a></p>

      <h3>No Transition + fixed width and height (75% of screen size)</h3>
      <p><a href=\"samplecontent/stadium.jpg\" class=\"group3 ohoopee\">Grouped Photo 1</a></p>
      <p><a href=\"samplecontent/kauffman.jpg\" class=\"group3 ohoopee\">Grouped Photo 2</a></p>
      <p><a href=\"samplecontent/love.jpg\" class=\"group3 ohoopee\">Grouped Photo 3</a></p>

      <h3>Slideshow</h3>
      <p><a href=\"samplecontent/stadium.jpg\" class=\"group4 slideshow\">Grouped Photo 1</a></p>
      <p><a href=\"samplecontent/kauffman.jpg\" class=\"group4 slideshow\">Grouped Photo 2</a></p>
      <p><a href=\"samplecontent/love.jpg\" class=\"group4 slideshow\">Grouped Photo 3</a></p>

      <h3>Other Content Types</h3>
      <p><a class='ajax' href=\"samplecontent/ajax.html\">Outside HTML (Ajax)</a></p>
      <p><a class='youtube' href=\"https://www.youtube.com/embed/SxPE9xwsXTs\">Flash / Video (Iframe/Direct Link To YouTube)</a></p>
      <p><a class='vimeo' href=\"https://player.vimeo.com/video/48222241\">Flash / Video (Iframe/Direct Link To Vimeo)</a></p>
      <p><a class='iframe' href=\"http://wdn.unl.edu/\">Outside Webpage (Iframe)</a></p>
      <p><a class='inline' href=\"#inline_content\">Inline HTML</a></p>

      <h3>Demonstration of using callbacks</h3>
      <p><a class='callbacks' href=\"samplecontent/carouselGraduation.jpg\">Example with alerts</a>. Callbacks and event-hooks allow users to extend functionality without having to rewrite parts of the plugin.</p>

      <h2>Retina Images</h2>
      <p><a class=\"retina\" href=\"samplecontent/unsplash_527bf5fd7f5f6.jpg\">Retina</a></p>
      <p><a class=\"non-retina\" href=\"samplecontent/unsplash_527bf5fd7f5f6.jpg\">Non-Retina</a></p>

      <!-- This contains the hidden content for inline calls -->
      <div class=\"hidden\">
        <div id=\"inline_content\" style=\"padding:10px; background:#fff;\">
          <p><strong>This content comes from a hidden element on this page.</strong></p>
          <p>The inline option preserves bound JavaScript events and changes, and it puts the content back where it came from when it is closed.</p>
          <p><a id=\"click\" href=\"#\" style=\"padding:5px; background:#ccc;\">Click me, it will be preserved!</a></p>
          <p><strong>If you try to open a new ColorBox while it is already open, it will update itself with the new content.</strong></p>
          <p>Updating Content Example:<br />
          <a class=\"ajax\" href=\"samplecontent/ajax.html\">Click here to load new content</a></p>
        </div>
      </div>
    </div>
  </body>
</html>
", "wdn/templates_5.3/examples/colorbox.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/examples/colorbox.html");
    }
}
