<?php
	session_start();//start current session
	session_unset($_SESSION['uname'],$_SESSION['password']);//unset session
	header("location:index.php");//link to lohin page
?>