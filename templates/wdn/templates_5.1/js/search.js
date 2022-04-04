'use strict';

define(['wdn', 'dcf-utility', 'dcf-modal'], function (WDN) {
  var autoSearchDebounceDelay = 1000;
  var searchEmbedVersion = '5.0';

  function getLocalSearch() {
    var link = document.querySelector('link[rel="search"]');
    if (link && link.type !== 'application/opensearchdescription+xml') {
      return link.href;
    }

    return false;
  }

  var initd = false;

  return {
    initialize: function initialize() {
      if (initd) {
        return;
      }

      initd = true;

      var searchModalId = 'dcf-search-results';
      var modal = new DCFModal([]);

      // Get Search links and buttons
      var domDesktopSearchLink = document.getElementById('dcf-search-toggle-link');
      var domDesktopSearchBtns = document.getElementsByClassName('dcf-search-toggle-button');
      var domMobileSearchLink = document.getElementById('dcf-mobile-search-link');
      var domMobileSearchBtns = document.getElementsByClassName('dcf-mobile-search-button');

      // Disable links and Enable buttons
      var mobileSearchBtn = null;
      if (domMobileSearchLink && domMobileSearchBtns && domMobileSearchBtns.length) {
        domMobileSearchLink.setAttribute('hidden', '');
        for (var i = 0; i < domMobileSearchBtns.length; i++) {
          var searchBtn = domMobileSearchBtns[i];
          searchBtn.removeAttribute('hidden');
          searchBtn.setAttribute('aria-expanded', 'false');
          searchBtn.setAttribute('aria-label', 'Open search');
          searchBtn.innerHTML = domMobileSearchLink.innerHTML;
          mobileSearchBtn = searchBtn;
        }
      }

      if (domDesktopSearchLink && domDesktopSearchBtns && domDesktopSearchBtns.length) {
        domDesktopSearchLink.setAttribute('hidden', '');
        domDesktopSearchLink.setAttribute('aria-hidden', true);
        for (var _i = 0; _i < domDesktopSearchBtns.length; _i++) {
          var _searchBtn = domDesktopSearchBtns[_i];
          _searchBtn.removeAttribute('hidden');
          _searchBtn.setAttribute('aria-expanded', 'false');
          _searchBtn.setAttribute('aria-label', 'Open search');
          _searchBtn.innerHTML = domDesktopSearchLink.innerHTML;

          // Toggle mobile nav state on desktop open click
          _searchBtn.addEventListener('click', function (e) {
            // Update search toggle nav button to search/open state when search is closed
            if (mobileSearchBtn) {
              modal.setNavToggleBtnState(mobileSearchBtn, 'close');
            }
          }, false);
        }
      }

      var domSearchResultWrapper = document.getElementById('dcf-search-results-wrapper'),
          domQ = document.getElementById('dcf-search_query'),
          domSearchForm = document.getElementById('dcf-search-form'),
          domEmbed = void 0,
          $unlSearch = void 0,
          $progress = void 0,
          submitted = false,
          postReady = false,
          autoSubmitTimeout = void 0,
          searchHost = 'search.unl.edu',
          // domain of UNL Search app
      searchPath = '/',
          // path to UNL Search app
      searchOrigin = 'https://' + searchHost,
          searchAction = searchOrigin + searchPath,
          searchFrameAction = searchAction + '?embed=' + searchEmbedVersion,
          allowSearchParams = ['u', 'cx'],
          // QS Params allowed by UNL Search app
      siteHomepage = location.protocol + '//' + location.host + '/',
          closeNavEvent = new CustomEvent('closeNavigation'),
          closeIDMOptionsEvent = new CustomEvent('closeDropDownWidget', { detail: { type: 'idm-logged-in' } }),
          localSearch = getLocalSearch();

      // Give up if the search form has been unexpectedly removed
      if (!domSearchForm) {
        return;
      }

      // Ensure the default action is the UNL Search app
      if (domSearchForm.action !== searchAction) {
        domSearchForm.setAttribute('action', searchAction);
      }

      if (localSearch && localSearch.indexOf(searchAction + '?') === 0) {
        // Attempt to parse the allowed UNL Search parameter overrides allowed
        var localSearchParams = void 0;
        var _i2 = void 0;
        try {
          if (window.URLSearchParams) {
            localSearchParams = new URLSearchParams(localSearch.slice(localSearch.indexOf('?') + 1));

            for (_i2 = 0; _i2 < allowSearchParams.length; _i2++) {
              if (localSearchParams.has(allowSearchParams[_i2])) {
                var input = document.createElement('input');
                input.type = 'hidden';
                input.name = allowSearchParams[_i2];
                input.value = localSearchParams.get(allowSearchParams[_i2]);
                domSearchForm.appendChild(input);
              }
            }
          } else {
            var paramPair = void 0;
            localSearchParams = localSearch.slice(localSearch.indexOf('?') + 1).split('&');
            for (_i2 = 0; _i2 < localSearchParams.length; _i2++) {
              paramPair = localSearchParams[_i2].split('=');
              if (allowSearchParams.indexOf(paramPair[0]) >= 0) {
                var _input = document.createElement('input');
                _input.type = 'hidden';
                _input.name = paramPair[0];
                _input.value = decodeURIComponent(paramPair[1]);
                domSearchForm.appendChild(_input);
              }
            }
          }
        } catch (ex) {
          WDN.log(ex);
        }
      } else if (siteHomepage && !/^https?:\/\/www\.unl\.edu\/$/.test(siteHomepage)) {
        // Otherwise default to adding a local param for this site's homepage (but not UNL top)
        var _input2 = document.createElement('input');
        _input2.type = 'hidden';
        _input2.name = 'u';
        _input2.value = siteHomepage;
        domSearchForm.appendChild(_input2);
        searchFrameAction += '&u=' + encodeURIComponent(siteHomepage);
      }

      // Create a loading indicator
      $progress = document.createElement('progress');
      $progress.id = 'wdn_search_progress';
      $progress.innerText = 'Loading...';

      // Add an input to the form to let the search application know that we want the embedded format
      domEmbed = document.createElement('input');
      domEmbed.type = 'hidden';
      domEmbed.name = 'embed';
      domEmbed.value = searchEmbedVersion; // Specify which theme version for search

      // Add a parameter for triggering the iframe compatible rendering
      domSearchForm.appendChild(domEmbed);

      var createSearchFrame = function createSearchFrame() {
        // Lazy create the search iframe
        if (!$unlSearch) {
          $unlSearch = document.createElement('iframe');
          $unlSearch.name = 'unlsearch';
          $unlSearch.id = 'wdn_search_frame';
          $unlSearch.title = 'Search';
          $unlSearch.className = 'dcf-b-0 dcf-w-100% dcf-h-100%';
          $unlSearch.src = searchFrameAction;

          domSearchResultWrapper.appendChild($progress);
          domSearchResultWrapper.appendChild($unlSearch);

          $unlSearch.addEventListener('load', function () {
            postReady = true; // iframe should be ready to post messages to
          });
        }
      };

      var activateSearch = function activateSearch() {
        domSearchForm.parentElement.classList.add('active');
        $progress.hidden = false;
      };

      var postSearchMessage = function postSearchMessage(query) {
        $unlSearch.contentWindow.postMessage(query, searchOrigin);
        $progress.hidden = true;
      };

      var closeSearch = function closeSearch() {
        modal.closeModal(searchModalId);
      };

      // Actions to take when search modal is opened
      var onOpenSearchModalEvent = function onOpenSearchModalEvent() {

        // Hide other mobile toggles
        document.dispatchEvent(closeNavEvent);
        document.dispatchEvent(closeIDMOptionsEvent);

        // Put focus on search text input
        domQ.focus();
      };

      // Add an event listener for search modal open event
      var openSearchModelEvent = 'ModalOpenEvent_' + searchModalId;
      document.addEventListener(openSearchModelEvent, function (e) {
        onOpenSearchModalEvent();
      });

      // Actions to take when search modal is closed
      var onCloseSearchModalEvent = function onCloseSearchModalEvent() {

        // Update search toggle nav button to search/open state when search is closed
        if (mobileSearchBtn) {
          modal.setNavToggleBtnState(mobileSearchBtn, 'open');
        }

        clearTimeout(autoSubmitTimeout);
        domQ.value = '';
        domSearchForm.parentElement.classList.remove('active');
        domSearchForm.reset();

        // Clear results
        if ($unlSearch) {
          $unlSearch = null;
          domSearchResultWrapper.innerHTML = '';
        }
      };

      // Add an event listener for search modal close event
      var closeSearchModalEvent = 'ModalCloseEvent_' + searchModalId;
      document.addEventListener(closeSearchModalEvent, function (e) {
        onCloseSearchModalEvent();
      });

      // Add an event listener for closeSearchEvent
      document.addEventListener('closeSearch', function (e) {
        closeSearch();
      });

      // Add an event listener for close search from search iframe
      window.addEventListener("message", function (e) {
        if (e.data === 'wdn.search.close') {
          closeSearch();
        }
      }, false);

      // Add an event listener to support the iframe rendering
      domQ.addEventListener('keyup', function (e) {
        var keyCode = e.keyCode;

        // Ignore non-printable keys (blacklist)
        if (keyCode !== 32 && keyCode < 48 || keyCode > 90 && keyCode < 96 || keyCode > 111 && keyCode < 186 && keyCode !== 173 || keyCode > 192 && keyCode < 219 || keyCode > 222) {
          return;
        }

        clearTimeout(autoSubmitTimeout);

        if (this.value) {
          // Activate search UI
          createSearchFrame();
          activateSearch();

          // Debounce auto-submit
          autoSubmitTimeout = setTimeout(function () {
            var event = new CustomEvent('submit', { 'detail': 'auto' });
            domSearchForm.dispatchEvent(event);
          }, autoSearchDebounceDelay);
        }
      });

      domSearchForm.addEventListener('submit', function (e, source) {
        // Enable the iframe search params
        createSearchFrame();
        activateSearch();
        domEmbed.disabled = false;
        this.target = 'unlsearch';

        if (!e.detail || e.detail !== 'auto') {
          // a11y: send focus to the results if manually submitted
          $unlSearch.focus();
        }

        // Support sending messages to iframe without reload
        if (postReady) {
          e.preventDefault();
          postSearchMessage(domQ.value);
        }
      });
    }
  };
});
