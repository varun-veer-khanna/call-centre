<!--java script start for empty values check-->
<script type="text/javascript">
		function check()
		{
		if(document.photo.logo.value=='')
			{
				alert("Upload Photo");
				return false;
			}
		
			return true;
		}
	</script>
	<!--javascipt end-->
<!--php code for add new category-->
<?php
	include("include/config.php");
	
	if(isset($_POST['add']))
	{
		$name = $_FILES["logo"]["name"];
		$a= move_uploaded_file($_FILES["logo"]["tmp_name"],"../images/gallery/".$_FILES["logo"]["name"]);
		if($a)
		{
			$query="insert into photos(name) values('$name')";//insertion query
			$result=mysql_query($query);
			if($result=='1')//check result i.e. true or false
			{
				$msg = "Added Successfully";
			}else{
				$msg ="error";//msg when error comes
			}
		}
		else
		{
			$msg = "Error in Uploading Check Image Size";
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
	<!--left part start-->
	<td width="20%"><?php include("include/leftmenu.php"); ?></td><!--left part end-->
	<!--start center part-->
	<td align="center" width="80%">
	<form action="#" method="post" enctype="multipart/form-data" name="photo"/>
			<table width="35%" cellpadding="2" cellspacing="2" border="0" align="center" bgcolor="#999999">
			<caption style="color:#FF0000"><?php if(isset($msg)){echo $msg;}?></caption>
			<tr>
				<td colspan="2"><h2><u><center>Add Photos</center></u></h2></td>
			</tr>
				<tr>
					<td class="left_space">Photo:</td>
					<td><input type="file" name="logo"/></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="upload" name="add" onclick="return check();"/></td><!--use function for calling javascript function on click button-->
				</tr>			
		  </table>
		</form>
	</td><!--end center part-->
</tr>
<!--footer start-->
<tr>
	<td colspan="2"><?php include("include/footer.php"); ?></td>
</tr>
<!--footer end-->
</table>


