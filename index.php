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
		  <div class="modal-dialog modal-own">

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
				<li><a href="login.php"><i class="fa fa-user"> LOGIN / Register</i></a></li>
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

<!-- CATEGORY -->
<!-- <section id="category">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="category-pills">
			<ul class="nav nav-pills nav-stacked">
			  <li class="active"><a href="#">Handicraft</a></li>
			  <li><a href="#">Art</a></li>
			  <li><a href="#">Clothes</a></li>
			  <li><a href="#">Statue</a></li>
			  <li><a href="#">Stones</a></li>
			  <li><a href="#">Utilities</a></li>
			  <li><a href="#">Jewellery</a></li>
			  <li><a href="#">Glass Items</a></li>
			  <li><a href="#">View more...</a></li>
			</ul>
				</div>
			</div>
			<div class="col-md-8">
				<div class="banner">
					<img class="img-responsive" src="http://www.handcraftsofnepal.com/wp-content/uploads/2018/02/nepal.jpg" alt="">
				</div>
			</div>
		</div>
	</div>

</section>

<section id="category">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="fproduct">
					<div class="product-img">
						<img src="http://www.nepalartshop.com/hempshoes/big/11.jpg" class="img-responsive" alt="">
					</div>
					<div class="product-detail-left pull-left">
						<ul class="list-unstyled">
							<li><h5>NPR.1000</h5></li>
							<li><h4>Handmade Slippers</h4></li>
							<li><span><i class="fas fa-heart"></i></span></li>
						</ul>
					</div>

					<div class="product-detail-right pull-right">	
					<ul class='list-unstyled'>
						<li><span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></li>
						<li><a href="">View More..</a></li>
						<li>
							<div class="product-cart">
								<h5><span><i class="fas fa-heart"></i></span>Add to cart</h5>
							</div>
						</li>
					</ul>
					</div>
				</div>	
			</div>
			<div class="col-md-3"></div>
			<div class="col-md-3"></div>
			<div class="col-md-3"></div>
		</div>
	</div>
</section> -->


<section id="category">
	<div class="container">
		<div class="row">
			<div class="flex-category">
				<div class="category-list">
					<ul class="nav nav-pills nav-stacked">
					  <li class="active"><a href="#">Categories</a></li>
					  <li><a href="#">Art</a></li>
					  <li><a href="#">Clothes</a></li>
					  <li><a href="#">Statue</a></li>
					  <li><a href="#">Stones</a></li>
					  <li><a href="#">Utilities</a></li>
					  <li><a href="#">View more...</a></li>
					</ul>
				</div>	
				<div class="category-banner">
						<div class="slideshow">
						<div class="slideshow-prev"></div>
						<div class="slideshow-next"></div>
						<div class="slideshow-controls">
							<div class="slideshow-resume"></div>
							<div class="slideshow-pause"></div>
						</div>

						<!-- Photos start here -->
						<img src="https://corporatenepal.com/english/wp-content/uploads/2017/07/Handicraft-1.jpg" title="jQuery Script Net" />

						<img src="https://i2.wp.com/www.ktm2day.com/wp-content/uploads/2012/02/nepali-handicrafts.jpg?resize=550%2C353" title="caption2" />

						<img src="http://inheadline.com/inheadline/public/assets/uploads/news/59db4bb38af34.jpeg" title="caption3" />

						<img src="https://picsum.photos/600/450?image=442" title="caption4" />

						<img src="https://picsum.photos/600/450?image=427" title="caption5" />

						<img src="https://picsum.photos/600/450?image=420" title="caption6" />

						<!-- /Photos stop here -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section id="product">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<h2>Trending <b>Products</b></h2>
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
			<div class="title">
				<h2 class="text-uppercase">Trending Products</h2>
				<div class="div-line"></div>
			</div>
		<div class="col-md-4">
				<div class="fproduct">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1 class="title">Magic Slippers</h1>
						</div>
						<div class="panel-body">
							<div class="product-img">
								<img src="http://inheadline.com/inheadline/public/assets/uploads/news/59db4bb38af34.jpeg" class="img-responsive" alt="">
							</div>
							<div class="overlay">
								<a href="">View More...</a>
							</div>
						</div>
						<div class="panel-footer">
								<div class="product-description">
							<p class="text-center">Loremipsum to the front of the passage of the highway</p>
						</div>
						<div class="product-price">
							<p class="text-center">$1000.00</p>
							<button class="btn btn-primary btn-own  form-control"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
							<div class="clearfix"></div>
						</div>

						</div>
					</div>
					<div class="tile-common tile-exclusive exclusive">
						<span>Exclusive</span>
					</div>
			</div>	
		</div>
		<div class="col-md-4">
				<div class="fproduct">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1 class="title">Magic Slippers</h1>
						</div>
						<div class="panel-body">
							<div class="product-img">
								<img src="http://www.nepalartshop.com/hempshoes/big/11.jpg" class="img-responsive" alt="">
							</div>
							<div class="overlay">
								<a href="">View More...</a>
							</div>
						</div>
						<div class="panel-footer">
								<div class="product-description">
							<p class="text-center">Loremipsum to the front of the passage of the highway</p>
						</div>
						<div class="product-price">
							<p class="text-center">$1000.00</p>
							<button class="btn btn-primary btn-own  form-control"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
							<div class="clearfix"></div>
						</div>

						</div>
					</div>
					<div class="tile-common tile-exclusive exclusive">
						<span>Exclusive</span>
					</div>
			</div>	
		</div>
		<div class="col-md-4">
				<div class="fproduct">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1 class="title">Magic Slippers</h1>
						</div>
						<div class="panel-body">
							<div class="product-img">
								<img src="http://www.nepalartshop.com/hundreadpashmina/big/2.jpg" class="img-responsive" alt="">
							</div>
							<div class="overlay">
								<a href="">View More...</a>
							</div>
						</div>
						<div class="panel-footer">
								<div class="product-description">
							<p class="text-center">Loremipsum to the front of the passage of the highway</p>
						</div>
						<div class="product-price">
							<p class="text-center">$1000.00</p>
							<button class="btn btn-primary btn-own  form-control"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
							<div class="clearfix"></div>
						</div>

						</div>
					</div>
					<div class="tile-common tile-promoted promoted">
						<span>Promoted</span>
					</div>
			</div>	
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
				<div class="fproduct">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1 class="title">Magic Slippers</h1>
						</div>
						<div class="panel-body">
							<div class="product-img">
								<img src="http://www.newbusinessage.com/userfiles/images/min1.jpg" class="img-responsive" alt="">
							</div>
							<div class="overlay">
								<a href="">View More...</a>
							</div>
						</div>
						<div class="panel-footer">
								<div class="product-description">
							<p class="text-center">Loremipsum to the front of the passage of the highway</p>
						</div>
						<div class="product-price">
							<p class="text-center">$1000.00</p>
							<button class="btn btn-primary btn-own  form-control"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
							<div class="clearfix"></div>
						</div>

						</div>
					</div>
					<div class="tile-common tile-exclusive exclusive">
						<span>Exclusive</span>
					</div>
			</div>	
		</div>
		<div class="col-md-4">
				<div class="fproduct">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1 class="title">Magic Slippers</h1>
						</div>
						<div class="panel-body">
							<div class="product-img">
								<img src="https://sc01.alicdn.com/kf/HTB1YaEGLpXXXXcZXXXXq6xXFXXX8/Nepal-handicraft-wholesale.jpg" class="img-responsive" alt="">
							</div>
							<div class="overlay">
								<a href="">View More...</a>
							</div>
						</div>
						<div class="panel-footer">
								<div class="product-description">
							<p class="text-center">Loremipsum to the front of the passage of the highway</p>
						</div>
						<div class="product-price">
							<p class="text-center">$1000.00</p>
							<button class="btn btn-primary btn-own  form-control"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
							<div class="clearfix"></div>
						</div>

						</div>
					</div>
					<div class="tile-common tile-promoted promoted">
						<span>Promoted</span>
					</div>
			</div>	
		</div>
		<div class="col-md-4">
				<div class="fproduct">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1 class="title">Magic Slippers</h1>
						</div>
						<div class="panel-body">
							<div class="product-img">
								<img src="http://assets-cdn.ekantipur.com/images/the-kathmandu-post-archive/2014/20140305handicrafts-gaining-ground-in-local-market-600x0.jpg" class="img-responsive" alt="">
							</div>
							<div class="overlay">
								<a href="">View More...</a>
							</div>
						</div>
						<div class="panel-footer">
								<div class="product-description">
							<p class="text-center">Loremipsum to the front of the passage of the highway</p>
						</div>
						<div class="product-price">
							<p class="text-center">$1000.00</p>
							<button class="btn btn-primary btn-own  form-control"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
							<div class="clearfix"></div>
						</div>

						</div>
					</div>
					<div class="tile-common tile-exclusive exclusive">
						<span>Exclusive</span>
					</div>
			</div>	
	</div>
</div>
</section>


<!-- <section id="blog">
	<div class="container">
		<div class="row">
			<div class="title">
				<h2 class="text-center text-uppercase">Knowledge is everything</h2>
			</div>
			<div class="col-md-4">
				<div class="blog-one blog-common">
					<div class="blog-design">
						<div class="blog-img">
							<img class="img-responsive" src="http://nepalesecollection.com/image/cache/catalog/blog/buddhism-2314739_1280-780x520.jpg" alt="">
						</div>
						<div class="blog-title">
							<h4 class="text-uppercase">Things to do in Nepal</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="blog-two blog-common">
					<div class="blog-design">
						<div class="blog-img">
							<img class="img-responsive" src="http://nepalesecollection.com/image/cache/catalog/blog/buddhism-2314739_1280-780x520.jpg" alt="">
						</div>
						<div class="blog-title">
							<h4 class="text-uppercase">Things to do in Nepal</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->


<section id="blog">
	<div class="container">
		<div class="row">
			<div class="blog-wrapper">
				<div class="col-md-4">
					<div class="blog-one blog-common">
						<div class="blog-detail blog-detail-one">
							<h4 class="text-uppercase">Things to do in NEPAL</h4>
							<p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="blog-two blog-common">
						<div class="blog-detail blog-detail-two">
							<h4 class="text-uppercase">Things to do in NEPAL</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
						</div>
					</div>
				</div>


			</div>

		</div>
		<div class="row">
			<div class="blog-wrapper">
				<div class="col-md-4">
					<div class="blog-one blog-common">
						<div class="blog-detail blog-detail-one">
							<h4 class="text-uppercase">Things to do in NEPAL</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="blog-one blog-common">
						<div class="blog-detail blog-detail-one">
							<h4 class="text-uppercase">Things to do in NEPAL</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="blog-one blog-common">
						<div class="blog-detail blog-detail-one">
							<h4 class="text-uppercase">Things to do in NEPAL</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
						</div>
					</div>
				</div>
				


			</div>

		</div>
	</div>
</section>
<section id="review">
	<div class="container">
		<div class="row">

			<div class="review-wrapper">
				<div class="review-title">
					<h1 class="text-center text-uppercase">Review</h1>
				</div>
				<div class="col-md-9">
					<div class="review-blog">
						<h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h4>
					</div>
				</div>
				<div class="col-md-3">
					<div class="review-img">
						<img class="img-responsive img-circle" src="https://images.huffingtonpost.com/2015-11-09-1447096860-2188511-HoffmanWebsq-thumb.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="about">
	<div class="container">
		<div class="row">
			<div class="about-wrapper">
				<div class="col-md-12">
					<div class="about-title">
						<h2 class="text-uppercase text-center">ABOUT US</h2>
						<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..</p>
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
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
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
<script src="js/main.js"></script>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>
