<?php
$veg_burger=50;
$paneer_tikka=80;
$spring_roll=60;
$pizza=100;
$chicken_burger=70;
$mutton_tikka=90;
$fish_roll=80;
$chicken_pizza=1200;

$veg=array("veg_burger"=>$veg_burger,"paneer_tikka"=>$paneer_tikka,"spring_roll"=>$spring_roll,"pizza"=>$pizza);
$nonveg=array("chicken_burger"=>$chicken_burger,"mutton_tikka"=>$mutton_tikka,"fish_roll"=>$fish_roll,"chicken_pizza"=>$chicken_pizza);

$total=0;

if(isset($_POST['veg'])){
  foreach($_POST['veg'] as $veg_item){
    $total+=$veg[$veg_item];
  }
}

if(isset($_POST['nonveg'])){
  foreach($_POST['nonveg'] as $nonveg_item){
    $total+=$nonveg[$nonveg_item];
  }
}

if($total>1000){
  $total=$total*0.9;
}

echo "<h2>Total Amount: Rs. ".$total."</h2>";

?>