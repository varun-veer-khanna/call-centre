<?php
session_start();
if(isset($_SESSION['email'])=='')
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<title>CALL CENTRE | SERVICES</title>
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
      <li class="active"><a href="services.php">SERVICES</a></li>
   
          <li><a href="feedback.php">FEEDBACK</a></li>
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

        <h1>Services Page</h1>
            <div id="gallery" class="box">
     
                
                
                
                
                
                
    <div>
        <div class="service-main">            
                <div class="left">
                <h2>Services</h2>
                    <ul>
                        <li><a href="capitalmarkets.php">Capital Market</a></li>
                        <li><a href="derivatives.php">Derivatives (F&amp;O)</a></li>
                        <li><a href="mutualfunds.php">Mutual Funds &amp; IPOs</a></li>
                        <li><a href="commodities.php">Commodities (MCX)</a></li>
                        <li><a href="depository-services.php">Depository Services</a></li>
                    </ul>
                </div>
              <div class="right">
                  <h2>Mutual Funds</h2>
          <p>A Mutual Fund is a trust that pools the savings of a number of 
              investors who share a common financial goal. Anybody with an 
              invisible surplus of as little as a few thousand rupees can invest 
              in Mutual Funds. These investors buy units of a particular Mutual 
              Fund scheme that has a defined investment objective and strategy 
              The money thus collected is then invested by the fund manager in 
              different types of securities. These could range from shares to 
              debentures to money market instruments, depending upon the 
              scheme's stated objectives. The income earned through these 
              investments and the capital appreciation realised by the scheme 
              are shared by its unit holders in proportion to the number of 
              units owned by them. Thus a Mutual Fund is the most suitable 
              investment for the common man as it offers an opportunity to 
              invest in a diversified, professionally managed basket of 
              securities at a relatively low cost.</p>
              <p align="justify">
              Competent Finman Pvt. Ltd. is also acting as distributors for 
              mutual funds. We are registered with AMFI and distribute mutual 
              funds of all the AMCs all over India. Our clients can invest in 
              any mutual fund scheme of any company through us. Other than 
              investment advisory we also give some additional services such as</p>
              <div id="servicelist"><ul>
                <li>Doorstep facilities for the collection of all the concerned 
                documents. i.e. we personally meet our customers and get the 
                documentation done.</li>
                <li>Time to time information of their portfolios. </li>
                <li>Helping our customers make informed decisions.</li>
          </ul></div>
              <p align="justify">
              <b>IPO (Initial Public Offers)</b></p>
              <p align="justify">
              IPO is the first offer from any corporate to public for the 
              subscription for its shares.<br>
              <br>
              Our clients can subscribe for IPO through us. We receive IPO 
              applications from our customers at our office only. For this we 
              are associated with DSPML, Enam Securities Pvt. Ltd. and&nbsp; 
              Intensive Fiscal Services Pvt. Ltd. <br>
              <br>
              <b>Deposit Mobilization:<br>
              <br>
              <span style="font-weight: 400">The Competent Finman Pvt. Ltd. is 
              also authorized agent for the mobilization of deposits of HDFC 
              Ltd. The company is making every efforts to become authorized 
              agents of other financial institutions for mobilization of the 
              funds which is in pipeline. The investors can deposit their Fixed 
              Deposits to these companies through us.<br>
              <br>
              About IPOs you will find all the information about up coming IPOs 
              on our site.<br>
              </span><br>
              </b>
              <br>
              &nbsp;</p>
        </div>
                
                
              
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
    <p class="tagline_left">Copyright &copy;  </p>
    <br class="clear" />
  </footer>
  </div></div></div></div> 
 
</body>
</html>
