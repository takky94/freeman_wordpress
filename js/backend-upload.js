{
  window.addEventListener("load", function () {
    let uploader;

    const d = document;
    const trigger = d.querySelector("#uploadImageButton");
    const imageUrl = d.querySelector("#uploadImage");
    const imageDemo = d.querySelector("#uploadImageDemo");

    trigger.addEventListener("click", function (e) {
      e.preventDefault();

      if (uploader) {
        uploader.open();
        return;
      }

      // メディアアップローダーのインスタンス
      uploader = wp.media({
        title: "メディアの選択またはアップロード",
        library: {
          type: "image",
        },
        button: {
          text: "選択",
        },
        multiple: false,
      });

      uploader.on("select", () => {
        const images = uploader.state().get("selection");

        images.forEach(function (data) {
          const url = data.attributes.url;
          imageUrl.value = url;
          imageDemo.setAttribute("src", url);
        });
      });

      uploader.open();
    }); // trigger.click
  }); // window.addEvent
}
