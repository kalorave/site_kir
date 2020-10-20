if (article.header && article.header.img) {
  preloadImage(article.header.img);
}
if (article.info && article.info.img) {
  preloadImage(article.info.img);
}
if (article.sections) {
  for (var i = 0; i < article.sections.length; i++) {
    if (article.sections[i].img) {
      for (var j = 0; j < article.sections[i].img.length; j++) {
        preloadImage(article.sections[i].img[j]);
      }
    }
  }
}
if (article.links) {
  for (var i = 0; i < article.links.length; i++) {
    preloadImage(article.links[i].back);
  }
}
