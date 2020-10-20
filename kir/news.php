<?php
function logData($var, $filename='../kir.parts/data.log'){
	ob_start();
	var_export($var);
	$out = ob_get_clean();
	$file = fopen($filename, 'a');
	if(!$file){
		echo "file err0r";
		return;
	}
	rewind($file);
	fwrite($file, $out);
	fflush($file);
	fclose($file);
}
function sendTestMail($name, $email){
	$separator = md5(time());
	$eol = "\r\n";
	$mailto = 'kir@aaex.ru';
	$subject = 'Новая подписка!';

	$headers = "From: KIR <kir@aaex.ru>" . $eol;
	$headers .= "MIME-Version: 1.0" . $eol;
	$headers .= "Content-Type: multipart/mixed; boundary = " . $separator . $eol . $eol;

	$message = 'Доброго времени суток!' . $eol;
	$message .= 'Клиент по имени ' . $name . ' с почтой ' . $email . $eol;
	// $message .= 'Хочет записаться на бесплатное занятие!' . $eol;
	$message .= 'Подписался на рассылку!' . $eol;

	$body = "--" . $separator . $eol;
	$body .= "Content-Type: text/plain; charset=\"utf-8\"" . $eol;
	$body .= "Content-Transfer-Encoding: base64" . $eol . $eol;
	$body .= chunk_split(base64_encode($message));

	if (mail($mailto, $subject, $body, $headers)) {
		$mailState = "mail send ... OK" . $eol . $eol;
	} else {
		$mailState = "mail send ... ERROR!" . $eol . $eol;
	}
	logData($mailState);
	return;
}
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_SERVER['HTTP_X_REQUESTED_WITH']) || $_SERVER['HTTP_X_REQUESTED_WITH'] !== 'KIR-Axios') {
	header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
	exit;
}
if (!isset($_GET['test']) || $_GET['test'] !== '1') {
	header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed");
	exit;
}
if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['news-key'])) {
	header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
	exit;
}
logData($_POST);
sendTestMail($_POST['name'], $_POST['email']);
header($_SERVER["SERVER_PROTOCOL"] . " 201 Created");
echo '{"message":"OK","results":["1637214:437766762"]}';
exit;
?>
