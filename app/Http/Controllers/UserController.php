<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{
   function index()
   {
      return view('login');
   }
  function login(Request $req)
  {
     $user = User::Where(['email'=>$req->email])->first();

     if(!$user || !Hash::check($req->password,$user->password))
     {
        return 'email or password not matched';
     }
     else{
             $req->Session()->put('user',$user);
              return redirect('/');
     }
  }

  
}
