<html>
<head>
<title>Save</title>
</head>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<body>
 	<?php
	$serverName = "localhost";
	$userName = "it58160625";
	$userPassword = "it58160625";
	$dbName = "it58160625";
	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	$conn -> query("set names utf8");
	$sql = "UPDATE miniprj2 SET 
			name = '".addslashes($_POST["name"])."' ,
			detail = '".addslashes($_POST["detail"])."' 
			WHERE id = '".$_POST["id"]."' ";
	$query = mysqli_query($conn,$sql);
	if($query) {
		?>
	<div data-role="header" >
    <h1>Edit Notes</h1>
    </div>
    <div class="ui-content">
	 <center> <?php 
	 //echo $sql;die;
	 echo "Record update successfully";
	 echo "<meta http-equiv='refresh'content='3;URL=index.php'>"; ?>
	 </div>
	 <?php
	}
	mysqli_close($conn);
?>
</body>
</html>