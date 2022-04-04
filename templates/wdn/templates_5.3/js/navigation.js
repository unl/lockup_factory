"use strict";

define(['dcf-navMenuToggle', 'plugins/headroom', 'plugins/body-scroll-lock'], function (navMenuToggleModule, headroom, bodyScrollLock) {
  var initialized = false;
  var Plugin = {
    initialize: function initialize() {
      if (initialized) {
        return;
      }

      var navMenuToggle = new navMenuToggleModule.DCFNavMenuToggle(headroom, bodyScrollLock);
    }
  };
  return Plugin;
});
