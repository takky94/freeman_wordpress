{
  window.addEventListener("load", function () {
    const d = document;
    const triggers = d.querySelectorAll(".js-uploadImageButton");
    const imageUrls = d.querySelectorAll(".js-uploadImage");
    const imageDemos = d.querySelectorAll(".js-uploadImageDemo");

    for (let i = 0; i < triggers.length; i++) {
      triggers[i].addEventListener("click", function (e) {
        e.preventDefault();

        let uploader;

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

        uploader.on("select", function () {
          const images = uploader.state().get("selection");
          images.forEach(function (data) {
            console.log(imageUrls[i]);
            const url = data.attributes.url;
            imageUrls[i].value = url;
            imageDemos[i].setAttribute("src", url);
          });
        });

        uploader.open();
      });
    }
  });
}
