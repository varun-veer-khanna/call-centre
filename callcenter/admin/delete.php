<?php
	//delete selected categories
	include("include/config.php");
	
	if(isset($_REQUEST['newsid']))
	{	
		$id=$_REQUEST['newsid'];
		$query="delete from news where id=".$id;//deletion query
		$result=mysql_query($query);
		if($result=='1')
		{
			header("location:edit_news.php");//link to next page
		}else{
			echo"error";
		}
	}
	
	if(isset($_REQUEST['feedid']))
	{	
		$id=$_REQUEST['feedid'];
		$query="delete from feedback where id=".$id;//deletion query
		$result=mysql_query($query);
		if($result=='1')
		{
			header("location:feedback.php");//link to next page
		}else{
			echo"error";
		}
	}
?>