<?php
session_start();
if(isset($_SESSION['email'])=='')
{
	header("location:index.php");
}
include("config.php");
?>
<!DOCTYPE html>
<title>CALL CENTRE | GALLERY</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="styles/callcentre.css" type="text/css" />
<script src="scripts/callcentre.js" type="text/javascript"></script>

</head>
<body>
<div class="main-container">
  <header>
    <h1><a href="home.php">CALL CENTRE</a></h1>
    <p id="tagline"><strong>24 HOURS</strong></p>
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
   
          <li><a href="feedback.php">FEEDBACK</a></li>
      <li class="active"><a href="gallery.php">GALLERY</a></li>
      
    </ul>
   </nav> 
    <div class="clear"></div>
  </div>
</div>
<div class="main-container">
  <div class="container1">
   
<br />
<br />

        <h1>Gallery Page</h1>
            <div id="gallery" class="box">
      <ul>
	  <?php $sql = "select * from photos";
	  		$result = mysql_query($sql);
			while($row = mysql_fetch_array($result)){?>
        <li><a data-gal="prettyPhoto[gallery2]" href="images/gallery/<?php echo $row['name']; ?>" title="Image 1"><img src="images/gallery/<?php echo $row['name'];?>" width="260" height="190" alt="" /></a></li>
        <?php }?>
      </ul>
      <br class="clear" />
    </div>

<br />
      
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
