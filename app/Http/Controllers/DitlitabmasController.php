<?php

namespace App\Http\Controllers;

use App\Datadosen;
use App\Ditlitabmas;
use App\Periode;
use App\Tahunkegiatan;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

class DitlitabmasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $datas = Ditlitabmas::all();
        $dosens = Datadosen::all();
        $periodes = Periode::all();
        $tahuns = Tahunkegiatan::all();
        return view('admin.penelitian_ditlitabmas.index', compact('datas','periodes','tahuns','dosens'));
    }

    public function store(Request $request)
    {
        $datas = new Ditlitabmas;
        $datas->judul = $request->judul;
        $datas->bidang_penelitian = $request->bidang_penelitian;
        $datas->dana = $request->dana;
        $datas->hibah = $request->hibah;
        $datas->skema = $request->skema;
        $datas->periode_id = $request->periode_id;
        $datas->tahun_id = $request->tahun_id;
        $datas->created_by = $request->created_by;

        if(Input::file('dokumen'))
        {
            $destination_path = 'file_dokumen/penelitian/ditlitabmas';
            $file = $request->file('dokumen');

            $this->validate($request, [
                'file' => $file,
                'extension' => $file->getClientOriginalExtension(),
            ],
                [
                    'file' => 'required|max:100000',
                    'extension' => 'required|in:jpg,jpeg,doc,docx,pdf,rtf,xlsx,xls,txt,csv'
                ]
            );
            $extension = Input::file('dokumen')->getClientOriginalExtension();
            $filename = date('dMy').$datas->judul.".".$extension;
            $request->file('dokumen')->move($destination_path, $filename);

            $datas->dokumen = $filename;
            $datas->save();
        }
        $datas->save();
        $datas->dosens()->sync($request->dosens, false);
        return redirect()->back();
    }

    public function show($id)
    {
        $datas = Ditlitabmas::find($id);
        return view('admin/ditlitabmas', compact('datas'));
    }

    public function update(Request $request, $id)
    {
        $datas = Ditlitabmas::findOrFail($id);
        $datas->fill($request->except('dokumen','dosens'));
        $datas->save();
        if($file = $request->hasFile('dokumen')) {
            $file = $request->file('dokumen') ;
            $extension = Input::file('dokumen')->getClientOriginalExtension();
            $filename = date('dMy').$datas->judul.".".$extension;
            $destinationPath = 'file_dokumen/penelitian/ditlitabmas' ;
            $file->move($destinationPath,$filename);
            $datas->dokumen = $filename ;
            $datas->save();
        }


        if (isset($request->dosens)) {
            $datas->dosens()->sync($request->dosens);
        }
        return redirect()->back();
    }

    public function destroy($id)
    {
        $datas = Ditlitabmas::find($id);
        $datas->delete();
        return redirect('admin/ditlitabmas');
    }
}
