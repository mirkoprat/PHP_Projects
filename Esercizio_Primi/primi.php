<?php 
error_log(E_ALL);
ini_set("display_errors",1);

$int1=$_POST["intervallo1"];
$int2=$_POST["intervallo2"];

$num=$_POST["num"];

function Primi($int1,$int2){	
	if ($int1 > $int2) {
    // scambio se l'intervallo è invertito
    $tmp = $int1;
    $int1 = $int2;
    $int2 = $tmp;
    }
	
	if ($int1 < 2) {
    $int1 = 2; // i numeri primi partono da 2
    }

	for($i=$int1; $i<=$int2; $i++){
		$prime = true;
		for($j = 2; $j*$j<=$i; $j++){ // cerco divisori di $i solo fino a √$i 
			if($i % $j == 0){
				$prime = false;
				break; // se trovo che il nuumero è divisibile esco
				}
			}
		if($prime) echo " il numero $i e' primo <br>";
		}	
	return false;
}

function Primi_NNumeri($n) {
    if ($n <= 0) {
        echo "la dimenssione deve essere positiva";
        return;
    }
    
    echo "I primi $n numeri primi sono: ";
    
    $count = 0;
    $num = 2;
    
    while ($count < $n) {
        $isPrimo = true;
        
        if ($num < 2) {
            $isPrimo = false;
        } else {
            for ($i = 2; $i*$i <= $num; $i ++) {
                if ($num % $i == 0) {
                    $isPrimo = false;
                    break;
                }
            }
        }
        
        if ($isPrimo) {
            echo $num . " ";
            $count++;
        }
        $num++;
    }
}
	
if($_POST["tipo"] == "intervalli"){
Primi($int1, $int2);
}else if($_POST["tipo"] == "semplice"){
Primi_NNumeri($num);
}else{
	echo "errore,riprova";
}
?>