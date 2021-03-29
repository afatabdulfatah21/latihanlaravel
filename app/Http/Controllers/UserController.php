<?php

namespace App\Http\Controllers;
use App\User;
use App\Profile;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getIndex()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function getCreate()
    {
        return view ('admin.user.create');
    }

    public function postStore(Request $request)
    {
        $this->validate($request,
        [
            'name' => 'required | min:5',
            'email' => 'required | min:8',
            
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('password'),
        ]);

        $profile = Profile::create([
            'user_id' => $user->id,
        ]);
        
        toastr()->success('User has been created successfully!');
        return redirect()->route('indexUser');
    }


}
