define(["exports", "./dcf-utility"], function (_exports, _dcfUtility) {
  "use strict";

  Object.defineProperty(_exports, "__esModule", {
    value: true
  });
  _exports.DCFNavMenuToggle = void 0;

  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

  function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

  var DCFNavMenuToggle = /*#__PURE__*/function () {
    function DCFNavMenuToggle(Headroom, bodyScrollLock) {
      var _this = this;

      _classCallCheck(this, DCFNavMenuToggle);

      this.disableBodyScroll = bodyScrollLock.disableBodyScroll;
      this.enableBodyScroll = bodyScrollLock.enableBodyScroll; // grab an element

      this.skipNav = document.getElementById('dcf-skip-nav');
      this.institutionTitle = document.getElementById('dcf-institution-title');
      this.logo = document.getElementById('dcf-logo-lockup');
      this.nav = document.getElementById('dcf-navigation');
      this.main = document.querySelector('main');
      this.footer = document.getElementById('dcf-footer'); // construct an instance of Headroom, passing the element

      var mobileActions = document.querySelectorAll('.hrjs');
      Array.prototype.forEach.call(mobileActions, function (action) {
        try {
          var headroomObj = new Headroom(action, {
            tolerance: {
              up: 5,
              down: 5
            }
          });
          headroomObj.init();
        } catch (err) {// do nothing
        }
      });
      this.toggleButtons = document.querySelectorAll('.dcf-nav-toggle-btn-menu');
      this.toggleIconOpen = document.getElementById('dcf-nav-toggle-icon-open-menu');
      this.toggleIconClose = document.getElementById('dcf-nav-toggle-icon-close-menu');
      this.toggleLabel = document.querySelector('.dcf-nav-toggle-label-menu');
      this.mobileNav = document.getElementById('dcf-navigation');
      this.modalParent = document.querySelector('.dcf-nav-menu');
      this.mobileNavMenu = document.getElementById('dcf-nav-menu-child');

      if (!this.mobileNavMenu) {
        this.mobileNavMenu = document.createElement('nav');
        this.mobileNavMenu.setAttribute('id', 'dcf-nav-menu-child');
      }

      this.tabFocusEls = this.mobileNavMenu.querySelectorAll('[href]');
      this.firstTabFocusEl = this.tabFocusEls[_dcfUtility.DCFUtility.magicNumbers('int0')];
      this.lastTabFocusEl = this.tabFocusEls[this.tabFocusEls.length - _dcfUtility.DCFUtility.magicNumbers('int1')];
      this.closeSearchEvent = new CustomEvent('closeSearch');
      this.closeIDMOptionsEvent = new CustomEvent('closeDropDownWidget', {
        detail: {
          type: 'idm-logged-in'
        }
      }); // We need to keep track of the toggle button that activated the menu so that we can return focus to it when the menu is closed

      this.activeToggleButton = null;

      this.isNavigationOpen = function () {
        return _this.modalParent.classList.contains('dcf-modal-open');
      };

      this.closeOpenNavigation = function () {
        if (_this.isNavigationOpen() === true) {
          _this.closeNavModal();
        }
      };

      this.onKeyDown = function (event) {
        if (event.keyCode === _dcfUtility.DCFUtility.magicNumbers('escCode')) {
          _this.closeNavModal();
        }

        var keycodeTab = 9;
        var isTabPressed = event.key === 'Tab' || event.keyCode === keycodeTab;

        if (!isTabPressed) {
          return;
        } // Trap focus inside the nav modal


        if (event.key === 'Tab' || event.keyCode === keycodeTab) {
          if (event.shiftKey) {
            // Tab backwards (shift + tab)
            if (document.activeElement === _this.firstTabFocusEl) {
              event.preventDefault();

              _this.lastTabFocusEl.focus();
            }
          } else if (document.activeElement === _this.lastTabFocusEl) {
            event.preventDefault();

            _this.firstTabFocusEl.focus();
          }
        }
      }; // add an event listener for close Navigation Event


      document.addEventListener('closeNavigation', this.closeOpenNavigation, false); // add an event listener for resize

      window.addEventListener('resize', this.closeOpenNavigation, false);
      Array.prototype.forEach.call(this.toggleButtons, function (button) {
        button.addEventListener('click', function (clickEvent) {
          _this.activeToggleButton = clickEvent.currentTarget;

          if (_this.isNavigationOpen() === true) {
            _this.closeNavModal();
          } else {
            _this.openNavModal();
          }

          return false;
        }, false);
      });
      var primaryNavLi = document.querySelectorAll('.dcf-nav-menu-child>ul>li');
      var allPrimaryNavLi = Array.from(primaryNavLi); // Find any child <ul> in local navigation <li>

      var hasChild = allPrimaryNavLi.find(function (el) {
        return el.querySelector('ul');
      });
      var desktopBtn = document.getElementById('dcf-menu-toggle'); // Show "desktop" menu toggle button if navigation contains children

      if (hasChild && desktopBtn) {
        desktopBtn.removeAttribute('hidden');
        desktopBtn.setAttribute('aria-expanded', 'false');
        desktopBtn.setAttribute('aria-label', 'open menu');
      }
    }

    _createClass(DCFNavMenuToggle, [{
      key: "openNavModal",
      value: function openNavModal() {
        // Hide other mobile toggles
        document.dispatchEvent(this.closeSearchEvent);
        document.dispatchEvent(this.closeIDMOptionsEvent);

        if (window.matchMedia('(max-width: 56.12em)').matches) {
          this.skipNav.setAttribute('aria-hidden', 'true');
          this.institutionTitle.setAttribute('aria-hidden', 'true');
          this.logo.setAttribute('aria-hidden', 'true');
          this.nav.setAttribute('aria-hidden', 'false');
          this.main.setAttribute('aria-hidden', 'true');
          this.footer.setAttribute('aria-hidden', 'true');
          this.disableBodyScroll(this.mobileNavMenu);
        }

        Array.prototype.forEach.call(this.toggleButtons, function (button) {
          button.setAttribute('aria-expanded', 'true');
          button.setAttribute('aria-label', 'close menu');
        });
        this.modalParent.classList.add('dcf-modal-open');
        this.toggleIconOpen.classList.add('dcf-d-none');
        this.toggleIconClose.classList.remove('dcf-d-none');
        this.toggleLabel.textContent = 'Close';
        this.firstTabFocusEl.focus();
        document.addEventListener('keydown', this.onKeyDown);
      }
    }, {
      key: "closeNavModal",
      value: function closeNavModal() {
        if (window.matchMedia('(max-width: 56.12em)').matches) {
          this.skipNav.setAttribute('aria-hidden', 'false');
          this.institutionTitle.setAttribute('aria-hidden', 'false');
          this.logo.setAttribute('aria-hidden', 'false');
          this.nav.setAttribute('aria-hidden', 'true');
          this.main.setAttribute('aria-hidden', 'false');
          this.footer.setAttribute('aria-hidden', 'false'); // Allow body scroll when navigation is closed

          this.enableBodyScroll(this.mobileNavMenu);
        }

        Array.prototype.forEach.call(this.toggleButtons, function (button) {
          button.setAttribute('aria-expanded', 'false');
          button.setAttribute('aria-label', 'open menu');
        });
        this.modalParent.classList.remove('dcf-modal-open');
        this.toggleIconOpen.classList.remove('dcf-d-none');
        this.toggleIconClose.classList.add('dcf-d-none');
        this.toggleLabel.textContent = 'Menu';
        this.activeToggleButton.focus();
        document.removeEventListener('keydown', this.onKeyDown);
      }
    }]);

    return DCFNavMenuToggle;
  }();

  _exports.DCFNavMenuToggle = DCFNavMenuToggle;
});
