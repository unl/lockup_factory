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

/* wdn/templates_5.3/js/compressed/plugins/gsap/CSSRulePlugin.min.js.map */
class __TwigTemplate_f57be260ca350c271a569dcf2af8d76e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/plugins/gsap/CSSRulePlugin.min.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/plugins/gsap/CSSRulePlugin.min.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"../src/CSSRulePlugin.js\"],\"names\":[\"_windowExists\",\"window\",\"_getGSAP\",\"gsap\",\"registerPlugin\",\"_checkRegister\",\"_coreInitted\",\"_initCore\",\"CSSPlugin\",\"console\",\"warn\",\"_doc\",\"core\",\"document\",\"plugins\",\"css\",\"CSSRulePlugin\",\"version\",\"name\",\"init\",\"target\",\"value\",\"tween\",\"index\",\"targets\",\"cssText\",\"div\",\"_gsProxy\",\"createElement\",\"this\",\"ss\",\"style\",\"prototype\",\"call\",\"render\",\"ratio\",\"data\",\"i\",\"pt\",\"_pt\",\"r\",\"d\",\"_next\",\"length\",\"getRule\",\"selector\",\"j\",\"curSS\",\"cs\",\"a\",\"ruleProp\",\"all\",\"styleSheets\",\"pseudo\",\"charAt\",\"split\",\"join\",\"toLowerCase\",\"e\",\"selectorText\",\"indexOf\",\"push\",\"register\"],\"mappings\":\"4MAYiB,SAAhBA,KAAAA,MAAyC,mBAAZC,QAClB,QAAXC,KAAAA,MAAiBC,IAASH,MAAoBG,EAAOF,OAAOE,OAASA,EAAKC,gBAAkBD,EAC3E,QAAjBE,KAAAA,MACMC,KACJC,IACKC,GACJC,QAAQC,KAAK,yDAGRJ,EAAAA,GAVLH,GAAMG,EAAoBK,EAAMH,EAYnCD,EAAY,SAAAK,GACXT,EAAOS,GAAQV,IACXF,MAEHW,EAAOE,UAEJV,IACHK,EAAYL,EAAKW,QAAQC,OAExBT,EAAe,IAMNU,GACZC,QAAS,QACTC,KAAM,UACNC,KAAAA,SAAKC,EAAQC,EAAOC,EAAOC,EAAOC,GAAAA,IAC5BnB,SAAAA,KAA2Be,EAAOK,QAAAA,OAAAA,CAC/B,IAEJC,GAAMN,EAAOO,SAAWP,EAAOO,UAAYhB,EAAKiB,cAAc,MAAAC,MAC7DC,GAAKV,EAAAA,KACLW,MAAQL,EAAIK,MACjBL,EAAIK,MAAMN,QAAUL,EAAOK,QAC3BjB,EAAUwB,UAAUb,KAAKc,KAAKJ,KAAMH,EAAKL,EAAOC,EAAOC,EAAOC,IAE/DU,OAAAA,SAAOC,EAAOC,GAAAA,IAAAA,GAIZC,GAHGC,EAAKF,EAAKG,IACbR,EAAQK,EAAKL,MACbD,EAAKM,EAAKN,GAEJQ,GACNA,EAAGE,EAAEL,EAAOG,EAAGG,GACfH,EAAKA,EAAGI,KAAAA,KAETL,EAAIN,EAAMY,QACI,IAALN,GACRP,EAAGC,EAAMM,IAAMN,EAAMA,EAAMM,KAG7BO,QAAAA,SAAQC,GACPxC,GAAAA,IAKCyC,GAAGC,EAAOC,EAAIC,EAJXC,EAAWvC,EAAKwC,IAAM,QAAU,WACnCC,EAAczC,EAAKyC,YACnBf,EAAIe,EAAYT,OAChBU,EAAiC,MAAvBR,EAASS,OAAO,EAAA,KAE3BT,GAAYQ,EAAS,GAAK,KAAOR,EAASU,MAAM,MAAMC,KAAK,KAAKC,cAAgB,IAC5EJ,IACHJ,MAEMZ,KAAK,CAAA,IAAA,KAGVU,EAAQK,EAAYf,GAAGa,IAAAA,QAIvBJ,GAAIC,EAAMJ,OACT,MAAOe,GACRjD,QAAQC,KAAKgD,EAAAA,UAAAA,MAGA,IAALZ,GAAAA,IACRE,EAAKD,EAAMD,IACJa,eAAyG,KAAxF,IAAMX,EAAGW,aAAaJ,MAAM,MAAMC,KAAK,KAAKC,cAAgB,KAAKG,QAAQf,GAAkB,CAAA,IAC9GQ,EAAAA,MAGIL,GAAGjB,KAFVkB,GAAEY,KAAKb,EAAGjB,QAAAA,MAOPkB,IAERa,SAAUvD,EAGXL,MAAcC,EAAKC,eAAeY,GAAAA,EAAAA,cAAAA,EAAAA,EAAAA,QAAAA,EAAAA,mBAAAA,SAAAA,SAAAA,EAAAA,OAAAA,eAAAA,EAAAA,cAAAA,OAAAA,UAAAA,GAAAA\",\"file\":\"CSSRulePlugin.min.js\",\"sourcesContent\":[\"/*!\\n * CSSRulePlugin 3.7.1\\n * https://greensock.com\\n *\\n * @license Copyright 2008-2021, GreenSock. All rights reserved.\\n * Subject to the terms at https://greensock.com/standard-license or for\\n * Club GreenSock members, the agreement issued with that membership.\\n * @author: Jack Doyle, jack@greensock.com\\n*/\\n/* eslint-disable */\\n\\nlet gsap, _coreInitted, _win, _doc, CSSPlugin,\\n\\t_windowExists = () => typeof(window) !== \\\"undefined\\\",\\n\\t_getGSAP = () => gsap || (_windowExists() && (gsap = window.gsap) && gsap.registerPlugin && gsap),\\n\\t_checkRegister = () => {\\n\\t\\tif (!_coreInitted) {\\n\\t\\t\\t_initCore();\\n\\t\\t\\tif (!CSSPlugin) {\\n\\t\\t\\t\\tconsole.warn(\\\"Please gsap.registerPlugin(CSSPlugin, CSSRulePlugin)\\\");\\n\\t\\t\\t}\\n\\t\\t}\\n\\t\\treturn _coreInitted;\\n\\t},\\n\\t_initCore = core => {\\n\\t\\tgsap = core || _getGSAP();\\n\\t\\tif (_windowExists()) {\\n\\t\\t\\t_win = window;\\n\\t\\t\\t_doc = document;\\n\\t\\t}\\n\\t\\tif (gsap) {\\n\\t\\t\\tCSSPlugin = gsap.plugins.css;\\n\\t\\t\\tif (CSSPlugin) {\\n\\t\\t\\t\\t_coreInitted = 1;\\n\\t\\t\\t}\\n\\t\\t}\\n\\t};\\n\\n\\nexport const CSSRulePlugin = {\\n\\tversion: \\\"3.7.1\\\",\\n\\tname: \\\"cssRule\\\",\\n\\tinit(target, value, tween, index, targets) {\\n\\t\\tif (!_checkRegister() || typeof(target.cssText) === \\\"undefined\\\") {\\n\\t\\t\\treturn false;\\n\\t\\t}\\n\\t\\tlet div = target._gsProxy = target._gsProxy || _doc.createElement(\\\"div\\\");\\n\\t\\tthis.ss = target;\\n\\t\\tthis.style = div.style;\\n\\t\\tdiv.style.cssText = target.cssText;\\n\\t\\tCSSPlugin.prototype.init.call(this, div, value, tween, index, targets); //we just offload all the work to the regular CSSPlugin and then copy the cssText back over to the rule in the render() method. This allows us to have all of the updates to CSSPlugin automatically flow through to CSSRulePlugin instead of having to maintain both\\n\\t},\\n\\trender(ratio, data) {\\n\\t\\tlet pt = data._pt,\\n\\t\\t\\tstyle = data.style,\\n\\t\\t\\tss = data.ss,\\n\\t\\t\\ti;\\n\\t\\twhile (pt) {\\n\\t\\t\\tpt.r(ratio, pt.d);\\n\\t\\t\\tpt = pt._next;\\n\\t\\t}\\n\\t\\ti = style.length;\\n\\t\\twhile (--i > -1) {\\n\\t\\t\\tss[style[i]] = style[style[i]];\\n\\t\\t}\\n\\t},\\n\\tgetRule(selector) {\\n\\t\\t_checkRegister();\\n\\t\\tlet ruleProp = _doc.all ? \\\"rules\\\" : \\\"cssRules\\\",\\n\\t\\t\\tstyleSheets = _doc.styleSheets,\\n\\t\\t\\ti = styleSheets.length,\\n\\t\\t\\tpseudo = (selector.charAt(0) === \\\":\\\"),\\n\\t\\t\\tj, curSS, cs, a;\\n\\t\\tselector = (pseudo ? \\\"\\\" : \\\",\\\") + selector.split(\\\"::\\\").join(\\\":\\\").toLowerCase() + \\\",\\\"; //note: old versions of IE report tag name selectors as upper case, so we just change everything to lowercase.\\n\\t\\tif (pseudo) {\\n\\t\\t\\ta = [];\\n\\t\\t}\\n\\t\\twhile (i--) {\\n\\t\\t\\t//Firefox may throw insecure operation errors when css is loaded from other domains, so try/catch.\\n\\t\\t\\ttry {\\n\\t\\t\\t\\tcurSS = styleSheets[i][ruleProp];\\n\\t\\t\\t\\tif (!curSS) {\\n\\t\\t\\t\\t\\tcontinue;\\n\\t\\t\\t\\t}\\n\\t\\t\\t\\tj = curSS.length;\\n\\t\\t\\t} catch (e) {\\n\\t\\t\\t\\tconsole.warn(e);\\n\\t\\t\\t\\tcontinue;\\n\\t\\t\\t}\\n\\t\\t\\twhile (--j > -1) {\\n\\t\\t\\t\\tcs = curSS[j];\\n\\t\\t\\t\\tif (cs.selectorText && (\\\",\\\" + cs.selectorText.split(\\\"::\\\").join(\\\":\\\").toLowerCase() + \\\",\\\").indexOf(selector) !== -1) { //note: IE adds an extra \\\":\\\" to pseudo selectors, so .myClass:after becomes .myClass::after, so we need to strip the extra one out.\\n\\t\\t\\t\\t\\tif (pseudo) {\\n\\t\\t\\t\\t\\t\\ta.push(cs.style);\\n\\t\\t\\t\\t\\t} else {\\n\\t\\t\\t\\t\\t\\treturn cs.style;\\n\\t\\t\\t\\t\\t}\\n\\t\\t\\t\\t}\\n\\t\\t\\t}\\n\\t\\t}\\n\\t\\treturn a;\\n\\t},\\n\\tregister: _initCore\\n};\\n\\n_getGSAP() && gsap.registerPlugin(CSSRulePlugin);\\n\\nexport { CSSRulePlugin as default };\"]}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/plugins/gsap/CSSRulePlugin.min.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"../src/CSSRulePlugin.js\"],\"names\":[\"_windowExists\",\"window\",\"_getGSAP\",\"gsap\",\"registerPlugin\",\"_checkRegister\",\"_coreInitted\",\"_initCore\",\"CSSPlugin\",\"console\",\"warn\",\"_doc\",\"core\",\"document\",\"plugins\",\"css\",\"CSSRulePlugin\",\"version\",\"name\",\"init\",\"target\",\"value\",\"tween\",\"index\",\"targets\",\"cssText\",\"div\",\"_gsProxy\",\"createElement\",\"this\",\"ss\",\"style\",\"prototype\",\"call\",\"render\",\"ratio\",\"data\",\"i\",\"pt\",\"_pt\",\"r\",\"d\",\"_next\",\"length\",\"getRule\",\"selector\",\"j\",\"curSS\",\"cs\",\"a\",\"ruleProp\",\"all\",\"styleSheets\",\"pseudo\",\"charAt\",\"split\",\"join\",\"toLowerCase\",\"e\",\"selectorText\",\"indexOf\",\"push\",\"register\"],\"mappings\":\"4MAYiB,SAAhBA,KAAAA,MAAyC,mBAAZC,QAClB,QAAXC,KAAAA,MAAiBC,IAASH,MAAoBG,EAAOF,OAAOE,OAASA,EAAKC,gBAAkBD,EAC3E,QAAjBE,KAAAA,MACMC,KACJC,IACKC,GACJC,QAAQC,KAAK,yDAGRJ,EAAAA,GAVLH,GAAMG,EAAoBK,EAAMH,EAYnCD,EAAY,SAAAK,GACXT,EAAOS,GAAQV,IACXF,MAEHW,EAAOE,UAEJV,IACHK,EAAYL,EAAKW,QAAQC,OAExBT,EAAe,IAMNU,GACZC,QAAS,QACTC,KAAM,UACNC,KAAAA,SAAKC,EAAQC,EAAOC,EAAOC,EAAOC,GAAAA,IAC5BnB,SAAAA,KAA2Be,EAAOK,QAAAA,OAAAA,CAC/B,IAEJC,GAAMN,EAAOO,SAAWP,EAAOO,UAAYhB,EAAKiB,cAAc,MAAAC,MAC7DC,GAAKV,EAAAA,KACLW,MAAQL,EAAIK,MACjBL,EAAIK,MAAMN,QAAUL,EAAOK,QAC3BjB,EAAUwB,UAAUb,KAAKc,KAAKJ,KAAMH,EAAKL,EAAOC,EAAOC,EAAOC,IAE/DU,OAAAA,SAAOC,EAAOC,GAAAA,IAAAA,GAIZC,GAHGC,EAAKF,EAAKG,IACbR,EAAQK,EAAKL,MACbD,EAAKM,EAAKN,GAEJQ,GACNA,EAAGE,EAAEL,EAAOG,EAAGG,GACfH,EAAKA,EAAGI,KAAAA,KAETL,EAAIN,EAAMY,QACI,IAALN,GACRP,EAAGC,EAAMM,IAAMN,EAAMA,EAAMM,KAG7BO,QAAAA,SAAQC,GACPxC,GAAAA,IAKCyC,GAAGC,EAAOC,EAAIC,EAJXC,EAAWvC,EAAKwC,IAAM,QAAU,WACnCC,EAAczC,EAAKyC,YACnBf,EAAIe,EAAYT,OAChBU,EAAiC,MAAvBR,EAASS,OAAO,EAAA,KAE3BT,GAAYQ,EAAS,GAAK,KAAOR,EAASU,MAAM,MAAMC,KAAK,KAAKC,cAAgB,IAC5EJ,IACHJ,MAEMZ,KAAK,CAAA,IAAA,KAGVU,EAAQK,EAAYf,GAAGa,IAAAA,QAIvBJ,GAAIC,EAAMJ,OACT,MAAOe,GACRjD,QAAQC,KAAKgD,EAAAA,UAAAA,MAGA,IAALZ,GAAAA,IACRE,EAAKD,EAAMD,IACJa,eAAyG,KAAxF,IAAMX,EAAGW,aAAaJ,MAAM,MAAMC,KAAK,KAAKC,cAAgB,KAAKG,QAAQf,GAAkB,CAAA,IAC9GQ,EAAAA,MAGIL,GAAGjB,KAFVkB,GAAEY,KAAKb,EAAGjB,QAAAA,MAOPkB,IAERa,SAAUvD,EAGXL,MAAcC,EAAKC,eAAeY,GAAAA,EAAAA,cAAAA,EAAAA,EAAAA,QAAAA,EAAAA,mBAAAA,SAAAA,SAAAA,EAAAA,OAAAA,eAAAA,EAAAA,cAAAA,OAAAA,UAAAA,GAAAA\",\"file\":\"CSSRulePlugin.min.js\",\"sourcesContent\":[\"/*!\\n * CSSRulePlugin 3.7.1\\n * https://greensock.com\\n *\\n * @license Copyright 2008-2021, GreenSock. All rights reserved.\\n * Subject to the terms at https://greensock.com/standard-license or for\\n * Club GreenSock members, the agreement issued with that membership.\\n * @author: Jack Doyle, jack@greensock.com\\n*/\\n/* eslint-disable */\\n\\nlet gsap, _coreInitted, _win, _doc, CSSPlugin,\\n\\t_windowExists = () => typeof(window) !== \\\"undefined\\\",\\n\\t_getGSAP = () => gsap || (_windowExists() && (gsap = window.gsap) && gsap.registerPlugin && gsap),\\n\\t_checkRegister = () => {\\n\\t\\tif (!_coreInitted) {\\n\\t\\t\\t_initCore();\\n\\t\\t\\tif (!CSSPlugin) {\\n\\t\\t\\t\\tconsole.warn(\\\"Please gsap.registerPlugin(CSSPlugin, CSSRulePlugin)\\\");\\n\\t\\t\\t}\\n\\t\\t}\\n\\t\\treturn _coreInitted;\\n\\t},\\n\\t_initCore = core => {\\n\\t\\tgsap = core || _getGSAP();\\n\\t\\tif (_windowExists()) {\\n\\t\\t\\t_win = window;\\n\\t\\t\\t_doc = document;\\n\\t\\t}\\n\\t\\tif (gsap) {\\n\\t\\t\\tCSSPlugin = gsap.plugins.css;\\n\\t\\t\\tif (CSSPlugin) {\\n\\t\\t\\t\\t_coreInitted = 1;\\n\\t\\t\\t}\\n\\t\\t}\\n\\t};\\n\\n\\nexport const CSSRulePlugin = {\\n\\tversion: \\\"3.7.1\\\",\\n\\tname: \\\"cssRule\\\",\\n\\tinit(target, value, tween, index, targets) {\\n\\t\\tif (!_checkRegister() || typeof(target.cssText) === \\\"undefined\\\") {\\n\\t\\t\\treturn false;\\n\\t\\t}\\n\\t\\tlet div = target._gsProxy = target._gsProxy || _doc.createElement(\\\"div\\\");\\n\\t\\tthis.ss = target;\\n\\t\\tthis.style = div.style;\\n\\t\\tdiv.style.cssText = target.cssText;\\n\\t\\tCSSPlugin.prototype.init.call(this, div, value, tween, index, targets); //we just offload all the work to the regular CSSPlugin and then copy the cssText back over to the rule in the render() method. This allows us to have all of the updates to CSSPlugin automatically flow through to CSSRulePlugin instead of having to maintain both\\n\\t},\\n\\trender(ratio, data) {\\n\\t\\tlet pt = data._pt,\\n\\t\\t\\tstyle = data.style,\\n\\t\\t\\tss = data.ss,\\n\\t\\t\\ti;\\n\\t\\twhile (pt) {\\n\\t\\t\\tpt.r(ratio, pt.d);\\n\\t\\t\\tpt = pt._next;\\n\\t\\t}\\n\\t\\ti = style.length;\\n\\t\\twhile (--i > -1) {\\n\\t\\t\\tss[style[i]] = style[style[i]];\\n\\t\\t}\\n\\t},\\n\\tgetRule(selector) {\\n\\t\\t_checkRegister();\\n\\t\\tlet ruleProp = _doc.all ? \\\"rules\\\" : \\\"cssRules\\\",\\n\\t\\t\\tstyleSheets = _doc.styleSheets,\\n\\t\\t\\ti = styleSheets.length,\\n\\t\\t\\tpseudo = (selector.charAt(0) === \\\":\\\"),\\n\\t\\t\\tj, curSS, cs, a;\\n\\t\\tselector = (pseudo ? \\\"\\\" : \\\",\\\") + selector.split(\\\"::\\\").join(\\\":\\\").toLowerCase() + \\\",\\\"; //note: old versions of IE report tag name selectors as upper case, so we just change everything to lowercase.\\n\\t\\tif (pseudo) {\\n\\t\\t\\ta = [];\\n\\t\\t}\\n\\t\\twhile (i--) {\\n\\t\\t\\t//Firefox may throw insecure operation errors when css is loaded from other domains, so try/catch.\\n\\t\\t\\ttry {\\n\\t\\t\\t\\tcurSS = styleSheets[i][ruleProp];\\n\\t\\t\\t\\tif (!curSS) {\\n\\t\\t\\t\\t\\tcontinue;\\n\\t\\t\\t\\t}\\n\\t\\t\\t\\tj = curSS.length;\\n\\t\\t\\t} catch (e) {\\n\\t\\t\\t\\tconsole.warn(e);\\n\\t\\t\\t\\tcontinue;\\n\\t\\t\\t}\\n\\t\\t\\twhile (--j > -1) {\\n\\t\\t\\t\\tcs = curSS[j];\\n\\t\\t\\t\\tif (cs.selectorText && (\\\",\\\" + cs.selectorText.split(\\\"::\\\").join(\\\":\\\").toLowerCase() + \\\",\\\").indexOf(selector) !== -1) { //note: IE adds an extra \\\":\\\" to pseudo selectors, so .myClass:after becomes .myClass::after, so we need to strip the extra one out.\\n\\t\\t\\t\\t\\tif (pseudo) {\\n\\t\\t\\t\\t\\t\\ta.push(cs.style);\\n\\t\\t\\t\\t\\t} else {\\n\\t\\t\\t\\t\\t\\treturn cs.style;\\n\\t\\t\\t\\t\\t}\\n\\t\\t\\t\\t}\\n\\t\\t\\t}\\n\\t\\t}\\n\\t\\treturn a;\\n\\t},\\n\\tregister: _initCore\\n};\\n\\n_getGSAP() && gsap.registerPlugin(CSSRulePlugin);\\n\\nexport { CSSRulePlugin as default };\"]}", "wdn/templates_5.3/js/compressed/plugins/gsap/CSSRulePlugin.min.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/plugins/gsap/CSSRulePlugin.min.js.map");
    }
}