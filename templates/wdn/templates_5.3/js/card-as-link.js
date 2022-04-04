"use strict";

require(['dcf-cardAsLink'], function (cardAsLinkModule) {
  var cards = document.querySelectorAll('.dcf-card-as-link');
  var cardAsLink = new cardAsLinkModule.DCFCardAsLink(cards);
  cardAsLink.initialize();
});
