<?php
session_start();

$id = $_GET['id'];

$challenges = [

1 => ["Base64 Decode","ZmxhZzE="],
2 => ["Hex Decode","666c616732"],
3 => ["ROT13","synt3"],
4 => ["Binary","01100110 01101100 01100001 01100111 00110100"],
5 => ["URL Encode","flag5"],
6 => ["MD5","5d41402abc4b2a76b9719d911017c592"],
7 => ["SHA1","2aae6c35c94fcfb415dbe95f408b9ce91ee846ed"],
8 => ["Caesar Shift +3","iodj8"],
9 => ["XOR Key=key","flag9"],
10 => ["Reverse","01galf"]

];

$challenge = $challenges[$id];

?>

<link rel="stylesheet" href="style.css">

<div class="container">

<h2><?php echo $challenge[0]; ?></h2>

<div class="box">

<?php echo $challenge[1]; ?>

</div>

<form action="check.php" method="POST">

<input name="answer" placeholder="Enter decoded text">

<input type="hidden" name="id" value="<?php echo $id;?>">

<button>Submit</button>

</form>

</div>
