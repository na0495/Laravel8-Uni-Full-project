@extends('layouts.index')

@section('center')


	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Profile</a></li>
				  <li class="active">Panier</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Article</td>
							<td class="description"></td>
							<td class="price">Prix</td>
							<td class="quantity">Quantité</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>


						@foreach($cartItems->items as $item)

						<tr>
							<td class="cart_product">
								<a href=""><img src="{{Storage::disk('local')->url ('product_images/').$item['data']['image']}}" width="75" height="75" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$item['data']['name']}}</a></h4>
								<p>{{$item['data']['description']}} - {{$item['data']['type']}}</p>
								<p>id :{{$item['data']['id']}}</p>
							</td>
							<td class="cart_price">
								<p>{{$item['SinglePrice']}} dh</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="{{$item['quantity']}}" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{$item['totalSinglePrice']}} dh</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{ route('deleteItemFromCart',['id'=> $item['data']['id']]) }}"><i class="fa fa-times"></i></a>
							</td>
						</tr>

						
 						
						

						@endforeach
						

						
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>Que voulez-vous faire ensuite?</h3>
				<p>Choisissez si vous avez un code de réduction.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<p>Si vous avez un code de réduction, veuillez l'entrer dans l'espace Codes de promotion.</p>
								<form>
								  <div class="row">
								    <div class="col">
								      <input type="text" class="form-control" placeholder="Codes de promotion">
								    </div>

									</div>
								</form>
							</li>
						
						</ul>
						<ul class="user_info">
							
							<li class="single_field">
								<label>Secteur:</label>
								<select>
									<option>Select</option>
									<option>Bel Air - Val fleuri</option>
									<option>Ben Dibane</option>
									<option>Beni Makada Lakdima</option>
									<option>Californie</option>
									<option>Castilla</option>
									<option>Centre Ville</option>
									<option>Charf</option>
								</select>
							
							</li>
							
						</ul>
						<!-- <a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a> -->
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Quantity<span>{{$cartItems->totalQuantity}}</span></li>
							<li>Total <span>{{$cartItems->totalPrice}} dh</span></li>
						</ul>
							<!-- <a class="btn btn-default update" href="/products">Update</a> -->
							<!-- <a class="btn btn-default check_out">Confirmer la commande</a> -->
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							 Confirmer
							</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
       <p>Merci  {{ Auth::user()->name }} de votre confiance, nous vous contacterons par email le plutôt possible!</p>	
       	<p>A bientôt!</p>
      </div>
      <div class="modal-footer">
        <button href="{{route('AllProducts')}}" type="button" class="btn btn-secondary" data-dismiss="modal" >OK </button>
      </div>
    </div>
  </div>
</div>
	</section><!--/#do_action--> 
@endsection










