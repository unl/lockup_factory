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

/* wdn/templates_5.3/examples/band_imagery.html */
class __TwigTemplate_14282c6fa9421c5908a70aa55dfcdde3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/band_imagery.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/examples/band_imagery.html"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <title>Band Imagery Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <h1>Band Imagery, Scroll-Watch Plugin Samples</h1>
      <h2 class=\"wdn-brand\">Scale Sample</h2>
      <div class=\"wdn-band\">
        <div class=\"wdn-stretch wdn-scroll-watch\" data-lerp=\"scale\" data-lerp-scale-start=\"#dcf-header\" data-lerp-scale-end=\"#dcf-main\" data-scale-start=\"1\" data-scale-end=\"1.25\">
          <figure>
            <img src=\"samplecontent/unsplash_525a7e89953d1_1.jpg\" alt=\"Black and white sunset\" />
          </figure>
        </div>
      </div>
      <h2 class=\"wdn-brand\">Opacity Sample</h2>
      <div class=\"wdn-band\" style=\"background-color:black;\">
        <div class=\"wdn-stretch wdn-scroll-watch\" data-lerp=\"opacity\" data-lerp-opacity-start=\"#opacity-start\" data-lerp-opacity-end=\"#flipbook-end\" data-opacity-start=\"1\" data-opacity-end=\"0.0\">
          <figure>
            <img src=\"samplecontent/unsplash_522af94630a3d_1.jpg\" alt=\"Wheat field\" />
          </figure>
        </div>
        <div id=\"opacity-start\" style=\"position:absolute; bottom:55%;\"></div>
        <div id=\"opacity-end\" style=\"position:absolute; bottom:30%;\"></div>
      </div>
      <h2 id=\"flipbook-end\" class=\"wdn-brand\">Flipbook Sample</h2>
      <div class=\"wdn-band\">
        <div class=\"wdn-stretch wdn-scroll-watch\" data-lerp=\"flipbook\" data-lerp-flipbook-start=\"#opacity-end\" data-lerp-flipbook-end=\"#flipbook-end\">
          <figure>
            <img src=\"samplecontent/IMG_2341.jpg\" alt=\"Michael and Jackson\" />
          </figure>
          <figure>
            <img src=\"samplecontent/IMG_2345.jpg\" alt=\"Michael and Jackson\" />
          </figure>
          <figure>
            <img src=\"samplecontent/IMG_2348.jpg\" alt=\"Michael and Jackson\" />
          </figure>
        </div>
      </div>
      <h2 class=\"wdn-brand\">Locked Aside</h2>
      <div class=\"wdn-band\">
        <div class=\"wdn-stretch wdn-scroll-watch locked\">
          <figure>
            <img src=\"samplecontent/unsplash_527bf5fd7f5f6_1.jpg\" alt=\"Tractor in a field\" />
          </figure>
        </div>
        <div class=\"wdn-grid-set wdn-scroll\">
          <div class=\"wdn-col-one-half\" style=\"float:right;background-color:rgba(255,255,255,0.8);padding:5em;\">
            <h3 class=\"wdn-brand\">Locked figure aside scrolling content</h3>
            <h4 class=\"wdn-alt-header\">Start your story</h4>
            <p>Lucas ipsum dolor sit amet fisto antilles leia calamari hoth darth ackbar naboo darth tatooine. Secura owen kenobi watto. Ackbar biggs mace kessel. Ewok fett darth moff baba. Padmé yoda moff luke. Skywalker qui-gon dooku jinn mothma biggs chewbacca wampa wookiee. Dantooine ponda sidious aayla utapau hutt yavin darth anakin. Calamari solo moff kit lars kashyyyk ackbar r2-d2 skywalker. Lando skywalker wampa kit. Darth antilles calrissian organa dagobah moff ahsoka. Tatooine boba wookiee grievous solo mon.</p>
            <p>Calamari jinn jabba jar amidala calamari c-3p0 jade twi'lek. Utapau mon dantooine zabrak amidala vader. Organa wicket yavin biggs grievous tatooine owen hoth. Darth mace jinn coruscant antilles r2-d2. Jinn mon coruscant thrawn. Kessel kenobi ahsoka organa chewbacca tusken raider luke obi-wan. Ponda darth moff skywalker antilles. Sidious hutt skywalker skywalker amidala calamari ben. Moff hutt windu cade hutt dantooine han hutt fett. Lobot darth organa biggs padmé. Obi-wan mon darth organa sith antilles.</p>
            <p>Lars organa mandalorians darth ackbar moff palpatine dooku. Darth fett windu binks lobot hutt binks obi-wan. Skywalker obi-wan biggs mon. Moff lando watto antilles hoth ahsoka. Skywalker darth antilles kenobi ewok skywalker. Greedo binks ackbar k-3po qui-gon. Kessel moff sidious skywalker hutt hutt. Hoth gonk jango amidala. Antilles antilles anakin jango biggs. Utapau chewbacca skywalker leia. Antilles antilles hutt utapau mara moff windu. Kessel luuke maul fett mara c-3po skywalker ben darth. Darth mara hutt mara.</p>
            <h4 class=\"wdn-alt-header\">Give it meaning</h4>
            <p>Grievous coruscant thrawn solo dooku. Wicket bothan moff ewok twi'lek dantooine. Ackbar jawa jango coruscant gamorrean thrawn skywalker han. Ben moff solo naboo. Moff ben fisto windu. Moff mandalorians jabba ponda hutt. Coruscant skywalker chewbacca jabba ponda moff hutt darth k-3po. Skywalker wedge solo skywalker moff binks. Mustafar darth calamari vader calamari. Fett solo jade organa mandalorians obi-wan darth skywalker. Yoda greedo darth wedge. Antilles owen c-3po sidious calamari. Ewok droid vader antilles ben padmé wicket darth ahsoka.</p>
            <p>Ewok anakin jawa binks hutt ackbar. Solo hoth antilles mon binks chewbacca. Luuke ben ben sebulba hutt antilles. Dantooine darth leia moff solo sidious skywalker hoth. Tatooine jinn yoda solo boba yoda jade boba antilles. Binks dantooine solo jango. Skywalker maul vader binks lando. Kamino mandalore bespin darth jabba moff luke wampa. Binks jade antilles dagobah mothma. Solo owen owen tusken raider droid. Obi-wan fett c-3p0 lando jade sidious. Jinn boba solo darth lars jade. Jade fett ventress mustafar.</p>
            <p>Lucas ipsum dolor sit amet fisto antilles leia calamari hoth darth ackbar naboo darth tatooine. Secura owen kenobi watto. Ackbar biggs mace kessel. Ewok fett darth moff baba. Padmé yoda moff luke. Skywalker qui-gon dooku jinn mothma biggs chewbacca wampa wookiee. Dantooine ponda sidious aayla utapau hutt yavin darth anakin. Calamari solo moff kit lars kashyyyk ackbar r2-d2 skywalker. Lando skywalker wampa kit. Darth antilles calrissian organa dagobah moff ahsoka. Tatooine boba wookiee grievous solo mon.</p>
            <p>Calamari jinn jabba jar amidala calamari c-3p0 jade twi'lek. Utapau mon dantooine zabrak amidala vader. Organa wicket yavin biggs grievous tatooine owen hoth. Darth mace jinn coruscant antilles r2-d2. Jinn mon coruscant thrawn. Kessel kenobi ahsoka organa chewbacca tusken raider luke obi-wan. Ponda darth moff skywalker antilles. Sidious hutt skywalker skywalker amidala calamari ben. Moff hutt windu cade hutt dantooine han hutt fett. Lobot darth organa biggs padmé. Obi-wan mon darth organa sith antilles.</p>
            <p>Lars organa mandalorians darth ackbar moff palpatine dooku. Darth fett windu binks lobot hutt binks obi-wan. Skywalker obi-wan biggs mon. Moff lando watto antilles hoth ahsoka. Skywalker darth antilles kenobi ewok skywalker. Greedo binks ackbar k-3po qui-gon. Kessel moff sidious skywalker hutt hutt. Hoth gonk jango amidala. Antilles antilles anakin jango biggs. Utapau chewbacca skywalker leia. Antilles antilles hutt utapau mara moff windu. Kessel luuke maul fett mara c-3po skywalker ben darth. Darth mara hutt mara.</p>
            <p>Grievous coruscant thrawn solo dooku. Wicket bothan moff ewok twi'lek dantooine. Ackbar jawa jango coruscant gamorrean thrawn skywalker han. Ben moff solo naboo. Moff ben fisto windu. Moff mandalorians jabba ponda hutt. Coruscant skywalker chewbacca jabba ponda moff hutt darth k-3po. Skywalker wedge solo skywalker moff binks. Mustafar darth calamari vader calamari. Fett solo jade organa mandalorians obi-wan darth skywalker. Yoda greedo darth wedge. Antilles owen c-3po sidious calamari. Ewok droid vader antilles ben padmé wicket darth ahsoka.</p>
            <p>Ewok anakin jawa binks hutt ackbar. Solo hoth antilles mon binks chewbacca. Luuke ben ben sebulba hutt antilles. Dantooine darth leia moff solo sidious skywalker hoth. Tatooine jinn yoda solo boba yoda jade boba antilles. Binks dantooine solo jango. Skywalker maul vader binks lando. Kamino mandalore bespin darth jabba moff luke wampa. Binks jade antilles dagobah mothma. Solo owen owen tusken raider droid. Obi-wan fett c-3p0 lando jade sidious. Jinn boba solo darth lars jade. Jade fett ventress mustafar.</p>
            <p>Lucas ipsum dolor sit amet fisto antilles leia calamari hoth darth ackbar naboo darth tatooine. Secura owen kenobi watto. Ackbar biggs mace kessel. Ewok fett darth moff baba. Padmé yoda moff luke. Skywalker qui-gon dooku jinn mothma biggs chewbacca wampa wookiee. Dantooine ponda sidious aayla utapau hutt yavin darth anakin. Calamari solo moff kit lars kashyyyk ackbar r2-d2 skywalker. Lando skywalker wampa kit. Darth antilles calrissian organa dagobah moff ahsoka. Tatooine boba wookiee grievous solo mon.</p>
            <p>Calamari jinn jabba jar amidala calamari c-3p0 jade twi'lek. Utapau mon dantooine zabrak amidala vader. Organa wicket yavin biggs grievous tatooine owen hoth. Darth mace jinn coruscant antilles r2-d2. Jinn mon coruscant thrawn. Kessel kenobi ahsoka organa chewbacca tusken raider luke obi-wan. Ponda darth moff skywalker antilles. Sidious hutt skywalker skywalker amidala calamari ben. Moff hutt windu cade hutt dantooine han hutt fett. Lobot darth organa biggs padmé. Obi-wan mon darth organa sith antilles.</p>
          </div>
        </div>
      </div>
      <h2 class=\"wdn-brand\">Locked Flipbook Aside</h2>
      <div class=\"wdn-band\">
        <div class=\"wdn-stretch wdn-scroll-watch locked\" data-lerp=\"flipbook\" data-lerp-flipbook-start=\".locked-lerp-start\" data-lerp-flipbook-end=\".locked-lerp-end\">
          <figure>
            <img src=\"samplecontent/IMG_2341.jpg\" alt=\"Michael and Jackson\" />
          </figure>
          <figure>
            <img src=\"samplecontent/IMG_2345.jpg\" alt=\"Michael and Jackson\" />
          </figure>
          <figure>
            <img src=\"samplecontent/IMG_2348.jpg\" alt=\"Michael and Jackson\" />
          </figure>
        </div>
        <div class=\"wdn-grid-set wdn-scroll\">
          <div class=\"wdn-col-one-half\" style=\"float:right;background-color:rgba(255,255,255,0.8);padding:5em;\">
            <div class=\"locked-lerp-start\"></div>
            <h3 class=\"wdn-brand\">Locked flipbook aside scrolling content</h3>
            <p>Lucas ipsum dolor sit amet fisto antilles leia calamari hoth darth ackbar naboo darth tatooine. Secura owen kenobi watto. Ackbar biggs mace kessel. Ewok fett darth moff baba. Padmé yoda moff luke. Skywalker qui-gon dooku jinn mothma biggs chewbacca wampa wookiee. Dantooine ponda sidious aayla utapau hutt yavin darth anakin. Calamari solo moff kit lars kashyyyk ackbar r2-d2 skywalker. Lando skywalker wampa kit. Darth antilles calrissian organa dagobah moff ahsoka. Tatooine boba wookiee grievous solo mon.</p>
            <p>Calamari jinn jabba jar amidala calamari c-3p0 jade twi'lek. Utapau mon dantooine zabrak amidala vader. Organa wicket yavin biggs grievous tatooine owen hoth. Darth mace jinn coruscant antilles r2-d2. Jinn mon coruscant thrawn. Kessel kenobi ahsoka organa chewbacca tusken raider luke obi-wan. Ponda darth moff skywalker antilles. Sidious hutt skywalker skywalker amidala calamari ben. Moff hutt windu cade hutt dantooine han hutt fett. Lobot darth organa biggs padmé. Obi-wan mon darth organa sith antilles.</p>
            <p>Lars organa mandalorians darth ackbar moff palpatine dooku. Darth fett windu binks lobot hutt binks obi-wan. Skywalker obi-wan biggs mon. Moff lando watto antilles hoth ahsoka. Skywalker darth antilles kenobi ewok skywalker. Greedo binks ackbar k-3po qui-gon. Kessel moff sidious skywalker hutt hutt. Hoth gonk jango amidala. Antilles antilles anakin jango biggs. Utapau chewbacca skywalker leia. Antilles antilles hutt utapau mara moff windu. Kessel luuke maul fett mara c-3po skywalker ben darth. Darth mara hutt mara.</p>
            <h4 class=\"wdn-alt-header\">Give it meaning</h4>
            <p>Grievous coruscant thrawn solo dooku. Wicket bothan moff ewok twi'lek dantooine. Ackbar jawa jango coruscant gamorrean thrawn skywalker han. Ben moff solo naboo. Moff ben fisto windu. Moff mandalorians jabba ponda hutt. Coruscant skywalker chewbacca jabba ponda moff hutt darth k-3po. Skywalker wedge solo skywalker moff binks. Mustafar darth calamari vader calamari. Fett solo jade organa mandalorians obi-wan darth skywalker. Yoda greedo darth wedge. Antilles owen c-3po sidious calamari. Ewok droid vader antilles ben padmé wicket darth ahsoka.</p>
            <p>Ewok anakin jawa binks hutt ackbar. Solo hoth antilles mon binks chewbacca. Luuke ben ben sebulba hutt antilles. Dantooine darth leia moff solo sidious skywalker hoth. Tatooine jinn yoda solo boba yoda jade boba antilles. Binks dantooine solo jango. Skywalker maul vader binks lando. Kamino mandalore bespin darth jabba moff luke wampa. Binks jade antilles dagobah mothma. Solo owen owen tusken raider droid. Obi-wan fett c-3p0 lando jade sidious. Jinn boba solo darth lars jade. Jade fett ventress mustafar.</p>
            <p>Lucas ipsum dolor sit amet fisto antilles leia calamari hoth darth ackbar naboo darth tatooine. Secura owen kenobi watto. Ackbar biggs mace kessel. Ewok fett darth moff baba. Padmé yoda moff luke. Skywalker qui-gon dooku jinn mothma biggs chewbacca wampa wookiee. Dantooine ponda sidious aayla utapau hutt yavin darth anakin. Calamari solo moff kit lars kashyyyk ackbar r2-d2 skywalker. Lando skywalker wampa kit. Darth antilles calrissian organa dagobah moff ahsoka. Tatooine boba wookiee grievous solo mon.</p>
            <p>Calamari jinn jabba jar amidala calamari c-3p0 jade twi'lek. Utapau mon dantooine zabrak amidala vader. Organa wicket yavin biggs grievous tatooine owen hoth. Darth mace jinn coruscant antilles r2-d2. Jinn mon coruscant thrawn. Kessel kenobi ahsoka organa chewbacca tusken raider luke obi-wan. Ponda darth moff skywalker antilles. Sidious hutt skywalker skywalker amidala calamari ben. Moff hutt windu cade hutt dantooine han hutt fett. Lobot darth organa biggs padmé. Obi-wan mon darth organa sith antilles.</p>
            <p>Lars organa mandalorians darth ackbar moff palpatine dooku. Darth fett windu binks lobot hutt binks obi-wan. Skywalker obi-wan biggs mon. Moff lando watto antilles hoth ahsoka. Skywalker darth antilles kenobi ewok skywalker. Greedo binks ackbar k-3po qui-gon. Kessel moff sidious skywalker hutt hutt. Hoth gonk jango amidala. Antilles antilles anakin jango biggs. Utapau chewbacca skywalker leia. Antilles antilles hutt utapau mara moff windu. Kessel luuke maul fett mara c-3po skywalker ben darth. Darth mara hutt mara.</p>
            <p>Grievous coruscant thrawn solo dooku. Wicket bothan moff ewok twi'lek dantooine. Ackbar jawa jango coruscant gamorrean thrawn skywalker han. Ben moff solo naboo. Moff ben fisto windu. Moff mandalorians jabba ponda hutt. Coruscant skywalker chewbacca jabba ponda moff hutt darth k-3po. Skywalker wedge solo skywalker moff binks. Mustafar darth calamari vader calamari. Fett solo jade organa mandalorians obi-wan darth skywalker. Yoda greedo darth wedge. Antilles owen c-3po sidious calamari. Ewok droid vader antilles ben padmé wicket darth ahsoka.</p>
            <p>Ewok anakin jawa binks hutt ackbar. Solo hoth antilles mon binks chewbacca. Luuke ben ben sebulba hutt antilles. Dantooine darth leia moff solo sidious skywalker hoth. Tatooine jinn yoda solo boba yoda jade boba antilles. Binks dantooine solo jango. Skywalker maul vader binks lando. Kamino mandalore bespin darth jabba moff luke wampa. Binks jade antilles dagobah mothma. Solo owen owen tusken raider droid. Obi-wan fett c-3p0 lando jade sidious. Jinn boba solo darth lars jade. Jade fett ventress mustafar.</p>
            <p>Lucas ipsum dolor sit amet fisto antilles leia calamari hoth darth ackbar naboo darth tatooine. Secura owen kenobi watto. Ackbar biggs mace kessel. Ewok fett darth moff baba. Padmé yoda moff luke. Skywalker qui-gon dooku jinn mothma biggs chewbacca wampa wookiee. Dantooine ponda sidious aayla utapau hutt yavin darth anakin. Calamari solo moff kit lars kashyyyk ackbar r2-d2 skywalker. Lando skywalker wampa kit. Darth antilles calrissian organa dagobah moff ahsoka. Tatooine boba wookiee grievous solo mon.</p>
            <p>Calamari jinn jabba jar amidala calamari c-3p0 jade twi'lek. Utapau mon dantooine zabrak amidala vader. Organa wicket yavin biggs grievous tatooine owen hoth. Darth mace jinn coruscant antilles r2-d2. Jinn mon coruscant thrawn. Kessel kenobi ahsoka organa chewbacca tusken raider luke obi-wan. Ponda darth moff skywalker antilles. Sidious hutt skywalker skywalker amidala calamari ben. Moff hutt windu cade hutt dantooine han hutt fett. Lobot darth organa biggs padmé. Obi-wan mon darth organa sith antilles.</p>
            <div class=\"locked-lerp-end\"></div>
          </div>
        </div>
      </div>
      <script>
        WDN.initializePlugin('band_imagery');
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
        return "wdn/templates_5.3/examples/band_imagery.html";
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
    <title>Band Imagery Example</title>
  </head>
  <body data-version=\"5.3\">
    <div id=\"example-code\">
      <h1>Band Imagery, Scroll-Watch Plugin Samples</h1>
      <h2 class=\"wdn-brand\">Scale Sample</h2>
      <div class=\"wdn-band\">
        <div class=\"wdn-stretch wdn-scroll-watch\" data-lerp=\"scale\" data-lerp-scale-start=\"#dcf-header\" data-lerp-scale-end=\"#dcf-main\" data-scale-start=\"1\" data-scale-end=\"1.25\">
          <figure>
            <img src=\"samplecontent/unsplash_525a7e89953d1_1.jpg\" alt=\"Black and white sunset\" />
          </figure>
        </div>
      </div>
      <h2 class=\"wdn-brand\">Opacity Sample</h2>
      <div class=\"wdn-band\" style=\"background-color:black;\">
        <div class=\"wdn-stretch wdn-scroll-watch\" data-lerp=\"opacity\" data-lerp-opacity-start=\"#opacity-start\" data-lerp-opacity-end=\"#flipbook-end\" data-opacity-start=\"1\" data-opacity-end=\"0.0\">
          <figure>
            <img src=\"samplecontent/unsplash_522af94630a3d_1.jpg\" alt=\"Wheat field\" />
          </figure>
        </div>
        <div id=\"opacity-start\" style=\"position:absolute; bottom:55%;\"></div>
        <div id=\"opacity-end\" style=\"position:absolute; bottom:30%;\"></div>
      </div>
      <h2 id=\"flipbook-end\" class=\"wdn-brand\">Flipbook Sample</h2>
      <div class=\"wdn-band\">
        <div class=\"wdn-stretch wdn-scroll-watch\" data-lerp=\"flipbook\" data-lerp-flipbook-start=\"#opacity-end\" data-lerp-flipbook-end=\"#flipbook-end\">
          <figure>
            <img src=\"samplecontent/IMG_2341.jpg\" alt=\"Michael and Jackson\" />
          </figure>
          <figure>
            <img src=\"samplecontent/IMG_2345.jpg\" alt=\"Michael and Jackson\" />
          </figure>
          <figure>
            <img src=\"samplecontent/IMG_2348.jpg\" alt=\"Michael and Jackson\" />
          </figure>
        </div>
      </div>
      <h2 class=\"wdn-brand\">Locked Aside</h2>
      <div class=\"wdn-band\">
        <div class=\"wdn-stretch wdn-scroll-watch locked\">
          <figure>
            <img src=\"samplecontent/unsplash_527bf5fd7f5f6_1.jpg\" alt=\"Tractor in a field\" />
          </figure>
        </div>
        <div class=\"wdn-grid-set wdn-scroll\">
          <div class=\"wdn-col-one-half\" style=\"float:right;background-color:rgba(255,255,255,0.8);padding:5em;\">
            <h3 class=\"wdn-brand\">Locked figure aside scrolling content</h3>
            <h4 class=\"wdn-alt-header\">Start your story</h4>
            <p>Lucas ipsum dolor sit amet fisto antilles leia calamari hoth darth ackbar naboo darth tatooine. Secura owen kenobi watto. Ackbar biggs mace kessel. Ewok fett darth moff baba. Padmé yoda moff luke. Skywalker qui-gon dooku jinn mothma biggs chewbacca wampa wookiee. Dantooine ponda sidious aayla utapau hutt yavin darth anakin. Calamari solo moff kit lars kashyyyk ackbar r2-d2 skywalker. Lando skywalker wampa kit. Darth antilles calrissian organa dagobah moff ahsoka. Tatooine boba wookiee grievous solo mon.</p>
            <p>Calamari jinn jabba jar amidala calamari c-3p0 jade twi'lek. Utapau mon dantooine zabrak amidala vader. Organa wicket yavin biggs grievous tatooine owen hoth. Darth mace jinn coruscant antilles r2-d2. Jinn mon coruscant thrawn. Kessel kenobi ahsoka organa chewbacca tusken raider luke obi-wan. Ponda darth moff skywalker antilles. Sidious hutt skywalker skywalker amidala calamari ben. Moff hutt windu cade hutt dantooine han hutt fett. Lobot darth organa biggs padmé. Obi-wan mon darth organa sith antilles.</p>
            <p>Lars organa mandalorians darth ackbar moff palpatine dooku. Darth fett windu binks lobot hutt binks obi-wan. Skywalker obi-wan biggs mon. Moff lando watto antilles hoth ahsoka. Skywalker darth antilles kenobi ewok skywalker. Greedo binks ackbar k-3po qui-gon. Kessel moff sidious skywalker hutt hutt. Hoth gonk jango amidala. Antilles antilles anakin jango biggs. Utapau chewbacca skywalker leia. Antilles antilles hutt utapau mara moff windu. Kessel luuke maul fett mara c-3po skywalker ben darth. Darth mara hutt mara.</p>
            <h4 class=\"wdn-alt-header\">Give it meaning</h4>
            <p>Grievous coruscant thrawn solo dooku. Wicket bothan moff ewok twi'lek dantooine. Ackbar jawa jango coruscant gamorrean thrawn skywalker han. Ben moff solo naboo. Moff ben fisto windu. Moff mandalorians jabba ponda hutt. Coruscant skywalker chewbacca jabba ponda moff hutt darth k-3po. Skywalker wedge solo skywalker moff binks. Mustafar darth calamari vader calamari. Fett solo jade organa mandalorians obi-wan darth skywalker. Yoda greedo darth wedge. Antilles owen c-3po sidious calamari. Ewok droid vader antilles ben padmé wicket darth ahsoka.</p>
            <p>Ewok anakin jawa binks hutt ackbar. Solo hoth antilles mon binks chewbacca. Luuke ben ben sebulba hutt antilles. Dantooine darth leia moff solo sidious skywalker hoth. Tatooine jinn yoda solo boba yoda jade boba antilles. Binks dantooine solo jango. Skywalker maul vader binks lando. Kamino mandalore bespin darth jabba moff luke wampa. Binks jade antilles dagobah mothma. Solo owen owen tusken raider droid. Obi-wan fett c-3p0 lando jade sidious. Jinn boba solo darth lars jade. Jade fett ventress mustafar.</p>
            <p>Lucas ipsum dolor sit amet fisto antilles leia calamari hoth darth ackbar naboo darth tatooine. Secura owen kenobi watto. Ackbar biggs mace kessel. Ewok fett darth moff baba. Padmé yoda moff luke. Skywalker qui-gon dooku jinn mothma biggs chewbacca wampa wookiee. Dantooine ponda sidious aayla utapau hutt yavin darth anakin. Calamari solo moff kit lars kashyyyk ackbar r2-d2 skywalker. Lando skywalker wampa kit. Darth antilles calrissian organa dagobah moff ahsoka. Tatooine boba wookiee grievous solo mon.</p>
            <p>Calamari jinn jabba jar amidala calamari c-3p0 jade twi'lek. Utapau mon dantooine zabrak amidala vader. Organa wicket yavin biggs grievous tatooine owen hoth. Darth mace jinn coruscant antilles r2-d2. Jinn mon coruscant thrawn. Kessel kenobi ahsoka organa chewbacca tusken raider luke obi-wan. Ponda darth moff skywalker antilles. Sidious hutt skywalker skywalker amidala calamari ben. Moff hutt windu cade hutt dantooine han hutt fett. Lobot darth organa biggs padmé. Obi-wan mon darth organa sith antilles.</p>
            <p>Lars organa mandalorians darth ackbar moff palpatine dooku. Darth fett windu binks lobot hutt binks obi-wan. Skywalker obi-wan biggs mon. Moff lando watto antilles hoth ahsoka. Skywalker darth antilles kenobi ewok skywalker. Greedo binks ackbar k-3po qui-gon. Kessel moff sidious skywalker hutt hutt. Hoth gonk jango amidala. Antilles antilles anakin jango biggs. Utapau chewbacca skywalker leia. Antilles antilles hutt utapau mara moff windu. Kessel luuke maul fett mara c-3po skywalker ben darth. Darth mara hutt mara.</p>
            <p>Grievous coruscant thrawn solo dooku. Wicket bothan moff ewok twi'lek dantooine. Ackbar jawa jango coruscant gamorrean thrawn skywalker han. Ben moff solo naboo. Moff ben fisto windu. Moff mandalorians jabba ponda hutt. Coruscant skywalker chewbacca jabba ponda moff hutt darth k-3po. Skywalker wedge solo skywalker moff binks. Mustafar darth calamari vader calamari. Fett solo jade organa mandalorians obi-wan darth skywalker. Yoda greedo darth wedge. Antilles owen c-3po sidious calamari. Ewok droid vader antilles ben padmé wicket darth ahsoka.</p>
            <p>Ewok anakin jawa binks hutt ackbar. Solo hoth antilles mon binks chewbacca. Luuke ben ben sebulba hutt antilles. Dantooine darth leia moff solo sidious skywalker hoth. Tatooine jinn yoda solo boba yoda jade boba antilles. Binks dantooine solo jango. Skywalker maul vader binks lando. Kamino mandalore bespin darth jabba moff luke wampa. Binks jade antilles dagobah mothma. Solo owen owen tusken raider droid. Obi-wan fett c-3p0 lando jade sidious. Jinn boba solo darth lars jade. Jade fett ventress mustafar.</p>
            <p>Lucas ipsum dolor sit amet fisto antilles leia calamari hoth darth ackbar naboo darth tatooine. Secura owen kenobi watto. Ackbar biggs mace kessel. Ewok fett darth moff baba. Padmé yoda moff luke. Skywalker qui-gon dooku jinn mothma biggs chewbacca wampa wookiee. Dantooine ponda sidious aayla utapau hutt yavin darth anakin. Calamari solo moff kit lars kashyyyk ackbar r2-d2 skywalker. Lando skywalker wampa kit. Darth antilles calrissian organa dagobah moff ahsoka. Tatooine boba wookiee grievous solo mon.</p>
            <p>Calamari jinn jabba jar amidala calamari c-3p0 jade twi'lek. Utapau mon dantooine zabrak amidala vader. Organa wicket yavin biggs grievous tatooine owen hoth. Darth mace jinn coruscant antilles r2-d2. Jinn mon coruscant thrawn. Kessel kenobi ahsoka organa chewbacca tusken raider luke obi-wan. Ponda darth moff skywalker antilles. Sidious hutt skywalker skywalker amidala calamari ben. Moff hutt windu cade hutt dantooine han hutt fett. Lobot darth organa biggs padmé. Obi-wan mon darth organa sith antilles.</p>
          </div>
        </div>
      </div>
      <h2 class=\"wdn-brand\">Locked Flipbook Aside</h2>
      <div class=\"wdn-band\">
        <div class=\"wdn-stretch wdn-scroll-watch locked\" data-lerp=\"flipbook\" data-lerp-flipbook-start=\".locked-lerp-start\" data-lerp-flipbook-end=\".locked-lerp-end\">
          <figure>
            <img src=\"samplecontent/IMG_2341.jpg\" alt=\"Michael and Jackson\" />
          </figure>
          <figure>
            <img src=\"samplecontent/IMG_2345.jpg\" alt=\"Michael and Jackson\" />
          </figure>
          <figure>
            <img src=\"samplecontent/IMG_2348.jpg\" alt=\"Michael and Jackson\" />
          </figure>
        </div>
        <div class=\"wdn-grid-set wdn-scroll\">
          <div class=\"wdn-col-one-half\" style=\"float:right;background-color:rgba(255,255,255,0.8);padding:5em;\">
            <div class=\"locked-lerp-start\"></div>
            <h3 class=\"wdn-brand\">Locked flipbook aside scrolling content</h3>
            <p>Lucas ipsum dolor sit amet fisto antilles leia calamari hoth darth ackbar naboo darth tatooine. Secura owen kenobi watto. Ackbar biggs mace kessel. Ewok fett darth moff baba. Padmé yoda moff luke. Skywalker qui-gon dooku jinn mothma biggs chewbacca wampa wookiee. Dantooine ponda sidious aayla utapau hutt yavin darth anakin. Calamari solo moff kit lars kashyyyk ackbar r2-d2 skywalker. Lando skywalker wampa kit. Darth antilles calrissian organa dagobah moff ahsoka. Tatooine boba wookiee grievous solo mon.</p>
            <p>Calamari jinn jabba jar amidala calamari c-3p0 jade twi'lek. Utapau mon dantooine zabrak amidala vader. Organa wicket yavin biggs grievous tatooine owen hoth. Darth mace jinn coruscant antilles r2-d2. Jinn mon coruscant thrawn. Kessel kenobi ahsoka organa chewbacca tusken raider luke obi-wan. Ponda darth moff skywalker antilles. Sidious hutt skywalker skywalker amidala calamari ben. Moff hutt windu cade hutt dantooine han hutt fett. Lobot darth organa biggs padmé. Obi-wan mon darth organa sith antilles.</p>
            <p>Lars organa mandalorians darth ackbar moff palpatine dooku. Darth fett windu binks lobot hutt binks obi-wan. Skywalker obi-wan biggs mon. Moff lando watto antilles hoth ahsoka. Skywalker darth antilles kenobi ewok skywalker. Greedo binks ackbar k-3po qui-gon. Kessel moff sidious skywalker hutt hutt. Hoth gonk jango amidala. Antilles antilles anakin jango biggs. Utapau chewbacca skywalker leia. Antilles antilles hutt utapau mara moff windu. Kessel luuke maul fett mara c-3po skywalker ben darth. Darth mara hutt mara.</p>
            <h4 class=\"wdn-alt-header\">Give it meaning</h4>
            <p>Grievous coruscant thrawn solo dooku. Wicket bothan moff ewok twi'lek dantooine. Ackbar jawa jango coruscant gamorrean thrawn skywalker han. Ben moff solo naboo. Moff ben fisto windu. Moff mandalorians jabba ponda hutt. Coruscant skywalker chewbacca jabba ponda moff hutt darth k-3po. Skywalker wedge solo skywalker moff binks. Mustafar darth calamari vader calamari. Fett solo jade organa mandalorians obi-wan darth skywalker. Yoda greedo darth wedge. Antilles owen c-3po sidious calamari. Ewok droid vader antilles ben padmé wicket darth ahsoka.</p>
            <p>Ewok anakin jawa binks hutt ackbar. Solo hoth antilles mon binks chewbacca. Luuke ben ben sebulba hutt antilles. Dantooine darth leia moff solo sidious skywalker hoth. Tatooine jinn yoda solo boba yoda jade boba antilles. Binks dantooine solo jango. Skywalker maul vader binks lando. Kamino mandalore bespin darth jabba moff luke wampa. Binks jade antilles dagobah mothma. Solo owen owen tusken raider droid. Obi-wan fett c-3p0 lando jade sidious. Jinn boba solo darth lars jade. Jade fett ventress mustafar.</p>
            <p>Lucas ipsum dolor sit amet fisto antilles leia calamari hoth darth ackbar naboo darth tatooine. Secura owen kenobi watto. Ackbar biggs mace kessel. Ewok fett darth moff baba. Padmé yoda moff luke. Skywalker qui-gon dooku jinn mothma biggs chewbacca wampa wookiee. Dantooine ponda sidious aayla utapau hutt yavin darth anakin. Calamari solo moff kit lars kashyyyk ackbar r2-d2 skywalker. Lando skywalker wampa kit. Darth antilles calrissian organa dagobah moff ahsoka. Tatooine boba wookiee grievous solo mon.</p>
            <p>Calamari jinn jabba jar amidala calamari c-3p0 jade twi'lek. Utapau mon dantooine zabrak amidala vader. Organa wicket yavin biggs grievous tatooine owen hoth. Darth mace jinn coruscant antilles r2-d2. Jinn mon coruscant thrawn. Kessel kenobi ahsoka organa chewbacca tusken raider luke obi-wan. Ponda darth moff skywalker antilles. Sidious hutt skywalker skywalker amidala calamari ben. Moff hutt windu cade hutt dantooine han hutt fett. Lobot darth organa biggs padmé. Obi-wan mon darth organa sith antilles.</p>
            <p>Lars organa mandalorians darth ackbar moff palpatine dooku. Darth fett windu binks lobot hutt binks obi-wan. Skywalker obi-wan biggs mon. Moff lando watto antilles hoth ahsoka. Skywalker darth antilles kenobi ewok skywalker. Greedo binks ackbar k-3po qui-gon. Kessel moff sidious skywalker hutt hutt. Hoth gonk jango amidala. Antilles antilles anakin jango biggs. Utapau chewbacca skywalker leia. Antilles antilles hutt utapau mara moff windu. Kessel luuke maul fett mara c-3po skywalker ben darth. Darth mara hutt mara.</p>
            <p>Grievous coruscant thrawn solo dooku. Wicket bothan moff ewok twi'lek dantooine. Ackbar jawa jango coruscant gamorrean thrawn skywalker han. Ben moff solo naboo. Moff ben fisto windu. Moff mandalorians jabba ponda hutt. Coruscant skywalker chewbacca jabba ponda moff hutt darth k-3po. Skywalker wedge solo skywalker moff binks. Mustafar darth calamari vader calamari. Fett solo jade organa mandalorians obi-wan darth skywalker. Yoda greedo darth wedge. Antilles owen c-3po sidious calamari. Ewok droid vader antilles ben padmé wicket darth ahsoka.</p>
            <p>Ewok anakin jawa binks hutt ackbar. Solo hoth antilles mon binks chewbacca. Luuke ben ben sebulba hutt antilles. Dantooine darth leia moff solo sidious skywalker hoth. Tatooine jinn yoda solo boba yoda jade boba antilles. Binks dantooine solo jango. Skywalker maul vader binks lando. Kamino mandalore bespin darth jabba moff luke wampa. Binks jade antilles dagobah mothma. Solo owen owen tusken raider droid. Obi-wan fett c-3p0 lando jade sidious. Jinn boba solo darth lars jade. Jade fett ventress mustafar.</p>
            <p>Lucas ipsum dolor sit amet fisto antilles leia calamari hoth darth ackbar naboo darth tatooine. Secura owen kenobi watto. Ackbar biggs mace kessel. Ewok fett darth moff baba. Padmé yoda moff luke. Skywalker qui-gon dooku jinn mothma biggs chewbacca wampa wookiee. Dantooine ponda sidious aayla utapau hutt yavin darth anakin. Calamari solo moff kit lars kashyyyk ackbar r2-d2 skywalker. Lando skywalker wampa kit. Darth antilles calrissian organa dagobah moff ahsoka. Tatooine boba wookiee grievous solo mon.</p>
            <p>Calamari jinn jabba jar amidala calamari c-3p0 jade twi'lek. Utapau mon dantooine zabrak amidala vader. Organa wicket yavin biggs grievous tatooine owen hoth. Darth mace jinn coruscant antilles r2-d2. Jinn mon coruscant thrawn. Kessel kenobi ahsoka organa chewbacca tusken raider luke obi-wan. Ponda darth moff skywalker antilles. Sidious hutt skywalker skywalker amidala calamari ben. Moff hutt windu cade hutt dantooine han hutt fett. Lobot darth organa biggs padmé. Obi-wan mon darth organa sith antilles.</p>
            <div class=\"locked-lerp-end\"></div>
          </div>
        </div>
      </div>
      <script>
        WDN.initializePlugin('band_imagery');
      </script>
    </div>
  </body>
</html>
", "wdn/templates_5.3/examples/band_imagery.html", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/examples/band_imagery.html");
    }
}
