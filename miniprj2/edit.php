<html>
<head>
<title>Edit</title>
 <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"/>
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
     if(isset($_GET["id"])) {
     $ID = $_GET["id"];
   }
   $sql = "SELECT * FROM miniprj2 WHERE id = '".$ID."' ";
   $result = $conn->query($sql);
   $row = $result->fetch_object();
?>
<div data-role="page" id="page_edit">
<div data-role="header" >
    <h1>Edit </h1>
    <a data-rel="back" data-role="button" data-icon="carat-l">Back</a>
    <a id="btn_deleteNote" href="delete.php?id=<?php echo $row->id ?>" onclick="return confirm('Do You Want To Continue For Delete?')" data-icon="delete" class="ui-btn-right">Delete</a>
</div>
<form action="save.php"  method="post" name="form1" onSubmit="JavaScript:return Submit();">
 <div class="ui-content">
    <input type="hidden" name="id" value="<?php echo $row->id ?>">    
    <h2>Head</h2><input type="text" name="name"  value="<?php echo $row->name ?>">
    <h4>Detail</h4><textarea type="text" name="detail" ><?php echo $row->detail ?></textarea> 
  <input id="btn_editNote" type="submit" name="submit" value="Save">
  <input class="btn btn-warning" name="submit"  value="Cancel" type="reset">
  </div>
    <script>
    function Submit() {
  if(document.form1.name.value == "" && document.form1.name.value == "") {
    alert('Please Add Text');
    document.form1.name.focus(),document.form1.name.focus();
    return false;
  } 
  if(document.form1.name.value == "") {
    alert('Please Add Head');
    document.form1.name.focus();
    return false;
  } 
  if(document.form1.name.value == "") {
    alert('Please Add Detail');
    document.form1.name.focus();
    return false;
  } 
  document.form1.submit();
}
</script>
<div data-role="footer">
     <h1>Pongsaton Rattana 58160625 | Web Programming 2/2016 Burapha University |</h1>
  </div>
</form>
</div>
</body>
</html>