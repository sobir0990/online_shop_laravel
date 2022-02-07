<?php


namespace App\Http\Controllers;


class PetController extends Controller
{
    public function about()
    {
        return view('pet-shop/about-us');
    }

}