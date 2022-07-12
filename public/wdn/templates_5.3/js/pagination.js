"use strict";

require(['dcf-pagination'], function (DCFPaginationModule) {
  var paginationNavs = document.querySelectorAll('.dcf-pagination');
  var pagination = new DCFPaginationModule.DCFPagination(paginationNavs);
  pagination.initialize();
});
