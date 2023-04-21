<?php
$num=$_REQUEST["name"];
$swap=$_REQUEST["name1"];
function swap3(&$num, &$swap) {
    $tmp=$num;
    $num=$swap;
    $swap=$tmp;
}
echo "a = $swap <br>";
echo "b= $num";
?>
