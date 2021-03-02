<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product; 
use App\Cart; 
use Illuminate\Support\Facades\Session;



class ProductsController extends Controller
{
    //

	public function index(){
		// $products = [0=> ["name"=>"bavette","category"=>"covid","price"=>"10"], 
		// 1=> ["name"=>"pommade","category"=>"soin","price"=>"100"], 
		// 2=> ["name"=>"creme","category"=>"beaute","price"=>"200"]];
		
        $products = Product::all();

		return view("allproducts",compact("products"));
	}

	public function addProductToCart(Request $request,$id){
			
			// $request->session()->forget("cart");

			// $request->session()->flush();


			 $prevCart = $request->session()->get('cart');
    		 $cart = new Cart($prevCart); 

    			$product = Product::find($id);
    			$cart->addItem($id,$product);
 				$request->session()->put('cart', $cart);
    			//dump($cart);
    			return redirect()->route("AllProducts");
	}

		public function showCart(){

			$cart = session::get('cart');
			//cart is not empty
			if($cart){
				return view('cartproducts',['cartItems'=> $cart]);
			//cart is empty
			}else{
				return redirect()->route("AllProducts");
			}
		}

		public function deleteItemFromCart(Request $request,$id){
			$cart = $request->session()->get("cart");
//check if ID already exists 

			if (array_key_exists($id, $cart->items)) {
				unset($cart->items[$id]); 
			}
			//recalculate the total price
			$prevCart = $request->session()->get("cart");
			$updatedCart = new Cart($prevCart);
			$updatedCart->updatePriceAndQuantity();

			$request->session()->put("cart",$updatedCart);
			return redirect()->route('cartproducts');

		}
}
