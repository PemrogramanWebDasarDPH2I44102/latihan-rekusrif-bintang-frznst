<?php

function rekursif($i, $batas=0){
 if($batas<$i){
 	echo "*";
 	$batas++;
 	rekursif($i,$batas);
 }
 else{
 	echo "<br>";
 	$i--;
 	$batas=0;
 	rekursif($i,$batas);
 }

}
rekursif(5);
?>
/*====================================================================================*/
<?php

function rekursif($i, $batas=1, $count=1){
if($i>$batas){
	$i--;
	$count++;
	rekursif($i,$batas,$count);
}
else{
	if($i<=$batas&&$i>0){
		echo "$i";
		$i--;
		rekursif($i);
	}	
	
	else {
		echo "<br>";
		$batas++;
		$i=$count;

		rekursif($i,$batas);
	}
	}
}


rekursif(5);
?>

