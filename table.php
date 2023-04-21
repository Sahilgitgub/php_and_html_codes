<?php
@$num=$_POST["n"];
@$sub=$_POST["sub"];
if($sub)
echo "multiplication table of $num: ";
for($i=1;$i<=10;$i++)
{
	$result=$num*$i;
	echo "$num X $i = $result<br>";

}
?>