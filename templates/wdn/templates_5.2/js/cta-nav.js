'use strict';

define([], function () {

  var initialized = false;

  var Plugin = {
    initialize: function initialize() {
      if (initialized) {
        return;
      }

      var ctaHeader = document.querySelector('.dcf-cta-header');
      var ctaLinks = document.querySelectorAll('.dcf-link-cta');
      var ctaButtons = document.querySelectorAll('.dcf-btn-toggle-cta');
      var ctaLists = document.querySelectorAll('.dcf-list-cta');

      if (window.matchMedia('(min-width: 56.12em)').matches) {

        // Close all popovers when Esc key is pressed
        var onKeyUp = function onKeyUp(e) {
          if (e.keyCode === 27) {
            closeAllPopovers();
          }
        };

        // Remove fallback links
        for (var i = 0; i < ctaLinks.length; i++) {
          var ctaLink = ctaLinks[i];
          ctaLink.setAttribute('hidden', '');
        }

        // Show buttons (instead of fallback links) to toggle display of options popovers
        for (var _i = 0; _i < ctaButtons.length; _i++) {
          var ctaButton = ctaButtons[_i];
          ctaButton.removeAttribute('hidden');
        }

        var toggleButtonOnClick = function toggleButtonOnClick() {
          if (this.getAttribute('aria-pressed') == 'true') {
            closePopover(this);
          } else {
            openPopover(this);
          }
        };

        var openButtonOnMouseover = function openButtonOnMouseover() {
          if (this.getAttribute('aria-pressed') == 'false') {
            openPopover(this);
          }
        };

        var openPopover = function openPopover(ctabtn) {
          if (ctabtn.getAttribute('aria-pressed') == 'true') {
            // already open
            return;
          }
          closeAllPopovers();
          ctabtn.setAttribute('aria-pressed', 'true');
          ctabtn.nextElementSibling.setAttribute('aria-expanded', 'true');
          ctabtn.nextElementSibling.removeAttribute('hidden');
          ctabtn.focus();
          document.addEventListener('keyup', onKeyUp);
        };

        var closePopover = function closePopover(ctabtn) {
          if (ctabtn.getAttribute('aria-pressed') == 'false') {
            // already closed
            return;
          }

          ctabtn.setAttribute('aria-pressed', 'false');
          ctabtn.nextElementSibling.setAttribute('aria-expanded', 'false');
          ctabtn.nextElementSibling.setAttribute('hidden', '');
          ctabtn.focus();
          document.removeEventListener('keyup', onKeyUp);
        };

        var closeAllPopovers = function closeAllPopovers() {
          for (var i = 0; i < ctaButtons.length; ++i) {
            if (ctaButtons[i].getAttribute('aria-pressed') == 'true') {
              closePopover(ctaButtons[i]);
            }
          }
        };

        // Set events for each button in CTA nav
        for (var _i2 = 0; _i2 < ctaButtons.length; _i2++) {
          ctaButtons[_i2].addEventListener('click', toggleButtonOnClick);
        }
      }
    }
  };

  return Plugin;
});
