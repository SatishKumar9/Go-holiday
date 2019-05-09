<?php

$user=array("srd","satishkumar","manojkumar","saijahnavi","ooha","navyasai");
$pwd=array("iiits@123","satish","manoj","jahnavi","ooha","navya");
$count=0;
$j=0;

for ( $i=0 ; $i<6 ; $i++ )
{
	if(!empty($_POST["fname"]))
	{
		if( $user[$i] == $_POST["fname"])
		{
			$j++;
			if( $pwd[$i] == $_POST["pw"])
			{
				$count=2;
			}else{
				$p="<span style='color:red'>Invalid username or password</span>";
			}
		}
	}
}

if(!empty($_POST["fname"]) && $j==0) {
	$p="<span style='color:red'>Invalid username or password</span>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>GOHOLIDAY</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Cormorant SC' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Abhaya Libre' rel='stylesheet'>
    <link rel="stylesheet" href="css/vq.css"> 
    <link rel="stylesheet" href="css/display.css">
    <link rel="stylesheet" href="css/style.css">
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body id="1" data-spy="scroll" data-target=".navbar" data-offset="50">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
    		<div class="navbar-header">
    	    	<a class="navbar-brand" href="index.php">GO-HOLIDAY</a>
    		</div>
    		<div >
    		    <div class="collapse navbar-collapse" id="myNavbar">
    		        <ul class="nav navbar-nav">
    		      	    <li><a href="#section1">HOME</a></li>
           	       	 	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">CITIES<span class="caret"></span></a>
    	    				<ul class="dropdown-menu">
   			       				<li><a href="mumbai/mumbai.html"target="_blank">Mumbai</a></li>
    		      				<li><a href="chennai/chennai.html"target="_blank">Chennai</a></li>
    		      				<li><a href="delhi/delhi.html" target="_blank">Delhi</a></li>
    		       				<li><a href="hyderabad/hybd.html"target="_blank">Hyderabad</a></li>
    		        			<li><a href="kolkata/kolkata.html"target="_blank">Kolkata</a></li>
    		    			</ul>
    	  				</li>
        	    		<li><a href="#section41">CONTACT US</a></li>
    		        </ul>
        			<ul class="nav navbar-nav navbar-right">
        				<?php if($count==2):?>
      						<li style="color:white"><a><?php echo "Hello, ".$_POST["fname"]."!!"; ?></a></li>
      						<li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
      			   		<?php else:?>
      						<li><a href="#f3"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      					<?php endif?>	
    				</ul>
      			</div>
    		</div>
  		</div>
	</nav>    

	<div id="section1" class="container-fluid">
		<div id="section9" class="container-fluid">
   			<div class="center">Goholiday</div>
  		</div>
  		<p></p>
		
		<div id="section2" class="container-fluid">
			<p style="text-align:center;font-size:40px;font-family:'Allura';color:black">Top places to visit in india</p><br>
			
			<span class="container1">
				<a href="delhi/delhi.html" target="_blank"><img id="myImg1" src="pics/delhi.jpg" style="margin-left:40px;"></a>
				<div class="centered">Delhi</div>
			</span>

			<span class="container1">
				<a href="mumbai/mumbai.html" target="_blank"><img id="myImg2" src="pics/mumbai.jpg"></a>
				<div class="centered">Mumbai</div>
			</span>
			<p></p><p></p>

			<span class="container1">
				<a href="hyderabad/hybd.html" target="_blank"><img id="myImg" src="pics/hyd.jpg" alt="Delhi" style="margin-left:40px;"></a>
				<div class="centered">Hyderabad</div>
			</span>

			<span class="container1">
				<a href="kolkata/kolkata.html" target="_blank"><img id="myImg" src="pics/kolkata.jpg" ></a>
				<div class="centered">Kolkata</div>
			</span>

			<span class="container1">
				<a href="chennai/chennai.html" target="_blank"><img id="myImg" src="pics/chennai.jpg" ></a>
				<div class="centered">Chennai</div>
			</span>
			<br><br>
		</div>

		<?php if($count!=2):?>
		<div class="f">
			<div class="login-page" id="f3">
  				<div class="form" >	
  	         	    <form class="login-form" style="color:black"   method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?> " >
  			  	 		<center><h2 style="color:black">Log In </h2></center><br>
      					<?php echo $p; ?>
      					<input type="text" placeholder="username" name="fname">
      					<input type="password" placeholder="password" name="pw">
      					<button>login</button>
    				</form>
  				</div>
			</div>
		</div>
 		
		
    
    	<?php else:?>
    	<div style="background-color:transparent;height:100px"></div>
<center>
<div style="background-color:rgba(120,120,120,0.4);width:70%"><br><br>
<div class="slideshow-block" >

<h1 style="text-align:center;font-family:'Allura';font-size:45px;text-shodaw:green;">Find  new  places..</h1>

 <div class="mySlides fade" >
 <center><img src="pics/fam.jpg" style="width:97%;height:360px"></center>
   <div class="text" style="font-size:45px;color:white;font-family:'Allura'">explore new worlds</div>
   
 </div>

<div class="mySlides fade">
 <center> <img src="pics/famhome2.jpg" style="width:97%;height:360px"></center>
  <div class="text" style="font-size:45px;color:black;font-family:'Allura';">going on a vacation?<br>you are at the right place</div>
</div>

<div class="mySlides fade" >
 <center> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcoim7AyddovYjew1y0q1VOJgd0_KGrzptyarVS9mj9hvVbFN-" style="width:97%"></center>
  <div class="text" style="font-size:45px;color:black;font-family:'Allura'">find the best dining spots here...</div>
</div>

</div>
<br><br>
</div>
<div style="background-color:transparent;height:100px"></div>
</center>
<script src="js/display.js"></script>
		<?php endif?>	  


		<div id="section41" class="container-fluid">
 			<center>
 				<h1 style="font-family:'Allura';font-size:50px">Contact Us</h1>
 				<a href="contact.html" class="fa fa-facebook"></a>
				<a href="contact.html" class="fa fa-twitter"></a>
				<a href="contact.html" class="fa fa-instagram"></a>
				<a href="contact.html" class="fa fa-snapchat-ghost"></a>
        		<h4>Copyright &#169 2017 Goholiday.com | All rights reserved. </h4>
  			</center>
  			<div style="float:right;font-family:'Allura';font-size:25px">Go  To  Top <a href="#1"><img src="https://cdn0.iconfinder.com/data/icons/flat-round-arrow-arrow-head/512/Red_Arrow_Top-2-512.png" height="30px" width="30px"></a></div>
  			 
		</div>
	</div>
</body>
</html>

