@extends('layouts.index')

@section('center')


	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="slider-carousel" data-slide-to="1"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Tanger</span>Parapharmacie</h1>
									<h2>La santé, c'est un esprit sain dans un corps sain.</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<a href="#footer" type="button" class="btn btn-default get">À propos de nous</a>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('images/home/slider1.jpg')}}" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Tanger</span>Parapharmacie</h1>
									<h2>La santé, c'est un esprit sain dans un corps sain.</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<a href="#footer" type="button" class="btn btn-default get">À propos de nous</a>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('images/home/slider2.jpg')}}" class="girl img-responsive" alt="" />
								</div>
							</div>
							
													
						</div>
						
						<a href="{{asset('#slider-carousel')}}" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="{{asset('#slider-carousel')}}" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section id="products">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>CATÉGORIE</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#Anti-covid">
											
											Anti-covid
										</a>
									</h4>
								</div>
								
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#Déstockage">
											
											Déstockage
										</a>
									</h4>
								</div>
								
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#Offres Spéciales">
											Offres Spéciales
										</a>
									</h4>
								</div>
								
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Beauté et Visage</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Soin solaires</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Maman Bébé</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Femmes</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Bio - Phytoterapie</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Santé et Bien Etre</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Hommes</a></h4>
								</div>
							</div>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>MARQUES</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>A-derma</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>accu-chek</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Addax</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>AKILEINE</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Allergika</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Amona</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Aromessence</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						
						
						
					
					</div>
				</div>
				
				<div class="col-sm-6 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">ÉLÉMENTS CARACTÉRISTIQUES</h2>
						@foreach ($products as $product)

							<div class="col-sm-6">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">

											<img src="{{Storage::disk('local')->url('product_images/'.$product->image)}}" alt="" />
											<h2>{{$product->price}}dh</h2>
											<p>{{$product->name}}</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>{{$product->price}}dh</h2>
												<p>{{$product->name}}</p>
												<a href="{{route('AddToCartProduct',['id'=>$product->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
											</div>
										</div>
								</div>
								
							</div>
						</div>


						@endforeach
					
						
					</div><!--features_items-->
					
					
					
					
					
				</div>
					<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Livraison</h2>
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/Livraison.png" alt="">
						</div><!--/shipping-->
						<br>
						<br>
					<div class="frame" >
					
					
						
							
						<iframe
                            width="270"
                            height="350"
                            
                            
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7698.844410802214!2d-5.825481495545274!3d35.77622790180033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b875cf04c132d%3A0x76bfc571bfb4e17a!2sTanger!5e0!3m2!1sfr!2sma!4v1605878800991!5m2!1sfr!2sma">
                    </iframe>
            
						</div>

					</div><!--/shipping-->

					
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection