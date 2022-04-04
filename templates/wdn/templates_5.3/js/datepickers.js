"use strict";

require(['dcf-datepicker'], function (datePickerModule) {
  //Date Pickers
  var datePickers = document.querySelectorAll('.dcf-datepicker');
  datePickers.forEach(function (dp) {
    new datePickerModule.DCFDatepicker(dp);
  });
});
