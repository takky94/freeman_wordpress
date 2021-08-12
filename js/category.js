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

  // 絞り込み検索用
  if (document.querySelector(".js-jewelry-item-term") !== null) {
    const terms = [];
    const items = document.querySelectorAll(".js-jewelry-item");
    const buttons = document.querySelectorAll(".js-jewelry-item-term");
    const note = document.querySelector(".js-note");

    for (const button of buttons) {
      button.addEventListener("click", function () {
        button.classList.toggle("active");
        // クリックした条件を絞り込み条件リストに追加/削除
        const term = button.getAttribute("data-term");
        const termPosition = terms.indexOf(term);
        if (termPosition !== -1) {
          terms.splice(termPosition, 1);
        } else {
          terms.push(term);
        }
        console.log("terms: ", terms);
        // 絞り込み
        for (const item of items) {
          // data-tagsなければ処理終了
          if (item.getAttribute("data-tags") === null) continue;
          // 選択されてる条件ないなら全てのfadeOut取ってカウント0に戻して処理終了
          if (terms.length === 0 && item.classList.contains("fadeOut")) {
            item.classList.remove("fadeOut");
            continue;
          }
          // 空白削除して配列に
          const itemTagsArray = item.getAttribute("data-tags").replace(/\s+/g, "").split(",");
          const isIncludedTerm = terms.filter(function (term) {
            return itemTagsArray.indexOf(term) !== -1;
          });
          if (isIncludedTerm.length !== terms.length && !item.classList.contains("fadeOut")) {
            // 現在の条件と完全一致してなくてfadeOutクラスもなければfadeOutクラス付与
            item.classList.add("fadeOut");
          } else if (isIncludedTerm.length === terms.length && item.classList.contains("fadeOut")) {
            // 現在の条件と完全一致しててfadeOutクラスあるならfadeOutクラス外す
            item.classList.remove("fadeOut");
          }
        }
        // ヒット数が0なら注意書き表示
        const hit = document.querySelectorAll(".js-jewelry-item.fadeOut");
        if (hit.length === items.length && note.classList.contains("none")) {
          note.classList.remove("none");
        } else if (hit.length !== items.length && !note.classList.contains("none")) {
          note.classList.add("none");
        }
      });
    }
  }
}
