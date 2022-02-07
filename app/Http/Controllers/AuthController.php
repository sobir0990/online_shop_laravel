<?php


namespace App\Http\Controllers;

use App\Models\CreateUser;
use App\modules\user\SignIn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function login()
    {
        if (Auth::check()) {
            return redirect('/');
        }

        return view('auth.login');
    }


    /**
     * @param Request $request
     * @return CreateUser|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function signUp(Request $request)
    {

        if (Auth::check()) {
            return redirect('/');
        }

        $model = new CreateUser();
        return $model->create($request);
    }

    /**
     * @param Request $request
     * @return SignIn|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function signIn(Request $request)
    {
        if (Auth::check()) {
            return redirect('/');
        }

        $model = new SignIn();
        return $model->sign($request);

    }

    //    public function save(Request $request)
//    {
//
//        if (Auth::check()) {
//            return redirect('/');
//        }
//
//        $validate = $request->validate([
//            'name' => 'required',
//            'email' => 'required|email',
//            'password' => 'required'
//        ]);
//
//        $model = User::where('email', $request['email'])->exists();
//
//        if ($model) {
//            return redirect(route('login'))->withErrors([
//                'email' => 'email yes'
//            ]);
//        }
//
//        $user = User::create($validate);
//        if ($user) {
//            Auth::login($user);
//            return redirect('/');
//        }
//
//        return redirect(route('/login'))->withErrors([
//            'formError' => 'error'
//        ]);
//    }


}