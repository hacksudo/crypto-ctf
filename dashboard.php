<?php
session_start();
if(!isset($_SESSION['user'])){
header("Location: login.php");
}

$total = 10;

$solved = $_SESSION['solved'] ?? 0;

$progress = ($solved/$total)*100;

?>

<link rel="stylesheet" href="style.css">

<div class="nav">

<h1>Crypto CTF</h1>

<div class="progress">

<div class="bar" style="width:<?php echo $progress;?>%"></div>

</div>

<a href="logout.php">Logout</a>

</div>

<div class="container">

<h2>Challenges</h2>

<?php

for($i=1;$i<=10;$i++){

echo "<a class='challenge' href='challenge.php?id=$i'>Challenge $i</a>";

}

?>

</div>
