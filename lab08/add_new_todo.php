<?php
$link = mysql_connect('localhost','it58160625','it58160625');
mysql_query("SET NAMES UTF8");
mysql_select_db('it58160625',$link);

if($_POST['topic'] != NULL){
$start = date('Y-m-d H:i:s');
$topic = addslashes($_POST['topic']);
$sql = "INSERT INTO todo (start,topic,status) VALUES ('$start','$topic',0);
       ";
mysql_query($sql);
}

$sql = "SELECT * FROM todo ORDER BY status,id desc";
$result = mysql_query($sql,$link);
$html = "<ol>";
while($obj = mysql_fetch_object($result)){
	if($obj->status == 1){
		$html.="<input type='checkbox' class='checkbox' value='".$obj->id."'><s>".$obj->topic."</input> ";
		$html.="<font color='#009900' size='1'>[".$obj->start."]</font></s> <br>";
	}else{
			$html.="<input type='checkbox' class='checkbox' value='".$obj->id."'>".$obj->topic."</input> ";
	        $html.="<font color='#009900' size='1'>[".$obj->start."]</font> <br>";
	}
	
}
$html.="";
echo $html;