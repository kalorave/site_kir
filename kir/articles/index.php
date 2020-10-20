<?php
$root = in_array(
	$_SERVER['REQUEST_URI'],
	array("/article", "/article/", "/article/index.php")
);
if ($root) {
  header( 'Location: /', true, 301 );
} else {
	define('root', $_SERVER["DOCUMENT_ROOT"] . '/../kir.parts/');
	$build = 'var article = ' . file_get_contents('data.js') . ';';
	$build .= 'if (article.links) { article.links.push(' . file_get_contents('../data.js') . ') };';
	$build .= file_get_contents(root . 'pages/article.js');
  $body = file_get_contents(root . 'pages/article.html');
  require_once(root . 'template.php');
}
?>
