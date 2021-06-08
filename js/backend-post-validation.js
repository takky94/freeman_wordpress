{
  const { select, dispatch, subscribe } = wp.data;

  const getCategories = () => select("core/editor").getEditedPostAttribute("categories");
  let categories = getCategories();
  subscribe(() => {
    const newCategories = getCategories();
    const categoriesChanged = newCategories !== categories;
    categories = newCategories;
    if (categoriesChanged) {
      // カテゴリ未選択
      if (categories.length === 0) {
        dispatch("core/notices").createNotice("error", "カテゴリーを選択してください", {
          id: "sample_notice_category",
          isDismissible: false,
        });
        // 保存をロックして公開出来ないように
        dispatch("core/editor").lockPostSaving("sample_category_lock");
        // カテゴリ選択
      } else {
        // 通知を非表示にして保存のロックを解除
        dispatch("core/notices").removeNotice("sample_notice_category");
        dispatch("core/editor").unlockPostSaving("sample_category_lock");
      }
    }
  });
}
