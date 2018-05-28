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

<section id="display-product">
	<div class="container">
		<!-- <div class="row">
			<div class="product-name"><h1 class="text-uppercase text-center"> HomeMade Lantern</h1></div>
			<div class="col-md-4">
				<img class="img-responsive" src="http://inheadline.com/inheadline/public/assets/uploads/news/59db4bb38af34.jpeg" alt="">
			</div>
			<div class="col-md-8">
				<div class="product-detail">
					<h2>Our best seller! The 30-day bloating detox tea will help you cleanse and relieve your tummy.</h2>
					<h3>Naturally reduce bloating with LumiTea’s 30 Day Bloating Detox</h3>
					<h1>$49.98</h1>
					<button class="btn btn-success btn-product">Add to cart</button>
					<form class="pull-left product-quantity" action="">
							<input type="number" placeholder="Number of Quantity">								
					</form>
					<div class="clearfix"></div>
				</div>
				

			</div>
		</div> --><div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="https://i2.wp.com/www.ktm2day.com/wp-content/uploads/2012/02/nepali-handicrafts.jpg?resize=550%2C353" title="caption2" /></div>
						  <div class="tab-pane" id="pic-2"><img src="http://inheadline.com/inheadline/public/assets/uploads/news/59db4bb38af34.jpeg" /></div>
						  <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="http://inheadline.com/inheadline/public/assets/uploads/news/59db4bb38af34.jpeg" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						</ul>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">men's shoes fashion</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
						<h4 class="price">current price: <span>$180</span></h4>
						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
						<h5 class="sizes">sizes:
							<span class="size" data-toggle="tooltip" title="small">s</span>
							<span class="size" data-toggle="tooltip" title="medium">m</span>
							<span class="size" data-toggle="tooltip" title="large">l</span>
							<span class="size" data-toggle="tooltip" title="xtra large">xl</span>
						</h5>
						<h5 class="colors">colors:
							<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
							<span class="color green"></span>
							<span class="color blue"></span>
						</h5>
						<div class="action">
							<div class="center">
								<div class="input-group">
						          <span class="input-group-btn">
						              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
						                  <span class="glyphicon glyphicon-minus"></span>
						              </button>
						          </span>
						          <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
						          <span class="input-group-btn">
						              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
						                  <span class="glyphicon glyphicon-plus"></span>
						              </button>
						          </span>
						      </div>
							</div>
							<button class="add-to-cart btn btn-default" type="button">add to cart</button>
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="product-detail-wrapper">
				<div class="col-md-12">
				 <div class="product-menu">
					<h2>Dynamic Tabs</h2>
				    <ul class="nav nav-tabs">
				      <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
				      <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
				      <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
				      <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
				    </ul>
				</div>

					 <div class="tab-content">
				      <div id="home" class="tab-pane fade in active">
				        <h3>HOME</h3>
				        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				      </div>
				      <div id="menu1" class="tab-pane fade">
				        <h3>Menu 1</h3>
				        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				      </div>
				      <div id="menu2" class="tab-pane fade">
				        <h3>Menu 2</h3>
				        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
				      </div>
				      <div id="menu3" class="tab-pane fade">
				        <h3>Menu 3</h3>
				        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				      </div>
				    </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
			<h2>Similar <b>Products</b></h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>   
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="item carousel-item active">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://corporatenepal.com/english/wp-content/uploads/2017/07/Handicraft-1.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Apple iPad</h4>
									<p class="item-price"><strike>$400.00</strike> <span>$369.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="http://inheadline.com/inheadline/public/assets/uploads/news/59db4bb38af34.jpeg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Sony Headphone</h4>
									<p class="item-price"><strike>$25.00</strike> <span>$23.99</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>		
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/products/macbook-air.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Macbook Air</h4>
									<p class="item-price"><strike>$899.00</strike> <span>$649.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>								
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/products/nikon.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Nikon DSLR</h4>
									<p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
					</div>
				</div>
				<div class="item carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/products/play-station.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Sony Play Station</h4>
									<p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/products/macbook-pro.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Macbook Pro</h4>
									<p class="item-price"><strike>$1099.00</strike> <span>$869.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/products/speaker.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Bose Speaker</h4>
									<p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/products/galaxy.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Samsung Galaxy S8</h4>
									<p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>						
					</div>
				</div>
				<div class="item carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/products/iphone.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Apple iPhone</h4>
									<p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/products/canon.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Canon DSLR</h4>
									<p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/products/pixel.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Google Pixel</h4>
									<p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>	
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/products/watch.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Apple Watch</h4>
									<p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
		</div>
		<div class="row">
			<div class="review-title"><h1 class="text-uppercase text-center">Give your opinion</h1></div>
			<div class="col-sm-3">
				<div class="rating-block">
					<h4>Average user rating</h4>
					<h2 class="bold padding-bottom-7">4.3 <small>/ 5</small></h2>
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
				</div>
			</div>
			<div class="col-sm-3">
				<h4>Rating breakdown</h4>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
							<span class="sr-only">80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;">1</div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
							<span class="sr-only">80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;">1</div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
							<span class="sr-only">80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;">0</div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 40%">
							<span class="sr-only">80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;">0</div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 20%">
							<span class="sr-only">80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;">0</div>
				</div>
			</div>			
		</div>			
		<div class="row">
			<div class="col-sm-7">
					<div class="well well-sm">
		            <div class="text-right">
		                <a class="btn btn-success btn-green" href="#reviews-anchor" id="open-review-box">Leave a Review</a>
		            </div>
			        
	            <div class="row" id="post-review-box" style="display:none;">
	                <div class="col-md-12">
	                    <form accept-charset="UTF-8" action="" method="post" class="form">
	                        <input id="ratings-hidden" name="rating" type="hidden"> 
	                     <div class="form-group">
	                     	   <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>
	                     </div>
	                        <div class="form-group">
	                        	<input type="text" class="form-control animated" placeholder="Enter your email">
	                        </div>
	                        <div class="form-group">
	                        	<input type="text" class="form-control animated" placeholder="Enter your fullname">
	                        </div>

	                        
	                        <div class="text-right">
	                            <div class="stars starrr" data-rating="0"></div>
	                            <a class="btn btn-danger btn-lg" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
	                            <span class="glyphicon glyphicon-remove"></span>Cancel</a>
	                            <button class="btn btn-success btn-lg" type="submit">Save</button>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div> 
				<hr/>
				<div class="review-block">
					<div class="row">
						<div class="col-sm-3">
							<img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
							<div class="review-block-name"><a href="#">nktailor</a></div>
							<div class="review-block-date">January 29, 2016<br/>1 day ago</div>
						</div>
						<div class="col-sm-9">
							<div class="review-block-rate">
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
							</div>
							<div class="review-block-title">this was nice in buy</div>
							<div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
						</div>
					</div>
					<hr/>
					<div class="row">
						<div class="col-sm-3">
							<img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
							<div class="review-block-name"><a href="#">nktailor</a></div>
							<div class="review-block-date">January 29, 2016<br/>1 day ago</div>
						</div>
						<div class="col-sm-9">
							<div class="review-block-rate">
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
							</div>
							<div class="review-block-title">this was nice in buy</div>
							<div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
						</div>
					</div>
					<hr/>
					<div class="row">
						<div class="col-sm-3">
							<img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
							<div class="review-block-name"><a href="#">nktailor</a></div>
							<div class="review-block-date">January 29, 2016<br/>1 day ago</div>
						</div>
						<div class="col-sm-9">
							<div class="review-block-rate">
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
							</div>
							<div class="review-block-title">this was nice in buy</div>
							<div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-5">
				<div class="ads">
					<img class="img-responsive" src="https://images.examples.com/wp-content/uploads/2017/03/Perfume-Product-Advertisement-Poster.jpg" alt="">
				</div>
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
<script src="js/product-quantity.js"></script>
<script src="js/review.js"></script>
<script src="js/main.js"></script>
</body>
</html>





