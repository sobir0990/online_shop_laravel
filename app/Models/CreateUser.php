<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CreateUser extends Model
{

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ];
    }

//    public function validation($request)
//    {
//        $validator = $request->validate([
//            'name' => 'required',
//            'email' => 'required|email',
//            'password' => 'required'
//        ]);
//        if ($validator->fails()) {
//            return redirect(route('login'))->withErrors([
//                'email' => 'Validatsadan o\'tilmadi'
//            ]);
//        }
//
//    }


    public function create($request)
    {
        $model = User::where('email', $request['email'])->exists();


        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();

        if ($model) {
            return redirect(route('login'))->withErrors([
                'email' => 'email yes'
            ]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        if ($user) {
            Auth::login($user);
            return redirect('/');
        }

        return redirect(route('/login'))->withErrors([
            'formError' => 'error'
        ])->with('flashMessage','registered');
    }


}