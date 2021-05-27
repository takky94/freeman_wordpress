{
  const swiper1 = new Swiper(".js-mold-slider", {
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

  const swiper2 = new Swiper(".js-category-child-slider", {
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
