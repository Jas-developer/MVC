<?php 

$sensitiveDate = "Krosing"; // this is the password of the user
$salt = bin2hex(random_bytes(16)); //generate random salt or number
$pepper = "ASecretPepperString";  // this is a secret code / random strings | this is added everytime
$dataToHash = $sensitiveDate.$salt.$pepper; // i concatinated them
echo "<br>".$salt;
$hash = hash('sha256', $dataToHash); //hashed
echo "<br>". $hash."<br>";  

/*---*/ 
$storedSalt = $salt;
$storedHash = $hash;

$sensitiveDate = "Krosing";
$pepper = "ASecretPepperString"; // this one is added everytime
$dataToHash = $sensitiveDate.$storedSalt.$pepper; //concatinate the stored salt which is the previews one and pepper whichs is the secret key and then the passwrd
$verificationHash = hash('sha256', $dataToHash); //hash it again


if($storedHash != $verificationHash){ //compare the new hashed data to the new hashed data 
   echo "Data are not the same";
} else {
   echo " Data are the same!";
   echo "<span>this is the previous hash</span> <br>".$storedHash;
   echo "<br>";
   echo $verificationHash;
}








