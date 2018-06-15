<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use App\User;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        
        $users = User::latest()->paginate();
        return view('users.index', compact('users'));
    }



    public function update( Request $request, User $user){

      //actualizar usuario
       $user->update($request->all());
       

      // actualizar roles

       $user->roles()->sync($request->get('roles'));
       

       return redirect()->route('users.index', $user->id);


    }


    public function edit(User $user){

        $roles = Role::get();
        
        return view('users.edit',compact('user','roles'));
    }

    public function show(User $user){
        
        return view('users.show',compact('user'));
    }

    public function destroy(User $user){

        $user->delete();

        return redirect()->route('users.index');
    }


   

    

}
