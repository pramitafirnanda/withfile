<?php

namespace App\Http\Controllers\Admin;

use App\Bidangilmu;
use App\Datadosen;
use App\User;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;
use App\Http\Controllers\Controller;

class DataDosenController extends Controller
{
    public function index(){
        $dtdosens = Datadosen::all();
        return view('admin.dosen.index', compact('dtdosens'));
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request['name'];
        $user->nidn = $request['nidn'];
        $user->password = bcrypt($request['password']);
        $datadosens = new Datadosen;
        $datadosens->name = $request['name'];
        $datadosens->nidn = $request['nidn'];
        $datadosens->programstudi = $request['programstudi'];
        $datadosens->jk = $request['jk'];
        $datadosens->pendidikan = $request['pendidikan'];
        $datadosens->jabatanfungsional = $request['jabatanfungsional'];
        $datadosens->status = $request['status'];
        $datadosens->save();
        $datadosens->user()->save($user);

        return redirect('master/datadosen');
    }
    public function show($id)
    {
        $dtdosen = Datadosen::findOrFail($id);
        return view('admin.dosen.edit',['dtdosen'=>$dtdosen]);
    }
    public function edit($id)
    {
        $dtdosen = Datadosen::find($id);
        return view('admin.dosen.edit',['dtdosen'=>$dtdosen]);
    }

    public function update(Request $request, $id)
    {
        $dtdosens = Datadosen::findOrFail($id);
        $dtdosens->update($request->except('password'));
        return redirect('master/datadosen');
    }
}
