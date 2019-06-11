<?php	$password = password_hash("DOMISEP",PASSWORD_BCRYPT );
$old = "DOMISEP";
$verify = password_verify($old,$password);
echo $password."</br>";
echo $old."</br>";
echo $verify."</br>";
?>