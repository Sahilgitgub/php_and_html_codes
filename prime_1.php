<?php
$num=$_REQUEST["t1"];
for ($i=2;$i<$num;$i++){
    if($num%$i==0){
        echo"not a prime number";
        break;
    }
    else{
        echo"number is prime";
        break;
}
}