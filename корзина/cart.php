<?PHP

header('Content-Type: text/html; charset=utf-8');

$tovar = ['name'=>'Товар','desc'=>'Описание'];
$tovar2 = ['name2'=>'Товар2','desc2'=>'Описание2'];

session_start();

$_SESSION['sub'] = $_GET['sub'];
$_SESSION['sub2'] = $_GET['sub2'];
if(isset($_SESSION['sub'] )) {
$_SESSION['name'] = $tovar['name'];
$_SESSION['desc'] = $tovar['desc'];

}
if(isset($_SESSION['sub2'] )) {
$_SESSION['name2'] = $tovar2['name2'];
$_SESSION['desc2'] = $tovar2['desc2'];

}

?>

<div> <a href="mail.php">корзина</a></div>
<form  method="get">
<div style="border:1px solid #000; width:100px;margin: 10px 0px 5px 0px;">
	<h2><?php echo $tovar['name']?></h2>
	<p><?php echo $tovar['desc']?></p>
</div>
	<input  type="submit" name="sub" value="+ в  корзину">
<div style="border:1px solid #000; width:100px;margin: 10px 0px 5px 0px;">
	<h2><?php echo $tovar2['name2']?></h2>
	<p><?php echo $tovar2['desc2']?></p>
</div>
	<input  type="submit" name="sub2" value="+ в  корзину">	

</form>