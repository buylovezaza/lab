<html lang = "en">
<head>
        <meta charset = "utf-8">
        <title>Form Register</title>
</head>
<body>
<h3><u><i>From Register</u></i><h3>
<form action ="dopost.php" method ="post" class ="a">
    Name-Lastname : <br />
    <input type = "text" class ="text" name ="name" id ="name" /><br/>
    Email : <br />
    <input type ="email" class ="text" name ="email" id ="email" /><br/>
    Sex : <br />
    <input type="radio" class ="radio" name="sex" id="sexM" value = "M" />Male
    <input type="radio" class ="radio" name="sex" id="sexF" value = "F" />Female
    <br />
    Favorite : <br />
    <input type = "checkbox" class = "checkbox" name="intr1" id = "intr1" />Learn
    <input type = "checkbox" class = "checkbox" name="intr2" id = "intr2" />Game
    <br />
    Address : <br />
    <textarea class="text" name="address" id ="address" rows="4" cols="50"></textarea>
    <br />
    City : <br />
    <select name="province" id="province">
    <option value="">---Choose City---</option>
    <?php
    include('db.php');
    $sql = "SELECT * FROM provinces";
    $result = $con->query($sql);
    while($row = $result->fetch_array()){?>
        <option value="<?php echo $row['PROVINCE_ID']; ?>"><?php echo $row['PROVINCE_NAME']; ?></option>
    <?php } ?>
    </select><br>
        <br /><br />
        <input type="submit" id ="submit" value="Submit" name="submit" />
</form>
<script src ="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
$('#submit').on('click',function(event){
    var valid = true,
    errorMessage ="";
    if($('#name').val()==''){
        errorMessage = "Enter Name \n";
        valid = false;
    }
    if($('#email').val()==''){
        errorMessage += "Enter E-mail\n";
        valid = false;
    }
    if($('#sexM').prop("checked") == false && $('#sexF').prop("checked") == false){
	    errorMessage += "Select Sex \n";
	    valid = false;
	}
	if($('#intr1').prop("checked") == false && $('#intr2').prop("checked") == false){
	    errorMessage += "Select Favorite \n";
	    valid = false;
	}
    if ($('#address').val() == '') {
        errorMessage += "Enter Address \n";
        valid = false;
    }
    if($('#province').val() == ''){
		errorMessage += "Select Province\n";
		valid = false;
	}
    if(!valid && errorMessage.length > 0){
        alert(errorMessage);
        event.preventDefault();
    }
});
</script>
<form>
    <li><INPUT TYPE="BUTTON" VALUE="Show Er diagram" ONCLICK="window.location.href='http://angsila.cs.buu.ac.th/~58160625/887371/lab07/er.png'"></li>
    <li><INPUT TYPE="BUTTON" VALUE="Code show_register.php" ONCLICK="window.location.href='http://angsila.cs.buu.ac.th/~58160625/887371/lab07/text/show_register.txt'"></li>
    <li><INPUT TYPE="BUTTON" VALUE="Code register_form.php" ONCLICK="window.location.href='http://angsila.cs.buu.ac.th/~58160625/887371/lab07/text/register_form.txt'"></li>
    <li><INPUT TYPE="BUTTON" VALUE="Code db.php" ONCLICK="window.location.href='http://angsila.cs.buu.ac.th/~58160625/887371/lab07/text/db.txt'"></li>
    <li><INPUT TYPE="BUTTON" VALUE="Code dopost.php" ONCLICK="window.location.href='http://angsila.cs.buu.ac.th/~58160625/887371/lab07/text/dopost.txt'"></li>
</form>
</body>
</html>