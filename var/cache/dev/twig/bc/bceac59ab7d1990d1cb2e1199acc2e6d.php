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

/* wdn/templates_5.3/examples/idm.html */
class __TwigTemplate_18d4b4c3eba40b6fca63a29233287438 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/idm.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/idm.html"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <title>IDM Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <div class=\"dcf-grid dcf-col-gap-vw dcf-row-gap-5\">
        <div class=\"dcf-col-100% dcf-col-67%-start@md\">
          <p>The IDM tools should only be used for informational purposes only (i.e., as an indicator that a user <em>may</em> be logged in).</p>
          <p>Until the login server can start sessions for the end-user, applications using CAS/SSO can tell the UNL template that a user is logged in. This is started by calling the <code>setUser();</code> method of the <code>idm</code> module with the username (<code>uid</code>) of the user that is currently logged in.</p>
          <p><a href=\"#\" onclick=\"return exampleNotice();\">Click here to indicate Brett Bieber is logged in.</a></p>
          <p>By default the logout URL will end the session with the CAS server. This URL can be customized so the session with the current application can be ended. To customize the logout URL, use <code>WDN.setPluginParam('idm', 'logout', '?logout');</code></p>
          <h2 class=\"dcf-txt-h3\">Complete Examples:</h2>
          <pre>
            <code>
              &lt;script&gt;
              WDN.setPluginParam('idm', 'login', '?login');
              WDN.setPluginParam('idm', 'logout', '?logout');
              &lt;/script&gt;
            </code>
          </pre>
          <br>
          <pre>
            <code>
              &lt;script&gt;
              require(['idm'], function(idm) {
                idm.displayNotice('bbieber2');
                idm.setLogoutURL('?logout');
                idm.renderAsLoggedOut();
              })
              &lt;/script&gt;
            </code>
          </pre>
        </div>
        <div class=\"dcf-col-100% dcf-col-33%-end@md\">
          <h2 class=\"dcf-subhead dcf-bold\">Note</h2>
          <p class=\"dcf-txt-sm\">Cookies are used to indicate whether login notification should be displayed to the end user. As a result, this feature will only work for websites containing <code>.unl.edu</code> within the domain portion of the URL.</p>
        </div>
      </div>
      <script>
        function exampleNotice() {
          require(['idm'], function(idm) {
            idm.setUser({'uid': 'bbieber2', 'cn': ['bbieber2'], 'displayName': ['Brett']});
            idm.renderAsLoggedIn();
          })
          return false;
        }
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
        return "wdn/templates_5.3/examples/idm.html";
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
    <title>IDM Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <div class=\"dcf-grid dcf-col-gap-vw dcf-row-gap-5\">
        <div class=\"dcf-col-100% dcf-col-67%-start@md\">
          <p>The IDM tools should only be used for informational purposes only (i.e., as an indicator that a user <em>may</em> be logged in).</p>
          <p>Until the login server can start sessions for the end-user, applications using CAS/SSO can tell the UNL template that a user is logged in. This is started by calling the <code>setUser();</code> method of the <code>idm</code> module with the username (<code>uid</code>) of the user that is currently logged in.</p>
          <p><a href=\"#\" onclick=\"return exampleNotice();\">Click here to indicate Brett Bieber is logged in.</a></p>
          <p>By default the logout URL will end the session with the CAS server. This URL can be customized so the session with the current application can be ended. To customize the logout URL, use <code>WDN.setPluginParam('idm', 'logout', '?logout');</code></p>
          <h2 class=\"dcf-txt-h3\">Complete Examples:</h2>
          <pre>
            <code>
              &lt;script&gt;
              WDN.setPluginParam('idm', 'login', '?login');
              WDN.setPluginParam('idm', 'logout', '?logout');
              &lt;/script&gt;
            </code>
          </pre>
          <br>
          <pre>
            <code>
              &lt;script&gt;
              require(['idm'], function(idm) {
                idm.displayNotice('bbieber2');
                idm.setLogoutURL('?logout');
                idm.renderAsLoggedOut();
              })
              &lt;/script&gt;
            </code>
          </pre>
        </div>
        <div class=\"dcf-col-100% dcf-col-33%-end@md\">
          <h2 class=\"dcf-subhead dcf-bold\">Note</h2>
          <p class=\"dcf-txt-sm\">Cookies are used to indicate whether login notification should be displayed to the end user. As a result, this feature will only work for websites containing <code>.unl.edu</code> within the domain portion of the URL.</p>
        </div>
      </div>
      <script>
        function exampleNotice() {
          require(['idm'], function(idm) {
            idm.setUser({'uid': 'bbieber2', 'cn': ['bbieber2'], 'displayName': ['Brett']});
            idm.renderAsLoggedIn();
          })
          return false;
        }
      </script>
    </div>
  </body>
</html>
", "wdn/templates_5.3/examples/idm.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/examples/idm.html");
    }
}
