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

/* wdn/templates_5.2/js/compressed/scroll-animations.js.map */
class __TwigTemplate_adfb32f2b8f806527a48d99ca598c595 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/scroll-animations.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/scroll-animations.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"dcf-scrollAnimation.js\",\"scroll-animations.js\"],\"names\":[\"_classCallCheck\",\"instance\",\"Constructor\",\"TypeError\",\"_createClass\",\"defineProperties\",\"target\",\"props\",\"i\",\"length\",\"descriptor\",\"enumerable\",\"configurable\",\"writable\",\"Object\",\"defineProperty\",\"key\",\"protoProps\",\"staticProps\",\"prototype\",\"DCFScrollAnimation\",\"itemList\",\"observerConfig\",\"animationClassNames\",\"this\",\"value\",\"observer\",\"disconnect\",\"_this\",\"onIntersection\",\"entries\",\"itemsCount\",\"forEach\",\"entry\",\"intersectionRatio\",\"thresholds\",\"className\",\"classList\",\"add\",\"unobserve\",\"window\",\"IntersectionObserver\",\"item\",\"observe\",\"define\",\"require\",\"document\",\"querySelectorAll\",\"rootMargin\",\"threshold\",\"initialize\"],\"mappings\":\"AAIA,QAAAA,iBAAAC,EAAAC,GAAA,KAAAD,YAAAC,IAAA,KAAA,IAAAC,WAAA,qCAFA,GAAAC,cAAA,WAAA,QAAAC,GAAAC,EAAAC,GAAA,IAAA,GAAAC,GAAA,EAAAA,EAAAD,EAAAE,OAAAD,IAAA,CAAA,GAAAE,GAAAH,EAAAC,EAAAE,GAAAC,WAAAD,EAAAC,aAAA,EAAAD,EAAAE,cAAA,EAAA,SAAAF,KAAAA,EAAAG,UAAA,GAAAC,OAAAC,eAAAT,EAAAI,EAAAM,IAAAN,IAAA,MAAA,UAAAR,EAAAe,EAAAC,GAAA,MAAAD,IAAAZ,EAAAH,EAAAiB,UAAAF,GAAAC,GAAAb,EAAAH,EAAAgB,GAAAhB,MAIAkB,mBAAA,WACA,QAAAA,GAAAC,EAAAC,EAAAC,GACAvB,gBAAAwB,KAAAJ,GAEAI,KAAAH,SAAAA,EACAG,KAAAF,eAAAA,EACAE,KAAAD,oBAAAA,EAuDA,MAlDAnB,cAAAgB,IACAJ,IAAA,aACAS,MAAA,WACAD,KAAAE,UAGAF,KAAAE,SAAAC,gBAGAX,IAAA,aACAS,MAAA,WACA,GAAAG,GAAAJ,KAGAK,EAAA,SAAAC,EAAAJ,GACA,IAIAE,EAAAG,YACAH,EAAAF,SAAAC,aAGAG,EAAAE,QAAA,SAAAC,GACAA,EAAAC,mBAAAR,EAAAS,WARA,IAQAF,EAAAC,kBAAAR,EAAAS,WAPA,GASAP,EAAAL,oBAAAd,QACAmB,EAAAL,oBAAAS,QAAA,SAAAI,GACA,MAAAH,GAAA3B,OAAA+B,UAAAC,IAAAF,KAGAH,EAAAC,kBAAAR,EAAAS,WAdA,KAeAP,EAAAG,aACAH,EAAAF,SAAAa,UAAAN,EAAA3B,WAIAkB,MAAAH,WAGAG,KAAAO,WAAAP,KAAAH,SAAAZ,OACA,wBAAA+B,UACAhB,KAAAE,SAAA,GAAAe,sBAAAZ,EAAAL,KAAAF,gBACAE,KAAAH,SAAAW,QAAA,SAAAU,GACAd,EAAAF,SAAAiB,QAAAD,WAMAtB,IAGAwB,QAAA,sBAAA,cCpEAC,SAAA,uBAAA,WACA,GAAAxB,GAAAyB,SAAAC,iBAAA,yBAMA,IAAA3B,oBAAAC,GAJA2B,WAAA,MACAC,WAAA,GAAA,KAEA,iBAEAC,eAGAN,OAAA,oBAAA\",\"file\":\"scroll-animations.js\",\"sourcesContent\":[\"'use strict';\\n\\nvar _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\\\"value\\\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();\\n\\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\\\"Cannot call a class as a function\\\"); } }\\n\\nvar DCFScrollAnimation = function () {\\n  function DCFScrollAnimation(itemList, observerConfig, animationClassNames) {\\n    _classCallCheck(this, DCFScrollAnimation);\\n\\n    this.itemList = itemList;\\n    this.observerConfig = observerConfig;\\n    this.animationClassNames = animationClassNames;\\n  }\\n  // Disconnect the observer\\n\\n\\n  _createClass(DCFScrollAnimation, [{\\n    key: 'disconnect',\\n    value: function disconnect() {\\n      if (!this.observer) {\\n        return;\\n      }\\n      this.observer.disconnect();\\n    }\\n  }, {\\n    key: 'initialize',\\n    value: function initialize() {\\n      var _this = this;\\n\\n      // onIntersection callback function\\n      var onIntersection = function onIntersection(entries, observer) {\\n        var zero = 0;\\n        var zeroIndex = 0;\\n        var oneIndex = 1;\\n        // Disconnect if we've already loaded all of the items\\n        if (_this.itemsCount === zero) {\\n          _this.observer.disconnect();\\n        }\\n        // Loop through the entries\\n        entries.forEach(function (entry) {\\n          if (entry.intersectionRatio >= observer.thresholds[zeroIndex] && entry.intersectionRatio < observer.thresholds[oneIndex]) {\\n            // Add animation classes to entry\\n            if (_this.animationClassNames.length) {\\n              _this.animationClassNames.forEach(function (className) {\\n                return entry.target.classList.add(className);\\n              });\\n            }\\n          } else if (entry.intersectionRatio > observer.thresholds[oneIndex]) {\\n            _this.itemsCount--;\\n            _this.observer.unobserve(entry.target);\\n          }\\n        });\\n      };\\n      if (!this.itemList) {\\n        return;\\n      }\\n      this.itemsCount = this.itemList.length;\\n      if ('IntersectionObserver' in window) {\\n        this.observer = new IntersectionObserver(onIntersection, this.observerConfig);\\n        this.itemList.forEach(function (item) {\\n          _this.observer.observe(item);\\n        });\\n      }\\n    }\\n  }]);\\n\\n  return DCFScrollAnimation;\\n}();\\n\\ndefine(\\\"dcf-scrollAnimation\\\", function(){});\\n\\n\",\"'use strict';\\n\\nrequire(['dcf-scrollAnimation'], function () {\\n  var itemList = document.querySelectorAll('.dcf-animate-on-scroll');\\n  var observerConfig = {\\n    rootMargin: '0px',\\n    threshold: [0.5, 1]\\n  };\\n  var animationClassNames = ['dcf-animated'];\\n  var unlScrollAnimation = new DCFScrollAnimation(itemList, observerConfig, animationClassNames);\\n  unlScrollAnimation.initialize();\\n});\\n\\ndefine(\\\"scroll-animations\\\", function(){});\\n\\n\"]}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/compressed/scroll-animations.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"dcf-scrollAnimation.js\",\"scroll-animations.js\"],\"names\":[\"_classCallCheck\",\"instance\",\"Constructor\",\"TypeError\",\"_createClass\",\"defineProperties\",\"target\",\"props\",\"i\",\"length\",\"descriptor\",\"enumerable\",\"configurable\",\"writable\",\"Object\",\"defineProperty\",\"key\",\"protoProps\",\"staticProps\",\"prototype\",\"DCFScrollAnimation\",\"itemList\",\"observerConfig\",\"animationClassNames\",\"this\",\"value\",\"observer\",\"disconnect\",\"_this\",\"onIntersection\",\"entries\",\"itemsCount\",\"forEach\",\"entry\",\"intersectionRatio\",\"thresholds\",\"className\",\"classList\",\"add\",\"unobserve\",\"window\",\"IntersectionObserver\",\"item\",\"observe\",\"define\",\"require\",\"document\",\"querySelectorAll\",\"rootMargin\",\"threshold\",\"initialize\"],\"mappings\":\"AAIA,QAAAA,iBAAAC,EAAAC,GAAA,KAAAD,YAAAC,IAAA,KAAA,IAAAC,WAAA,qCAFA,GAAAC,cAAA,WAAA,QAAAC,GAAAC,EAAAC,GAAA,IAAA,GAAAC,GAAA,EAAAA,EAAAD,EAAAE,OAAAD,IAAA,CAAA,GAAAE,GAAAH,EAAAC,EAAAE,GAAAC,WAAAD,EAAAC,aAAA,EAAAD,EAAAE,cAAA,EAAA,SAAAF,KAAAA,EAAAG,UAAA,GAAAC,OAAAC,eAAAT,EAAAI,EAAAM,IAAAN,IAAA,MAAA,UAAAR,EAAAe,EAAAC,GAAA,MAAAD,IAAAZ,EAAAH,EAAAiB,UAAAF,GAAAC,GAAAb,EAAAH,EAAAgB,GAAAhB,MAIAkB,mBAAA,WACA,QAAAA,GAAAC,EAAAC,EAAAC,GACAvB,gBAAAwB,KAAAJ,GAEAI,KAAAH,SAAAA,EACAG,KAAAF,eAAAA,EACAE,KAAAD,oBAAAA,EAuDA,MAlDAnB,cAAAgB,IACAJ,IAAA,aACAS,MAAA,WACAD,KAAAE,UAGAF,KAAAE,SAAAC,gBAGAX,IAAA,aACAS,MAAA,WACA,GAAAG,GAAAJ,KAGAK,EAAA,SAAAC,EAAAJ,GACA,IAIAE,EAAAG,YACAH,EAAAF,SAAAC,aAGAG,EAAAE,QAAA,SAAAC,GACAA,EAAAC,mBAAAR,EAAAS,WARA,IAQAF,EAAAC,kBAAAR,EAAAS,WAPA,GASAP,EAAAL,oBAAAd,QACAmB,EAAAL,oBAAAS,QAAA,SAAAI,GACA,MAAAH,GAAA3B,OAAA+B,UAAAC,IAAAF,KAGAH,EAAAC,kBAAAR,EAAAS,WAdA,KAeAP,EAAAG,aACAH,EAAAF,SAAAa,UAAAN,EAAA3B,WAIAkB,MAAAH,WAGAG,KAAAO,WAAAP,KAAAH,SAAAZ,OACA,wBAAA+B,UACAhB,KAAAE,SAAA,GAAAe,sBAAAZ,EAAAL,KAAAF,gBACAE,KAAAH,SAAAW,QAAA,SAAAU,GACAd,EAAAF,SAAAiB,QAAAD,WAMAtB,IAGAwB,QAAA,sBAAA,cCpEAC,SAAA,uBAAA,WACA,GAAAxB,GAAAyB,SAAAC,iBAAA,yBAMA,IAAA3B,oBAAAC,GAJA2B,WAAA,MACAC,WAAA,GAAA,KAEA,iBAEAC,eAGAN,OAAA,oBAAA\",\"file\":\"scroll-animations.js\",\"sourcesContent\":[\"'use strict';\\n\\nvar _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\\\"value\\\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();\\n\\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\\\"Cannot call a class as a function\\\"); } }\\n\\nvar DCFScrollAnimation = function () {\\n  function DCFScrollAnimation(itemList, observerConfig, animationClassNames) {\\n    _classCallCheck(this, DCFScrollAnimation);\\n\\n    this.itemList = itemList;\\n    this.observerConfig = observerConfig;\\n    this.animationClassNames = animationClassNames;\\n  }\\n  // Disconnect the observer\\n\\n\\n  _createClass(DCFScrollAnimation, [{\\n    key: 'disconnect',\\n    value: function disconnect() {\\n      if (!this.observer) {\\n        return;\\n      }\\n      this.observer.disconnect();\\n    }\\n  }, {\\n    key: 'initialize',\\n    value: function initialize() {\\n      var _this = this;\\n\\n      // onIntersection callback function\\n      var onIntersection = function onIntersection(entries, observer) {\\n        var zero = 0;\\n        var zeroIndex = 0;\\n        var oneIndex = 1;\\n        // Disconnect if we've already loaded all of the items\\n        if (_this.itemsCount === zero) {\\n          _this.observer.disconnect();\\n        }\\n        // Loop through the entries\\n        entries.forEach(function (entry) {\\n          if (entry.intersectionRatio >= observer.thresholds[zeroIndex] && entry.intersectionRatio < observer.thresholds[oneIndex]) {\\n            // Add animation classes to entry\\n            if (_this.animationClassNames.length) {\\n              _this.animationClassNames.forEach(function (className) {\\n                return entry.target.classList.add(className);\\n              });\\n            }\\n          } else if (entry.intersectionRatio > observer.thresholds[oneIndex]) {\\n            _this.itemsCount--;\\n            _this.observer.unobserve(entry.target);\\n          }\\n        });\\n      };\\n      if (!this.itemList) {\\n        return;\\n      }\\n      this.itemsCount = this.itemList.length;\\n      if ('IntersectionObserver' in window) {\\n        this.observer = new IntersectionObserver(onIntersection, this.observerConfig);\\n        this.itemList.forEach(function (item) {\\n          _this.observer.observe(item);\\n        });\\n      }\\n    }\\n  }]);\\n\\n  return DCFScrollAnimation;\\n}();\\n\\ndefine(\\\"dcf-scrollAnimation\\\", function(){});\\n\\n\",\"'use strict';\\n\\nrequire(['dcf-scrollAnimation'], function () {\\n  var itemList = document.querySelectorAll('.dcf-animate-on-scroll');\\n  var observerConfig = {\\n    rootMargin: '0px',\\n    threshold: [0.5, 1]\\n  };\\n  var animationClassNames = ['dcf-animated'];\\n  var unlScrollAnimation = new DCFScrollAnimation(itemList, observerConfig, animationClassNames);\\n  unlScrollAnimation.initialize();\\n});\\n\\ndefine(\\\"scroll-animations\\\", function(){});\\n\\n\"]}", "wdn/templates_5.2/js/compressed/scroll-animations.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/compressed/scroll-animations.js.map");
    }
}
