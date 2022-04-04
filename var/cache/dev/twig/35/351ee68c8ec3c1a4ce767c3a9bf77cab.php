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

/* wdn/templates_5.3/examples/videoplayer.html */
class __TwigTemplate_15249594eefa591d37b37b4c5964ae80 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/videoplayer.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/videoplayer.html"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <title>Video Player Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <div class=\"dcf-grid-halves@sm dcf-col-gap-vw dcf-row-gap-4\">
        <div>
          <video class=\"wdn_player\" src=\"https://mediahub.unl.edu/uploads/ucomm/av/video/pyotm/SharonHansenPYOTM.mp4\" controls poster=\"https://mediahub.unl.edu/media/3197/image\" title=\"This is my video\">
            <track src=\"https://mediahub.unl.edu/media/3197/vtt\" kind=\"captions\" srclang=\"en\" />
          </video>
        </div>
        <div>
          <video class=\"wdn_player\" src=\"http://mediahub.unl.edu/uploads/37bf38ddb70d3a2c460c166b5120269e.mp4\" controls poster=\"https://mediahub.unl.edu/media/2700/image\">
            <track src=\"https://mediahub.unl.edu/media/2700/vtt\" kind=\"captions\" srclang=\"en\" />
          </video>
        </div>
      </div>
      <script>
        WDN.initializePlugin('mediaelement_wdn');
      </script>
    </div>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/examples/videoplayer.html";
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
    <title>Video Player Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <div class=\"dcf-grid-halves@sm dcf-col-gap-vw dcf-row-gap-4\">
        <div>
          <video class=\"wdn_player\" src=\"https://mediahub.unl.edu/uploads/ucomm/av/video/pyotm/SharonHansenPYOTM.mp4\" controls poster=\"https://mediahub.unl.edu/media/3197/image\" title=\"This is my video\">
            <track src=\"https://mediahub.unl.edu/media/3197/vtt\" kind=\"captions\" srclang=\"en\" />
          </video>
        </div>
        <div>
          <video class=\"wdn_player\" src=\"http://mediahub.unl.edu/uploads/37bf38ddb70d3a2c460c166b5120269e.mp4\" controls poster=\"https://mediahub.unl.edu/media/2700/image\">
            <track src=\"https://mediahub.unl.edu/media/2700/vtt\" kind=\"captions\" srclang=\"en\" />
          </video>
        </div>
      </div>
      <script>
        WDN.initializePlugin('mediaelement_wdn');
      </script>
    </div>
  </body>
</html>
", "wdn/templates_5.3/examples/videoplayer.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/examples/videoplayer.html");
    }
}
