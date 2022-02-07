<?php


namespace App\modules\user;


use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class SignIn extends Model
{

    /**
     * @param $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function sign($request)
    {
        $field = $request->only(['email', 'password']);
        if (Auth::attempt($field)) {
            $user = User::where('email', $request->email)->first();
            Auth::loginUsingId($user);
            return redirect('/')->with('success', 'success');
        }

        return redirect(route('login'))->withErrors([
            'email' => 'Avtorizatsya ne udalos'
        ])->with('warning', 'registered');
    }


}