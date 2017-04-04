<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Baby Chat</title>
	<style type="text/css"></style>
	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.0.min.js"></script>
</head>
<body>
<script type="text/javascript">
	$(document).ready(function(){
		function loadmsg() {
			$.get('<?php echo site_url();?>/api/getlast/10', function(data) {
				$('#show').html(data);
			});
		}
		setInterval(loadmsg, 2000);
		$('button').click(function() {
			if ($.trim($('#post_by').val())=="" || $.trim($('#msg').val())== "") {
				alert('Please enter your nick name or message.');
			} else {
				formvalue = $('form').serialize();
				$.post('<?php echo site_url();?>/api/postmsg', formvalue, function(data) {
					$('#msg').val("");
					$('#msg').focus();
				});
			}
		});
	});
</script>
<div id="container">
	<h1>Baby Chat</h1>
	<div id="body">
		<div id="show"></div>
		<form>
		Nick name
		<input type="text" name="post_by" id="post_by">
		<input type="text" name="msg" id="msg">
		<button type="button">Send</button>
		</form>
	</div>
</div>
</body>
</html>