"use strict";

{
  window.addEventListener("DOMContentLoaded", function () {
    heroImage();
    fadeInElement();
  });

  const currentWidth = window.innerWidth;
  window.addEventListener("resize", function () {
    textBoxShadow();

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

  function fadeInElement() {
    // IntersectionObserverの作成
    const observer = new IntersectionObserver(
      function (entries) {
        for (let i = 0; i < entries.length; i++) {
          // 領域内なら処理を実行
          if (entries[i].intersectionRatio <= 0) continue;
          showElm(entries[i].target);
        }
      },
      {
        // オプション
        rootMargin: "-10% 0% -10% 0%",
      }
    );
    // 監視対象の追加
    const elements = document.querySelectorAll(".js-scroll-animation");
    for (let i = 0; i < elements.length; i++) {
      observer.observe(elements[i]);
    }
    // 領域内に入ったとき実行する処理
    function showElm(e) {
      e.classList.add("started");
      observer.unobserve(e);
    }
  }
}
