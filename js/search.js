"use strict";

{
  const _w = window,
    _d = document;

  _w.addEventListener("DOMContentLoaded", function () {
    decorate();
  });

  // ヒットした文字を装飾
  function decorate() {
    if (!_w.location.search.length) return;

    const params = decodeURI(location.search.substring(1)); // ?除くパラメータをデコードして取得
    const searchArray = params.split("=");
    const query = searchArray[1];

    const targets = _d.querySelectorAll(".title, .description");
    if (!targets.length) return;

    for (let i = 0; i < targets.length; i++) {
      const target = targets[i];
      markText(target, query);
    }

    console.log(targets);
  }

  function markText(node, word) {
    _markText(node, new RegExp(word, "g"), function (node, match, offset) {
      const mark = document.createElement("mark");
      mark.textContent = match;
      return mark;
    });

    function _markText(node, regex, callback, excludeElements) {
      excludeElements || (excludeElements = ["script", "style", "iframe", "canvas"]);
      let child = node.firstChild;
      while (child) {
        switch (child.nodeType) {
          case 1: {
            if (excludeElements.indexOf(child.tagName.toLowerCase()) > -1) break;
            _markText(child, regex, callback, excludeElements);
            break;
          }
          case 3: {
            let bk = 0;
            child.data.replace(regex, function (all) {
              let args = [].slice.call(arguments),
                offset = args[args.length - 2],
                newTextNode = child.splitText(offset + bk),
                tag;
              bk -= child.data.length + all.length;
              newTextNode.data = newTextNode.data.substr(all.length);
              tag = callback.apply(window, [child].concat(args));
              child.parentNode.insertBefore(tag, newTextNode);
              child = newTextNode;
            });
            regex.lastIndex = 0;
            break;
          }
        }
        child = child.nextSibling;
      }
      return node;
    }
  }
}
