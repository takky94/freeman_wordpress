"use strict";

{
  {
    // category-child-product-linkで投稿が7件以上時のアコーディオン
    if (document.querySelector("#square-secondTrigger") !== null) {
      const trigger = document.querySelector("#square-secondTrigger");
      trigger.addEventListener("change", function (e) {
        e.preventDefault();
        const target = document.querySelector(".js-hidden-links");
        const targetHeight = target.scrollHeight;
        target.style.maxHeight = target.offsetHeight === 180 ? `${targetHeight}px` : "180px";
        if (target.classList.contains("is-show")) {
          target.classList.remove("is-show");
        } else {
          target.classList.add("is-show");
        }
      });
    }
  }

  if (document.querySelector(".js-mold-slider") !== null) {
    const swiperMold = new Swiper(".js-mold-slider", {
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

  if (document.querySelector(".js-category-child-slider") !== null) {
    const swiperCategoryChild = new Swiper(".js-category-child-slider", {
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

  if (document.querySelector(".js-related-category-slider") !== null) {
    const swiperRelatedCategory = new Swiper(".js-related-category-slider", {
      slidesPerView: "auto",
      centeredSlides: true,
      // .related-category-sliderの余白に合わせる
      spaceBetween: 20,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  }
}
