"use strict";

{
  window.addEventListener("DOMContentLoaded", function () {
    hamburgerMenu();
    accordionMenu();
    smoothScroll();
  });

  window.addEventListener("scroll", goToTop);

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
        if (!window.matchMedia("(max-width: 768px)").matches) return; // スマホ以外では無効
        e.preventDefault();
        buttons[i].classList.toggle("js-clicked");
        targets[i].classList.toggle("js-active");
      });
    }
  }

  // スムーススクロール
  function smoothScroll() {
    const trigger = document.querySelectorAll('a[href^="#"]');
    for (let i = 0; i < trigger.length; i++) {
      trigger[i].addEventListener("click", function (e) {
        e.preventDefault();
        const href = trigger[i].getAttribute("href");
        const target = document.getElementById(href.replace("#", ""));
        const rect = target.getBoundingClientRect().top;

        const offset = window.pageYOffset;

        const header = document.querySelector(".header");
        const gap = 30;

        const targetPosition = rect + offset - header.offsetHeight - gap;
        window.scrollTo({
          top: targetPosition,
          behavior: "smooth",
        });
      });
    }
  }

  function goToTop() {
    const target = document.querySelector(".js-gototop");
    if (100 < window.scrollY) {
      target.classList.add("js-active");
    } else {
      target.classList.remove("js-active");
    }
  }

  // ショートコードによるスライダー
  if (document.querySelector(".js-related-slider") !== null) {
    const swiperRelated = new Swiper(".js-related-slider", {
      slidesPerView: "auto",
      centeredSlides: true,
      spaceBetween: 15,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  }
}
