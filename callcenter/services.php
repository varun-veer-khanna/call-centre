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
                  <h2>Services We Offer</h2>
          <p><span>Competent Finman Pvt. Ltd. offers the folowing services. Please click on the links below to have more information on them.</span></p>
          <p><b>Capital Market: </b>We are the leading broker of NSE and BSE and have been providing capital market and derivatives services to our clients.&nbsp; <font color="#FF6600">
              <a href="capitalmarkets.php">More</a></font></p>
         <p><b>Derivatives: </b>Derivatives (Futures &amp; Options) are ideal instruments to protect your portfolio against risk.&nbsp;
              <font color="#FF6600"><a href="derivatives.php">More</a></font></p>
         <p><b>Mutual Funds &amp; IPO's: </b>A Mutual Fund is a trust that pools the savings of a number of investors who share a common financial goal. Anybody with an invisible surplus of as little as a few 
              thousand rupees can invest in Mutual Funds.&nbsp;
              <font color="#FF6600"><a href="mutualfunds.php">More</a></font></p>
         <p><b>Commodities: </b>Commodities as a word originated from the 
              French word commodity meaning benefit, profit. Rightly so! The 
              kind of continuously growing turnover which commodities market has 
              seen is incredible, benefiting both producers and buyers.&nbsp;
              <font color="#FF6600"><a href="commodities.php">More</a></font></p>
        <p><b>Depository Services: </b>A depository can be defined as an institution where the investors 
              can keep their financial assets such as equities, bonds, mutual 
              fund units etc in the dematerialised form and transactions could 
              be effected on it.&nbsp; <font color="#FF6600">
              <a href="depository-services.php">More</a></font></p>
        <p><b>Currency Derivatives:</b> Currency derivatives are contracts 
              between the sellers and buyers, whose values are to be derived 
              from the underlying assets, the currency amounts.
              <font color="#FF6600"><a href="currencyderivatives-services.php">
              More</a></font></p>
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
    <p class="tagline_left">Copyright &copy;</p>
    <br class="clear" />
  </footer>
  </div></div></div></div> 
 
</body>
</html>
