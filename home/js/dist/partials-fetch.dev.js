"use strict";

var portfolioButton = document.getElementById("menu-portfolio");
var languesButton = document.getElementById("menu-langues");
var partialPortfolio = "partials/section-portfolio.html";
var partialLangues = "partials/section-langues.html";
var targetSection = document.getElementById("target-section");
var topMenu = document.getElementById("top-menu");
portfolioButton.addEventListener("click", function (event) {
  event.preventDefault();
  fetchFunction(partialPortfolio);
});
languesButton.addEventListener("click", function (event) {
  event.preventDefault();
  fetchFunction(partialLangues);
});

function fetchFunction(htmlPartial) {
  fetch(htmlPartial).then(function (response) {
    return response.text();
  }).then(function (data) {
    targetSection.innerHTML = data;
  });
}