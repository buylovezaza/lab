<?php
$servername = "localhost";
$username = "it58160625";
$password = "it58160625";
$dbname = "it58160625";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$conn->query("SET NAMES UTF8");

$data = json_decode(file_get_contents("php://input"));
$item =  $data->item;

$sql = "INSERT INTO shoppinglist(item) VALUES('$item')";
$conn->query($sql);

$conn->close();

header("location: getall.php");