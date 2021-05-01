{
  const _w = window,
    _d = document;

  _w.addEventListener("DOMContentLoaded", function () {
    hamburgerMenu();
    accordionMenu();
  });

  // ハンバーガー
  function hamburgerMenu() {
    const button = _d.querySelector(".js-menu");
    const target = _d.querySelector(".js-menuContent");

    button.addEventListener("click", function (e) {
      e.preventDefault();
      button.classList.toggle("js-active");
      target.classList.toggle("js-active");
      _d.body.classList.toggle("js-fixed");
    });
  }

  // アコーディオン
  function accordionMenu() {
    const buttons = _d.querySelectorAll(".js-accordion");
    const targets = _d.querySelectorAll(".js-accordionContent");

    for (let i = 0; i < buttons.length; i++) {
      buttons[i].addEventListener("click", function (e) {
        e.preventDefault();
        targets[i].classList.toggle("js-active");
      });
    }
  }
}
