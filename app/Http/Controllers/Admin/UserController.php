<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Admin\UserFormRequest;

class UserController extends Controller
{
     public function index()
    {
        $user = User::all();
        return view('admin.user.index', compact('user'));
    }
    public function create()
    {
        $user = User::all();
        return view('admin.user.create', compact('user'));
    }
    public function store(UserFormRequest $request)
    {
        $data = $request->validated();

        $user = new user;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->role_as = $data['role_as'];
       
        $user->save();

        return redirect('admin/user')->with('message', 'Add Success');
    }

    public function edit($id){
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(UserFormRequest $request, $id){
        $data = $request->validated();

        $user = User::find($id);

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->role_as = $data['role_as'];
       
        $user->update();

        return redirect('admin/user')->with('message', 'Update Success');

    }

    public function destroy($id){
        $User = User::find($id);
        if($User)
        {
            $User->delete();
            return redirect('admin/user')->with('message', 'Delete Data Success');
        }
        else{
            return redirect('admin/user')->with('message', 'No Data Found');
        }
    }
}
