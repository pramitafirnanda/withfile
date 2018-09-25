<div class="form-group row">
    <label class="col-3 col-form-label">Periode</label>
    <div class="col-9">
        <select class="form-control" name="periode_id">
            @foreach($periodes as $periode)
                <option value='{{$periode->id}}'>{{$periode->periode}}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Tahun Kegiatan</label>
    <div class="col-9">
        <select class="form-control" name="tahun_id">
            @foreach($tahuns as $tahun)
                <option value='{{$tahun->id}}'>{{$tahun->tahun}}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Nama Dosen</label>
    <div class="col-9">
        <select class="form-control" name="dosens[]" multiple="multiple">
            @foreach($dosens as $dosen)
                <option value='{{ $dosen->id }}'>{{ $dosen->name }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Judul HKI</label>
    <div class="col-9">
        {!!Form::textarea('judul',null,['id'=>'judul','class'=>'form-control','placeholder'=>'judul'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Jenis</label>
    <div class="col-9">
        <select class="form-control" name="jenis">
            <option value='paten'>Paten</option>
            <option value='paten-sederhana'>Paten Sederhana</option>
            <option value='hak-cipta'>Hak Cipta</option>
            <option value='merek-dagang'>Merek Dagang</option>
            <option value='rahasia-dagang'>Rahasia Dagang</option>
            <option value='desain-produk-industri'>Desain Produk Industri</option>
            <option value='indikasi-geografis'>Indikasi Geografis</option>
            <option value='perlindungan-varietas-tanaman'>Perlindungan Varietas Tanaman</option>
            <option value='perlindungan-topografi-sirkui-terpadu'>Perlindungan Topografi Sirkuit Terpadu</option>
        </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">No. Pendaftaran</label>
    <div class="col-9">
        {!!Form::text('nomor',null,['id'=>'nomor','class'=>'form-control','placeholder'=>'Nomor Pendaftaran'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Status Hki : </label>
    <div class="col-9">
        {!!Form::text('status_hki',null,['id'=>'status_hki','class'=>'form-control','placeholder'=>'status'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">No. HKI</label>
    <div class="col-9">
        {!!Form::text('hki',null,['id'=>'hki','class'=>'form-control','placeholder'=>'No. hki'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">dokumen</label>
    <div class="col-9">
        <input type="file" id="dokumen" name="dokumen">
    </div>
</div>
<input name="created_by" type="hidden" value="{{Auth::user()->name}}">
<div class="form-group mb-0 justify-content-end row">
    <div class="col-9">
        <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
    </div>
</div>