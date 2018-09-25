<?php

namespace App\Http\Controllers\Admin;

use App\Reviewer;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewerController extends Controller
{
    public function index(){
        $datas = User::where('userable_type','App\Reviewer')->get();
        return view('admin.user.reviewer.index', compact('datas'));
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request['name'];
        $user->nidn = $request['nidn'];
        $user->password = bcrypt($request['password']);
        $reviewer = new Reviewer;
        $reviewer->name = $request['name'];
        $reviewer->nidn = $request['nidn'];
        $reviewer->save();
        $reviewer->user()->save($user);
        return redirect('master/user-reviewer');
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
        return redirect('master/user-reviewer');
    }
    public function destroy($id)
    {
        $datas = User::find($id);
        $datas->delete();
        return redirect('master/user-reviewer');
    }

}
