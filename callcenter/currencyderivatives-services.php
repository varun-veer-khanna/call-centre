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

        <h1>Gallery Page</h1>
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
                  <h2>Currency Derivatives</h2>
          <p>Currency derivatives are contracts between the sellers and buyers, 
              whose values are to be derived from the underlying assets, the 
              currency amounts. </p>
              <p align="justify">
              These are basically risk management tools in foreign exchange and 
              money markets used for hedging risks and act as insurance against 
              unforeseen and unpredictable currency and interest rate movements. </p>
              <p align="justify">
              Any individual or corporate expecting to receive or pay certain 
              amounts in foreign currencies at future date can use these 
              products to opt for a fixed rate - at which the currencies can be 
              exchanged now itself. Risks arising out of borrowings, in foreign 
              currency, due to currency rate and interest rate movements can be 
              contained. </p>
              <p align="justify">
              If receivables/payments/expenditure are denominated or to be 
              incurred in multiple currencies then derivatives can be used for 
              matching the inflows and outflows. Presently only USD contracts 
              are available. Other currencies are expected to be added in due 
              course. <br>
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
    <p class="tagline_left">Copyright &copy; </p>
    <br class="clear" />
  </footer>
  </div></div></div></div> 
 
</body>
</html>
