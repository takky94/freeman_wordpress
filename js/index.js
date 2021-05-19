"use strict";

{
  window.addEventListener("DOMContentLoaded", function () {
    heroImage();
    textBoxShadow();
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

  // 文字サイズ調整
  function textBoxShadow() {
    if (!navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)) return;
    const o = document.querySelector(".decoration__o");
    const a = document.querySelector(".decoration__a");
    const s = document.querySelector(".decoration__s");
    const w = document.querySelector(".decoration__w");

    o.style.boxShadow = "0.5vw 1.9vw 0 0 #fff inset, -0.9vw -1.9vw 0 0 #fff inset, -0.1vw -0.1vw 0 0 #fff, 0.1vw 0.1vw 0 0 #fff";
    a.style.boxShadow = "0.3vw 2.3vw 0 0 #fff inset, -0.8vw -1.9vw 0 0 #fff inset, -0.1vw -0.1vw 0 0 #fff, 0.1vw 0.1vw 0 0 #fff";
    s.style.boxShadow = "0.4vw 1.8vw 0 0 #fff inset, -0.9vw -2vw 0 0 #fff inset, -0.1vw -0.1vw 0 0 #fff, 0.1vw 0.1vw 0 0 #fff";
    w.style.boxShadow = "0.3vw 1.7vw 0 0 #fff inset, -0.8vw -2.1vw 0 0 #fff inset, -0.1vw -0.1vw 0 0 #fff, 0.1vw 0.1vw 0 0 #fff";
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
