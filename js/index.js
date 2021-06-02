"use strict";

{
  window.addEventListener("DOMContentLoaded", function () {
    heroImage();
    fadeInElement();
  });

  const currentWidth = window.innerWidth;
  window.addEventListener("resize", function () {
    if (currentWidth == window.innerWidth) return; //safariのアドレスバー表示/非表示はresize判定しない
    heroImage();
  });

  // FVの高さ動的定義
  function heroImage() {
    const hero = document.querySelector(".js-hero");
    const header = document.querySelector(".header");

    const heroHeight = window.innerHeight - header.offsetHeight;
    hero.style.height = heroHeight + "px";
  }

  // 可視範囲でのFadeInアニメーション
  function fadeInElement() {
    const callback = function (entries) {
      for (let i = 0; i < entries.length; i++) {
        if (entries[i].intersectionRatio <= 0) continue;
        classAdd(entries[i].target);
      }
    };
    const options = {
      rootMargin: "-10% 0% -10% 0%",
    };

    const observer = new IntersectionObserver(callback, options);

    const targets = document.querySelectorAll(".js-scroll-animation");
    for (let i = 0; i < targets.length; i++) {
      observer.observe(targets[i]);
    }

    function classAdd(e) {
      e.classList.add("started");
      observer.unobserve(e);
    }
  }

  // スライド
  const slideShow = new Swiper(".swiper-container", {
    effect: "fade",
    autoplay: {
      delay: 6000,
      stopOnLastSlide: false,
      disableOnInteraction: false,
      reverseDirection: false,
    },
    allowTouchMove: false,
    slidesPerView: 1,
  });

  // お知らせ部分のスライド
  const slideNewsShow = new Swiper(".swiper-news-container", {
    autoplay: {
      delay: 60000,
      stopOnLastSlide: false,
      disableOnInteraction: false,
      reverseDirection: false,
    },
    allowTouchMove: false,
    slidesPerView: 1,
  });
}
