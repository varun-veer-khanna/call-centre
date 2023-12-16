<!--java script start for empty values check-->
<script type="text/javascript">
		function check()
		{
		if(document.detail.title.value=='')
			{
				alert("Enter Title");
				return false;
			}		
			return true;
		}
	</script>
	<!--javascipt end-->
<!--php code for select categories-->	
<?php
	include("include/config.php");
	
	if(isset($_POST['add']))
	{
	$title=$_POST['title'];
	$detail=$_POST['detail'];
	//insertion query
	$query="insert into news(title,detail) values('$title','$detail')";
	$result=mysql_query($query);
	
	if($result==1)
	{
		$msg = "News Added Successfully";
	}else{
		echo "Error";
	}
	}
?>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<!--header start-->
<tr>
	<td colspan="2"><?php include("include/header.php"); ?></td>
</tr>
	<!--header end-->
<tr>
	<!--left menu start-->
	<td width="20%" valign="top"><?php include("include/leftmenu.php"); ?></td>
	<!--left menu end-->
	<!--Center Part start-->
	<td align="center" width="80%" class="top_space">
				<form name="detail" method="post" action="#" class="top_space">
	<table border="0" cellpadding="3" cellspacing="3" width="85%" align="center" bgcolor="#999999">
	<caption style="color:#FF0000"><?php if(isset($msg)){echo $msg;}?>
	<tr>
		<td colspan="2" align="center"><h2><u>Latest News</u></h2></td>
	</tr>
	<tr>
		<td class="left_space">News Title:</td>
		<td><input type="text" name="title" size="22"></td>
	</tr>
	<tr>
		<td valign="top" class="left_space">Detail:</td>
			<td><?php
				include('fckeditor/fckeditor.php');
				$myvalue='';
                $FCKeditor = new FCKeditor('detail');
                $FCKeditor->BasePath = 'fckeditor/';
                $FCKeditor->Value = $myvalue;
                $FCKeditor->Create();
				?><!--editor for change fonts etc-->
			</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="add" value="Add" onclick="return check()"></td>
	</tr>
	</table>
	</form>
	</td>
</tr><!--center part end-->
	<!--footer start-->
<tr>
	<td colspan="2"><?php include("include/footer.php"); ?></td>
</tr>
	<!--footer end-->
</table>