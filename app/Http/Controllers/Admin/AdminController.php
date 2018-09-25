<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        $datas = User::where('userable_type','App\Admin')->get();
        return view('admin.user.admin.index', compact('datas'));
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request['name'];
        $user->nidn = $request['nidn'];
        $user->password = bcrypt($request['password']);
        $admin = new Admin;
        $admin->name = $request['name'];
        $admin->nidn = $request['nidn'];
        $admin->save();
        $admin->user()->save($user);

        return redirect('master/user-admin');
    }

    public function update(Request $request, $id)
    {
        $datas = User::findOrFail($id);
        $datas->name = $request->input('name');
        $datas->nidn = $request->input('nidn');

        if($file = $request->has('password')) {
            $datas->password = bcrypt($request->input('password'));
        }
        $datas->save();

        return redirect('master/user-admin');
    }
    public function destroy($id)
    {
        $datas = User::find($id);
        $datas->delete();
        return redirect('master/user-admin');
    }

}
