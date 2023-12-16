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
                  <h2>Depository Services</h2>
          <p>A depository can be defined as an institution where the investors 
              can keep their financial assets such as equities, bonds, mutual 
              fund units etc in the dematerialised form and transactions could 
              be effected on it.</p>
              <p align="justify">
              Besides providing custodial facilities and dematerialisation, 
              depositories are offering various transactional services to its 
              clients to effect buying, selling, transfer of shares etc.<br>
              <br>
              <b>Our Depository Services Cell provides the following services:
              </b></p>
             <div id="servicelist"> <ul>
                <li>Convert your physical holding into electronic holding (which 
                is called &quot;dematerialisation&quot; of securities).</li>
                <li>Keep custody of your holdings in electronic form. </li>
                <li>Transfer the shares in the electronic form from one account 
                to another. </li>
                <li>Facilitate pledge of your electronic securities.</li>
          </ul></div>
              <p align="justify">
              Give electronic credit of new share allotments such as public 
              issues, bonus, rights etc.<br>
              <br>
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
    <p class="tagline_left">Copyright &copy; </p>
    <br class="clear" />
  </footer>
  </div></div></div></div> 
 
</body>
</html>
