"use strict";

// callback function for polyfill.io in ES6+ syntax
function polyfillsAreLoaded() {
  function loadJs() {
    var url = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : "";
    var async = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
    var id = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : "";

    return new Promise(function (resolve, reject) {
      var el = document.createElement("script");
      el.onload = function () {
        resolve(url);
      };
      el.onerror = function () {
        reject(url);
      };
      el.async = async;
      el.src = url;
      el.id = id;
      document.body.appendChild(el);
    });
  }

  loadJs("/wdn/templates_5.2/js/compressed/all.js?dep=$DEP_VERSION$", true, "wdn_dependents").catch(function (err) {
    console.error("Failed at " + err);
  });
}
