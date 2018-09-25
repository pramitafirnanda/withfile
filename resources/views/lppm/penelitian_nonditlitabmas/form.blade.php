<div class="form-group row">
    <label class="col-3 col-form-label">Oleh: </label>
    <label class="col-9 col-form-label"><strong>{{$data->created_by}}</strong></label>

    <label class="col-3 col-form-label">Periode: </label>
    <label class="col-9 col-form-label"><strong>{{$data->periodes->periode}}</strong></label>

    <label class="col-3 col-form-label">Tahun Kegiatan:</label>
    <label class="col-9 col-form-label"><strong>{{$data->years->tahun}}</strong></label>

    <label class="col-3 col-form-label">Personil: </label>
    <div class="col-9 col-form-label">
        @foreach ($data->dosens as $dosen)
           <i class="fa fa-user-circle-o"></i> <strong>{{$dosen->name}}</strong> - NIDN: {{$dosen->nidn}} <br>
        @endforeach
    </div>

    <label class="col-3 col-form-label">Judul Penelitian:</label>
    <label class="col-9 col-form-label"><strong>{{$data->judul}}</strong></label>

    <label class="col-3 col-form-label">Jenis Penelitian:</label>
    <label class="col-9 col-form-label"><strong>{{$data->jenis_penelitian}}</strong></label>

    <label class="col-3 col-form-label">Kategori Penelitian:</label>
    <label class="col-9 col-form-label"><strong>{{$data->kategori_bidang_penelitian}}</strong></label>

    <label class="col-3 col-form-label">Bidang_penelitian:</label>
    <label class="col-9 col-form-label"><strong>{{$data->bidang_penelitian}}</strong></label>

    <label class="col-3 col-form-label">Kategori Tujuan Sosial:</label>
    <label class="col-9 col-form-label"><strong>{{$data->kategori_tujuan_sosial}}</strong></label>

    <label class="col-3 col-form-label">Sumber Dana:</label>
    <label class="col-9 col-form-label"><strong>{{$data->sumber_dana}}</strong></label>

    <label class="col-3 col-form-label">Institut Sumberdana:</label>
    <label class="col-9 col-form-label"><strong>{{$data->ins_sumber_dana}}</strong></label>

    <label class="col-3 col-form-label">Jumlah Dana:</label>
    <label class="col-9 col-form-label"><strong>{{$data->jumlah_dana}}</strong></label>

    <label class="col-3 col-form-label">dokumen</label>
    <div class="col-9">
        @if(empty($data->dokumen))
            <span class="badge badge-info badge-pill">tidak ada file</span>
        @else
            <a href="ditlitabmas/{{$data->dokumen}}" title="download"><i class="fa fa-download fa-lg"></i> </a>
            <a href="{{ asset('file_dokumen/penelitian/ditlitabmas/'.$data->dokumen) }}" title="lihat dokumen" target="_blank"><i class="fa fa-eye fa-lg"></i></a>
        @endif
    </div>
</div>

<div class="form-group mb-0 justify-content-end row">
    <label class="col-3 col-form-label">Status:</label>
    <label class="col-9 col-form-label">
        <strong>
            @if($data->status == "1")
                <span class="badge badge-danger">reject</span><br>
                <span>{{$data->komentar}}</span>
            @elseif($data->status == "0")
                <span class="badge badge-success">accept</span>
            @else
                <span class="badge badge-warning">pending</span>
            @endif
        </strong>
    </label>
</div>

<div class="form-group mb-0 justify-content-end row">
    <div class="col-9">
        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
    </div>
</div>