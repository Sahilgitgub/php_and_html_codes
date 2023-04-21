<?php
@$num = $_POST['n'];
@$sub = $_post['sub']
if($sub)
echo "Multiplication table of $num: ";
for($i=0;$i<=$10;$i++)
{
	$result = $num * $i;
	echo "$num X $i = $result<br>";
	
}


?>