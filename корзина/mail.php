<?php


session_start('1');
header('Content-Type: text/html; charset=utf-8');
$html .= '
	<h2>'.$_SESSION['name'].'</h2>
	<p>'.$_SESSION['desc'].'</p>';
$html2 .= '
	<h2>'.$_SESSION['name2'].'</h2>
	<p>'.$_SESSION['desc2'].'</p>';
	
$_SESSION['mail'] = $_POST['mail'];	
	if(isset($_SESSION['mail'])) {
		$html_mail .= '<input type="email" name="email" placeholder="введите свой email"> ';	
	}
	$_SESSION['email'] = $_POST['email'];
	
	if(isset($_SESSION['mail']) and ($_SESSION['email'])) {//почта
		
		$to  = "<janeair-20@mail.ru>, " ; 
		$to .= "<donkovtsev@icloud.com>"; 

		$subject = "Ваш заказ"; 

		$message = ' 
			<html> 
				<head> 
					<title>Заказ товара</title> 
				</head> 
				<body> 
					<h1>Спасибо за заказ!</h1>
					<p>Наименование:'.$html.'<hr>'.$html2.'</p> 
				
				</body> 
			</html>'; 

		$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
		$headers .= "From: internet-shop <me@example.com>\r\n"; 
		$headers .= "Bcc: donkovtsev@icloud.com\r\n"; 

		$send = mail($to, $subject, $message, $headers); 
		if ($send == 'true')
		{echo 'заказ отправлен';}
		else {echo "Ошибка, сообщение не отправлено!";}

	}

?>
<form action="" method="post">
<div style="border:1px solid #000; width:100px;margin: 10px 0px 5px 0px;">

<?php echo $html ?>


<?php echo $html2 ?>
</div>
<div>
<?php echo $html_mail ?>
</div>
<input  type="submit" name="mail" value="заказать">	
</form>
