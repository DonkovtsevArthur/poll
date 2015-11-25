<?php
$filename = "iphone4.png";
$foldername = "./img";


//способ 1
		$files = scandir($foldername);
		print_r($files);
		echo "<br><br>";
			if (in_array($filename, $files)) {
				echo "способ №1: $foldername/$filename <br>";	
			}
			else {
				echo 'no file';
				}
			echo "<br><br><br>";
			
//способ 2			
		$handle = opendir("./img");
		while(($item = readdir($handle)) !== false)  {
				 if ($item != "." && $item != "..") { 
					if($item == $filename) {
						echo "способ №2: $foldername/$filename <br>";
					}
			}	
		}

?>

