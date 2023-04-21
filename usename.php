<?php
    $email=$_POST['email'];

    $name=strstr($email,'_',true);

    echo "NAME:$name<br>";
    echo "EMAIL:$email";
?>