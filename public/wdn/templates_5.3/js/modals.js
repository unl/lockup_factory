"use strict";

require(['dcf-modal', 'plugins/body-scroll-lock'], function (modalModule, bodyScrollLock) {
  var modals = document.querySelectorAll('.dcf-modal');
  var unlModal = new modalModule.DCFModal(modals, bodyScrollLock);
  unlModal.initialize(); // Define custom open and close events

  modals.forEach(function (modal) {
    handleModalVideos(modal);
  });

  function handleModalVideos(modal) {
    // Handle any videos in modal
    var videos = modal.getElementsByTagName('video');

    if (videos && videos.length > 0) {
      document.addEventListener('ModalOpenEvent_' + modal.id, function (e) {
        // autoplay any videos set to autoplay
        Array.prototype.forEach.call(videos, function (video) {
          if (video.hasAttribute('data-autoplay')) {
            video.play();
          }
        });
      }, false);
      document.addEventListener('ModalCloseEvent_' + modal.id, function (e) {
        // pause and reset all modal videos
        Array.prototype.forEach.call(videos, function (video) {
          video.pause();
          video.load();
        }); // Show any hidden overlay play buttons

        var playBtns = modal.getElementsByClassName('mejs-overlay-play');

        if (playBtns && playBtns.length > 0) {
          Array.prototype.forEach.call(playBtns, function (playBtn) {
            if (playBtn.style.display === 'none') {
              playBtn.style.display = 'block';
            }
          });
        }
      }, false);
    } // Handle any mediahub iframe embed videos in modal


    var iframes = modal.getElementsByTagName('iframe');

    if (iframes && iframes.length > 0) {
      Array.prototype.forEach.call(iframes, function (iframe) {
        var source = iframe.getAttribute('src');
        var allowAttr = iframe.getAttribute('allow');

        if (allowAttr && allowAttr.includes('autoplay')) {
          if (!source.includes('mediahub.unl.edu')) {
            // Remove autoplay from non-mediaHub url if defined onload
            try {
              var url = new URL(iframe.getAttribute('src'));

              if (url.searchParams.has('autoplay')) {
                url.searchParams.delete('autoplay');
                iframe.src = url.toString();
              }
            } catch (e) {// do nothing
            }
          }

          document.addEventListener('ModalOpenEvent_' + modal.id, function (e) {
            var currentSource = iframe.getAttribute('src');

            if (currentSource.includes('mediahub.unl.edu')) {
              iframe.contentWindow.postMessage('mh-play-video', 'https://mediahub.unl.edu');
            } else {
              try {
                var _url = new URL(currentSource);

                _url.searchParams.set('autoplay', '1');

                var newSource = _url.toString();

                if (currentSource != newSource) {
                  iframe.src = newSource;
                }
              } catch (e) {
                iframe.src = source;
              }
            }
          }, false);
          document.addEventListener('ModalCloseEvent_' + modal.id, function (e) {
            var currentSource = iframe.getAttribute('src');

            if (currentSource.includes('mediahub.unl.edu')) {
              iframe.contentWindow.postMessage('mh-reset-video', 'https://mediahub.unl.edu');
            } else {
              try {
                var _url2 = new URL(currentSource);

                if (_url2.searchParams.has('autoplay')) {
                  _url2.searchParams.delete('autoplay');

                  currentSource = _url2.toString();
                }

                iframe.src = currentSource;
              } catch (e) {
                iframe.src = source;
              }
            }
          }, false);
        } else {
          // without allow autoplay
          document.addEventListener('ModalCloseEvent_' + modal.id, function (e) {
            if (source.includes('mediahub.unl.edu')) {
              iframe.contentWindow.postMessage('mh-pause-video', 'https://mediahub.unl.edu');
            } else {
              iframe.src = source;
            }
          }, false);
        }
      });
    }
  }
});
