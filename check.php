<?php
session_start();

$id = $_POST['id'];
$answer = trim($_POST['answer']);

$solutions = [

1=>"flag1",
2=>"flag2",
3=>"flag3",
4=>"flag4",
5=>"flag5",
6=>"hello",
7=>"hello",
8=>"flag8",
9=>"flag9",
10=>"flag10"

];

if($answer == $solutions[$id]){

$_SESSION['solved'] = ($_SESSION['solved'] ?? 0) + 1;

echo "Correct! <a href='dashboard.php'>Back</a>";

}else{

echo "Wrong Answer";

}
