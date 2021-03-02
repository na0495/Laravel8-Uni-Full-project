<?php

namespace App\Http\Controllers\Admin;

use App\Models\products;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function registerd()
    {
        $products = products::all();
        return view('admin.product')->with('product',$products);
    }
    public function registerdedit($id)
    {
        $products = products::findOrfail($id);
        return view('admin.product-edit')->with('product',$products);
    }
    public function registerdupdate(Request $request, $id)
    {
        $products = products::find($id);
        $products->name = $request->input('name');
        $products->description = $request->input('description');
        $products->image = $request->input('image');
        $products->price = $request->input('price');
        $products->quntity = $request->input('quntity');
        $products->type = $request->input('type');
        $products->update();
        
        return redirect('/product')->with('status','lLes nouveau donner de produit on etait sauvgarder!');
    }
    public function registerdelete($id)
    {
        $products = products::findOrfail($id);
        $products->delete();

        return redirect('/product')->with('status','Vous avez supprimer le produit avec succes!');
      
    }
    public function registerdadd(Request $request)
    {
        $products = new products;

        $products->name = $request->input('name');
        $products->description = $request->input('description');
        $products->image = $request->input('image');
        $products->price = $request->input('price');
        $products->quntity = $request->input('quntity');
        $products->type = $request->input('type');


        $products->save();
        return redirect('/product')->with('status','Le produit a etait ajouter avec succes!');


    }
}
