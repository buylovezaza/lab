<html>
<head>
  <title>New Note</title>
 <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body background="bgadd.png">
<div data-role="header">
    <a data-rel="back" data-role="button" data-icon="carat-l">Back</a>
    <h2>New Note</h2>
  </div>
<?php
session_start();
$host = "localhost";
$username ="it58160625";
$password = "it58160625";
$db = "it58160625";
$conn = new mysqli($host, $username, $password, $db);
$conn->query("set names utf8");
if(isset($_POST['submit'] )){
  $name   = addslashes($_POST['name']);
  $detail    = addslashes($_POST['detail']);
  $notedate   = date('Y-m-d H:i:s');
    $sql = "INSERT INTO miniprj2(name, detail , notedate )
         VALUES('$name','$detail','$notedate')";
      if ($conn->query($sql)) {
         echo"<center><div class = 'alert alert-success'>INSERT A SUCCESS</div>";
         echo "<meta http-equiv='refresh'content='3;URL=index.php'>";
      }
} else { ?>
<form name="form1" method="post" action="add.php" onSubmit="JavaScript:return Submit();"> 
<div class="ui-content">
<h2>Head</h2><input name="name" type="text" id="name" class="form-control" placeholder="Title ...">
<h4>Detail</h4>
<textarea  name="detail"
 type="text" id="detail" class="form-control" placeholder="Detail ..."></textarea> 

<input class="btn btn-info" type="submit" name="submit" value="Save">
</div>
  <script>
    function Submit() {
  if(document.form1.name.value == "" && document.form1.detail.value == "") {
    alert('Please Add Text');
    document.form1.name.focus(),document.form1.detail.focus();;
    return false;
  }if(document.form1.name.value == "") {
    alert('Please Add Head');
    document.form1.name.focus();
    return false;
  }if(document.form1.detail.value == "") {
    alert('Please Add Detail');
    document.form1.detail.focus();
    return false;
  document.form1.submit();
  }
}
</script>
</form>
  <div data-role="footer">
     <h1>Pongsaton Rattana 58160625 | Web Programming 2/2016 Burapha University |</h1>
  </div> 
  </body>
<?php
}
?>
</body>
</html>