<!DOCTYPE html>
<html lang="en">
<head>

	<title>Landing Page</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">


@include('partials/css')

</head>

<body class="landing-page">

<!-- Header Standard Landing  -->

<div class="header--standard header--standard-landing" id="header--standard">
	<div class="container">
		<div class="header--standard-wrap">

			<a href="#" class="logo">
				<div class="img-wrap">
					<img src="{{ asset('admin/images/logo-colored-small.png')}}"  alt="Logo2">
				</div>
				<div class="title-block">
					<h6 class="logo-title">olympus</h6>
					<div class="sub-title">SOCIAL NETWORK</div>
				</div>
			</a>

			<a href="#" class="open-responsive-menu js-open-responsive-menu">
				<svg class="olymp-menu-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
			</a>

			<div class="nav nav-pills nav1 header-menu">
				<div class="mCustomScrollbar">
					<ul>
						<li class="nav-item">
							<a href="#" class="nav-link">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Profile</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Profile Page</a>
								<a class="dropdown-item" href="#">Newsfeed</a>
								<a class="dropdown-item" href="#">Post Versions</a>
							</div>
						</li>
						<li class="nav-item dropdown dropdown-has-megamenu">
							<a href="#" class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Forums</a>
							<div class="dropdown-menu megamenu">
								<div class="row">
									<div class="col col-sm-3">
										<h6 class="column-tittle">Main Links</h6>
										<a class="dropdown-item" href="#">Profile Page<span class="tag-label bg-blue-light">new</span></a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
									</div>
									<div class="col col-sm-3">
										<h6 class="column-tittle">BuddyPress</h6>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page<span class="tag-label bg-primary">HOT!</span></a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
									</div>
									<div class="col col-sm-3">
										<h6 class="column-tittle">Corporate</h6>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
									</div>
									<div class="col col-sm-3">
										<h6 class="column-tittle">Forums</h6>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Terms & Conditions</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Events</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Privacy Policy</a>
						</li>
						<li class="close-responsive-menu js-close-responsive-menu">
							<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
						</li>
						<li class="nav-item js-expanded-menu">
							<a href="#" class="nav-link">
								<svg class="olymp-menu-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
								<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
							</a>
						</li>
						<li class="shoping-cart more">
							<a href="#" class="nav-link">
								<svg class="olymp-shopping-bag-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-shopping-bag-icon"></use></svg>
								<span class="count-product">2</span>
							</a>
							<div class="more-dropdown shop-popup-cart">
								<ul>
									<li class="cart-product-item">
										<div class="product-thumb">
											<img src="img/product1.png" alt="product">
										</div>
										<div class="product-content">
											<h6 class="title">White Enamel Mug</h6>
											<ul class="rait-stars">
												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>
												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>

												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>
												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>
												<li>
													<i class="far fa-star star-icon" aria-hidden="true"></i>
												</li>
											</ul>
											<div class="counter">x2</div>
										</div>
										<div class="product-price">$20</div>
										<div class="more">
											<svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
										</div>
									</li>
									<li class="cart-product-item">
										<div class="product-thumb">
											<img src="img/product2.png" alt="product">
										</div>
										<div class="product-content">
											<h6 class="title">Olympus Orange Shirt</h6>
											<ul class="rait-stars">
												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>
												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>

												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>
												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>
												<li>
													<i class="far fa-star star-icon" aria-hidden="true"></i>
												</li>
											</ul>
											<div class="counter">x1</div>
										</div>
										<div class="product-price">$40</div>
										<div class="more">
											<svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
										</div>
									</li>
								</ul>

								<div class="cart-subtotal">Cart Subtotal:<span>$80</span></div>

								<div class="cart-btn-wrap">
									<a href="#" class="btn btn-primary btn-sm">Go to Your Cart</a>
									<a href="#" class="btn btn-purple btn-sm">Go to Checkout</a>
								</div>
							</div>
						</li>

						<li class="menu-search-item">
							<a href="#" class="nav-link" data-toggle="modal" data-target="#main-popup-search">
								<svg class="olymp-magnifying-glass-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Header Standard Landing  -->
<div class="header-spacer--standard"></div>

<div class="container">
	<div class="row display-flex">
		<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
			<div class="landing-content">
				<h1>Welcome to the Biggest Social Network in the World</h1>
				<p>We are the best and biggest social network with 5 billion active users all around the world. Share you
					thoughts, write blog posts, show your favourite music via Stopify, earn badges and much more!
				</p>
				<a href="#" class="btn btn-md btn-border c-white">Register Now!</a>
			</div>
		</div>

		<div class="col col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">
			
			<!-- Login-Registration Form  -->
			
			<div class="registration-login-form">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#home" role="tab">
							<svg class="olymp-login-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-login-icon"></use></svg>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#profile" role="tab">
							<svg class="olymp-register-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-register-icon"></use></svg>
						</a>
					</li>
				</ul>
			
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
						<div class="title h6">Register to Olympus</div>
						<form class="content">
							<div class="row">
								<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="form-group label-floating">
										<label class="control-label">First Name</label>
										<input class="form-control" placeholder="" type="text">
									</div>
								</div>
								<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="form-group label-floating">
										<label class="control-label">Last Name</label>
										<input class="form-control" placeholder="" type="text">
									</div>
								</div>
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating">
										<label class="control-label">Your Email</label>
										<input class="form-control" placeholder="" type="email">
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Your Password</label>
										<input class="form-control" placeholder="" type="password">
									</div>
			
									<div class="form-group date-time-picker label-floating">
										<label class="control-label">Your Birthday</label>
										<input name="datetimepicker" value="10/24/1984" />
										<span class="input-group-addon">
														<svg class="olymp-calendar-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
													</span>
									</div>
			
									<div class="form-group label-floating is-select">
										<label class="control-label">Your Gender</label>
										<select class="selectpicker form-control">
											<option value="MA">Male</option>
											<option value="FE">Female</option>
										</select>
									</div>
			
									<div class="remember">
										<div class="checkbox">
											<label>
												<input name="optionsCheckboxes" type="checkbox">
												I accept the <a href="#">Terms and Conditions</a> of the website
											</label>
										</div>
									</div>
			
									<a href="#" class="btn btn-purple btn-lg full-width">Complete Registration!</a>
								</div>
							</div>
						</form>
					</div>
			
					<div class="tab-pane" id="profile" role="tabpanel" data-mh="log-tab">
						<div class="title h6">Login to your Account</div>
						<form class="content">
							<div class="row">
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating">
										<label class="control-label">Your Email</label>
										<input class="form-control" placeholder="" type="email">
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Your Password</label>
										<input class="form-control" placeholder="" type="password">
									</div>
			
									<div class="remember">
			
										<div class="checkbox">
											<label>
												<input name="optionsCheckboxes" type="checkbox">
												Remember Me
											</label>
										</div>
										<a href="#" class="forgot" data-toggle="modal" data-target="#restore-password">Forgot my Password</a>
									</div>
			
									<a href="#" class="btn btn-lg btn-primary full-width">Login</a>
			
									<div class="or"></div>
			
									<a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fab fa-facebook-f" aria-hidden="true"></i>Login with Facebook</a>
			
									<a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fab fa-twitter" aria-hidden="true"></i>Login with Twitter</a>
			
			
									<p>Don’t you have an account? <a href="#">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			<!-- ... end Login-Registration Form  -->		</div>
	</div>
</div>

<!-- Window-popup Restore Password -->

<div class="modal fade" id="restore-password" tabindex="-1" role="dialog" aria-labelledby="restore-password" aria-hidden="true">
	<div class="modal-dialog window-popup restore-password-popup" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">Restore your Password</h6>
			</div>

			<div class="modal-body">
				<form  method="get">
					<p>Enter your email and click the send code button. You’ll receive a code in your email. Please use that
						code below to change the old password for a new one.
					</p>
					<div class="form-group label-floating">
						<label class="control-label">Your Email</label>
						<input class="form-control" placeholder="" type="email" value="james-spiegel@yourmail.com">
					</div>
					<button class="btn btn-purple btn-lg full-width">Send me the Code</button>
					<div class="form-group label-floating">
						<label class="control-label">Enter the Code</label>
						<input class="form-control" placeholder="" type="text" value="">
					</div>
					<div class="form-group label-floating">
						<label class="control-label">Your New Password</label>
						<input class="form-control" placeholder="" type="password" value="olympus">
					</div>
					<button class="btn btn-primary btn-lg full-width">Change your Password!</button>
				</form>

			</div>
		</div>
	</div>
</div>

<!-- ... end Window-popup Restore Password -->


<!-- Window Popup Main Search -->

<div class="modal fade" id="main-popup-search" tabindex="-1" role="dialog" aria-labelledby="main-popup-search" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered window-popup main-popup-search" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>
			<div class="modal-body">
				<form class="form-inline search-form" method="post">
					<div class="form-group label-floating">
						<label class="control-label">What are you looking for?</label>
						<input class="form-control bg-white" placeholder="" type="text" value="">
					</div>

					<button class="btn btn-purple btn-lg">Search</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- ... end Window Popup Main Search -->

<!-- JS Scripts -->
@include('partials/script')
</body>
</html>