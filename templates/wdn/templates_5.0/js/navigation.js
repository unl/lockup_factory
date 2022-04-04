'use strict';

define(['plugins/headroom', 'plugins/body-scroll-lock'], function (Headroom, bodyScrollLock) {

  var disableBodyScroll = bodyScrollLock.disableBodyScroll;
  var enableBodyScroll = bodyScrollLock.enableBodyScroll;

  var initialized = false;

  var Plugin = {
    initialize: function initialize() {
      if (initialized) {
        return;
      }

      // grab an element
      var mobileActions = document.querySelectorAll('.hrjs');
      var skipNav = document.getElementById('dcf-skip-nav');
      var institutionTitle = document.getElementById('dcf-institution-title');
      var logo = document.getElementById('dcf-logo-lockup');
      var nav = document.getElementById('dcf-navigation');
      var main = document.querySelector('main');
      var footer = document.getElementById('dcf-footer');

      // construct an instance of Headroom, passing the element
      for (var i = 0; i < mobileActions.length; i++) {
        var headroom = new Headroom(mobileActions[i], {
          'tolerance': {
            up: 5,
            down: 5
          }
        });
        headroom.init();
      }

      var toggleButtons = document.querySelectorAll('.dcf-nav-toggle-btn-menu');
      var toggleIconOpen = document.getElementById('dcf-nav-toggle-icon-open-menu');
      var toggleIconClose = document.getElementById('dcf-nav-toggle-icon-close-menu');
      var toggleLabel = document.querySelector('.dcf-nav-toggle-label-menu');
      var mobileNav = document.getElementById('dcf-navigation');
      var modalParent = document.querySelector('.dcf-nav-menu');
      var mobileNavMenu = document.getElementById('dcf-nav-menu-child');
      if (!mobileNavMenu) {
        mobileNavMenu = document.createElement('nav');
        mobileNavMenu.setAttribute('id', 'dcf-nav-menu-child');
      }
      var tabFocusEls = mobileNavMenu.querySelectorAll('[href]');
      var firstTabFocusEl = tabFocusEls[0];
      var lastTabFocusEl = tabFocusEls[tabFocusEls.length - 1];
      var closeSearchEvent = new CustomEvent('closeSearch');
      var closeIDMOptionsEvent = new CustomEvent('closeDropDownWidget', { detail: { type: 'idm-logged-in' } });

      // We need to keep track of the toggle button that activated the menu so that we can return focus to it when the menu is closed
      var activeToggleButton = null;

      function onKeyDown(e) {
        if (e.keyCode === 27) {
          closeNavModal();
        }

        var keycodeTab = 9;

        var isTabPressed = e.key === 'Tab' || e.keyCode === keycodeTab;

        if (!isTabPressed) {
          return;
        }

        // Trap focus inside the nav modal
        if (e.key === 'Tab' || e.keyCode === keycodeTab) {
          if (e.shiftKey) {
            // Tab backwards (shift + tab)
            if (document.activeElement === firstTabFocusEl) {
              e.preventDefault();
              lastTabFocusEl.focus();
            }
          } else {
            // Tab forwards
            if (document.activeElement === lastTabFocusEl) {
              e.preventDefault();
              firstTabFocusEl.focus();
            }
          }
        }
      }

      function openNavModal() {

        // Hide other mobile toggles
        document.dispatchEvent(closeSearchEvent);
        document.dispatchEvent(closeIDMOptionsEvent);

        if (window.matchMedia("(max-width: 56.12em)").matches) {
          skipNav.setAttribute('aria-hidden', 'true');
          institutionTitle.setAttribute('aria-hidden', 'true');
          logo.setAttribute('aria-hidden', 'true');
          nav.setAttribute('aria-hidden', 'false');
          main.setAttribute('aria-hidden', 'true');
          footer.setAttribute('aria-hidden', 'true');
          disableBodyScroll(mobileNavMenu);
        }
        for (var i = 0; i < toggleButtons.length; ++i) {
          toggleButtons[i].setAttribute('aria-expanded', 'true');
          toggleButtons[i].setAttribute('aria-label', 'close menu');
        }
        modalParent.classList.add('dcf-modal-open');
        toggleIconOpen.classList.add('dcf-d-none');
        toggleIconClose.classList.remove('dcf-d-none');
        toggleLabel.textContent = 'Close';

        firstTabFocusEl.focus();
        document.addEventListener('keydown', onKeyDown);
      }

      function closeNavModal() {
        if (window.matchMedia("(max-width: 56.12em)").matches) {
          skipNav.setAttribute('aria-hidden', 'false');
          institutionTitle.setAttribute('aria-hidden', 'false');
          logo.setAttribute('aria-hidden', 'false');
          nav.setAttribute('aria-hidden', 'true');
          main.setAttribute('aria-hidden', 'false');
          footer.setAttribute('aria-hidden', 'false');

          // Allow body scroll when navigation is closed
          enableBodyScroll(mobileNavMenu);
        }
        for (var i = 0; i < toggleButtons.length; ++i) {
          toggleButtons[i].setAttribute('aria-expanded', 'false');
          toggleButtons[i].setAttribute('aria-label', 'open menu');
        }
        modalParent.classList.remove('dcf-modal-open');
        toggleIconOpen.classList.remove('dcf-d-none');
        toggleIconClose.classList.add('dcf-d-none');
        toggleLabel.textContent = 'Menu';
        activeToggleButton.focus();
        document.removeEventListener('keydown', onKeyDown);
      }

      // add an event listener for close Navigation Event
      document.addEventListener('closeNavigation', function (e) {
        if (isNavigationOpen() === true) {
          closeNavModal();
        }
      });

      // add an event listener for resize
      window.addEventListener('resize', function (e) {
        if (isNavigationOpen() === true) {
          closeNavModal();
        }
      });

      var toggleButtonOnClick = function toggleButtonOnClick() {
        activeToggleButton = this;
        if (isNavigationOpen() === true) {
          closeNavModal();
        } else {
          openNavModal();
        }
      };

      var isNavigationOpen = function isNavigationOpen() {
        return modalParent.classList.contains('dcf-modal-open');
      };

      for (var _i = 0; _i < toggleButtons.length; _i++) {
        toggleButtons[_i].addEventListener('click', toggleButtonOnClick);
      }

      var primaryNavLi = document.querySelectorAll('.dcf-nav-menu-child>ul>li');
      var allPrimaryNavLi = Array.from(primaryNavLi);
      // Find any child <ul> in local navigation <li>
      var hasChild = allPrimaryNavLi.find(function (el) {
        return el.querySelector('ul');
      });
      var desktopBtn = document.getElementById('dcf-menu-toggle');
      // Show "desktop" menu toggle button if navigation contains children
      hasChild && desktopBtn.removeAttribute('hidden');
      hasChild && desktopBtn.setAttribute('aria-expanded', 'false');
      hasChild && desktopBtn.setAttribute('aria-label', 'open menu');
    }
  };

  return Plugin;
});
