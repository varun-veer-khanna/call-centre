<?php
session_start();
if(isset($_SESSION['email'])!='')
{
	header("location:index.php");
}
?>
<script type="text/javascript">
function validateEmail(email) { 
    var x=document.forms["register"]["email"].value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
	  {
	  alert("Not a valid e-mail address");
	  return false;
	  }
} 
</script>
<?php
include('config.php');
if(isset($_POST['register']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$date = $_POST['date'];
$month = $_POST['month'];
$year = $_POST['year'];
$bdate = $date.'-'.$month.'-'.$year;
$email = $_POST['email'];
$password = $_POST['password'];
$secpass = md5($password);
$counter = 0;
if(trim($fname) == '' || trim($lname) == '' || trim($date) == '' || trim($month) == '' || trim($year) == '' || trim($email) == '' || trim($password) == '')
{
	$err = "Please Fill all the Fields";
        $counter++;
}
if(empty($_REQUEST['captcha'])) {
    	$err = "Enter Security Code"; 
	$counter++;        
        }
if(!empty($_REQUEST['captcha'])) {
    if (empty($_SESSION['captcha']) || trim(strtolower($_REQUEST['captcha'])) != $_SESSION['captcha']) {        
	$err = "Security Code Incorrect";
        $counter++;
    } 
}
$chkmail = "select email from register where email = '$email'";
$resmail = mysql_query($chkmail);
$count = mysql_num_rows($resmail);
if($count > 0)
	{
		$err = "Email already Registered";
                $counter++;
	}
 if($counter == 0){
			$sql = "insert into register(fname,lname,bdate,email,password) values('$fname','$lname','$bdate','$email','$secpass')";
			$result = mysql_query($sql);
			if($result == 1)
			{
				$err = "Register Successfully";
			}else{
				$err = "error occured";
			}
		}
}
?>
<!DOCTYPE html>
<title>CALL CENTRE| register</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="styles/callcentre.css" type="text/css" />
<script src="scripts/callcentre.js" type="text/javascript"></script>
</head>
<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
        <script type="text/javascript" src="js/ui.core.js"></script>
        <script type="text/javascript" src="js/ui.sortable.js"></script>
        <style type="text/css">
            body{
                /*background-color: #2daebf;*/
            }
            form.registration{
                width:600px;
                margin: 10px auto;
                padding:10px;
                font-family: "Trebuchet MS";   
            }
            form.registration fieldset{
                background-color:#707070;
                border:none;
                padding:10px;
                -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
                -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
                -moz-border-radius: 15px;
                -webkit-border-radius: 15px;				          
                padding:6px;
                margin:0px 30px 14px 0px;
            }
            form.registration legend{
                text-align:left;
                color:#2DAEBF;
                font-size:14px;
                padding:0px 4px 15px 4px;
                margin-left:20px;
                font-weight:bold;
				display:block;
            }
            form.registration label{
                font-size: 18px;
                width:200px;
                float: left;
                text-align: right;
                clear:left;
                margin:4px 4px 0px 0px;
                padding:0px;
                color: #FFF;
                text-shadow: 0 1px 1px rgba(0,0,0,0.8);
            }
            form.registration .input{
                font-family: "Trebuchet MS";
                font-size: 18px;
                float:left;
               /* width:300px;*/
                border:1px solid #cccccc;
                margin:2px 0px 4px 2px;
                color:#00abdf;
                height:26px;
                padding:3px;
                -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
                -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
            }
            form.registration .input:focus, form.registration select:focus{
                background-color:#E0E6FF;
            }
            form.registration select{
                font-family: "Trebuchet MS";
                font-size: 20px;
                float:left;
                border:1px solid #cccccc;
                margin:2px 0px 2px 2px;
                color:#00abdf;
                height:32px;
                -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
                -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
            }
            .button, .button:visited{
                float:right;
                background: #2daebf url(images/overlay.png) repeat-x; 
                font-weight:bold;
                display: inline-block; 
                padding: 5px 10px 6px; 
                color: #fff; 
                text-decoration: none;
                -moz-border-radius: 5px; 
                -webkit-border-radius: 5px;
                -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
                -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
                text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
                border-bottom: 1px solid rgba(0,0,0,0.25);
                cursor: pointer;
                margin-top:95px;
                margin-right:15px;
            }
            .button:hover{
                background-color: #007d9a; 
            }
            #sortable {
                list-style-type: none;
                margin: 5px 0px 0px 16px;
                padding: 0;
            }
            #sortable li {
                margin: 3px 3px 3px 0;
                padding: 1px;
                float: left;
                width: 35px;
                height: 35px;
                font-size: 20px;
                text-align: center;
                line-height:35px;
                cursor:pointer;
                -moz-border-radius:5px;
                -webkit-border-radius:5px;
                -moz-box-shadow: 0 1px 1px rgba(0,0,0,0.5);
                -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.5);
                text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
                background:#2daebf url(images/overlay.png) repeat-x scroll 50% 50%;
                color:#fff;
                font-weight:normal;
            }
            .captcha_wrap{
                border:1px solid #fff;
                -moz-border-radius:10px;
                -webkit-border-radius:10px;
                -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
                -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
                float:left;
                height:120px;
                overflow:auto;
                width:150px;
                overflow:hidden;
                margin:0px 0px 0px 210px;
                background-color:#fff;
            }
            .captcha{
                -moz-border-radius:10px;
                -webkit-border-radius:10px;
                font-size:14px;
                color:#707070;
                text-align: center;
                border-bottom:1px solid #CCC;
                background-color:#fff;
				width: 200px;
            }
			.captch_input{color: #FFFFFF;
    font-family: "Trebuchet MS";
    font-size: 13px;
    margin: 0;
    padding: 4px;}
	.submit_btn{float: left;
    text-align: center;
    width: 300px;}
	.login_link{ 
    float: left;
    font-size: 20px;
    padding-left: 18px;
    padding-top: 9px;
    text-align: left;
    width: 100px;}
        </style>
<style type="text/css">
#change-image { font-size: 11px; }
</style>
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
                <center> <h1>REGISTER FORM</h1></center><br/>
   		<center>
		<form class="registration" name="register" method="post" action="#">
		<p style="padding-bottom:20px; color:#FF0000;"><?php if(isset($err)){ echo $err; } ?></p>
            <fieldset>
                <legend>About you</legend>
                <label>First name</label>
                <input class="input" type="text" maxlength="100" value="<?php if(isset($fname)){ echo $fname; } ?>" name="fname"/>
                <label>Last name</label>
                <input class="input" type="text" maxlength="100" value="<?php if(isset($lname)){ echo $lname; } ?>" name="lname"/>
                <label>Birthdate</label>
                <select name="date">
					<option value="1"></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
                </select>
                <select name="month">
					<option></option>
                    <option value="1">January</option>
                    <option value="2">February</option>
					<option value="3">March</option>
					<option value="4">April</option>
					<option value="5">May</option>
					<option value="6">June</option>
					<option value="7">July</option>
					<option value="8">August</option>
					<option value="9">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
                </select>
                <select name="year">
					<option></option>
					 <option value="1988s">1988</option>
					  <option value="1989">1989</option>
					   <option value="1990">1990</option>
					    <option value="1991">1991</option>
					 <option value="1992">1992</option>
					  <option value="1993">1993</option>
					   <option value="1994">1994</option>
					    <option value="1995">1995</option>
						 <option value="1996">1996</option>
						  <option value="1997">1997</option>
						   <option value="1998">1998</option>
						    <option value="1999">1999</option>
							 <option value="2000">2000</option>
							  <option value="2001">2001</option>
							   <option value="2002">2002</option>
							    <option value="2003">2003</option>
								 <option value="2004">2004</option>
								  <option value="2005">2005</option>
								   <option value="2006">2006</option>
						 <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                </select>
            </fieldset>
            <fieldset>
                <legend>Account details</legend>
                <label>E-Mail</label>
                <input class="input" type="email" maxlength="120" value="<?php if(isset($email)){ echo $email; } ?>" name="email"/>
                <label>Password</label>
                <input class="input" type="password" maxlength="20" name="password"/>
            </fieldset>
            <fieldset>
                <legend>Let's see if you are a human</legend>
                <div>
                    <div class="captcha">
			Enter Security Code
                    </div>
                    <!-------Captcha---------->
<img src="captcha.php" id="captcha" style="border: 1px solid rgb(204, 204, 204); margin-top: 10px;" />
<!-- CHANGE TEXT LINK -->
<a style="cursor:pointer; color:#FFFFFF !important;" onClick="document.getElementById('captcha').src='captcha.php?'+Math.random();
    document.getElementById('captcha-form').focus();"
    id="change-image">Not readable? Change text.</a><br/><br/>
<input type="text" name="captcha" class="captch_input" id="captcha-form" /><br/>
<!-------Captcha---------->
                </div>
                <div class="submit_btn"><input type="submit" id="formsubmit" style="margin:0 !important;" class="button" value="Register" name="register" onClick="return validateEmail()"></div><div class="login_link"><a href="index.php" style="color:#FFFFFF !important; cursor:pointer;">Login</a></div>
            </fieldset>
        </form>

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
