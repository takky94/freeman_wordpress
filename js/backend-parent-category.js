{
  window.addEventListener("load", function () {
    const d = document;
    const parentCategoryJewelry = d.querySelectorAll(".parent-jewelry");
    const parentCategoryOthers = d.querySelectorAll(".parent-others");
    const parentCategorySelect = d.querySelector("#parent");
    let choicedIndex = parentCategorySelect.selectedIndex;
    let parentCategory = parentCategorySelect.options[choicedIndex].text;

    function jewelryBoxDisplay(value) {
      parentCategoryJewelry.forEach(function (e) {
        e.style.display = value;
      });
    }
    function othersBoxDisplay(value) {
      parentCategoryOthers.forEach(function (e) {
        e.style.display = value;
      });
    }
    function boxStyle() {
      if (parentCategory === "ジュエリー") {
        jewelryBoxDisplay("table-row");
        othersBoxDisplay("none");
      } else if (parentCategory === "なし") {
        othersBoxDisplay("none");
        jewelryBoxDisplay("none");
      } else {
        othersBoxDisplay("table-row");
        jewelryBoxDisplay("none");
      }
    }

    boxStyle();
    parentCategorySelect.addEventListener("change", function () {
      choicedIndex = parentCategorySelect.selectedIndex; // 更新
      parentCategory = parentCategorySelect.options[choicedIndex].text; // 更新
      boxStyle();
    });
  });
}
