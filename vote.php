	<?php 
	$smart = array(
 /*0*/
    "1" => '<div class="col-md-4">
				<div class="mobile">
					<img src="img/Nokia-X2.png" alt="...">
					<div class="caption">
						<h3>Nokia-X2</h3>
							<p>Память: 1Gb</p>
							<p>Тип связи: 3G</p> 
			</div>
			</div></div>  ',
  									

/*1*/ 
    "2" => '					<div class="col-md-4">
						<div class="mobile">
							<img class="sam" src="img/Samsung Galaxy S5.png" alt="...">
							<div class="caption">
								<h3>Samsung S4</h3>
								<p>Память: 2Gb</p>
								<p>Тип связи: 3G</p>
							</div>
						</div>					
					</div> ',
  									
 
 /*2*/ 
    "3" => '					<div class="col-md-4">
						<div class="mobile">
							<img class="len"src="img/lenovoa390.png" alt="...">
							<div class="caption">
								<h3>Lenovo a390</h3>
								<p>Память: 512Mb</p>
								<p>Тип связи: 2G</p>
							</div>
						</div>					
					</div> ',
  									
 /*3*/ 
    "4" => '								<div class="col-md-4">
						<div class="mobile">
							<img class="len"src="img/lenovoa706.png" alt="...">
							<div class="caption">
								<h3>Lenovo a706</h3>
								<p>Память: 1Gb</p>
								<p>Тип связи: 2G</p>
							</div>
						</div>					
					</div> ',

 /*4*/ 
    "5" => '								<div class="col-md-4">
						<div class="mobile">
							<img class="sam" src="img/Samsung Galaxy S5.png" alt="...">
							<div class="caption">
								<h3>Samsung S5</h3>
								<p>Память: 2Gb</p>
								<p>Тип связи: 4G</p>
							</div>
						</div>					
					</div>',
 /*5*/ 
    "6" => '						<div class="col-md-4">
						<div class="mobile">
							<img class="iph" src="img/IPhone3G.png" alt="...">
							<div class="caption">
								<h3>Iphone 3Gs</h3>
								<p>Память: 256Mb</p>
								<p>Тип связи: 3G</p>
							</div>
						</div>
					</div> '
);




		$tel = $_GET['tel'];
		$mem = $_GET['memory'];
		$set = $_GET['set'];
		$tel1 = array('microsoft' => '1', 'samsung' => '2', 'lenovo' => '3', 'apple' => '4');
		if(isset($_GET['tel'])) {
			foreach($_GET['tel'] as $v) {
				if(isset($tel1[$v]))
                $tel1[$v] = 'checked="checked"';
			}
		};
		$set1 = array('2G' => '', '3G' => '', '4G' => '');
		if(isset($_GET['set'])){
			foreach($_GET['set'] as $v) {
				if(isset($set1[$v]))
                $set1[$v] = 'checked="checked"';
			}
		};
		
		




		if(isset($tel, $mem, $set)){
			$x = implode(' ',$smart);
		}else if($tel){
				if ($tel['1'] and $tel['2'] and $tel['3'] and $tel['4']) {
					$check = 'checked';
					$x = implode(' ',$smart);
					
				} else if($tel['1'] and $tel['2'] and $tel['3']) {
					$check = 'checked';
					unset($smart['6']);
					$x = implode(' ',$smart);
				
				} 
				else if($tel['1'] and $tel['2'] and $tel['4']) {
					$check = 'checked';
					unset($smart['3'],$smart['4']);
					$x = implode(' ',$smart);
					
				} else if($tel['1'] and $tel['3'] and $tel['4']) {
					$check = 'checked';
					unset($smart['2'],$smart['5']);
					$x = implode(' ',$smart);
					
				} else if($tel['1'] and $tel['2']) {
					$check = 'checked';
					unset($smart['3'],$smart['4'],$smart['6']);
					$x = implode(' ',$smart);
					
				} else if($tel['1'] and $tel['3']) {
					$check = 'checked';
					unset($smart['2'],$smart['5'],$smart['6']);
					$x = implode(' ',$smart);
					
				} else if($tel['1'] and $tel['4']) {
					$check = 'checked';
					unset($smart['2'],$smart['3'],$smart['4'],$smart['5']);
					$x = implode(' ',$smart);
					
				} else if($tel['1']) {
					$x = $smart['1'];
					
				} else if($tel['2'] and $tel['3'] and $tel['4']) {
					unset($smart['1']);
					$x = implode(' ',$smart);
					
				} else if($tel['2'] and $tel['3']) {
					unset($smart['1'],$smart['6']);
					$x = implode(' ',$smart);
					
				} else if($tel['2'] and $tel['4']) {
					unset($smart['1'],$smart['3'],$smart['4']);
					$x = implode(' ',$smart);
					
				} else if($tel['2']) {
					unset($smart['1'],$smart['3'],$smart['4'],$smart['6']);
					$x = implode(' ',$smart);
					
				} else if($tel['3'] and $tel['4']) {
					unset($smart['1'],$smart['2'],$smart['5']);
					$x = implode(' ',$smart);
					
				} else if($tel['3']) {
					unset($smart['1'],$smart['2'],$smart['5'],$smart['6']);
					$x = implode(' ',$smart);
					
				} else if($tel['4']) {
					$x = $smart['6'];
					
				}			
		}  else if($set) {
			if ($set['2G'] and $set['3G'] and $set['4G']) {
					$x = implode(' ',$smart);
					
			} else if($set['2G'] and $set['3G']) {
					unset($smart['5']);
					$x = implode(' ',$smart);
					
			} else if($set['2G'] and $set['4G']) {
					unset($smart['1'],$smart['2'],$smart['6']);
					$x = implode(' ',$smart);
					
			} else if($set['2G']) {
					unset($smart['1'],$smart['2'],$smart['5'],$smart['6']);
					$x = implode(' ',$smart);
					
			} else if($set['3G'] and $set['4G']) {
					unset($smart['3'],$smart['4']);
					$x = implode(' ',$smart);
				
			} else if($set['3G']) {
					unset($smart['3'],$smart['4'],$smart['5']);
					$x = implode(' ',$smart);
					
			} else if($set['4G']) {
				$x = $smart['5'];
				
			}
		}
		 else if($mem == 'm256') {			
					
					$x = $smart['6'];
				
			}else if($mem == 'm512') {			
					$x = $smart['3'];
				
			} else if($mem == 'm1') {			
					unset($smart['2'],$smart['3'],$smart['5'],$smart['6']);
					$x = implode(' ',$smart);
					
			} else if($mem == 'm2') {			
					unset($smart['1'],$smart['3'],$smart['4'],$smart['6']);
					$x = implode(' ',$smart);
					
			}		
		 else { 
					$x = implode(' ',$smart);
					
		}
	?>

			

 
		