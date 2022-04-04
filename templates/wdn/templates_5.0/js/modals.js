'use strict';

require(['dcf-modal', 'plugins/body-scroll-lock', 'css!js-css/modals'], function (Modal, bodyScrollLock) {
  var modals = document.querySelectorAll('.dcf-modal');
  var unlModal = new Modal(modals, bodyScrollLock);
  unlModal.initialize();
});
