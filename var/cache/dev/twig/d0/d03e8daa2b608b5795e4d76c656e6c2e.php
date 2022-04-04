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

/* wdn/templates_5.3/js/compressed/scroll-animations.js.map */
class __TwigTemplate_51671270996004c5ccabc2f2afeb6ce6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/scroll-animations.js.map"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.3/js/compressed/scroll-animations.js.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"dcf-scrollAnimation.js\",\"scroll-animations.js\"],\"names\":[\"define\",\"_exports\",\"_classCallCheck\",\"instance\",\"Constructor\",\"TypeError\",\"_defineProperties\",\"target\",\"props\",\"i\",\"length\",\"descriptor\",\"enumerable\",\"configurable\",\"writable\",\"Object\",\"defineProperty\",\"key\",\"_createClass\",\"protoProps\",\"staticProps\",\"prototype\",\"value\",\"DCFScrollAnimation\",\"itemList\",\"observerConfig\",\"animationClassNames\",\"this\",\"observer\",\"disconnect\",\"_this\",\"onIntersection\",\"entries\",\"itemsCount\",\"forEach\",\"entry\",\"intersectionRatio\",\"thresholds\",\"className\",\"classList\",\"add\",\"unobserve\",\"onLoadIntersection\",\"loadObserver\",\"window\",\"IntersectionObserver\",\"item\",\"observe\",\"addEventListener\",\"require\",\"scrollAnimationModule\",\"document\",\"querySelectorAll\",\"rootMargin\",\"threshold\",\"initialize\"],\"mappings\":\"AAAAA,OAAA,uBAAA,WAAA,SAAAC,GACA,YAOA,SAAAC,GAAAC,EAAAC,GAAA,KAAAD,YAAAC,IAAA,KAAA,IAAAC,WAAA,qCAEA,QAAAC,GAAAC,EAAAC,GAAA,IAAA,GAAAC,GAAA,EAAAA,EAAAD,EAAAE,OAAAD,IAAA,CAAA,GAAAE,GAAAH,EAAAC,EAAAE,GAAAC,WAAAD,EAAAC,aAAA,EAAAD,EAAAE,cAAA,EAAA,SAAAF,KAAAA,EAAAG,UAAA,GAAAC,OAAAC,eAAAT,EAAAI,EAAAM,IAAAN,IAEA,QAAAO,GAAAd,EAAAe,EAAAC,GAAA,MAAAD,IAAAb,EAAAF,EAAAiB,UAAAF,GAAAC,GAAAd,EAAAF,EAAAgB,GAAAL,OAAAC,eAAAZ,EAAA,aAAAU,UAAA,IAAAV,EATAW,OAAAC,eAAAf,EAAA,cACAqB,OAAA,IAEArB,EAAAsB,uBAAA,EAQA,IAAAA,GAAA,WACA,QAAAA,GAAAC,EAAAC,EAAAC,GACAxB,EAAAyB,KAAAJ,GAEAI,KAAAH,SAAAA,EACAG,KAAAF,eAAAA,EACAE,KAAAD,oBAAAA,EAqFA,MAjFAR,GAAAK,IACAN,IAAA,aACAK,MAAA,WACAK,KAAAC,UAIAD,KAAAC,SAAAC,gBAGAZ,IAAA,aACAK,MAAA,WACA,GAAAQ,GAAAH,KAGAI,EAAA,SAAAC,EAAAJ,GACA,IAIAE,EAAAG,YACAH,EAAAF,SAAAC,aAIAG,EAAAE,QAAA,SAAAC,GACAA,EAAAC,mBAAAR,EAAAS,WATA,IASAF,EAAAC,kBAAAR,EAAAS,WARA,GAUAP,EAAAJ,oBAAAhB,QACAoB,EAAAJ,oBAAAQ,QAAA,SAAAI,GACA,MAAAH,GAAA5B,OAAAgC,UAAAC,IAAAF,KAGAH,EAAAC,kBAAAR,EAAAS,WAfA,KAgBAP,EAAAG,aAEAH,EAAAF,SAAAa,UAAAN,EAAA5B,YAOAmC,EAAA,SAAAV,GAEAA,EAAAE,QAAA,SAAAC,GACAA,EAAAC,kBAFA,GAIAN,EAAAJ,oBAAAhB,QACAoB,EAAAJ,oBAAAQ,QAAA,SAAAI,GACA,MAAAH,GAAA5B,OAAAgC,UAAAC,IAAAF,KAKAR,EAAAa,aAAAF,UAAAN,EAAA5B,UAIAoB,MAAAH,WAIAG,KAAAM,WAAAN,KAAAH,SAAAd,OAEA,wBAAAkC,UACAjB,KAAAC,SAAA,GAAAiB,sBAAAd,EAAAJ,KAAAF,gBACAE,KAAAH,SAAAU,QAAA,SAAAY,GACAhB,EAAAF,SAAAmB,QAAAD,KAEAF,OAAAI,iBAAA,OAAA,WACAlB,EAAAa,aAAA,GAAAE,sBAAAH,GAEAZ,EAAAN,SAAAU,QAAA,SAAAY,GACAhB,EAAAa,aAAAI,QAAAD,aAOAvB,IAGAtB,GAAAsB,mBAAAA,IC1GA0B,SAAA,uBAAA,SAAAC,GACA,GAAA1B,GAAA2B,SAAAC,iBAAA,0BACA3B,GACA4B,WAAA,MACAC,WAAA,GAAA,IAEA5B,GAAA,eACA,IAAAwB,GAAA3B,mBAAAC,EAAAC,EAAAC,GACA6B,eAGAvD,OAAA,oBAAA\",\"file\":\"scroll-animations.js\",\"sourcesContent\":[\"define('dcf-scrollAnimation',[\\\"exports\\\"], function (_exports) {\\n  \\\"use strict\\\";\\n\\n  Object.defineProperty(_exports, \\\"__esModule\\\", {\\n    value: true\\n  });\\n  _exports.DCFScrollAnimation = void 0;\\n\\n  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\\\"Cannot call a class as a function\\\"); } }\\n\\n  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\\\"value\\\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }\\n\\n  function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, \\\"prototype\\\", { writable: false }); return Constructor; }\\n\\n  var DCFScrollAnimation = /*#__PURE__*/function () {\\n    function DCFScrollAnimation(itemList, observerConfig, animationClassNames) {\\n      _classCallCheck(this, DCFScrollAnimation);\\n\\n      this.itemList = itemList;\\n      this.observerConfig = observerConfig;\\n      this.animationClassNames = animationClassNames;\\n    } // Disconnect the observer\\n\\n\\n    _createClass(DCFScrollAnimation, [{\\n      key: \\\"disconnect\\\",\\n      value: function disconnect() {\\n        if (!this.observer) {\\n          return;\\n        }\\n\\n        this.observer.disconnect();\\n      }\\n    }, {\\n      key: \\\"initialize\\\",\\n      value: function initialize() {\\n        var _this = this;\\n\\n        // onIntersection callback function\\n        var onIntersection = function onIntersection(entries, observer) {\\n          var zero = 0;\\n          var zeroIndex = 0;\\n          var oneIndex = 1; // Disconnect if we've already loaded all of the items\\n\\n          if (_this.itemsCount === zero) {\\n            _this.observer.disconnect();\\n          } // Loop through the entries\\n\\n\\n          entries.forEach(function (entry) {\\n            if (entry.intersectionRatio >= observer.thresholds[zeroIndex] && entry.intersectionRatio < observer.thresholds[oneIndex]) {\\n              // Add animation classes to entry\\n              if (_this.animationClassNames.length) {\\n                _this.animationClassNames.forEach(function (className) {\\n                  return entry.target.classList.add(className);\\n                });\\n              }\\n            } else if (entry.intersectionRatio > observer.thresholds[oneIndex]) {\\n              _this.itemsCount--;\\n\\n              _this.observer.unobserve(entry.target);\\n            }\\n          });\\n        };\\n        /* eslint func-style: [\\\"error\\\", \\\"declaration\\\", { \\\"allowArrowFunctions\\\": true }] */\\n\\n\\n        var onLoadIntersection = function onLoadIntersection(entries) {\\n          var zero = 0;\\n          entries.forEach(function (entry) {\\n            if (entry.intersectionRatio > zero) {\\n              // entry is in view port on page load so add animation classes to entry\\n              if (_this.animationClassNames.length) {\\n                _this.animationClassNames.forEach(function (className) {\\n                  return entry.target.classList.add(className);\\n                });\\n              }\\n            }\\n\\n            _this.loadObserver.unobserve(entry.target);\\n          });\\n        };\\n\\n        if (!this.itemList) {\\n          return;\\n        }\\n\\n        this.itemsCount = this.itemList.length;\\n\\n        if ('IntersectionObserver' in window) {\\n          this.observer = new IntersectionObserver(onIntersection, this.observerConfig);\\n          this.itemList.forEach(function (item) {\\n            _this.observer.observe(item);\\n          });\\n          window.addEventListener('load', function () {\\n            _this.loadObserver = new IntersectionObserver(onLoadIntersection);\\n\\n            _this.itemList.forEach(function (item) {\\n              _this.loadObserver.observe(item);\\n            });\\n          });\\n        }\\n      }\\n    }]);\\n\\n    return DCFScrollAnimation;\\n  }();\\n\\n  _exports.DCFScrollAnimation = DCFScrollAnimation;\\n});\\n\\n\",\"\\\"use strict\\\";\\n\\nrequire(['dcf-scrollAnimation'], function (scrollAnimationModule) {\\n  var itemList = document.querySelectorAll('.dcf-animate-on-scroll');\\n  var observerConfig = {\\n    rootMargin: '0px',\\n    threshold: [0.5, 1]\\n  };\\n  var animationClassNames = ['dcf-animated'];\\n  var unlScrollAnimation = new scrollAnimationModule.DCFScrollAnimation(itemList, observerConfig, animationClassNames);\\n  unlScrollAnimation.initialize();\\n});\\n\\ndefine(\\\"scroll-animations\\\", function(){});\\n\\n\"]}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.3/js/compressed/scroll-animations.js.map";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"dcf-scrollAnimation.js\",\"scroll-animations.js\"],\"names\":[\"define\",\"_exports\",\"_classCallCheck\",\"instance\",\"Constructor\",\"TypeError\",\"_defineProperties\",\"target\",\"props\",\"i\",\"length\",\"descriptor\",\"enumerable\",\"configurable\",\"writable\",\"Object\",\"defineProperty\",\"key\",\"_createClass\",\"protoProps\",\"staticProps\",\"prototype\",\"value\",\"DCFScrollAnimation\",\"itemList\",\"observerConfig\",\"animationClassNames\",\"this\",\"observer\",\"disconnect\",\"_this\",\"onIntersection\",\"entries\",\"itemsCount\",\"forEach\",\"entry\",\"intersectionRatio\",\"thresholds\",\"className\",\"classList\",\"add\",\"unobserve\",\"onLoadIntersection\",\"loadObserver\",\"window\",\"IntersectionObserver\",\"item\",\"observe\",\"addEventListener\",\"require\",\"scrollAnimationModule\",\"document\",\"querySelectorAll\",\"rootMargin\",\"threshold\",\"initialize\"],\"mappings\":\"AAAAA,OAAA,uBAAA,WAAA,SAAAC,GACA,YAOA,SAAAC,GAAAC,EAAAC,GAAA,KAAAD,YAAAC,IAAA,KAAA,IAAAC,WAAA,qCAEA,QAAAC,GAAAC,EAAAC,GAAA,IAAA,GAAAC,GAAA,EAAAA,EAAAD,EAAAE,OAAAD,IAAA,CAAA,GAAAE,GAAAH,EAAAC,EAAAE,GAAAC,WAAAD,EAAAC,aAAA,EAAAD,EAAAE,cAAA,EAAA,SAAAF,KAAAA,EAAAG,UAAA,GAAAC,OAAAC,eAAAT,EAAAI,EAAAM,IAAAN,IAEA,QAAAO,GAAAd,EAAAe,EAAAC,GAAA,MAAAD,IAAAb,EAAAF,EAAAiB,UAAAF,GAAAC,GAAAd,EAAAF,EAAAgB,GAAAL,OAAAC,eAAAZ,EAAA,aAAAU,UAAA,IAAAV,EATAW,OAAAC,eAAAf,EAAA,cACAqB,OAAA,IAEArB,EAAAsB,uBAAA,EAQA,IAAAA,GAAA,WACA,QAAAA,GAAAC,EAAAC,EAAAC,GACAxB,EAAAyB,KAAAJ,GAEAI,KAAAH,SAAAA,EACAG,KAAAF,eAAAA,EACAE,KAAAD,oBAAAA,EAqFA,MAjFAR,GAAAK,IACAN,IAAA,aACAK,MAAA,WACAK,KAAAC,UAIAD,KAAAC,SAAAC,gBAGAZ,IAAA,aACAK,MAAA,WACA,GAAAQ,GAAAH,KAGAI,EAAA,SAAAC,EAAAJ,GACA,IAIAE,EAAAG,YACAH,EAAAF,SAAAC,aAIAG,EAAAE,QAAA,SAAAC,GACAA,EAAAC,mBAAAR,EAAAS,WATA,IASAF,EAAAC,kBAAAR,EAAAS,WARA,GAUAP,EAAAJ,oBAAAhB,QACAoB,EAAAJ,oBAAAQ,QAAA,SAAAI,GACA,MAAAH,GAAA5B,OAAAgC,UAAAC,IAAAF,KAGAH,EAAAC,kBAAAR,EAAAS,WAfA,KAgBAP,EAAAG,aAEAH,EAAAF,SAAAa,UAAAN,EAAA5B,YAOAmC,EAAA,SAAAV,GAEAA,EAAAE,QAAA,SAAAC,GACAA,EAAAC,kBAFA,GAIAN,EAAAJ,oBAAAhB,QACAoB,EAAAJ,oBAAAQ,QAAA,SAAAI,GACA,MAAAH,GAAA5B,OAAAgC,UAAAC,IAAAF,KAKAR,EAAAa,aAAAF,UAAAN,EAAA5B,UAIAoB,MAAAH,WAIAG,KAAAM,WAAAN,KAAAH,SAAAd,OAEA,wBAAAkC,UACAjB,KAAAC,SAAA,GAAAiB,sBAAAd,EAAAJ,KAAAF,gBACAE,KAAAH,SAAAU,QAAA,SAAAY,GACAhB,EAAAF,SAAAmB,QAAAD,KAEAF,OAAAI,iBAAA,OAAA,WACAlB,EAAAa,aAAA,GAAAE,sBAAAH,GAEAZ,EAAAN,SAAAU,QAAA,SAAAY,GACAhB,EAAAa,aAAAI,QAAAD,aAOAvB,IAGAtB,GAAAsB,mBAAAA,IC1GA0B,SAAA,uBAAA,SAAAC,GACA,GAAA1B,GAAA2B,SAAAC,iBAAA,0BACA3B,GACA4B,WAAA,MACAC,WAAA,GAAA,IAEA5B,GAAA,eACA,IAAAwB,GAAA3B,mBAAAC,EAAAC,EAAAC,GACA6B,eAGAvD,OAAA,oBAAA\",\"file\":\"scroll-animations.js\",\"sourcesContent\":[\"define('dcf-scrollAnimation',[\\\"exports\\\"], function (_exports) {\\n  \\\"use strict\\\";\\n\\n  Object.defineProperty(_exports, \\\"__esModule\\\", {\\n    value: true\\n  });\\n  _exports.DCFScrollAnimation = void 0;\\n\\n  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\\\"Cannot call a class as a function\\\"); } }\\n\\n  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\\\"value\\\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }\\n\\n  function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, \\\"prototype\\\", { writable: false }); return Constructor; }\\n\\n  var DCFScrollAnimation = /*#__PURE__*/function () {\\n    function DCFScrollAnimation(itemList, observerConfig, animationClassNames) {\\n      _classCallCheck(this, DCFScrollAnimation);\\n\\n      this.itemList = itemList;\\n      this.observerConfig = observerConfig;\\n      this.animationClassNames = animationClassNames;\\n    } // Disconnect the observer\\n\\n\\n    _createClass(DCFScrollAnimation, [{\\n      key: \\\"disconnect\\\",\\n      value: function disconnect() {\\n        if (!this.observer) {\\n          return;\\n        }\\n\\n        this.observer.disconnect();\\n      }\\n    }, {\\n      key: \\\"initialize\\\",\\n      value: function initialize() {\\n        var _this = this;\\n\\n        // onIntersection callback function\\n        var onIntersection = function onIntersection(entries, observer) {\\n          var zero = 0;\\n          var zeroIndex = 0;\\n          var oneIndex = 1; // Disconnect if we've already loaded all of the items\\n\\n          if (_this.itemsCount === zero) {\\n            _this.observer.disconnect();\\n          } // Loop through the entries\\n\\n\\n          entries.forEach(function (entry) {\\n            if (entry.intersectionRatio >= observer.thresholds[zeroIndex] && entry.intersectionRatio < observer.thresholds[oneIndex]) {\\n              // Add animation classes to entry\\n              if (_this.animationClassNames.length) {\\n                _this.animationClassNames.forEach(function (className) {\\n                  return entry.target.classList.add(className);\\n                });\\n              }\\n            } else if (entry.intersectionRatio > observer.thresholds[oneIndex]) {\\n              _this.itemsCount--;\\n\\n              _this.observer.unobserve(entry.target);\\n            }\\n          });\\n        };\\n        /* eslint func-style: [\\\"error\\\", \\\"declaration\\\", { \\\"allowArrowFunctions\\\": true }] */\\n\\n\\n        var onLoadIntersection = function onLoadIntersection(entries) {\\n          var zero = 0;\\n          entries.forEach(function (entry) {\\n            if (entry.intersectionRatio > zero) {\\n              // entry is in view port on page load so add animation classes to entry\\n              if (_this.animationClassNames.length) {\\n                _this.animationClassNames.forEach(function (className) {\\n                  return entry.target.classList.add(className);\\n                });\\n              }\\n            }\\n\\n            _this.loadObserver.unobserve(entry.target);\\n          });\\n        };\\n\\n        if (!this.itemList) {\\n          return;\\n        }\\n\\n        this.itemsCount = this.itemList.length;\\n\\n        if ('IntersectionObserver' in window) {\\n          this.observer = new IntersectionObserver(onIntersection, this.observerConfig);\\n          this.itemList.forEach(function (item) {\\n            _this.observer.observe(item);\\n          });\\n          window.addEventListener('load', function () {\\n            _this.loadObserver = new IntersectionObserver(onLoadIntersection);\\n\\n            _this.itemList.forEach(function (item) {\\n              _this.loadObserver.observe(item);\\n            });\\n          });\\n        }\\n      }\\n    }]);\\n\\n    return DCFScrollAnimation;\\n  }();\\n\\n  _exports.DCFScrollAnimation = DCFScrollAnimation;\\n});\\n\\n\",\"\\\"use strict\\\";\\n\\nrequire(['dcf-scrollAnimation'], function (scrollAnimationModule) {\\n  var itemList = document.querySelectorAll('.dcf-animate-on-scroll');\\n  var observerConfig = {\\n    rootMargin: '0px',\\n    threshold: [0.5, 1]\\n  };\\n  var animationClassNames = ['dcf-animated'];\\n  var unlScrollAnimation = new scrollAnimationModule.DCFScrollAnimation(itemList, observerConfig, animationClassNames);\\n  unlScrollAnimation.initialize();\\n});\\n\\ndefine(\\\"scroll-animations\\\", function(){});\\n\\n\"]}", "wdn/templates_5.3/js/compressed/scroll-animations.js.map", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.3/js/compressed/scroll-animations.js.map");
    }
}