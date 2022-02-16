<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


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

    public function checkout()
    {
        $user = Auth::user();

        //get card
        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');
        $messageSuccessOrder = \session('success');

        $orders = Order::query()
            ->where(['user_id' => $user->getAuthIdentifier()])
            ->orderBy('id', 'desc')
            ->get();

        $orders->transform(function ($order) {
            $order->cart_data = unserialize($order->cart_data);
            return $order;
        });

        if (!empty($messageSuccessOrder)) {
            return view('pet-shop.checkout', compact(
                'cart',
                'sum',
                'user',
                'orders'

            ))->with('success', $messageSuccessOrder);
        }

        return view('pet-shop.checkout', compact(
            'cart',
            'sum',
            'user',
            'orders'
        ));

    }

    public function order(Request $request)
    {
        $user = Auth::user();

        //get card
        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');


        Validator::make($request->all(), [
            'phone' => 'required',
        ])->validate();


        $order = new Order();
        $order->user_id = $user->id;
        $order->cart_data = $order->setCartDataAttribute($cart);
        $order->total_sum = $sum;
        $order->phone = $request->phone;
        $order->address = $request->address . ' ' . $request->city . ' ' . $request->post_code;
        if ($order->save()) {
            \Cart::clear();
            Session::flash('success', 'Order created successfully');
            return back();
        }
        Session::flash('error', 'Something went wrong');

        return back();

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
