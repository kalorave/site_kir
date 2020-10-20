<?php
define('root', $_SERVER["DOCUMENT_ROOT"] . '/../kir.parts/');
$body = file_get_contents(root . 'pages/search.html');
require_once(root . 'template.php');
?>
