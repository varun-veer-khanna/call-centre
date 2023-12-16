<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$conn=mysql_connect("localhost","root","");//connection to server
	$db=mysql_select_db("callcenternew");//select database
?>