<?php
$str=$_REQUEST['s1'];
if ($str>'A'&& $str<'Z' || $str>'a' && $str<'z'){
    echo ("string length is : ");
    echo strlen ("$str");
    echo "<br>";
    echo ("Reverse string is : ");
    echo strrev ("$str");
    echo "<br>";
    echo ("uppercase of string is : ");
    echo strtoupper ("$str");
    echo "<br>";
    echo ("lowercase of string is : ");
    echo strtolower ("$str");
}
else{
    echo "Please enter a valid string";
}
?>