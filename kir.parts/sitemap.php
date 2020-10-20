<?php
$mapEntries = '';
$d = dir("../kir/articles/");
while (false !== ($e = $d->read())) {
  if ($e == "." || $e == ".." || $e == "test" || !is_dir($d->path . "/" . $e)) continue;
  $mapEntries .= '<url><loc>http://kir.aaex.ru/articles/' . $e . '/</loc><changefreq>daily</changefreq><priority>1.0</priority></url>';
}
$d->close();
$d = dir("../kir/catalogue/");
while (false !== ($e = $d->read())) {
  if ($e == "." || $e == ".." || $e == "test" || !is_dir($d->path . "/" . $e)) continue;
  $mapEntries .= '<url><loc>http://kir.aaex.ru/catalogue/' . $e . '/</loc><changefreq>daily</changefreq><priority>1.0</priority></url>';
}
$d->close();
$mapProto = '<urlset xmlns="https://www.sitemaps.org/schemas/sitemap/0.9" xmlns:news="http://www.google.com/schemas/sitemap-news/0.9"><url><loc>http://kir.aaex.ru/</loc><changefreq>daily</changefreq><priority>1.0</priority></url><url><loc>http://kir.aaex.ru/makers/</loc><changefreq>daily</changefreq><priority>1.0</priority></url><url><loc>http://kir.aaex.ru/expo/</loc><changefreq>daily</changefreq><priority>1.0</priority></url><url><loc>http://kir.aaex.ru/archive/</loc><changefreq>daily</changefreq><priority>1.0</priority></url><url><loc>http://kir.aaex.ru/catalogue/</loc><changefreq>daily</changefreq><priority>1.0</priority></url>' . $mapEntries . '</urlset>';
$file = "../kir/sitemap.xml";
file_put_contents($file, $mapProto);
?>
