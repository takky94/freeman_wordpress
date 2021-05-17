"use strict";

{
  window.addEventListener("DOMContentLoaded", function () {
    heroImage();
    textBoxShadow();
    ScrollReveal().reveal(".js-scroll-shown-block", {
      delay: 100,
      duration: 1000,
      origin: "bottom",
      distance: "50px",
    });
    ScrollReveal().reveal(".js-scroll-shown-title", {
      delay: 500,
      duration: 1500,
      origin: "left",
      distance: "20px",
    });
  });

  const currentWidth = window.innerWidth;
  window.addEventListener("resize", function () {
    textBoxShadow();

    if (currentWidth == window.innerWidth) return; //safariのアドレスバー表示/非表示はresize判定しない
    heroImage();
  });

  function heroImage() {
    const hero = document.querySelector(".js-hero");
    const header = document.querySelector(".header");

    const heroHeight = window.innerHeight - header.offsetHeight;
    hero.style.height = heroHeight + "px";
  }

  function textBoxShadow() {
    if (!navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)) return;
    const o = document.querySelector(".decoration__o");
    const a = document.querySelector(".decoration__a");
    const s = document.querySelector(".decoration__s");
    const w = document.querySelector(".decoration__w");

    o.style.boxShadow =
      "0.5vw 1.9vw 0 0 #fff inset, -0.9vw -1.9vw 0 0 #fff inset, -0.1vw -0.1vw 0 0 #fff, 0.1vw 0.1vw 0 0 #fff";
    a.style.boxShadow =
      "0.3vw 2.3vw 0 0 #fff inset, -0.8vw -1.9vw 0 0 #fff inset, -0.1vw -0.1vw 0 0 #fff, 0.1vw 0.1vw 0 0 #fff";
    s.style.boxShadow =
      "0.4vw 1.8vw 0 0 #fff inset, -0.9vw -2vw 0 0 #fff inset, -0.1vw -0.1vw 0 0 #fff, 0.1vw 0.1vw 0 0 #fff";
    w.style.boxShadow =
      "0.3vw 1.7vw 0 0 #fff inset, -0.8vw -2.1vw 0 0 #fff inset, -0.1vw -0.1vw 0 0 #fff, 0.1vw 0.1vw 0 0 #fff";
  }
}
