<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function registerd()
    {
        $users = User::all();
        return view('admin.register')->with('users',$users);
    }
    public function registerdedit($id)
    {
        $users = User::findOrfail($id);
        return view('admin.register-edit')->with('users',$users);
    }
    public function registerdupdate(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->phone = $request->input('phone');
        $users->usertype = $request->input('usertype');
        $users->update();
        
        return redirect('/role-register')->with('status',"les donner de l'utilisateur on etait changer!");
    }
    public function registerdelete($id)
    {
        $users = User::findOrfail($id);
        $users->delete();

        return redirect('/role-register')->with('status',"Vous avez supprimer l'utilisateur avec succes!");
      
    }
}
