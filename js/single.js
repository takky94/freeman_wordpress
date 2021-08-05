"use strict";

{
  if (document.querySelector(".js-single-slider") !== null) {
    const slideLength = document.querySelectorAll(".js-single-slider .swiper-slide").length;
    console.log("スライドの枚数: ", slideLength, "FROM single.js");

    // スライドが1枚以下の時の挙動変更
    const loop = slideLength <= 1 ? false : true;

    const swiper = new Swiper(".js-single-slider", {
      slidesPerView: "auto",
      centeredSlides: true,
      spaceBetween: 15,
      loop: loop,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        type: "fraction",
        formatFractionCurrent: function (number) {
          if (number > 9) return number;
          return "0" + number;
        },
        formatFractionTotal: function (number) {
          if (number > 9) return number;
          return "0" + number;
        },
      },
    });
  }
}
