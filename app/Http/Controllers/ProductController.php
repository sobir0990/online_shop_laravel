<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ProductController extends Controller
{
    public function shopList()
    {
        $products = Product::paginate(3);

        //get card
        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');

//        $products = Product::query()->select()->where(['id' => 1])->get();
        return view('pet-shop/shop-page', compact('products', 'cart',
            'sum'));
    }

    public function shopIndex()
    {
        $randProducts = Product::query()->inRandomOrder()->get();

        $products = Product::query()->select()->inRandomOrder()->limit(1)->get();

        //get card
        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');

        return view('pet-shop/index',
            compact(
                'randProducts',
                'products',
                'cart',
                'sum'
            ));
    }


    public function addCart(Request $request)
    {

        $product = Product::query()->where(['id' => $request->id])->first();

        $sessionId = Session::getId();

        \Cart::session($sessionId)->add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->qty ?? 1,
            'attributes' => [
                'image' => $product->image
            ],
        ]);

        $cart = \Cart::getContent();

        return redirect()->back();
    }

}
