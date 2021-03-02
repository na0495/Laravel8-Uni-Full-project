<?php 

namespace App;


class Cart{
	public $items; // ['id'=>['quantity' => , 'price' => , 'data' => ]]
	public $totalQuantity;
	public $totalPrice;



	public function __construct($prevCart)
	{
		
		if ($prevCart != null){
				$this->items = $prevCart->items;
				$this->totalQuantity = $prevCart->totalQuantity;
				$this->totalPrice = $prevCart->totalPrice;
		

		}else{
				$this->items = [];
				$this->totalQuantity = 0;
				$this->totalPrice = 0;


		}

	}

	public function addItem($id,$product)
	{
		//the item already exists
		if(array_key_exists($id,$this->items)){

			$productToAdd = $this->items[$id];
			$productToAdd['quantity']++;
			$productToAdd['totalSinglePrice'] = $productToAdd['quantity'] * $product['price'];
		    $productToAdd['SinglePrice'] = $product['price'];
		    


		// first time to add this product to cart
		}else{

			$productToAdd = ['quantity'=> 1, 'totalSinglePrice'=> $product['price'],'SinglePrice'=> $product['price'], 'data'=> $product];
		}
	
		$this->items[$id] = $productToAdd;
		$this->totalQuantity++;
		$this->totalPrice = $this->totalPrice + $product['price'];

	}


	public function updatePriceAndQuantity()
	{
		$totalPrice = 0;
		$totalQuantity = 0;

		foreach ($this->items as $item) {
		$totalQuantity = $totalQuantity + $item['quantity'];
		$totalPrice = $totalPrice + $item['totalSinglePrice'];
		}

		$this->totalPrice = $totalPrice;
		$this->totalQuantity = $totalQuantity;
	}
		
}
		







