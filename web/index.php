<?php

session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Bikin Kaos.com</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
           <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="images/slider/logo.jpg" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                   <li class="dropside">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<i class="fa fa-bars"></i></a>
                        <ul class="dropdown-menu">
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="#" onclick="getpages('create.php','screen')">Create Design</a></li>
							<li><a href="#" onclick="getpages('order.php','screen')">Order</a></li>
							<li><a href="#" onclick="getpages('gallery.html','screen')">Gallery</a></li>
							<li><a href="#" onclick="getpages('contact-us.php','screen')">Contact</a></li>
							<li><a href="#" onclick="getpages('profile.php','screen')">Profile</a></li>
							<li><a href="#" onclick="getpages('login.php','screen')">Log In</a></li>
							<li><a href="#" onclick="getpages('signup.php','screen')">Sign Up </a></li>
							<li><a href="#" onclick="getpages('logout.php','screen')">Log Out </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header><!--/header-->
 <div id="screen">  
  <div class="container">         
  <div class="row">
    <div class="col-md-4">
      <a  href="#" onclick="getpages('create.php','screen')" class="img-responsive" >  
        <img src="images/slider/bgbg1.jpg" alt="Pulpit Rock"class="img-responsive">
		<button type="button" class="btn btn-default">Create Design</button>
      </a>
    </div>
    <div class="col-md-4">
      <a href="#" onclick="getpages('order.php','screen')" class="img-responsive" >
        <img src="images/slider/bgbg2.jpg" alt="Moustiers Sainte Marie"class="img-responsive" >
		<button type="button" class="btn btn-default">Order T-Shirt</button>
      </a>
    </div>
    <div class="col-md-4">
      <a href="#" onclick="getpages('gallery.html','screen')" class="img-responsive" >  
        <img src="images/slider/bgbg3.jpg" alt="Cinque Terre"class="img-responsive" >
		<button type="button" class="btn btn-default">Gallery</button>
      </a>
    </div>
  </div>
</div>
</div>
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<script language="javascript">
		function getXmlHttpObject() {
			var xmlhttp = null;
			
			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			return xmlhttp;
		}
		
		function getpages(url, centercol) {
			xmlhttp = getXmlHttpObject();
			if(xmlhttp) {
				var obj = document.getElementById(centercol);
				xmlhttp.open("GET", url);
				xmlhttp.onreadystatechange = function() {
					if(xmlhttp.readyState == 1){
						obj.innerHTML = 'asoooy';
					}
					if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
						obj.innerHTML = xmlhttp.responseText;
					}
				}
				xmlhttp.send(null);
			}
		}
		
    function next() {
      $("#formulir :input").prop("readonly", true);
		
      $("#group-check").show();
      $("#sub").show();

      $('#check').prop('checked', false);
      $("#check").prop('readonly', false);
      $("#check").prop('disabled', false);
      $("#sub").prop('readonly', false);
      $("#sub").prop('disabled', false);

      $("#but").attr("onclick", "back();");
      $('#but').html('Back');
    }
    function back() {
      $("#formulir :input").prop("readonly", false);

      $("#group-check").hide();
      $("#sub").hide();

      $("#check").prop('disabled', true);
      $("#sub").prop('disabled', true);

      $("#but").attr("onclick", "next();");
      $('#but').html('Next');
    }
    $("#group-check").hide();
    $("#sub").hide();
  </script>

</body>
</html>