"use strict";

{
  if (document.querySelector(".js-single-slider") !== null) {
    const swiper1 = new Swiper(".js-single-slider", {
      slidesPerView: "auto",
      centeredSlides: true,
      spaceBetween: 15,
      loop: true,
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
