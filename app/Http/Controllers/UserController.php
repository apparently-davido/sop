<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    /**
     * @return string
     */
    public function getSignUp()
    {
        return view('user.signup');
    }

    /**
     * @return string
     */
    public function postSignUp(Request $request)
    {
        $this->validate($request, array(
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ));
        $user = new User(
            array(
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('first_name')),
                'is_admin' => false
            )
        );

        $user->save();
        return redirect()->route('sop.index');
    }

    /**
     * @return string
     */
    public function getSignIn()
    {
        return view('user.signin');
    }

    /**
     * @return string
     */
    public function postSignIn(Request $request)
    {
//        $this->validate($request, array(
//           'email' =>'email|required',
//            'password' =>'required|'
//        ));
        $userdata = array(
            'email'     => 'd@gmail.com',
            'password'  => 'password'
        );
        //attemp to log in the user
        if (Auth::attempt($userdata)) {
            // Authentication passed...
            return redirect()->route('sop.index');
        }
        return redirect()->route('user.signup');
    }

    public function userProfile(){
        return view('user.profile');
    }
}
