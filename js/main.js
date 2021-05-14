{
  window.addEventListener("DOMContentLoaded", function () {
    hamburgerMenu();
    accordionMenu();
  });

  // ハンバーガー
  function hamburgerMenu() {
    const button = document.querySelector(".js-menu");
    const target = document.querySelector(".js-menuContent");

    button.addEventListener("click", function (e) {
      e.preventDefault();
      button.classList.toggle("js-active");
      target.classList.toggle("js-active");
      document.body.classList.toggle("js-fixed");
    });
  }

  // アコーディオン
  function accordionMenu() {
    const buttons = document.querySelectorAll(".js-accordion");
    const targets = document.querySelectorAll(".js-accordionContent");

    for (let i = 0; i < buttons.length; i++) {
      buttons[i].addEventListener("click", function (e) {
        e.preventDefault();
        buttons[i].classList.toggle("js-clicked");
        targets[i].classList.toggle("js-active");
      });
    }
  }
}
