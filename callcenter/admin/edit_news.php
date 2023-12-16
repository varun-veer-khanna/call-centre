<script type="text/javascript">
function check()
{
var a=confirm("Are You Sure?");
if (a)
return true;
else
return false;
}
</script>
<!--List of categories Detail -->
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<!--header start-->
<tr>
	<td colspan="2"><?php include("include/header.php"); ?></td>
</tr>
	<!--header end-->
<tr><!--left menu start-->
	<td width="20%" valign="top"><?php include("include/leftmenu.php"); ?></td>
	<!--left menu end-->
	<!--center part start-->
	<td align="center" width="80%" class="top_space"><h2><u>News Detail</u></h2>
		<table width="80%" cellpadding="0" cellspacing="0" border="1" align="center" bgcolor="#999999">
			<tr>
				<td align="center"><h3>Title</h3></td>
				<td align="center"><h3>Detail</h3></td>
				<td align="center"><h3>Action</h3></td>
			</tr>
		<?php
				include("include/config.php");
				$query="select * from news";//selection query
				$result=mysql_query($query);
				while($row=mysql_fetch_array($result))
				{
					$id=$row['id'];
					$title=$row['title'];
					$detail=$row['detail'];
					$min_detail=substr($detail,0,100);
			?>
			<tr>
				<td align="center"><?php echo $title; ?></td>
				<td align="center"><?php echo $min_detail; ?>.......so on</td>
				<td align="center"><a href="delete.php?newsid=<?php echo $id; ?>" class="sel_link" onclick="return check()">Delete</a></td><!--links for edit and delete-->
			</tr>
		<?php
			}
			?>
		</table>
	</td><!--center part end-->
</tr>
	<!--footer start-->
<tr>
	<td colspan="2"><?php include("include/footer.php"); ?></td>
</tr>
	<!--footer end-->
</table>