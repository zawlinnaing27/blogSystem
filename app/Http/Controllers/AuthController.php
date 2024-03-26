<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create()
    {
            return view('auth.register');
    }

    public function store(Request $request) {
          $formData = $request->validate([
                'name' =>'required|string|max:255',
                'username'=>'required|string|max:255|unique:users',
                'email'=> 'required|string|email|max:255|unique:users',
                'password'=>['required','min:8'],
          ]);

          $user=User::create($formData);

          //login
          auth()->login($user);

          return redirect('/')->with('success','Welcom Dear,'.$user->name);
    }

    public function logout(){
        auth()->logout();
        return redirect('/')->with('success', 'Good Bye');
    }

    public function login(){
        return view ('auth.login');
    }

    public function post_login(Request $request)  {
           //valldation
           $user = $request->validate([
            'email' =>['required','email','max:255',Rule::exists('users','email')],
            'password' =>['required','min:8'],[
                'email.required' => 'We need your email Address.',
                'password.min' => 'Password should be more than 8 characters.'
            ]
           ]);



          if(auth()->attempt($user)){
            return redirect('/')->with('success','Welcome back');
          }else{
            return redirect()->back()->withErrors([
                'email'=> 'User Credential Wrong',
            ]);
          }

    }

}
