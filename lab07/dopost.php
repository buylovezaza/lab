<?php
include('db.php');
echo "<h3>View posted data:</h3>";
echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<hr>";
echo "<h3>View individual data:</h3>";
echo $_POST['name'] . "<br />";
echo $_POST['email'] . "<br />";
echo $_POST['address'] . "<br />";
$name = $_POST['name'];
$email = $_POST['email'];
$sex = $_POST['sex'];
$address = $_POST['address'];
$province = $_POST['province'];
$intr1 = "Learn";
$intr2 = "Game";
$intr3 = "Learn and Game";
$print;
if(isset($_POST['intr1']) && isset($_POST['intr2'])){
	$print = $intr3;
} else if (isset($_POST['intr1'])) {
	$print= $intr1;
} else if (isset($_POST['intr2'])){
	$print= $intr2;
}
if (isset($_POST['submit'])) {
    $sql = "INSERT INTO Reg (reg_name,reg_email,reg_sex,reg_fav,reg_address,pro_id) VALUES ('$name','$email','$sex','$print','$address',$province)";

    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}


?>
<html>
<head>
<meta charset="utf-8">
<title>Show Register</title>
</head>
<body>
<br>
<button class="button" name="info" onclick="showregister();"><span>Show Data</span></button>
<script>
    function showregister() {
        window.location='http://angsila.cs.buu.ac.th/~58160625/887371/lab07/show_register.php';
    }
</script>
<?php  
$con->close();
?>
</body>
</html>