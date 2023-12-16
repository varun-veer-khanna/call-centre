<?php
session_start();
if(isset($_SESSION['email'])=='')
{
	header("location:index.php");
}
include("config.php");
?>
<!DOCTYPE html>
<title>CALL CENTRE | HOME</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="styles/callcentre.css" type="text/css" />
<script src="scripts/callcentre.js" type="text/javascript"></script>
<style>
#list{}
#list li{padding-bottom: 20px;}
</style>
</head>
<body>
<div class="main-container">
  <header>
    <h1><a href="home.php">CALL CENTRE</a></h1>
    <p id="tagline"><strong>24 HOURS SERVICE</strong></p>
  </header>
</div>

  
    <br class="clear" />
  </div>
</div>
<div class="main-container">
<div id="sub-headline">
    <div class="tagline_left"><p id="tagline2">Welcome <?php if(isset($_SESSION['uname'])){ echo '<u>'.$_SESSION['uname'].'</u>';}?> | <a href="logout.php">logout</a></p></div>
    <br class="clear" />
  </div>
  <div id="nav-container">
   <nav> 
    <ul class="nav">
      <li class="active"><a href="index.php">HOME</a></li>
      <li><a href="services.php">SERVICES</a></li>
   
          <li><a href="feedback.php">FEEDBACK</a></li>
      <li><a href="gallery.php">GALLERY</a></li>
      
    </ul>
   </nav> 
    <div class="clear"></div>
  </div>
</div>

<div class="main-container">
  <div class="container1">
  <div id="mySlides">
    <div id="slide1">  
	<h1>Home Page</h1>  
        <img src="images/2.jpg" alt="Slide 1 jFlow Plus" width="960" height="350" />
        
	</div>    	
    <div id="slide2">
        <img src="images/3.jpg" alt="Slide 2 sjFlow Plus" width="960" height="350"  />
      
    </div>   
	<div id="slide3">
        <img src="images/4.jpg" alt="Slide 3 jFlow Plus" width="960" height="350" />
      
    </div>
</div>

<div id="myController">
   <span class="jFlowControl"></span>
   <span class="jFlowControl"></span>
   <span class="jFlowControl"></span>
</div>

<section class="jFlowPrev"><div></div>
</section>
<section class="jFlowNext"><div></div>
</section>
<br />
<br />

    <article class="box" id="home_featured21">
      <div class="block"><h2>Who Are We</h2>
        <p>Our call center agents are simply the best in thebusiness. Let our courteous, well-spoken telephone call center representatives revamp your corporate image by intelligently answering your calls and dispatching your messages.Call center service clients bring their individual needs to  1-800 We Answer Call Center.<br />

</p>
      </div>
      <div class="block"><h2>Latest News</h2>
    
<br /><br />
        <marquee behavior="scroll" direction="up" scrolldelay="200"><ul id="list">
		<?php $sql = mysql_query("select * from news");
			while($news=mysql_fetch_array($sql)){?>
          <li><b><u><?php echo $news['title'];?></u></b>&nbsp;<?php echo $news['detail'];?></li>
		  <?php }?>
        </ul></marquee>

      </div>
      <div class="block last"><h2>What We Do</h2>
        <p><h6>"we search the world to find the right call center for you"</h6>
            We search our Australasian and Global databases of over 250 specialist call centers and recommend a call center. Last year these agencies had over 75,000 seats, and performed over 1 billion inbound calls and 350 million outbound calls. <br />
<br />

      </div>
      <div class="clear"></div>
    </article>
    
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
