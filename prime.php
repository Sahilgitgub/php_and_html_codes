<?php
$MyNum=$_REQUEST["t1"];
for($num=2;$num<=$MyNum;$num++)
{
$n=0;
	for($i=2;$i<($num/2+1);$i++)
{
		if($num % $i == 0){
			echo " ";
		$n++;
		break;
}
}
	if($n==0){
		echo $num." ";
	
}
}
?>