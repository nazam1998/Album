<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{

    public function index(){
        $users=User::all();
        return view('admin.user',compact('users'));
    }
    
    public function create(){
        return view('admin.addUser');
    }

    public function store(Request $request){
        
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();
        return redirect()->route('user');
    }

    public function edit($id){
        $user=User::find($id);
        return view('admin.editUser',compact('user'));
    }

    public function update(Request $request,$id){
        
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();
        return redirect()->route('user');
    }
    public function destroy($id){
        $user=User::find($id);
        $user->delete();
        return redirect()->back();
    }
}
