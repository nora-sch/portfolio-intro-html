let portfolioButton = document.getElementById("menu-portfolio");
let languesButton = document.getElementById("menu-langues");
let partialPortfolio = "partials/section-portfolio.html";
let partialLangues = "partials/section-langues.html";
let targetSection = document.getElementById("target-section");
let topMenu = document.getElementById("top-menu");
portfolioButton.addEventListener("click", function (event) {
  event.preventDefault();
  fetchFunction(partialPortfolio);
});
languesButton.addEventListener("click", function (event) {
  event.preventDefault();
  fetchFunction(partialLangues);
});

function fetchFunction(htmlPartial) {
  fetch(htmlPartial)
    .then((response) => {
      return response.text();
    })
    .then((data) => {
      targetSection.innerHTML = data;
    });
}
