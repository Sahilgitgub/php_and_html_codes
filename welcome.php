<?php
    $a=$_POST['t1'];
    $b=$_POST['p1'];
    if($a=='web' && $b=='technology'||
       $a=='gla' && $b=='university'||
       $a=='cea' && $b=='department'
){
    echo "welcome $a";
}else{
    echo "error in generated";
}
?>