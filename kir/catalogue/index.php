<?php
$root = in_array(
	$_SERVER['REQUEST_URI'],
	array("/catalogue", "/catalogue/", "/catalogue/index.php")
);
define('root', $_SERVER["DOCUMENT_ROOT"] . '/../kir.parts/');
if ($root) {
	$build = 'var catalogue = ' . file_get_contents('data.js') . ';'
	. file_get_contents(root . 'pages/catalogue.js');
	$body = file_get_contents(root . 'pages/catalogue.html');
}
else {
	$build = 'var category = ' . file_get_contents('data.js') . ';'
	. file_get_contents(root . 'pages/category.js');
  $body = file_get_contents(root . 'pages/category.html');
}
require_once(root . 'template.php');
?>
