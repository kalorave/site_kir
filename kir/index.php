<?php

$root = in_array(
	$_SERVER['REQUEST_URI'],
	array("/", "/index.php")
);

$expo = in_array(
	$_SERVER['REQUEST_URI'],
	array("/expo", "/expo/", "/expo/index.php")
);

$makers = in_array(
	$_SERVER['REQUEST_URI'],
	array("/makers", "/makers/", "/makers/index.php")
);

$contact = in_array(
	$_SERVER['REQUEST_URI'],
	array("/contact", "/contact/", "/contact/index.php")
);

$archive = in_array(
	$_SERVER['REQUEST_URI'],
	array("/archive", "/archive/", "/archive/index.php")
);

define('root', $_SERVER["DOCUMENT_ROOT"] . '/../kir.parts/');

if ($root) {
	$build = 'var main = ' . file_get_contents('data.js') . ';';
	$build .= file_get_contents(root . 'pages/index.js');
	$body = file_get_contents(root . 'pages/index.html');
	$popup = file_get_contents(root . 'popups/news.html');
}

else{

  $build = 'var table = ' . file_get_contents('data.js') . ';';
  $body = file_get_contents(root . 'pages/table.html');

	if ($expo) {
		$build .= file_get_contents(root . 'pages/expo.js');
	}

	if ($makers) {
		$build .= file_get_contents(root . 'pages/makers.js');
	}

	if ($contact) {
		$body = file_get_contents(root . 'pages/contact.html');
		$build = 'var contact = ' . file_get_contents('data.js') . ';';
	}

	if ($archive) {
		$build .= file_get_contents(root . 'pages/archive.js');
		$popup = file_get_contents(root . 'popups/archive.html');
	}

}

require_once(root . 'template.php');
?>
