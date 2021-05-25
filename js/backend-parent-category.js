{
  window.addEventListener("load", function () {
    const d = document;
    const parentCategoryJewelry = d.querySelectorAll(".parent-jewelry");
    const parentCategoryOthers = d.querySelectorAll(".parent-others");
    const parentCategory = d.querySelector("#parent");

    parentCategoryJewelry.forEach(function (e) {
      e.style.display = none;
    });
  });
}
