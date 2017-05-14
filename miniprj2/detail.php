<html>
<head>
<title>Note</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
 </head>
<body>
<script type="text/javascript">     
    $(document).on("pageinit","#page_view",onPageInit);
    function onPageInit(event)
    {           
        $(document).on("swipeleft","#page_view",onSwipeLeft);
        <?php 
        if ($_GET['id'] > 0)
        {
            ?>              
            $(document).on("swiperight","#page_view",onSwipeRight);
            <?php 
        }
        ?>          
    }               
    function onSwipeLeft(event)
    {
        //alert ("left");
        //$.mobile.changePage("test.php?id=<?php echo $_GET['id'] ?>", { transition: "slide", allowSamePageTransition: true, reloadPage: true} );       
        $.mobile.changePage("index.php", { transition: "none", allowSamePageTransition: true });
    }
    function onSwipeRight(event)
    {   
        //alert ("right");
        //$.mobile.changePage("test.php?id=<?php echo $_GET['id']  ?>", { transition: "slide", allowSamePageTransition: true, reloadPage: true} );
        $.mobile.changePage("edit.php?id=<?php echo $_GET['id']  ?>", { transition: "none", allowSamePageTransition: true });            
    }       
</script>
<?php
 if(isset($_GET["id"]))
   {
     $ID = $_GET["id"];
   }
   $serverName = "localhost";
   $userName = "it58160625";
   $userPassword = "it58160625";
   $dbName = "it58160625";
   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
   $conn -> query("set names utf8");
   $sql = "SELECT * FROM miniprj2 WHERE id= '".$ID."'";
   $result = $conn->query($sql);
   $row = $result->fetch_object();
?>
<div data-role="page" id="page_view">
<div data-role="header" >
    <h1>Note</h1>
    <a data-rel="back" data-role="button" data-icon="carat-l">Back</a>
    </div>
 <div data-role="main" class="ui-content"> 
 <input type="hidden" name="id" value="<?php echo $row->id ?>">  
    <h2>Head : <?php echo $row->name ?></h2> 
    <h3>Detail : </h3> <p><?php echo $row->detail ?></p> 
  </div>
  <div data-role="footer">
     <h1>Pongsaton Rattana 58160625 | Web Programming 2/2016 Burapha University |</h1>
  </div>
</form>
</div>
</body>
</html>