<?php
$pass="raheel";
$str_password=password_hash($pass,PASSWORD_BCRYPT);
echo ($str_password);
$passwordCheck=password_verify($pass,$str_password);
echo "<br>";
if($passwordCheck){
    echo "correct password";
}else{
    echo "Incorrect password";
}
?>