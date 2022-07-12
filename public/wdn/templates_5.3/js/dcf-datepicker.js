define(["exports", "./dcf-utility"], function (_exports, _dcfUtility) {
  "use strict";

  Object.defineProperty(_exports, "__esModule", {
    value: true
  });
  _exports.DCFDatepicker = void 0;

  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

  function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

  var DCFDatepicker = /*#__PURE__*/function () {
    function DCFDatepicker(datepicker) {
      _classCallCheck(this, DCFDatepicker);

      // Define common magic numbers used
      this.int0 = _dcfUtility.DCFUtility.magicNumbers('int0');
      this.int1 = _dcfUtility.DCFUtility.magicNumbers('int1');
      this.int2 = _dcfUtility.DCFUtility.magicNumbers('int2');
      this.int3 = _dcfUtility.DCFUtility.magicNumbers('int3');
      this.int6 = _dcfUtility.DCFUtility.magicNumbers('int6');
      this.int7 = _dcfUtility.DCFUtility.magicNumbers('int7');
      this.intMinus1 = _dcfUtility.DCFUtility.magicNumbers('intMinus1');
      this.datepicker = datepicker;
      this.uuid = _dcfUtility.DCFUtility.uuidv4();
      this.buttonLabelChoose = 'Choose Date';
      this.buttonLabelChange = 'Change Date';
      this.dayLabels = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
      this.monthLabels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
      this.messageCursorKeys = 'Cursor keys can navigate&nbsp;dates';
      this.lastMessage = '';
      this.lastRowNode = null;
      this.days = [];
      this.focusDay = new Date();
      this.selectedDay = new Date(this.int0, this.int0, this.int1);
      this.isMouseDownOnBackground = false;
      this.textboxNode = this.datepicker.querySelector('input[type="text"]');
      this.appendPickerContainer();
      this.appendDialog();
      this.init();
    }

    _createClass(DCFDatepicker, [{
      key: "parseInt",
      value: function (_parseInt) {
        function parseInt(_x) {
          return _parseInt.apply(this, arguments);
        }

        parseInt.toString = function () {
          return _parseInt.toString();
        };

        return parseInt;
      }(function (string) {
        var radix = 10;
        return parseInt(string, radix);
      })
    }, {
      key: "appendPickerContainer",
      value: function appendPickerContainer() {
        var pickerContainer = document.createElement('div');
        pickerContainer.classList.add('dcf-input-group');
        pickerContainer.append(this.textboxNode);
        this.buttonNode = document.createElement('button');
        this.buttonNode.classList.add('dcf-btn', 'dcf-btn-primary', 'dcf-btn-datepicker');
        this.buttonNode.setAttribute('aria-label', 'Choose Date'); // remove once dcf-btn-datepicker defined

        this.buttonNode.innerHTML = '&#128197;';
        pickerContainer.appendChild(this.buttonNode);
        this.datepicker.append(pickerContainer);
      }
    }, {
      key: "appendDialog",
      value: function appendDialog() {
        var _this = this;

        var dialogLabelID = this.uuid.concat('-dialog-label');
        var dialogGridID = this.uuid.concat('-dialog-grid');
        this.dialogNode = document.createElement('div');
        this.dialogNode.setAttribute('id', this.uuid.concat('-datepicker'));
        this.dialogNode.setAttribute('role', 'dialog');
        this.dialogNode.setAttribute('aria-modal', 'true');
        this.dialogNode.setAttribute('aria-labelledby', dialogLabelID);
        this.dialogNode.classList.add('dcf-datepicker-dialog', 'dcf-absolute', 'dcf-pin-right', 'dcf-invisible', 'dcf-d-none');
        var dialogHeader = document.createElement('div');
        dialogHeader.classList.add('dcf-datepicker-dialog-header', 'dcf-d-flex', 'dcf-ai-center', 'dcf-jc-around');
        this.prevYearNode = document.createElement('button');
        this.prevYearNode.classList.add('dcf-btn', 'dcf-btn-tertiary', 'dcf-datepicker-dialog-btn-header', 'dcf-datepicker-dialog-btn-prev-year');
        this.prevYearNode.setAttribute('aria-label', 'previous year');
        this.prevYearNode.innerHTML = '&laquo;';
        dialogHeader.append(this.prevYearNode);
        this.prevMonthNode = document.createElement('button');
        this.prevMonthNode.classList.add('dcf-btn', 'dcf-btn-tertiary', 'dcf-datepicker-dialog-btn-header', 'dcf-datepicker-dialog-btn-prev-month');
        this.prevMonthNode.setAttribute('aria-label', 'previous month');
        this.prevMonthNode.innerHTML = '&lsaquo;';
        dialogHeader.append(this.prevMonthNode);
        this.monthYearNode = document.createElement('h2');
        this.monthYearNode.classList.add('dcf-datepicker-dialog-month-year', 'dcf-flex-grow-1', 'dcf-mb-0', 'dcf-txt-center');
        this.monthYearNode.setAttribute('id', dialogLabelID);
        this.monthYearNode.setAttribute('aria-live', 'polite');
        dialogHeader.append(this.monthYearNode);
        this.nextMonthNode = document.createElement('button');
        this.nextMonthNode.classList.add('dcf-btn', 'dcf-btn-tertiary', 'dcf-datepicker-dialog-btn-header', 'dcf-datepicker-dialog-btn-next-month');
        this.nextMonthNode.setAttribute('aria-label', 'next month');
        this.nextMonthNode.innerHTML = '&rsaquo;';
        dialogHeader.append(this.nextMonthNode);
        this.nextYearNode = document.createElement('button');
        this.nextYearNode.classList.add('dcf-btn', 'dcf-btn-tertiary', 'dcf-datepicker-dialog-btn-header', 'dcf-datepicker-dialog-btn-next-year');
        this.nextYearNode.setAttribute('aria-label', 'next year');
        this.nextYearNode.innerHTML = '&raquo;';
        dialogHeader.append(this.nextYearNode);
        var calanderTable = document.createElement('table');
        calanderTable.classList.add('dcf-datepicker-dialog-calendar', 'dcf-w-100%', 'dcf-table-fixed');
        calanderTable.setAttribute('id', dialogGridID);
        calanderTable.setAttribute('role', 'grid');
        calanderTable.setAttribute('aria-labelledby', dialogLabelID);
        var thead = document.createElement('thead');
        var theadRow = document.createElement('tr');
        Array.prototype.forEach.call(this.dayLabels, function (dayLabel) {
          var dayHead = document.createElement('th');
          dayHead.setAttribute('scope', 'col');
          dayHead.setAttribute('abbr', dayLabel);
          dayHead.innerText = dayLabel.substring(_this.int0, _this.int2);
          theadRow.append(dayHead);
        });
        thead.append(theadRow);
        calanderTable.append(thead);
        this.tbodyNode = document.createElement('tbody');
        calanderTable.append(this.tbodyNode);
        var dialogBtnGroup = document.createElement('div');
        dialogBtnGroup.classList.add('dcf-datepicker-dialog-ok-cancel-group', 'dcf-flex-shrink-0', 'dcf-mr-4');
        this.okButtonNode = document.createElement('button');
        this.okButtonNode.classList.add('dcf-btn', 'dcf-btn-primary', 'dcf-datepicker-dialog-btn-footer', 'dcf-datepicker-dialog-btn-ok', 'dcf-mr-3');
        this.okButtonNode.setAttribute('value', 'ok');
        this.okButtonNode.innerText = 'OK';
        dialogBtnGroup.append(this.okButtonNode);
        this.cancelButtonNode = document.createElement('button');
        this.cancelButtonNode = document.createElement('button');
        this.cancelButtonNode.classList.add('dcf-btn', 'dcf-btn-tertiary', 'dcf-datepicker-dialog-btn-footer', 'dcf-datepicker-dialog-btn-cancel');
        this.cancelButtonNode.setAttribute('value', 'cancel');
        this.cancelButtonNode.innerText = 'Cancel';
        dialogBtnGroup.append(this.cancelButtonNode);
        this.messageNode = document.createElement('div');
        this.messageNode.classList.add('dcf-datepicker-dialog-message', 'dcf-d-flex', 'dcf-ai-center', 'dcf-jc-center');
        this.messageNode.setAttribute('aria-live', 'polite');
        var dialogFooter = document.createElement('div');
        dialogFooter.classList.add('dcf-datepicker-dialog-footer', 'dcf-d-flex', 'dcf-flex-nowrap', 'dcf-ai-center', 'dcf-mt-1');
        dialogFooter.append(dialogBtnGroup);
        dialogFooter.append(this.messageNode);
        this.dialogNode.append(dialogHeader);
        this.dialogNode.append(calanderTable);
        this.dialogNode.append(dialogFooter);
        this.datepicker.appendChild(this.dialogNode);
      }
    }, {
      key: "init",
      value: function init() {
        var _this2 = this;

        this.textboxNode.addEventListener('blur', this.setDateForButtonLabel());
        this.buttonNode.addEventListener('keydown', function (event) {
          _this2.handleButtonKeydown(event);
        });
        this.buttonNode.addEventListener('click', function (event) {
          _this2.handleButtonClick(event);
        });
        this.okButtonNode.addEventListener('click', function (event) {
          _this2.handleOkButton(event);
        });
        this.okButtonNode.addEventListener('keydown', function (event) {
          _this2.handleOkButton(event);
        });
        this.cancelButtonNode.addEventListener('click', function (event) {
          _this2.handleCancelButton(event);
        });
        this.cancelButtonNode.addEventListener('keydown', function (event) {
          _this2.handleCancelButton(event);
        });
        this.prevMonthNode.addEventListener('click', function (event) {
          _this2.handlePreviousMonthButton(event);
        });
        this.nextMonthNode.addEventListener('click', function (event) {
          _this2.handleNextMonthButton(event);
        });
        this.prevYearNode.addEventListener('click', function (event) {
          _this2.handlePreviousYearButton(event);
        });
        this.nextYearNode.addEventListener('click', function (event) {
          _this2.handleNextYearButton(event);
        });
        this.prevMonthNode.addEventListener('keydown', function (event) {
          _this2.handlePreviousMonthButton(event);
        });
        this.nextMonthNode.addEventListener('keydown', function (event) {
          _this2.handleNextMonthButton(event);
        });
        this.prevYearNode.addEventListener('keydown', function (event) {
          _this2.handlePreviousYearButton(event);
        });
        this.nextYearNode.addEventListener('keydown', function (event) {
          _this2.handleNextYearButton(event);
        });
        document.body.addEventListener('mouseup', function (event) {
          _this2.handleBackgroundMouseUp(event);
        }, true); // Create Grid of Dates

        this.tbodyNode.innerHTML = '';

        for (var indexI = 0; indexI < this.int6; indexI++) {
          var row = this.tbodyNode.insertRow(indexI);
          this.lastRowNode = row;

          for (var indexJ = 0; indexJ < this.int7; indexJ++) {
            var cell = document.createElement('td');
            cell.tabIndex = this.intMinus1;
            cell.addEventListener('click', this.handleDayClick.bind(this));
            cell.addEventListener('keydown', this.handleDayKeyDown.bind(this));
            cell.addEventListener('focus', this.handleDayFocus.bind(this));
            cell.textContent = '-1';
            row.appendChild(cell);
            this.days.push(cell);
          }
        }

        this.updateGrid();
        this.close(false);
        this.setDateForButtonLabel();
      }
    }, {
      key: "isSameDay",
      value: function isSameDay(day1, day2) {
        return day1.getFullYear() === day2.getFullYear() && day1.getMonth() === day2.getMonth() && day1.getDate() === day2.getDate();
      }
    }, {
      key: "isNotSameMonth",
      value: function isNotSameMonth(day1, day2) {
        return day1.getFullYear() !== day2.getFullYear() || day1.getMonth() !== day2.getMonth();
      }
    }, {
      key: "updateGrid",
      value: function updateGrid() {
        var flag = false;
        var fd = this.focusDay;
        this.monthYearNode.textContent = "".concat(this.monthLabels[fd.getMonth()], " ").concat(fd.getFullYear());
        var firstDayOfMonth = new Date(fd.getFullYear(), fd.getMonth(), this.int1);
        var dayOfWeek = firstDayOfMonth.getDay();
        firstDayOfMonth.setDate(firstDayOfMonth.getDate() - dayOfWeek);
        var fdom = new Date(firstDayOfMonth);

        for (var indexI = 0; indexI < this.days.length; indexI++) {
          flag = fdom.getMonth() !== fd.getMonth();
          this.updateDate(this.days[indexI], flag, fdom, this.isSameDay(fdom, this.selectedDay));
          fdom.setDate(fdom.getDate() + this.int1); // Hide last row if all dates are disabled (e.g. in next month)

          var int35 = 35;

          if (indexI === int35) {
            if (flag) {
              this.lastRowNode.style.visibility = 'hidden';
            } else {
              this.lastRowNode.style.visibility = 'visible';
            }
          }
        }
      }
    }, {
      key: "updateDate",
      value: function updateDate(domNode, disable, day, selected) {
        var int9 = 9;
        var dayString = day.getDate().toString();

        if (day.getDate() <= int9) {
          dayString = "0".concat(dayString);
        }

        var monthString = day.getMonth() + this.int1;

        if (day.getMonth() < int9) {
          monthString = "0".concat(monthString);
        }

        domNode.tabIndex = this.intMinus1;
        domNode.removeAttribute('aria-selected');
        domNode.setAttribute('data-date', "".concat(day.getFullYear(), "-").concat(monthString, "-").concat(dayString));

        if (disable) {
          domNode.classList.add('disabled');
          domNode.textContent = '';
        } else {
          domNode.classList.remove('disabled');
          domNode.textContent = day.getDate();

          if (selected) {
            domNode.setAttribute('aria-selected', 'true');
            domNode.tabIndex = this.int0;
          }
        }
      }
    }, {
      key: "moveFocusToDay",
      value: function moveFocusToDay(day) {
        var cfd = this.focusDay;
        this.focusDay = day;

        if (cfd.getMonth() !== this.focusDay.getMonth() || cfd.getYear() !== this.focusDay.getYear()) {
          this.updateGrid();
        }

        this.setFocusDay();
      }
    }, {
      key: "setFocusDay",
      value: function setFocusDay(flagParam) {
        var flag = flagParam;

        if (typeof flag !== 'boolean') {
          flag = true;
        }

        for (var indexI = 0; indexI < this.days.length; indexI++) {
          var dayNode = this.days[indexI];
          var day = this.getDayFromDataDateAttribute(dayNode);
          dayNode.tabIndex = this.intMinus1;

          if (this.isSameDay(day, this.focusDay)) {
            dayNode.tabIndex = this.int0;

            if (flag) {
              dayNode.focus();
            }
          }
        }
      }
    }, {
      key: "open",
      value: function open() {
        // Set attribute for this modal
        this.dialogNode.setAttribute('aria-hidden', 'false'); // Add/remove classes to this modal

        this.dialogNode.classList.remove('dcf-opacity-0', 'dcf-invisible', 'dcf-d-none');
        this.dialogNode.classList.add('dcf-datepicker-dialog-is-open', 'dcf-opacity-100');
        this.getDateFromTextbox();
        this.updateGrid();
      }
    }, {
      key: "isOpen",
      value: function isOpen() {
        return this.dialogNode.classList.contains('dcf-datepicker-dialog-is-open');
      }
    }, {
      key: "close",
      value: function close(flagParam) {
        var _this3 = this;

        var flag = flagParam;

        if (typeof flag !== 'boolean') {
          // Default is to move focus to combobox
          flag = true;
        }

        this.setMessage(''); // Set attribute for this modal

        this.dialogNode.setAttribute('aria-hidden', 'true'); // Add/remove classes to this modal

        this.dialogNode.classList.remove('dcf-datepicker-dialog-is-open', 'dcf-opacity-100');
        this.dialogNode.classList.add('dcf-opacity-0'); // Dialog transition

        var dialogTransition = function dialogTransition() {
          // Remove event listener after the modal transition
          _this3.dialogNode.removeEventListener('transitionend', dialogTransition); // Add the `.dcf-invisible` class to this modal after the transition


          if (!_this3.isOpen() && !_this3.dialogNode.classList.contains('dcf-invisible')) {
            _this3.dialogNode.classList.add('dcf-invisible', 'dcf-d-none');
          }
        }; // Add event listener for the end of the modal transition


        this.dialogNode.addEventListener('transitionend', dialogTransition);

        if (flag) {
          this.buttonNode.focus();
        }
      }
    }, {
      key: "moveToNextYear",
      value: function moveToNextYear() {
        this.focusDay.setFullYear(this.focusDay.getFullYear() + this.int1);
        this.updateGrid();
      }
    }, {
      key: "moveToPreviousYear",
      value: function moveToPreviousYear() {
        this.focusDay.setFullYear(this.focusDay.getFullYear() - this.int1);
        this.updateGrid();
      }
    }, {
      key: "moveToNextMonth",
      value: function moveToNextMonth() {
        this.focusDay.setMonth(this.focusDay.getMonth() + this.int1);
        this.updateGrid();
      }
    }, {
      key: "moveToPreviousMonth",
      value: function moveToPreviousMonth() {
        this.focusDay.setMonth(this.focusDay.getMonth() - this.int1);
        this.updateGrid();
      }
    }, {
      key: "moveFocusToNextDay",
      value: function moveFocusToNextDay() {
        var fd = new Date(this.focusDay);
        fd.setDate(fd.getDate() + this.int1);
        this.moveFocusToDay(fd);
      }
    }, {
      key: "moveFocusToNextWeek",
      value: function moveFocusToNextWeek() {
        var fd = new Date(this.focusDay);
        fd.setDate(fd.getDate() + this.int7);
        this.moveFocusToDay(fd);
      }
    }, {
      key: "moveFocusToPreviousDay",
      value: function moveFocusToPreviousDay() {
        var fd = new Date(this.focusDay);
        fd.setDate(fd.getDate() - this.int1);
        this.moveFocusToDay(fd);
      }
    }, {
      key: "moveFocusToPreviousWeek",
      value: function moveFocusToPreviousWeek() {
        var fd = new Date(this.focusDay);
        fd.setDate(fd.getDate() - this.int7);
        this.moveFocusToDay(fd);
      }
    }, {
      key: "moveFocusToFirstDayOfWeek",
      value: function moveFocusToFirstDayOfWeek() {
        var fd = new Date(this.focusDay);
        fd.setDate(fd.getDate() - fd.getDay());
        this.moveFocusToDay(fd);
      }
    }, {
      key: "moveFocusToLastDayOfWeek",
      value: function moveFocusToLastDayOfWeek() {
        var fd = new Date(this.focusDay);
        fd.setDate(fd.getDate() + (this.int6 - fd.getDay()));
        this.moveFocusToDay(fd);
      } // Day methods

    }, {
      key: "isDayDisabled",
      value: function isDayDisabled(domNode) {
        return domNode.classList.contains('disabled');
      }
    }, {
      key: "getDayFromDataDateAttribute",
      value: function getDayFromDataDateAttribute(domNode) {
        var parts = domNode.getAttribute('data-date').split('-');
        return new Date(parts[this.int0], this.parseInt(parts[this.int1]) - this.int1, parts[this.int2]);
      } // Textbox methods

    }, {
      key: "setTextboxDate",
      value: function setTextboxDate(domNode) {
        var fd = this.focusDay;

        if (domNode) {
          fd = this.getDayFromDataDateAttribute(domNode); // updated aria-selected

          this.days.forEach(function (day) {
            if (day === domNode) {
              day.setAttribute('aria-selected', 'true');
            } else {
              day.removeAttribute('aria-selected');
            }
          });
        }

        this.textboxNode.value = "".concat(fd.getMonth() + this.int1, "/").concat(fd.getDate(), "/").concat(fd.getFullYear());
        var changeEvent = new Event('change');
        this.textboxNode.dispatchEvent(changeEvent);
        this.setDateForButtonLabel();
      }
    }, {
      key: "getDateFromTextbox",
      value: function getDateFromTextbox() {
        var parts = this.textboxNode.value.split('/');
        var month = this.parseInt(parts[this.int0]);
        var day = this.parseInt(parts[this.int1]);
        var year = this.parseInt(parts[this.int2]);

        if (parts.length === this.int3 && Number.isInteger(month) && Number.isInteger(day) && Number.isInteger(year)) {
          var int100 = 100;
          var int2000 = 2000;

          if (year < int100) {
            year = int2000 + year;
          }

          this.focusDay = new Date(year, month - this.int1, day);
          this.selectedDay = new Date(this.focusDay);
        } else {
          // If not a valid date (MM/DD/YY) initialize with todays date
          this.focusDay = new Date();
          this.selectedDay = new Date(this.int0, this.int0, this.int1);
        }
      }
    }, {
      key: "setDateForButtonLabel",
      value: function setDateForButtonLabel() {
        var parts = this.textboxNode.value.split('/');

        if (parts.length === this.int3 && Number.isInteger(this.parseInt(parts[this.int0])) && Number.isInteger(this.parseInt(parts[this.int1])) && Number.isInteger(this.parseInt(parts[this.int2]))) {
          var day = new Date(this.parseInt(parts[this.int2]), this.parseInt(parts[this.int0]) - this.int1, this.parseInt(parts[this.int1]));
          var date = "".concat(this.monthLabels[day.getMonth()], " ").concat(day.getDate(), ", ").concat(day.getFullYear());
          var label = "".concat(this.buttonLabelChange, ", ").concat(this.dayLabels[day.getDay()], " ").concat(date);
          this.buttonNode.setAttribute('aria-label', label);
        } else {
          // If not a valid date, initialize with "Choose Date"
          this.buttonNode.setAttribute('aria-label', this.buttonLabelChoose);
        }
      }
    }, {
      key: "setMessage",
      value: function setMessage(str) {
        var _this4 = this;

        var setMessageDelayed = function setMessageDelayed() {
          _this4.messageNode.innerHTML = str;
        };

        if (str !== this.lastMessage) {
          var int200 = 200;
          setTimeout(setMessageDelayed(), int200);
          this.lastMessage = str;
        }
      } // Event handlers

    }, {
      key: "handleOkButton",
      value: function handleOkButton(event) {
        var flag = false;

        switch (event.type) {
          case 'keydown':
            switch (event.key) {
              case 'Tab':
                if (!event.shiftKey) {
                  this.prevYearNode.focus();
                  flag = true;
                }

                break;

              case 'Esc':
              case 'Escape':
                this.close();
                flag = true;
                break;

              default:
                flag = false;
                break;
            }

            break;

          case 'click':
            this.setTextboxDate();
            this.close();
            flag = true;
            break;

          default:
            flag = false;
            break;
        }

        if (flag) {
          event.stopPropagation();
          event.preventDefault();
        }
      }
    }, {
      key: "handleCancelButton",
      value: function handleCancelButton(event) {
        var flag = false;

        switch (event.type) {
          case 'keydown':
            switch (event.key) {
              case 'Esc':
              case 'Escape':
                this.close();
                flag = true;
                break;

              default:
                flag = false;
                break;
            }

            break;

          case 'click':
            this.close();
            flag = true;
            break;

          default:
            flag = false;
            break;
        }

        if (flag) {
          event.stopPropagation();
          event.preventDefault();
        }
      }
    }, {
      key: "handleNextYearButton",
      value: function handleNextYearButton(event) {
        var flag = false;

        switch (event.type) {
          case 'keydown':
            switch (event.key) {
              case 'Esc':
              case 'Escape':
                this.close();
                flag = true;
                break;

              case 'Enter':
                this.moveToNextYear();
                this.setFocusDay(false);
                flag = true;
                break;

              default:
                flag = false;
                break;
            }

            break;

          case 'click':
            this.moveToNextYear();
            this.setFocusDay(false);
            flag = true;
            break;

          default:
            flag = false;
            break;
        }

        if (flag) {
          event.stopPropagation();
          event.preventDefault();
        }
      }
    }, {
      key: "handlePreviousYearButton",
      value: function handlePreviousYearButton(event) {
        var flag = false;

        switch (event.type) {
          case 'keydown':
            switch (event.key) {
              case 'Enter':
                this.moveToPreviousYear();
                this.setFocusDay(false);
                flag = true;
                break;

              case 'Tab':
                if (event.shiftKey) {
                  this.okButtonNode.focus();
                  flag = true;
                }

                break;

              case 'Esc':
              case 'Escape':
                this.close();
                flag = true;
                break;

              default:
                flag = false;
                break;
            }

            break;

          case 'click':
            this.moveToPreviousYear();
            this.setFocusDay(false);
            flag = true;
            break;

          default:
            flag = false;
            break;
        }

        if (flag) {
          event.stopPropagation();
          event.preventDefault();
        }
      }
    }, {
      key: "handleNextMonthButton",
      value: function handleNextMonthButton(event) {
        var flag = false;

        switch (event.type) {
          case 'keydown':
            switch (event.key) {
              case 'Esc':
              case 'Escape':
                this.close();
                flag = true;
                break;

              case 'Enter':
                this.moveToNextMonth();
                this.setFocusDay(false);
                flag = true;
                break;

              default:
                flag = false;
                break;
            }

            break;

          case 'click':
            this.moveToNextMonth();
            this.setFocusDay(false);
            flag = true;
            break;

          default:
            flag = false;
            break;
        }

        if (flag) {
          event.stopPropagation();
          event.preventDefault();
        }
      }
    }, {
      key: "handlePreviousMonthButton",
      value: function handlePreviousMonthButton(event) {
        var flag = false;

        switch (event.type) {
          case 'keydown':
            switch (event.key) {
              case 'Esc':
              case 'Escape':
                this.close();
                flag = true;
                break;

              case 'Enter':
                this.moveToPreviousMonth();
                this.setFocusDay(false);
                flag = true;
                break;

              default:
                flag = false;
                break;
            }

            break;

          case 'click':
            this.moveToPreviousMonth();
            this.setFocusDay(false);
            flag = true;
            break;

          default:
            flag = false;
            break;
        }

        if (flag) {
          event.stopPropagation();
          event.preventDefault();
        }
      }
    }, {
      key: "handleDayKeyDown",
      value: function handleDayKeyDown(event) {
        var flag = false;

        switch (event.key) {
          case 'Esc':
          case 'Escape':
            this.close();
            break;

          case ' ':
            this.setTextboxDate(event.currentTarget);
            flag = true;
            break;

          case 'Enter':
            this.setTextboxDate(event.currentTarget);
            this.close();
            flag = true;
            break;

          case 'Tab':
            this.cancelButtonNode.focus();

            if (event.shiftKey) {
              this.nextYearNode.focus();
            }

            this.setMessage('');
            flag = true;
            break;

          case 'Right':
          case 'ArrowRight':
            this.moveFocusToNextDay();
            flag = true;
            break;

          case 'Left':
          case 'ArrowLeft':
            this.moveFocusToPreviousDay();
            flag = true;
            break;

          case 'Down':
          case 'ArrowDown':
            this.moveFocusToNextWeek();
            flag = true;
            break;

          case 'Up':
          case 'ArrowUp':
            this.moveFocusToPreviousWeek();
            flag = true;
            break;

          case 'PageUp':
            if (event.shiftKey) {
              this.moveToPreviousYear();
            } else {
              this.moveToPreviousMonth();
            }

            this.setFocusDay();
            flag = true;
            break;

          case 'PageDown':
            if (event.shiftKey) {
              this.moveToNextYear();
            } else {
              this.moveToNextMonth();
            }

            this.setFocusDay();
            flag = true;
            break;

          case 'Home':
            this.moveFocusToFirstDayOfWeek();
            flag = true;
            break;

          case 'End':
            this.moveFocusToLastDayOfWeek();
            flag = true;
            break;

          default:
            flag = false;
            break;
        }

        if (flag) {
          event.stopPropagation();
          event.preventDefault();
        }
      }
    }, {
      key: "handleDayClick",
      value: function handleDayClick(event) {
        if (!this.isDayDisabled(event.currentTarget)) {
          this.setTextboxDate(event.currentTarget);
          this.close();
        }

        event.stopPropagation();
        event.preventDefault();
      }
    }, {
      key: "handleDayFocus",
      value: function handleDayFocus() {
        this.setMessage(this.messageCursorKeys);
      }
    }, {
      key: "handleButtonKeydown",
      value: function handleButtonKeydown(event) {
        if (event.key === 'Enter' || event.key === ' ') {
          this.open();
          this.setFocusDay();
          event.stopPropagation();
          event.preventDefault();
        }
      }
    }, {
      key: "handleButtonClick",
      value: function handleButtonClick(event) {
        if (this.isOpen()) {
          this.close();
        } else {
          this.open();
          this.setFocusDay();
        }

        event.stopPropagation();
        event.preventDefault();
      }
    }, {
      key: "handleBackgroundMouseUp",
      value: function handleBackgroundMouseUp(event) {
        if (!this.buttonNode.contains(event.target) && !this.dialogNode.contains(event.target)) {
          if (this.isOpen()) {
            this.close(false);
            event.stopPropagation();
            event.preventDefault();
          }
        }
      }
    }]);

    return DCFDatepicker;
  }();

  _exports.DCFDatepicker = DCFDatepicker;
});
