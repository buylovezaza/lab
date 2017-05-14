<!DOCTYPE html>
<?php 
    $host = "localhost";
    $username ="it58160625";
    $password ="it58160625";
    $database = "it58160625";
    $conn = mysqli_connect($host,$username,$password,$database);
    $conn -> query("set names utf8"); 
    $sql = "SELECT * FROM miniprj2  GROUP BY notedate ORDER BY id DESC  ";
    $result = $conn->query($sql);
?>
<html>
<head>
  <!-- Include meta tag to ensure proper rendering and touch zooming -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Include jQuery Mobile stylesheets -->
  <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
  <!-- Include the jQuery library -->
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <!-- Include the jQuery Mobile library -->
  <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<div data-role="page" id="pageone">
  <div data-role="header">
    <h1>My Notes</h1>
    <a href="add.php" data-icon="plus" class="ui-btn-right">Add</a>
  </div>
  <?php while($row = $result->fetch_object()){ ?>
  <div data-role="main" class="ui-content">
      <ul data-role="listview" data-ajax="true" data-inset="true" >
        <li data-role="list-divider"><center><?php echo $row->notedate ?></center></li>
        <?php 
        $sql = "SELECT * FROM miniprj2 WHERE notedate ='".$row->notedate. "' ORDER BY id DESC "; 
        $conn -> query("set names utf8"); 
        $result2 = $conn->query($sql);
        while($row2 = $result2->fetch_object()) {
        ?> 
        <li><a href ="detail.php?id=<?php echo $row2->id ?>" ><h2><?php echo $row2->name ?></h2><p><?php echo "<br>"?><?php echo $row2->detail ?></p> </a>
        <a href="edit.php?id=<?php echo $row2->id ?>"></a>
        </li>
    <?php }    
    ?>
    </ul>
</div>
<?php  } 
          $result->close();
          ?>
  <div data-role="footer">
  <h1>Pongsaton Rattana 58160625 | Web Programming 2/2016 Burapha University |</h1>
  </div>
</div> 
</body>
</html>
