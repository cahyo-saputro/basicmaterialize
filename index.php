<html>
	<head>
		<!-- import materialize css -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
		<!-- optimized for mobile -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<script>
			$(document).ready(function(){
    			$('.materialboxed').materialbox();
  			});
		</script>
	</head>
	<body class="grey lighten-2">
		<!-- import jQUery before materialize-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script>
			$(document).ready(function(){
			    $(".button-collapse").sideNav();
  			});
		</script>
		<div class="row blue-grey lighten-1">
			<div class="col s2 m3 offset-s6 offset-m9">
					<ul id="dropdown2" class="dropdown-content">
						<li><a href="#!" class="blue-grey-text">notification<span class="new badge blue-grey darken-2">7</span></a></li>
						<li><a href="#!" class="blue-grey-text">edit profile<span class="badge">1</span></a></li>
						<li><a href="#!" class="blue-grey-text">sign out</a></li>					
					</ul>
					<a class="btn dropdown-button blue-grey lighten-1 black-text z-depth-0" href="#!" data-activates="dropdown2">Member<i class="mdi-navigation-arrow-drop-down right"></i></a>
			</div>
		</div>		
		<div class="container">		
			<div class="row">
				<div class="col s12">
					<div class="row">
						<div class="col s5 m2  offset-s4 offset-m5 center-align">
							<img class="materialboxed responsive-img" src="image/logo.png">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<nav>
					<div class="nav-wrapper blue-grey darken-3">
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
						<ul class="left hide-on-med-and-down">
							<li><a href="?page=home">Home</a></li>
							<li><a href="?page=product">Product</a></li>
							<li><a href="?page=guestbook">Guestbook</a></li>						
						<ul>
						<ul class="side-nav" id="mobile-demo">
							<li><a href="#">Home</a></li>
							<li><a href="#">Product</a></li>
							<li><a href="#">Guestbook</a></li>						
						<ul>
					</div>
				</nav>
			</div>
		</div>
		<div class="mainbar">
		<!-- this is mainbar content-->
		<?php
			if(empty($_GET['page']) || $_GET['page']=="home"){
				include "home.php";
			}else if($_GET['page']=="product"){
				include "product.php";
			}else if($_GET['page']=="guestbook"){
				include "guest.php";
			}			
		?>
		</div>
        <footer class="page-footer blue-grey darken-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="blue-grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="blue-grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="blue-grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="blue-grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="blue-grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="blue-grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>            
	</body>
</html>
