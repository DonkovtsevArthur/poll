<?php
$search = $_POST['search'];
	echo $search;
	echo '<br>';
$path = "./img";
$dir = opendir($path);
$search='iph';

while(($file = readdir($dir)) !== false)
{
	
    $a[] = strstr($file,$search);
	 
	
}
print_r($a);
echo '<br>';
 foreach($a as $v => $value) 
  { 	
	if(!empty($value)){		
		echo "в папке $path на $v строке, находится файл $value  <br />"; 
	}	

  } 


closedir($dir);
 	$tovar[] = ['nokia'=>true,'img'=>'img/Nokia-X2.png', 'name'=>'Nokia-X2','memory'=>'1Gb','wlan'=>'3G', 'sub'=>'1'];
    $tovar[] = ['lenovo'=>true,'img'=>'img/lenovoa390.png', 'name'=>'Lenovo a390','memory'=>'512Mb','wlan'=>'2G', 'sub'=>'2'];
	$tovar[] = ['lenovo'=>true,'img'=>'img/lenovoa706.png', 'name'=>'Lenovo a706','memory'=>'1Gb','wlan'=>'2G', 'sub'=>'3'];
	$tovar[] = ['samsung'=>true,'img'=>'img/Samsung Galaxy S5.png', 'name'=>'Samsung S5','memory'=>'2Gb','wlan'=>'3G', 'sub'=>'4'];
	$tovar[] = ['samsung'=>true,'img'=>'img/Samsung Galaxy S5.png', 'name'=>'Samsung S4','memory'=>'2Gb','wlan'=>'4G', 'sub'=>'5'];
	$tovar[] = ['iphone'=>true,'img'=>'img/IPhone3G.png', 'name'=>'Iphone 3Gs','memory'=>'256Mb','wlan'=>'3G', 'sub'=>'6'];
	

	foreach ($tovar as $phone) {
					if ($phone[$search]) { 
					$my[] = $phone;
					}
	}
if(isset($my)){ foreach ($my as $phone) {
        $html .='<div class="col-md-4"><div class="mobile"><img class="" src="'.$tovar['img'].'" alt="..."><div class="caption">
			<h3>'.$tovar['name'].'</h3>
			<p>Память:'.$tovar['memory'].'</p>
			<p>Тип связи:'.$tovar['wlan'].'</p>
			<input type="submit"  class="buttom2 text-center" name="'.$tovar['sub'].'" value="КУПИТЬ" >
			</div></div></div>
			';
    }
}
?>
<?php echo $html ?>
