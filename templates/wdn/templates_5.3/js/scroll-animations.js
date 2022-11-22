"use strict";

function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); enumerableOnly && (symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; })), keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = null != arguments[i] ? arguments[i] : {}; i % 2 ? ownKeys(Object(source), !0).forEach(function (key) { _defineProperty(target, key, source[key]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)) : ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

require(['plugins/gsap/gsap', 'plugins/gsap/ScrollTrigger'], function (gsapModule, ScrollTriggerModule) {
  var gsap = gsapModule.gsap;
  var ScrollTrigger = ScrollTriggerModule.ScrollTrigger; // Register ScrollTrigger plugin

  gsap.registerPlugin(ScrollTriggerModule); // Set relevant configs

  ScrollTrigger.config({
    limitCallbacks: true
  });
  gsap.config({
    nullTargetWarn: false
  });

  function scrollFx() {
    // Define start states for standard transitions
    var fade_in_start = {
      autoAlpha: 0,
      stagger: .25
    };
    var move_left_start = {
      x: 100,
      stagger: .25
    };
    var move_right_start = {
      x: -100,
      stagger: .25
    };
    var move_up_start = {
      y: 100,
      stagger: .25
    }; // Function to set and standardize ScrollTrigger settings

    var addScrollTrigger = function addScrollTrigger(obj, target) {
      var config = _objectSpread({}, obj);

      config.scrollTrigger = {
        trigger: target,
        scrub: true,
        end: 'top center'
      };
      return config;
    }; // Inititate triggers for individual items


    gsap.utils.toArray('.unl-scroll-fx-fade-in').forEach(function (box) {
      return gsap.from(box, addScrollTrigger(fade_in_start, box));
    });
    gsap.utils.toArray('.unl-scroll-fx-move-left').forEach(function (box) {
      return gsap.from(box, addScrollTrigger(move_left_start, box));
    });
    gsap.utils.toArray('.unl-scroll-fx-move-right').forEach(function (box) {
      return gsap.from(box, addScrollTrigger(move_right_start, box));
    });
    gsap.utils.toArray('.unl-scroll-fx-move-up').forEach(function (box) {
      return gsap.from(box, addScrollTrigger(move_up_start, box));
    }); // Initiate triggers for lists

    gsap.utils.toArray('.unl-scroll-fx-children-fade-in').forEach(function (item) {
      var config = _objectSpread({}, fade_in_start);

      config.stagger = item.dataset.fxStagger ? parseFloat(item.dataset.fxStagger) : .15;
      config.duration = item.dataset.fxDuration ? parseFloat(item.dataset.fxDuration) : .25;
      ScrollTrigger.batch(item.children, {
        onEnter: function onEnter(elements) {
          gsap.from(elements, config);
        },
        once: item.dataset.fxOnce ? true : false
      });
    });
  }

  ; // Save styles when `prefers-reduced-motion` is toggled

  ScrollTrigger.saveStyles('.unl-scroll-fx-fade-in, .unl-scroll-fx-move-left, .unl-scroll-fx-move-right, .unl-scroll-fx-move-up'); // Animate only if reduced motion is not preferred

  ScrollTrigger.matchMedia({
    '(prefers-reduced-motion: no-preference)': function prefersReducedMotionNoPreference() {
      scrollFx();
    }
  });
});
