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

/* wdn/templates_5.2/js/compressed/dcf-slideshow.js */
class __TwigTemplate_878dddfe2051a70e7ec4074856ceff0a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/dcf-slideshow.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wdn/templates_5.2/js/compressed/dcf-slideshow.js"));

        // line 1
        echo "function _classCallCheck(t,e){if(!(t instanceof e))throw new TypeError(\"Cannot call a class as a function\")}var _createClass=function(){function t(t,e){for(var i=0;i<e.length;i++){var a=e[i];a.enumerable=a.enumerable||!1,a.configurable=!0,\"value\"in a&&(a.writable=!0),Object.defineProperty(t,a.key,a)}}return function(e,i,a){return i&&t(e.prototype,i),a&&t(e,a),e}}(),DCFSlideshow=function(){function t(e,i,a,n){_classCallCheck(this,t),this.slideshows=e,this.uls=i,this.openCaptionEvent=a,this.closeCaptionEvent=n}return _createClass(t,[{key:\"captionTransition\",value:function(t){t.removeEventListener(\"transitionend\",this.captionTransition,!0),t.classList.contains(\"dcf-invisible\")||t.classList.add(\"dcf-invisible\")}},{key:\"captionClasses\",value:function(t,e){e.classList.contains(\"dcf-invisible\")?(e.classList.remove(\"dcf-invisible\"),t.setAttribute(\"aria-expanded\",\"true\"),t.setAttribute(\"aria-label\",\"Hide caption\"),e.setAttribute(\"aria-hidden\",\"false\"),e.classList.remove(\"dcf-invisible\",\"dcf-opacity-0\",\"dcf-pointer-events-none\"),e.classList.add(\"dcf-opacity-1\",\"dcf-pointer-events-auto\"),e.dispatchEvent(this.closeCaptionEvent)):(e.addEventListener(\"transitionend\",this.captionTransition(e),!0),t.setAttribute(\"aria-expanded\",\"false\"),t.setAttribute(\"aria-label\",\"Show caption\"),e.setAttribute(\"aria-hidden\",\"true\"),e.classList.remove(\"dcf-opacity-1\",\"dcf-pointer-events-auto\"),e.classList.add(\"dcf-opacity-0\",\"dcf-pointer-events-none\",\"dcf-invisible\"),e.dispatchEvent(this.openCaptionEvent))}},{key:\"scrollIt\",value:function(t,e,i){var a=Array.prototype.indexOf.call(e,t)*(i.scrollWidth/e.length);i.scrollLeft=a}},{key:\"showSlide\",value:function(t,e,i,a){var n=e.querySelectorAll(\".dcf-slideshow .visible\"),s=\"previous\"===t?DCFUtility.magicNumbers(\"int0\"):DCFUtility.magicNumbers(\"int1\");if(n.length>DCFUtility.magicNumbers(\"int1\"))this.scrollIt(n[s],i,a);else{var r=s===DCFUtility.magicNumbers(\"int0\")?n[DCFUtility.magicNumbers(\"int0\")].previousElementSibling:n[DCFUtility.magicNumbers(\"int0\")].nextElementSibling;r&&this.scrollIt(r,i,a)}}},{key:\"callback\",value:function(t){Array.prototype.forEach.call(t,function(t){t.target.classList.remove(\"visible\");var e=t.target.querySelector(\"div\");if(e.setAttribute(\"tabindex\",\"-1\"),!(!t.intersectionRatio>DCFUtility.magicNumbers(\"int0\"))){var i=t.target.querySelector(\"img\");i.dataset.src&&(i.setAttribute(\"src\",i.dataset.src),i.removeAttribute(\"data-src\")),t.target.classList.add(\"visible\"),e.removeAttribute(\"tabindex\",\"-1\")}})}},{key:\"initialize\",value:function(){var t=this;Array.prototype.forEach.call(this.slideshows,function(e,i){var a=t.uls[i],n=e.querySelectorAll(\".dcf-slideshow li\"),s=e.querySelectorAll(\".dcf-slideshow figure\"),r=e.querySelectorAll(\".dcf-slideshow figcaption\"),c=DCFUtility.uuidv4(),l=\"Slideshow \"+i,o=e.getAttribute(\"aria-label\");o&&(l=o),e.setAttribute(\"id\",c.concat(\"-slideshow\")),a.setAttribute(\"tabindex\",\"0\"),a.classList.add(\"dcf-slide-deck\");var d=document.createElement(\"ul\"),u=document.createElement(\"li\"),f=document.createElement(\"li\"),b=document.createElement(\"button\"),p=document.createElement(\"button\");d.classList.add(\"dcf-slideshow-controls\",\"dcf-list-bare\",\"dcf-btn-group\",\"dcf-absolute\",\"dcf-pin-right\",\"dcf-pin-bottom\",\"dcf-z-1\"),d.setAttribute(\"aria-label\",l+\" controls\"),d.setAttribute(\"role\",\"list\"),b.classList.add(\"dcf-btn\",\"dcf-btn-primary\",\"dcf-button-slide\",\"dcf-btn-slide-prev\"),b.setAttribute(\"aria-label\",l+\" previous\"),p.classList.add(\"dcf-btn\",\"dcf-btn-primary\",\"dcf-btn-slide\",\"dcf-btn-slide-next\"),p.setAttribute(\"aria-label\",l+\" next\"),u.setAttribute(\"id\",c.concat(\"-previous\")),u.classList.add(\"dcf-li-slide-prev\"),f.setAttribute(\"id\",c.concat(\"-next\")),f.classList.add(\"dcf-li-slide-next\"),e.classList.add(\"dcf-relative\"),u.appendChild(b),f.appendChild(p),d.appendChild(u),d.appendChild(f),e.appendChild(d),Array.prototype.forEach.call(n,function(t,e){t.setAttribute(\"id\",c.concat(\"-slide-\",e)),t.classList.add(\"dcf-slide\",\"dcf-relative\"),t.querySelector(\"div\").setAttribute(\"tabindex\",\"-1\")}),Array.prototype.forEach.call(s,function(t,e){var i=r[e];if(void 0!==i){var a=document.createElement(\"button\");a.classList.add(\"dcf-btn\",\"dcf-btn-slide\",\"dcf-btn-slide-caption\"),a.setAttribute(\"id\",c.concat(\"-button-\",e)),a.setAttribute(\"aria-controls\",c.concat(\"-caption-\",e)),a.setAttribute(\"aria-label\",l+\" Show caption\"),a.setAttribute(\"aria-expanded\",\"false\"),t.classList.add(\"dcf-slide-figure\"),t.appendChild(a),i.classList.add(\"dcf-opacity-0\",\"dcf-pointer-events-none\",\"dcf-invisible\",\"dcf-slide-caption\",\"dcf-figcaption\"),i.setAttribute(\"id\",c.concat(\"-caption-\",e)),i.setAttribute(\"aria-labelledby\",c.concat(\"-button-\",e)),i.setAttribute(\"aria-hidden\",\"true\")}});var v={root:e,rootMargin:\"-10px\"};if(\"IntersectionObserver\"in window){var h=new IntersectionObserver(t.callback,v);Array.prototype.forEach.call(n,function(t){h.observe(t)}),u.addEventListener(\"click\",function(){t.showSlide(\"previous\",e,n,a)}),f.addEventListener(\"click\",function(){t.showSlide(\"next\",e,n,a)})}else Array.prototype.forEach.call(n,function(t){var e=t.querySelector(\"img\");e.setAttribute(\"src\",e.getAttribute(\"data-src\"))})});var e=document.querySelectorAll(\".dcf-btn-slide-caption\");[].forEach.call(e,function(e){var i=e.previousElementSibling;e.addEventListener(\"click\",function(e){return t.captionClasses(e.currentTarget,i),!1},!1),e.addEventListener(\"keydown\",function(e){e.which===DCFUtility.magicNumbers(\"spaceKeyCode\")&&(e.preventDefault(),t.captionClasses(e.currentTarget,i))},!1)})}}]),t}();
//# sourceMappingURL=dcf-slideshow.js.map";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "wdn/templates_5.2/js/compressed/dcf-slideshow.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("function _classCallCheck(t,e){if(!(t instanceof e))throw new TypeError(\"Cannot call a class as a function\")}var _createClass=function(){function t(t,e){for(var i=0;i<e.length;i++){var a=e[i];a.enumerable=a.enumerable||!1,a.configurable=!0,\"value\"in a&&(a.writable=!0),Object.defineProperty(t,a.key,a)}}return function(e,i,a){return i&&t(e.prototype,i),a&&t(e,a),e}}(),DCFSlideshow=function(){function t(e,i,a,n){_classCallCheck(this,t),this.slideshows=e,this.uls=i,this.openCaptionEvent=a,this.closeCaptionEvent=n}return _createClass(t,[{key:\"captionTransition\",value:function(t){t.removeEventListener(\"transitionend\",this.captionTransition,!0),t.classList.contains(\"dcf-invisible\")||t.classList.add(\"dcf-invisible\")}},{key:\"captionClasses\",value:function(t,e){e.classList.contains(\"dcf-invisible\")?(e.classList.remove(\"dcf-invisible\"),t.setAttribute(\"aria-expanded\",\"true\"),t.setAttribute(\"aria-label\",\"Hide caption\"),e.setAttribute(\"aria-hidden\",\"false\"),e.classList.remove(\"dcf-invisible\",\"dcf-opacity-0\",\"dcf-pointer-events-none\"),e.classList.add(\"dcf-opacity-1\",\"dcf-pointer-events-auto\"),e.dispatchEvent(this.closeCaptionEvent)):(e.addEventListener(\"transitionend\",this.captionTransition(e),!0),t.setAttribute(\"aria-expanded\",\"false\"),t.setAttribute(\"aria-label\",\"Show caption\"),e.setAttribute(\"aria-hidden\",\"true\"),e.classList.remove(\"dcf-opacity-1\",\"dcf-pointer-events-auto\"),e.classList.add(\"dcf-opacity-0\",\"dcf-pointer-events-none\",\"dcf-invisible\"),e.dispatchEvent(this.openCaptionEvent))}},{key:\"scrollIt\",value:function(t,e,i){var a=Array.prototype.indexOf.call(e,t)*(i.scrollWidth/e.length);i.scrollLeft=a}},{key:\"showSlide\",value:function(t,e,i,a){var n=e.querySelectorAll(\".dcf-slideshow .visible\"),s=\"previous\"===t?DCFUtility.magicNumbers(\"int0\"):DCFUtility.magicNumbers(\"int1\");if(n.length>DCFUtility.magicNumbers(\"int1\"))this.scrollIt(n[s],i,a);else{var r=s===DCFUtility.magicNumbers(\"int0\")?n[DCFUtility.magicNumbers(\"int0\")].previousElementSibling:n[DCFUtility.magicNumbers(\"int0\")].nextElementSibling;r&&this.scrollIt(r,i,a)}}},{key:\"callback\",value:function(t){Array.prototype.forEach.call(t,function(t){t.target.classList.remove(\"visible\");var e=t.target.querySelector(\"div\");if(e.setAttribute(\"tabindex\",\"-1\"),!(!t.intersectionRatio>DCFUtility.magicNumbers(\"int0\"))){var i=t.target.querySelector(\"img\");i.dataset.src&&(i.setAttribute(\"src\",i.dataset.src),i.removeAttribute(\"data-src\")),t.target.classList.add(\"visible\"),e.removeAttribute(\"tabindex\",\"-1\")}})}},{key:\"initialize\",value:function(){var t=this;Array.prototype.forEach.call(this.slideshows,function(e,i){var a=t.uls[i],n=e.querySelectorAll(\".dcf-slideshow li\"),s=e.querySelectorAll(\".dcf-slideshow figure\"),r=e.querySelectorAll(\".dcf-slideshow figcaption\"),c=DCFUtility.uuidv4(),l=\"Slideshow \"+i,o=e.getAttribute(\"aria-label\");o&&(l=o),e.setAttribute(\"id\",c.concat(\"-slideshow\")),a.setAttribute(\"tabindex\",\"0\"),a.classList.add(\"dcf-slide-deck\");var d=document.createElement(\"ul\"),u=document.createElement(\"li\"),f=document.createElement(\"li\"),b=document.createElement(\"button\"),p=document.createElement(\"button\");d.classList.add(\"dcf-slideshow-controls\",\"dcf-list-bare\",\"dcf-btn-group\",\"dcf-absolute\",\"dcf-pin-right\",\"dcf-pin-bottom\",\"dcf-z-1\"),d.setAttribute(\"aria-label\",l+\" controls\"),d.setAttribute(\"role\",\"list\"),b.classList.add(\"dcf-btn\",\"dcf-btn-primary\",\"dcf-button-slide\",\"dcf-btn-slide-prev\"),b.setAttribute(\"aria-label\",l+\" previous\"),p.classList.add(\"dcf-btn\",\"dcf-btn-primary\",\"dcf-btn-slide\",\"dcf-btn-slide-next\"),p.setAttribute(\"aria-label\",l+\" next\"),u.setAttribute(\"id\",c.concat(\"-previous\")),u.classList.add(\"dcf-li-slide-prev\"),f.setAttribute(\"id\",c.concat(\"-next\")),f.classList.add(\"dcf-li-slide-next\"),e.classList.add(\"dcf-relative\"),u.appendChild(b),f.appendChild(p),d.appendChild(u),d.appendChild(f),e.appendChild(d),Array.prototype.forEach.call(n,function(t,e){t.setAttribute(\"id\",c.concat(\"-slide-\",e)),t.classList.add(\"dcf-slide\",\"dcf-relative\"),t.querySelector(\"div\").setAttribute(\"tabindex\",\"-1\")}),Array.prototype.forEach.call(s,function(t,e){var i=r[e];if(void 0!==i){var a=document.createElement(\"button\");a.classList.add(\"dcf-btn\",\"dcf-btn-slide\",\"dcf-btn-slide-caption\"),a.setAttribute(\"id\",c.concat(\"-button-\",e)),a.setAttribute(\"aria-controls\",c.concat(\"-caption-\",e)),a.setAttribute(\"aria-label\",l+\" Show caption\"),a.setAttribute(\"aria-expanded\",\"false\"),t.classList.add(\"dcf-slide-figure\"),t.appendChild(a),i.classList.add(\"dcf-opacity-0\",\"dcf-pointer-events-none\",\"dcf-invisible\",\"dcf-slide-caption\",\"dcf-figcaption\"),i.setAttribute(\"id\",c.concat(\"-caption-\",e)),i.setAttribute(\"aria-labelledby\",c.concat(\"-button-\",e)),i.setAttribute(\"aria-hidden\",\"true\")}});var v={root:e,rootMargin:\"-10px\"};if(\"IntersectionObserver\"in window){var h=new IntersectionObserver(t.callback,v);Array.prototype.forEach.call(n,function(t){h.observe(t)}),u.addEventListener(\"click\",function(){t.showSlide(\"previous\",e,n,a)}),f.addEventListener(\"click\",function(){t.showSlide(\"next\",e,n,a)})}else Array.prototype.forEach.call(n,function(t){var e=t.querySelector(\"img\");e.setAttribute(\"src\",e.getAttribute(\"data-src\"))})});var e=document.querySelectorAll(\".dcf-btn-slide-caption\");[].forEach.call(e,function(e){var i=e.previousElementSibling;e.addEventListener(\"click\",function(e){return t.captionClasses(e.currentTarget,i),!1},!1),e.addEventListener(\"keydown\",function(e){e.which===DCFUtility.magicNumbers(\"spaceKeyCode\")&&(e.preventDefault(),t.captionClasses(e.currentTarget,i))},!1)})}}]),t}();
//# sourceMappingURL=dcf-slideshow.js.map", "wdn/templates_5.2/js/compressed/dcf-slideshow.js", "/Users/abhirijal/unl_lockup_factory/templates/wdn/templates_5.2/js/compressed/dcf-slideshow.js");
    }
}
