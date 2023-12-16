<?php
session_start();
if(isset($_SESSION['email'])!='')
{
	header("location:home.php");
}
?>
<script type="text/javascript">
function chkval()
{
	if(document.login.email.value=='')
	{
		alert('Enter Email');
		return false;
	}
	if(document.login.password.value=='')
	{
		alert('Enter Password');
		return false;
	}
	return true;
}
</script>


<?php
include('config.php');
if(isset($_POST['login']))
{
$email = $_POST['email'];
$password = $_POST['password'];
$secpass = md5($password);
$sql = "select * from register where email='$email' and password='$secpass'";
$result = mysql_query($sql);
$count = mysql_num_rows($result);
while($row = mysql_fetch_array($result))
{
$_SESSION['uid'] = $row['id'];
$_SESSION['uname'] = $row['fname'];
$_SESSION['email'] = $row['email'];
}
if($count >= 1)
{
	header("location:home.php");
}else{
	$err = "Check your Email and/or Password";
}

}
?>
<!DOCTYPE html>
<title>CALL CENTRE| index</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="styles/callcentre.css" type="text/css" />
<script src="scripts/callcentre.js" type="text/javascript"></script>
</head>
<body>
<div class="main-container">
  <header>
    <h1><a href="home.php">CALL CENTRE</a></h1>
    <p id="tagline"><strong>24 HOURS SERVICE </strong></p>
  </header>
</div>
<div class="main-container">
  <div id="sub-headline">
    
    <br class="clear" />
  </div>
</div>

<div class="main-container">
  <div class="container1">
<br />
<br />

    <div class="box">
           <div class="content">
        
   <br />
   <center><h1>LOGIN</h1></center>
   		<center><form name="login" action="#" method="post">
		<p style="padding-bottom:20px; color:#FF0000;"><?php if(isset($err)){ echo $err; } ?></p>
            <p>
			<label for="name"><small style="font-size:17px;">Email<sup style="color:#FF0000">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</sup></small></label>
              <input type="text" name="email" id="email" value="" size="22" />
              
            </p>
            <p>
			 <label for="email"><small style="font-size:17px;">Password<sup style="color:#FF0000">*</sup></small></label>
              <input type="password" name="password" id="password" value="" size="22" />
             
            </p>
			
			   <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input name="login" type="submit" id="submit" value="Submit" onClick="return chkval();"/>    &nbsp;   &nbsp;
			   <label for="email"><small style="font-size:17px;"><a href="register.php">Register</a></small></label>          
         
            </p>
          </form>
		  </center>

      </div>
      <div class="clear"></div>
    </div>
    
 
 </div>
<div class="main-container">
 </div>
 
<div class="callout"> 
    <div class="calloutcontainer"> 
        <div class="container_12"> 
            <div class="grid"> 
             
 <footer>
    <p class="tagline_left">Copyright &copy; </p>
    <br class="clear" />
  </footer>
  </div></div></div></div>
    </body>
</html>
