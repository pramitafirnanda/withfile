<?php

namespace App\Http\Controllers;

use App\Datadosen;
use App\Hki;
use App\Periode;
use App\Tahunkegiatan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;

class HkiController extends Controller
{
    public function index(){
        $datas = Hki::all();
        $periodes = Periode::all();
        $tahuns = Tahunkegiatan::all();
        $dosens = Datadosen::all();
        return view('admin.hki.index', compact('datas','periodes','tahuns','dosens'));
    }

    public function store(Request $request)
    {
        $datas = new Hki;
        $datas->judul = $request['judul'];
        $datas->jenis = $request['jenis'];
        $datas->nomor = $request['nomor'];
        $datas->status_hki = $request['status_hki'];
        $datas->hki = $request['hki'];
        $datas->periode_id = $request['periode_id'];
        $datas->tahun_id = $request['tahun_id'];
        $datas->created_by = $request['created_by'];

        if(Input::file('dokumen'))
        {
            $destination_path = 'file_dokumen/penelitin/hki';
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
        return redirect('admin/hki');
    }

    public function update(Request $request, $id)
    {
        $datas = Hki::findOrFail($id);
        $datas->fill($request->except('dokumen','dosens'));
        $datas->save();
        if($file = $request->hasFile('dokumen')) {
            $file = $request->file('dokumen') ;
            $extension = Input::file('dokumen')->getClientOriginalExtension();
            $filename = date('dMy').$datas->judul.".".$extension;
            $destinationPath = 'file_dokumen/penelitian/hki' ;
            $file->move($destinationPath,$filename);
            $datas->dokumen = $filename ;
            $datas->save();
        }

        if (isset($request->dosens)) {
            $datas->dosens()->sync($request->dosens);
        }

        return redirect('admin/hki');
    }
    public function destroy($id)
    {
        $datas = Hki::find($id);
        $datas->delete();
        return redirect('admin/hki');
    }
}
