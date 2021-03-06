<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,900" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

       <header>
		<div class="container">
			<div class="row">
				<div class="contact pull-right">
					<ul class="list-unstyled">
						<li><a href=""><i class="fa fa-envelope"> ThamelBazaar@gmail.com </i></a></li>

						<li><a href=""><i class=" fa fa-mobile"> 977-9840000000</i></a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="logo">
						<img class="img-responsive" src="img/thamel_bazaar_LOGO.png" alt="Logo">
					</div>
				</div>
				<div class="col-md-9">
					<div class="adv">
						<img src="https://www.nepalesesingingbowls.com/media/wysiwyg/home-slide/singingbowl-banner3.jpg" class="img-responsive" alt="">
					</div>
				</div>
			</div>
		</div>
	</header>
		<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">ThamelBazaar</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="product.php">Product Detail</a></li>
      <li><a href="product-order.php">Product-order</a></li>
    </ul>

		<ul class="nav navbar-nav navbar-right">
				<li><a href=""><i class="fa fa-user"> LOGIN / Register</i></a></li>
				<li class="dropdown cart" >
					    <a class="dropdown-toggle" 	 id="menu1" data-toggle="dropdown">Cart
					    <span class="caret"></span></button>
					    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
					      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
					      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
					      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
					      <li role="presentation" class="divider"></li>
					      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
					    </ul>
				</li>
				
			</ul>
		   <form class="navbar-form navbar-right" action="/action_page.php">
		  <div class="input-group">
		    <input type="text" class="form-control" placeholder="Search">
		    <div class="input-group-btn">
		      <button class="btn btn-default" type="submit">
		        <i class="glyphicon glyphicon-search"></i>
		      </button>
		    </div>
		  </div>
		</form>
		
		</div>  
	</div>
</div>		
</nav>	
 <div class="container">
         <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="mysuperscript.php" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" > Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                   <a href="http://cookingfoodsworld.blogspot.in/" target="_blank" ></a>
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="mysuperscript.php" autocomplete="on"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" >Your username</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail"  > Your email</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" >Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" >Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
        <footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="footer-one footer-common">
					<h4>Thamel Bazaar</h4>
					<p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum.</p>
					
					
					<h5>Information</h5>
					<ul class="list-unstyled in-block pull-left">
						<li><a href="">Profile</a></li>
						<li><a href="">About Us</a></li>
						<li><a href="">Category</a></li>
					</ul>
					<ul class="list-unstyled pull-right footer-right">
						<li><a href="">Wishlist</a></li>
						<li><a href="">All proucts</a></li>
						<li><a href="">Contact us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-4">
				<div class="footer-two footer-common">
					<h4>Popular Posts</h4>
					<p><span><i class=" fa fa-clock-o"></i></span>July 13,2017</p>
					<h5>Best Approach</h5>
					<p class="subtitle">Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum</p>
					
					
					
					<p><span><i class=" fa fa-clock-o"></i></span>July 13,2017</p>
					<h5>Designers and Web</h5>
					<p class="subtitle">Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="footer-three footer-common">
					<h4>Contact</h4>
					<p class="subtitle">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum.
					</p>
					
					<form action="">
						<div class="form-group">
							<input class="form-control" type="text" placeholder="Enter your name">
						</div>
						<div class="form-group">
							<input  class="form-control" type="Email" placeholder="Enter your email add">
						</div>
						<button class="btn btn-primary btn-block">SUBSCRIBE NOW</button>
					</form>
				</div>
			</div>
		</div>

	</div>
	
</footer>

<section id="copyright">		
				<div class="container">
					<div class="col-md-12">
						<div class="copyright-text">
							<p class="subtitle pull-left"> Copyright © Prabidi labs</p>
							<p class="subtitle pull-right"> design by <a href="">Kundan Karna</a></p>
						</div>
					</div>
				</div>		
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://codepen.io/OfficialAntarctica/pen/2677821722cd9e02c2c882a17c5b2072.js?2"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
</body>
</html>





