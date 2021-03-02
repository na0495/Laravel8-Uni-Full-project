<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Tanger Parapharmacie</title>
    <!-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha512-6MXa8B6uaO18Hid6blRMetEIoPqHf7Ux1tnyIQdpt9qI5OACx7C+O3IVTr98vwGnlcg0LOLa02i9Y1HpVhlfiw==" crossorigin="anonymous" />
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('css/main.css')}}" rel="stylesheet">
	<link href="{{asset('css/responsive.css')}}" rel="stylesheet">      
    <link rel="icon" href="{{asset('images/favicon.ico')}}">
    
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="{{asset('#')}}"><i class="fa fa-phone"></i> +212 06 0606060</a></li>
								<li><a href="{{asset('#')}}"><i class="fa fa-envelope"></i> Tanger@Parapharmacie.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="/www.facebook.com"><i class="fa fa-facebook"></i></a></li>
								<li><a href="{{asset('#')}}"><i class="fa fa-twitter"></i></a></li>
								<li><a href="{{asset('#')}}"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="{{asset('#')}}"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="{{asset('#')}}"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{asset('products')}}"><img src="{{asset('images/home/logo.png')}}" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="navbar-header">
				            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
				                <span class="sr-only">Toggle navigation</span>
				                <span class="icon-bar"></span>
				                <span class="icon-bar"></span>
				                <span class="icon-bar"></span>
				            </button>
				        </div>
						<div class="mainmenu pull-right collapse navbar-collapse" id="navbarCollapse">
							<ul class="nav navbar-nav">
								<li><a href="{{route('AllProducts')}}"><i class="fa fa-home"></i> Accueil</a></li>
								<li><a href="{{route('cartproducts')}}"><i class="fa fa-shopping-cart"></i>  Chariot</a></li>

								@if(Auth::check())
								<li><a href="{{route('home')}}"><i class="fa fa-user"></i>  {{ Auth::user()->name }} </a></li>
								@else
								<li><a href="/login"><i class="fa fa-lock"></i> S'identifier</a></li>
								<li><a href="/register"><i class="fa fa-sign-in"></i> S'inscrire</a></li>
								@endif
								

                 			  	<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    		  	<a class="dropdown-item" href="/products"> Home </a>
                      			<a class="dropdown-item" href="/login"> login </a>
                      			</div>
                      			<li><a href="#footer"><i class="fa fa-envelope"></i> Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
		
	</header><!--/header-->
	