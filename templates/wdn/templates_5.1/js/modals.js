'use strict';

require(['dcf-utility', 'dcf-modal', 'plugins/body-scroll-lock'], function (Utility, Modal, bodyScrollLock) {
  var modals = document.querySelectorAll('.dcf-modal');
  var unlModal = new DCFModal(modals, bodyScrollLock);
  unlModal.initialize();
});
