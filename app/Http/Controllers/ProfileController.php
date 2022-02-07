<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function index()
    {

        //get card
        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');
        return view('pet-shop.profile', compact(
            'cart',
            'sum'
        ));
    }

}