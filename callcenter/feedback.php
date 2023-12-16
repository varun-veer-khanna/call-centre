<?php
session_start();
if(isset($_SESSION['email'])=='')
{
	header("location:index.php");
}
include("config.php");
if(isset($_REQUEST['submit']))
{
	$title = $_REQUEST['title'];
	$feedback = $_REQUEST['feedback'];
	$sql = "insert into feedback(id_user,title,feedback) values('".$_SESSION['uid']."','$title','$feedback')";
	$result = mysql_query($sql);
	if($result==1)
	{
		$msg = 'Thanks for Feedback';
	}else{
		$msg = 'err try later';
	}
}
?>
<!DOCTYPE html>
<title>CALL CENTRE| FEEDBACK</title>
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

    <br class="clear" />
  </div>
</div>
<div class="main-container">
<div id="sub-headline">
    <div class="tagline_left"><p id="tagline2">Welcome <?php echo '<u>'.$_SESSION['uname'].'</u>';?> | <a href="logout.php">logout</a></p></div>
    <br class="clear" />
  </div>
  <div id="nav-container">
   <nav> 
    <ul class="nav">
      <li><a href="home.php">HOME</a></li>
      <li><a href="services.php">SERVICES</a></li>
   
          <li class="active"><a href="feedback.php">FEEDBACK</a></li>
      <li><a href="gallery.php">GALLERY</a></li>
     
    </ul>
   </nav> 
    <div class="clear"></div>
  </div>
</div>
<div class="main-container">
  <div class="container1">
<br />
<br />
<h1>Feedback</h1>
<div style="text-align:center; font-size:16px; color:#FF0000;"><?php if(isset($msg)){echo $msg;}?></div>
    <div class="box">
           <div class="content">
        
   <br />
   
   <div><form name="feedback" action="#" method="post">
            <p>
			   <label for="name"><small style="font-size:17px;">Title<sup style="color:#FF0000">*</sup>&nbsp;&nbsp;&nbsp;</small></label>
              <input type="text" name="title" id="name" value="" size="22" />
           </p>
		   <label for="name"><small style="font-size:17px;">Feedback<sup style="color:#FF0000">*</sup>&nbsp;&nbsp;&nbsp;</small></label>
		   <p>
		   
			 <label for="comments" style="display:none;"><small></small></label>
			 
              <textarea name="feedback" id="comments" rows="10"></textarea>
             
            </p>
            <p>
              <input name="submit" type="submit" id="submit" value="Submit" />
              &nbsp;
             </p></form></div>
			 
			 </div></div>
             
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
