window.document.addEventListener("DOMContentLoaded", function () {
  const { select, dispatch, subscribe } = wp.data;

  // エディタが読み込まれたかどうか
  const isEditorReadyPromise = new Promise((resolve) => {
    const unsubscribe = subscribe(() => {
      const isNewPost = select("core/editor").isCleanNewPost();
      if (isNewPost) {
        unsubscribe();
        resolve();
      }
      const blocks = select("core/block-editor").getBlocks();
      if (blocks.length > 0) {
        unsubscribe();
        resolve();
      }
    });
  });

  // エディタが読み込まれたら実行
  isEditorReadyPromise.then(() => {
    const getCategories = () => select("core/editor").getEditedPostAttribute("news_category");
    // 編集画面を開いた時点での選択カテゴリ
    let categories = getCategories();

    // カテゴリが選択状態に応じてロック/ロック解除
    const switchAlert = () => {
      // カテゴリ未選択
      if (categories.length === 0) {
        dispatch("core/notices").createNotice("error", "カテゴリーを選択してください", {
          id: "fm_notice_taxonomy",
          isDismissible: false,
        });
        // 保存をロックして公開出来ないように
        dispatch("core/editor").lockPostSaving("fm_taxonomy_lock");
        // カテゴリ選択
      } else {
        // 通知を非表示にして保存のロックを解除
        dispatch("core/notices").removeNotice("fm_notice_taxonomy");
        dispatch("core/editor").unlockPostSaving("fm_taxonomy_lock");
      }
    };
    // 最初に実行
    switchAlert();

    // 変更ごとに実行
    subscribe(() => {
      const newCategories = getCategories();
      const categoriesChanged = newCategories !== categories;
      categories = newCategories;
      if (!categoriesChanged) return;
      switchAlert();
    });
  });
});
