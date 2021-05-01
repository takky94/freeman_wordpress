{
  const _w = window,
    _d = document;

  _w.addEventListener("DOMContentLoaded", function () {
    hamburgerMenu();
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
}
