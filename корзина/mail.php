<meta http-equiv='refresh' content='5; url=https://donkovtsevarthur.ru/cart.php'>
<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
$html .= '
	<h2>'.$_SESSION['name'].'</h2>
	<p>'.$_SESSION['desc'].'</p>';
$html2 .= '
	<h2>'.$_SESSION['name2'].'</h2>
	<p>'.$_SESSION['desc2'].'</p>';
	
$mail = $_POST['mail'];	
	if(isset($mail)) {
		$html_mail .= '<input type="email" name="email" placeholder="введите свой email"> ';	
	}
	
	
	if(isset($mail) and isset($_POST['email'])) {
		$email = $_POST['email'];
		//почта
		$to= $email . ", " ; //обратите внимание на запятую
	/* тема/subject */
		$subject = "Заказ с donkovtsetarthur.ru";
	/* сообщение */
		$message = '
		<html>
		<head>
		 <title></title>
		</head>
		<body>
		<p>Спасибо за заказ</p>
		<div>'.$html.'</div>
		<div>'.$html2.'</div>
		</body>
		</html>
		';
	/* Для отправки HTML-почты вы можете установить шапку Content-type. */
	$headers= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";

	/* дополнительные шапки */
	$headers .= "From: <info@donkovtsevarthur.ru>\r\n";
	$headers .= "Cc: info@donkovtsevarthur.ru\r\n";
	$headers .= "Bcc: info@donkovtsevarthur.ru\r\n";

	/* и теперь отправим из */
	$send = mail($to, $subject, $message, $headers);
	if(isset($send) == true) {
		
		echo "спасибо за заказ! Через 5 секунд вы вернетесь назад <a href='https://donkovtsevarthur.ru/cart.php'></a>";
		
	} else{echo 'сделайте заказ';}	
		
	}

?>
<form action="" method="post">
<a href="https://donkovtsevarthur.ru/cart.php"> назад</a>
<div style="border:1px solid #000; width:400px;margin: 10px 0px 5px 0px;">

<?php echo $html ?>


<?php echo $html2 ?>
</div>
<div>
<?php echo $html_mail ?>
</div>
<input  type="submit" name="mail" value="заказать">	
</form>
