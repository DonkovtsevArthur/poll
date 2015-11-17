	<?php 

	$phones[] = ['all'=>true,'1'=>true,'2g'=>false,'microsoft'=>true, '3g'=>true, '4g'=>false,'img'=>'img/Nokia-X2.png', 'name'=>'Nokia-X2','memory'=>'1Gb','wlan'=>'3G'];
    $phones[] = ['all'=>true,'512'=>true,'2g'=>true,'lenovo'=>true, '3g'=>false, '4g'=>false,'img'=>'img/lenovoa390.png', 'name'=>'Lenovo a390','memory'=>'512Mb','wlan'=>'2G'];
     $phones[] = ['all'=>true,'1'=>true,'2g'=>true,'lenovo'=>true, '3g'=>false, '4g'=>false,'img'=>'img/lenovoa706.png', 'name'=>'Lenovo a706','memory'=>'1Gb','wlan'=>'2G'];
   $phones[] = ['all'=>true,'2'=>true,'2g'=>false,'samsung'=>true, '3g'=>true, '4g'=>false,'img'=>'img/Samsung Galaxy S5.png', 'name'=>'Samsung S5','memory'=>'2Gb','wlan'=>'3G'];
  
	$phones[] = ['all'=>true,'2'=>true,'2g'=>false,'samsung'=>true, '3g'=>false, '4g'=>true,'img'=>'img/Samsung Galaxy S5.png', 'name'=>'Samsung S4','memory'=>'2Gb','wlan'=>'4G'];
	$phones[] = ['all'=>true,'256'=>true,'2g'=>false,'apple'=>true, '3g'=>true, '4g'=>false,'img'=>'img/IPhone3G.png', 'name'=>'Iphone 3Gs','memory'=>'256Mb','wlan'=>'3G'];

	$tel = $_GET['tel'];
	$memory = $_GET['memory'];	
	$set = $_GET['set'];
	$submit = $_GET['submit'];
		$tel1 = ['microsoft' => '1', 'samsung' => '2', 'lenovo' => '3', 'apple' => '4'];
			if(isset($tel)) {
			foreach($tel as $g) {
				if(isset($tel1[$g]))
                $tel1[$g] = 'checked="checked"';
			}
		}
		$set1 = ['2g' => '1', '3g' => '2', '4g' => '3'];
		if(isset($_GET['set'])){
			foreach($_GET['set'] as $g) {
				if(isset($set1[$g]))
                $set1[$g] = 'checked="checked"';
			echo  $set1[$g];
			}
		}
	
	
	if( isset($tel, $mem, $set)) {
				if ($phone['all']) { 
					$myphones[] = $phone;
				}
	
			}
		 elseif(isset($tel) && isset($set)) {
				foreach($tel as $v => $value ) {
					$m = $tel[$v];					
					foreach($set as $v => $value ) {
						$s = $set[$v];						
						foreach ($phones as $phone) {
							if (($phone[$m])&& ($phone[$memory])&& ($phone[$s])) { 
							$myphones[] = $phone;
							}elseif (($phone[$m]) && ($phone[$s])) {
								$myphones[] = $phone;
							}
						}					
					}					
				}				
			} 
							
		 elseif($tel) {
			foreach($tel as $v => $value ) {
				$m = $tel[$v];
			
				foreach ($phones as $phone) {
					if ($phone[$m]) { 
					$myphones[] = $phone;
					}
				}
			}
		}	
		 elseif($set) {
			foreach($set as $v => $value ) {
				
				$s = $set[$v];					
				foreach ($phones as $phone) {
					if ($phone[$s]) { 
					$myphones[] = $phone;
					}
				}
			}	
		}  elseif($memory) {	 
				foreach ($phones as $phone) {
					if ($phone[$memory]) { 
					$myphones[] = $phone;
					}
				}			
		}	
		else {			
			foreach ($phones as $phone) {
				if ($phone['all']) { 
					$myphones[] = $phone;
				}
			}
		}	
	
    $html = '';
    $html .= '<div class="col-md-12 text-right vsego">Всего : '.count($myphones).' шт.</div>';
   if(isset($myphones)){ foreach ($myphones as $phone) {
        $html .='<div class="col-md-4"><div class="mobile"><img class="" src="'.$phone['img'].'" alt="..."><div class="caption">
			<h3>'.$phone['name'].'</h3>
			<p>Память:'.$phone['memory'].'</p>
			<p>Тип связи:'.$phone['wlan'].'</p></div></div></div>';
    }
	
   }  else { $html .= '<div class="col-md-12 text-center vsego">Еще не привезли с такими параметрами</div>';}
	
	?>
	
		