'use strict';

require(['dcf-scrollAnimation'], function () {
  var itemList = document.querySelectorAll('.dcf-animate-on-scroll');
  var observerConfig = {
    rootMargin: '0px',
    threshold: [0.5, 1]
  };
  var animationClassNames = ['dcf-animated'];
  var unlScrollAnimation = new DCFScrollAnimation(itemList, observerConfig, animationClassNames);
  unlScrollAnimation.initialize();
});
