'use strict';

require(['dcf-lazyLoad'], function () {

  var images = document.querySelectorAll('[loading=lazy], .dcf-lazy-load');
  var observerConfig = {
    // extend intersection root margin by 50px to start intersection earlier by 50px
    rootMargin: '0px 0px 50px 0px',
    threshold: [0, 0.5]
  };
  var enterClassNames = [];
  var unlLazyLoad = new DCFLazyLoad(images, observerConfig, enterClassNames);
  unlLazyLoad.initialize();
});
