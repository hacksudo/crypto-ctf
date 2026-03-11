<?php
session_start();
include "db.php";

if(isset($_POST['username'])){

$user = $_POST['username'];
$pass = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$user' AND password='$pass'";

$result = $db->query($query);

$row = $result->fetchArray();

if($row){

$_SESSION['user']=$user;

header("Location: dashboard.php");

}else{

echo "Invalid Login";

}
}
?>

<link rel="stylesheet" href="style.css">

<div class="login-box">

<<<<<<< HEAD
<h2> Crypto CTF Login</h2>
=======
<h2>hacksudo Crypto CTF Login</h2>
>>>>>>> ea650ad (update)

<form method="POST">

<input name="username" placeholder="username">

<input name="password" type="password" placeholder="password">

<button>Login</button>

</form>

</div>
