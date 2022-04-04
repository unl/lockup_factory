'use strict';

require(['dcf-utility', 'dcf-modal', 'plugins/body-scroll-lock'], function (Utility, Modal, bodyScrollLock) {
  var modals = document.querySelectorAll('.dcf-modal');
  var unlModal = new DCFModal(modals, bodyScrollLock);
  unlModal.initialize();

  // Define custom open and close events
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
        });

        // Show any hidden overlay play buttons
        var playBtns = modal.getElementsByClassName('mejs-overlay-play');
        if (playBtns && playBtns.length > 0) {
          Array.prototype.forEach.call(playBtns, function (playBtn) {
            if (playBtn.style.display === 'none') {
              playBtn.style.display = 'block';
            }
          });
        }
      }, false);
    }

    // Handle any mediahub iframe embed videos in modal
    var iframes = modal.getElementsByTagName('iframe');
    if (iframes && iframes.length > 0) {
      Array.prototype.forEach.call(iframes, function (iframe) {
        var allowAttr = iframe.getAttribute('allow');
        if (allowAttr && allowAttr.includes('autoplay')) {
          document.addEventListener('ModalOpenEvent_' + modal.id, function (e) {
            iframe.contentWindow.postMessage('mh-play-video', 'https://mediahub.unl.edu');
          }, false);

          document.addEventListener('ModalCloseEvent_' + modal.id, function (e) {
            iframe.contentWindow.postMessage('mh-reset-video', 'https://mediahub.unl.edu');
          }, false);
        } else {
          document.addEventListener('ModalCloseEvent_' + modal.id, function (e) {
            iframe.contentWindow.postMessage('mh-pause-video', 'https://mediahub.unl.edu');
          }, false);
        }
      });
    }
  }
});
