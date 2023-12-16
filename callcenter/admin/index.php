<!-- php code for login-->
<?php
	include("include/config.php");
	session_start();//start the session for login
	if (isset($_POST['Login']))
	{
		$username=$_POST['uname'];
		$password=$_POST['password'];
		//query for select username and password from db
		$query="select * from admin where username='$username' and password='$password'";
		$result=mysql_query($query);
	
		if(mysql_num_rows($result)==1)
		{
		//session values
		$_SESSION['uname']=$username;
		$_SESSION['password']=$password;
		header("location:home.php");//next page after login
		}else{
		$print="Enter Correct Username or Password";//print error msg
		}
	}
	
?>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<!--header start-->
<tr>
	<td>
		<?php include("include/header.php"); ?>	
	</td>
</tr>
	<!--header end-->
	<!--center part start-->
<tr>
	<td><!--login for admin -->
		<form name="login" method="post" action="#"  class="top_space">
			<table width="30%" cellpadding="2" cellspacing="2" border="0" align="center" bgcolor="#999999">
			<tr>
				<td colspan="2"><h2><u><center>Administrator Login</center></u></h2></td>
			</tr>
			
				<tr>
					<td class="left_space">User Name:</td><!--username for admin is here-->
					<td><input type="text" size="22" name="uname"></td>
				</tr>
				<tr>
					<td class="left_space">Password:</td><!--password for admin is here-->
					<td><input type="password" size="22" name="password"></td>
				</tr>
					<tr>
					<!--print msg if admin or/and password block empty/wrong-->
					<td colspan="2" style="color:#FF0000" align="center"><?php if(isset($print)){echo $print; }?></td>
					</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Login" name="Login"  /></td>
				</tr>			
		  </table>
		</form>	
	</td>
</tr>
	<!--center part end-->
	<!--footer start-->
<tr>
	<td>
		<table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#CC0000">
			<tr>
				<td><?php include("include/footer.php"); ?></td>
			</tr>
		</table>
	</td>
</tr>
	<!--footer end-->
</table>