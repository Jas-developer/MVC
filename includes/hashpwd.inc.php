<?php 

$pwdSignup = "Krossing";
$options = [
    'cost' => 12
];

$hashedPassword = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);
$pwdLogin = "Krossing";


if(password_verify($pwdSignup,$pwdLogin)){
  echo "They are the same";
}else{
  echo 'They are not the same';  
}
