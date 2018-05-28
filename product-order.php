<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,900" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<script src="./js/phSlideshow.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/phSlideshow.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/product.css">
	<link rel="stylesheet" href="css/order.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<!-- hover menu -->

<div class="base">
   <div class="menu">
      <div class="icon" id="cart">
         <div class="bar"></div>
      </div>
   </div>
   <div class="icons">
      <i class="fa fa-shopping-cart" aria-hidden="true">
      </i>
      <i class="fa fa-calendar-o" aria-hidden="true"></i>
      <i class="fa fa-tachometer" aria-hidden="true"></i>
   </div>
   <div class="section">
      <div class="cover1">
         <div class="cover2">
            <a class="content" href="#calender"></a>
         </div>
      </div>
   </div>
   <a class="section-static top" href="#profile"></a>
   <a class="section-static bottom" href="#dashboard"></a>
</div>
</div>

	<!-- end of hover menu -->
	<!-- header -->
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

<!-- sidemenu -->

<div class="sidemenu">
	<button class="" data-toggle="modal" data-target="#offers">
		10% off
	</button>
	<!-- Modal -->
		<div id="offers" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Get Link in your email</h4>
		      </div>
		      <div class="modal-body">
		        <form action="">
		        	<div class="form-group">
		        		<input type="email" class="form-control" placeholder="Enter your email id here">
		        	</div>
		        	<div class="form-group">
		        		<input type="submit" class="form-control" data-dismiss="modal">
		        	</div>
		        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>

		  </div>
		</div>
</div>
	<!-- navbar -->
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

<section id="product-select">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9">
				<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th>ITEM</th>
						<th>DESCRIPTION</th>
						<th>QUANTITY</th>
						<th>Rate</th>
						<th>PRICE</th>
						<th></th>
					</tr>
					<tr>
						<td>
							<img src="https://www.imartnepal.com/images/Untitled1.jpg" alt="">
						</td>
						<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>
						<td>
							<div class="center">
								<div class="input-group">
						          <span class="input-group-btn">
						              <button type="button" class="btn btn-default btn-number btn-sub" disabled="disabled" data-type="minus" data-field="quant[1]">
						                  <span class="glyphicon glyphicon-minus"></span>
						              </button>
						          </span>
						          <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
						          <span class="input-group-btn">
						              <button type="button" class="btn btn-default btn-number btn-add" data-type="plus" data-field="quant[1]">
						                  <span class="glyphicon glyphicon-plus"></span>
						              </button>
						          </span>
						      </div>
							</div>
						</td>
						<td><div class="rate">
							<h3>$<span>49.98</span></h3>
						</div></td>
						<td>
							<div class="price">
								<h3>$ <span>49</span></h3>
							</div>
						</td>
						<td>
							<a href="/link-to/whatever-address/" id="cancel" name="cancel" class="btn btn-default">Cancel</a>
						</td>
					</tr>
					<tr>
						<td>
							<img src="https://www.imartnepal.com/images/Untitled1.jpg" alt="">
						</td>
						<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>
						<td>
							<div class="center">
								<div class="input-group">
						          <span class="input-group-btn">
						              <button  type="button" class="btn btn-default btn-number btn-sub" disabled="disabled" data-type="minus" data-field="quant[1]">
						                  <span class="glyphicon glyphicon-minus"></span>
						              </button>
						          </span>
						          <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
						          <span class="input-group-btn">
						              <button type="button" class="btn btn-default btn-number btn-add" data-type="plus" data-field="quant[1]">
						                  <span class="glyphicon glyphicon-plus"></span>
						              </button>
						          </span>
						      </div>
							</div>
						</td>
						<td><div class="rate">
							<h3>$<span>1</span></h3>
						</div></td>
						<td>
							<div class="price">
								<h3>$ <span>1</span></h3>
							</div>
						</td>
						<td>
							<a href="/link-to/whatever-address/" id="cancel" name="cancel" class="btn btn-default">Cancel</a>
						</td>
					</tr>
					<tr>
						<td>
							<img src="https://www.imartnepal.com/images/Untitled1.jpg" alt="">
						</td>
						<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>
						<td>
							<div class="center">
								<div class="input-group">
						          <span class="input-group-btn">
						              <button type="button" class="btn btn-default btn-number btn-sub" disabled="disabled" data-type="minus" data-field="quant[1]">
						                  <span class="glyphicon glyphicon-minus"></span>
						              </button>
						          </span>
						          <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
						          <span class="input-group-btn">
						              <button type="button" class="btn btn-default btn-number btn-add" data-type="plus" data-field="quant[1]">
						                  <span class="glyphicon glyphicon-plus"></span>
						              </button>
						          </span>
						      </div>
							</div>
						</td>
						<td><div class="rate">
							<h3>$<span>2</span></h3>
						</div></td>
						<td>
							<div class="price">
								<h3>$ <span>2</span></h3>
							</div>
						</td>
						<td>
							<a href="/link-to/whatever-address/" id="cancel" name="cancel" class="btn btn-default">Cancel</a>
						</td>
					</tr>
				</table>	
				</div>
			</div>
			<div class="col-md-3">
				<div class="cost-wrapper">
					<h1 class="text-center">Order Summary</h1>
					<div class="subtotal-cost">
						<p class="pull-left">Subtotal</p>
						<p id="subtotal" class="pull-right">$<span>98.90</span></p>
						<div class="clearfix"></div>
					</div>
					<div class="total-cost">
						<p class="pull-left">Total</p>
						<p class="pull-right">$98.90</p>
						<div class="clearfix"></div>
					</div>
					<a href="checkout.php"><button class="btn btn-success form-control">Check Out</button></a>
				</div>
			</div>
		</div>
	</div>
</section>



<!-- starting of footer -->
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

<!-- ending of footer -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://codepen.io/OfficialAntarctica/pen/2677821722cd9e02c2c882a17c5b2072.js?2"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script>
	$(".menu").click(function(){
   $(this).parent().toggleClass("close");
   $(".body-overlay").toggleClass("open");
});

</script>
<script type="text/javascript">

	phSlideShow.slideshowInit(
		".slideshow", 	//element
		3000, 			//speed
		true, 			//show controls
		true			//show captions (html title tag)
	);

</script>
<script src="js/jquery.chameleon.js"></script>
<script src="modes/chameleonBlur.js"></script>
<script src="js/review.js"></script>
<script src="js/main.js"></script>
<script src="js/order.js"></script>
</body>
</html>





