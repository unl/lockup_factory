'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var DCFTabs = function () {
  function DCFTabs(tabGroups) {
    _classCallCheck(this, DCFTabs);

    this.tabGroups = tabGroups;
    this.tabHashLookup = {};
  }
  // Tab switching function


  _createClass(DCFTabs, [{
    key: 'switchTab',
    value: function switchTab(oldTab, newTab, tabs, panels) {
      newTab.focus();
      // Make the active tab focusable by the user (Tab key)
      newTab.removeAttribute('tabindex');
      // Set the selected state
      newTab.setAttribute('aria-selected', 'true');
      newTab.setAttribute('tabindex', '0');
      oldTab.removeAttribute('aria-selected');
      oldTab.setAttribute('tabindex', '-1');
      // Get the indices of the new and old tabs to find the correct
      // tab panels to show and hide
      var index = Array.prototype.indexOf.call(tabs, newTab);
      var oldIndex = Array.prototype.indexOf.call(tabs, oldTab);
      panels[oldIndex].hidden = true;
      panels[index].hidden = false;
      panels[index].scrollIntoView();

      // Set page hash
      this.setPageHash(newTab.getAttribute('href'));
    }
  }, {
    key: 'isHash',
    value: function isHash(hash) {
      return hash && hash.substr(DCFUtility.magicNumbers('int0'), DCFUtility.magicNumbers('int1')) === '#';
    }
  }, {
    key: 'setPageHash',
    value: function setPageHash(testHash) {
      // use clear hash if not valid hash
      var hash = this.isHash(testHash) ? testHash : ' ';

      // set hash
      if (history.pushState) {
        history.pushState(null, null, window.location.origin + window.location.pathname + hash);
      } else {
        location.hash = hash;
      }
    }
  }, {
    key: 'displayTabByHash',
    value: function displayTabByHash() {
      var hash = window.location.hash;
      if (hash && this.tabHashLookup[hash]) {
        this.tabHashLookup[hash].click();
      }
    }
  }, {
    key: 'initialize',
    value: function initialize() {
      var _this = this;

      Array.prototype.forEach.call(this.tabGroups, function (tabGroup) {
        // Define constants for tabs
        var tabList = tabGroup.querySelector('.dcf-tabs > ol, .dcf-tabs > ul');
        var tabs = tabList.querySelectorAll('a');
        var panels = tabGroup.querySelectorAll('.dcf-tabs > div, .dcf-tabs > section');
        var uuid = DCFUtility.uuidv4();

        // Prefix each tab group with a unique ID.
        tabGroup.setAttribute('id', uuid.concat('-tab-group'));

        // Tab styling and functions.
        Array.prototype.forEach.call(tabs, function (tab, tabIndex) {
          // Add class to each tab
          tab.classList.add('dcf-tab', 'dcf-d-block');
          // Prefix each tab within its parent tab group with the corresponding uuid.
          var nextTab = tabIndex + DCFUtility.magicNumbers('int1');
          tab.setAttribute('id', uuid.concat('-tab-', nextTab));

          // Add role to each tab
          tab.setAttribute('role', 'tab');

          // Add tabindex to each tab
          tab.setAttribute('tabindex', '-1');

          // Add class to each tab's parent (list item)
          tab.parentNode.classList.add('dcf-tabs-list-item', 'dcf-mb-0');

          // Add role to each tab's parent (list item)
          tab.parentNode.setAttribute('role', 'presentation');

          // Add tab to tabHashLookup
          if (_this.isHash(tab.getAttribute('href'))) {
            _this.tabHashLookup[tab.getAttribute('href')] = tab;
          }

          // Handle clicking of tabs for mouse users
          tab.addEventListener('click', function (clickEvent) {
            clickEvent.preventDefault();
            var currentTab = tabList.querySelector('[aria-selected]');
            if (clickEvent.currentTarget !== currentTab) {
              _this.switchTab(currentTab, clickEvent.currentTarget, tabs, panels);
            }
          });

          // Handle keydown events for keyboard users
          tab.addEventListener('keydown', function (keydownEvent) {
            // Get the index of the current tab in the tabs node list
            var index = Array.prototype.indexOf.call(tabs, keydownEvent.currentTarget);
            // Work out which key the user is pressing and
            // Calculate the new tab's index where appropriate
            var dir = 0;
            if (keydownEvent.which === DCFUtility.magicNumbers('arrowLeftCode')) {
              if (index > DCFUtility.magicNumbers('int0')) {
                dir = index - DCFUtility.magicNumbers('int1');
              } else {
                dir = tabs.length - DCFUtility.magicNumbers('int1');
              }
            } else if (keydownEvent.which === DCFUtility.magicNumbers('arrowRightCode')) {
              if (index < tabs.length - DCFUtility.magicNumbers('int1')) {
                dir = index + DCFUtility.magicNumbers('int1');
              }
            } else if (keydownEvent.which === DCFUtility.magicNumbers('arrowDownCode')) {
              dir = 'down';
            } else {
              dir = null;
            }

            if (dir !== null) {
              keydownEvent.preventDefault();
              // If the down key is pressed, move focus to the open panel,
              // otherwise switch to the adjacent tab
              if (dir === 'down') {
                panels[tabIndex].focus();
              } else if (tabs[dir]) {
                _this.switchTab(keydownEvent.currentTarget, tabs[dir], tabs, panels);
              }
            }
          });
        });

        // Add tab panel semantics and hide them all in each tab group.
        Array.prototype.forEach.call(panels, function (panel, panelIndex) {
          // Set role to each tab panel
          panel.setAttribute('role', 'tabpanel');
          // Set tabindex to let panel be focused
          panel.setAttribute('tabindex', '-1');
          // Add class to each tab panel
          panel.classList.add('dcf-tabs-panel');
          // Declare which tab labels each panel
          panel.setAttribute('aria-labelledby', tabs[panelIndex].id);
          // Hide all tab panels
          panel.hidden = true;

          panel.addEventListener('keydown', function (keydownEvent) {
            if (keydownEvent.which === DCFUtility.magicNumbers('arrowUpCode')) {
              tabs[panelIndex].focus();
            }
          });
        });

        // Add classes to tab list
        tabList.classList.add('dcf-tabs-list', 'dcf-list-bare', 'dcf-mb-0');
        // Add role to the tab list
        tabList.setAttribute('role', 'tablist');
        // Initially activate the first tab and reveal the first tab panel
        tabs[DCFUtility.magicNumbers('int0')].removeAttribute('tabindex');
        tabs[DCFUtility.magicNumbers('int0')].setAttribute('aria-selected', 'true');
        panels[DCFUtility.magicNumbers('int0')].hidden = false;
      });

      // Handle hash change
      window.addEventListener('hashchange', function () {
        _this.displayTabByHash();
      });

      // Open tab on page load if valid
      this.displayTabByHash();
    }
  }]);

  return DCFTabs;
}();
