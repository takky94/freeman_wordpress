"use strict";

{
  window.addEventListener("DOMContentLoaded", function () {
    heroImage();
    fadeInElement();
    slideShow();
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
      entries.forEach(function (entry) {
        if (entry.intersectionRatio > 0) {
          entry.target.classList.add("started");
          observer.unobserve(entry.target);
        }
      });
    };
    const options = {
      root: null,
      rootMargin: "0px 30%",
      threshold: 0,
    };

    const observer = new IntersectionObserver(callback, options);

    const targets = document.querySelectorAll(".js-scroll-animation");
    targets.forEach(function (target) {
      observer.observe(target);
    });
  }

  // スライド
  function slideShow() {
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
        delay: 6000,
        stopOnLastSlide: false,
        disableOnInteraction: false,
        reverseDirection: false,
      },
      allowTouchMove: false,
      slidesPerView: 1,
      loop: true,
    });
  }

  window.addEventListener("load", function () {
    let targetOffset;

    if (window.innerWidth > 768) {
      targetOffset = -160;
    } else {
      targetOffset = -130;
    }

    const options = {
      section: ".js-scrollSnap",
      easing: "swing",
      scrollSpeed: 600,
      scrollbars: true,
      setHeights: false,
      updateHash: false,
      touchScroll: true,
      offset: targetOffset,
      overflowScroll: true,
    };

    $.scrollify(options);
  });
  // スクロールスナップ
}
