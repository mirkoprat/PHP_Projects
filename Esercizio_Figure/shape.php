<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$num=$_GET["num"];
$shape=$_GET["shape"];

if($shape == "triangolo"){
	for ($i = 1; $i<=$num; $i++) {
		for ($j = 1; $j<=$i; $j++) {
			echo "*";
		}
		echo "<br>"; // vai a capo (in HTML)
	}
}else if($shape == "quadrato"){

	for($i=1; $i<=$num; $i++){
		for($j=1; $j<=$num; $j++){
			echo"*";
		}
		echo"<br>";
	}
}else if($shape == "triangolocontrario"){
	$temp = $num;
	for($i=0; $i<=$num; $i++){
	for($j=$temp; $j>0; $j--){
			echo "*";
		}
		$temp--;
		echo"<br>";
	}
}else if ($shape == "cornice"){
	if($num > 2){// ho messo che la cornice deve avere una dimensione di massimo 3 
	for($i=1; $i<=$num; $i++){
		for($j=1; $j<=$num; $j++){
		if($i != $num && $i != 1){
			if($j==1 || $j== $num){
			echo "*";
				}else{
				echo "&nbsp&nbsp"; 
				}
			}else{
			echo"*";
			}
		}
	echo"<br>";
		}
	}else{
		echo "inserisci una dimensione piu' grande";
	}
}


echo "<br>";
echo '<a href= "Forme.html"> <button> Torna indietro </button></a>'; 

?>