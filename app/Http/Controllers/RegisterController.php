<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
   public function create()
   {
      return view('auth.register');
   }

   public function store()
   {
      //validate
      $attributes =  request()->validate([
         'first_name' => ['required'],
         'last_name' => ['required'],
         'email' => ['required', 'email'],  // email_confirmation   
         'password' => ['required', Password::min(6), 'confirmed'],

      ]);
      $user = User::create($attributes);
      //Login
      Auth::login($user);
      return redirect('/jobs');
   }
}
