<?php
$email=$_POST['email'];

$token = bin2hex(random_bytes(16));
$token_hash = hash("sha256", $token);

$expire = date("Y-m-d H:i:s", time() + 60 * 30 );
 
$mysqli = require __DIR__ . "/db.php";

// Rest of your code here...

$sql = "UPDATE user SET reset_token_hash = ?,
 reset_token_expires = ?
  WHERE Email = ?";
  
$stmt = $mysqli->prepare($sql);
// Bind parameters and execute the statement...


$stmt->bind_param("sss", $token_hash, $expire ,$email);
$stmt->execute();

?>