"use strict";

{
  window.addEventListener("DOMContentLoaded", heroImage);

  const currentWidth = window.innerWidth;
  window.addEventListener("resize", function () {
    if (currentWidth == window.innerWidth) return; //safariのアドレスバー表示/非表示はresize判定しない
    heroImage();
  });

  function heroImage() {
    const hero = document.querySelector(".js-hero");
    const header = document.querySelector(".header");

    const heroHeight = window.innerHeight - header.offsetHeight;
    hero.style.height = heroHeight + "px";
  }
}
