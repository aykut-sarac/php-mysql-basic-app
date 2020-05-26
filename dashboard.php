<?php
$userId = $_POST['userId'];
$password = $_POST['password'];

if ($userId == 'aykut' && $password == '1234') {
  echo "<h1> welcome $userId</h1>";
} else {
  echo "wrong";
}

 ?>
