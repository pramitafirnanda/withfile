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
    <label class="col-3 col-form-label">Judul Penelitian</label>
    <div class="col-9">
        {!!Form::textarea('judul',null,['id'=>'judul','class'=>'form-control','placeholder'=>'judul'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Jenis Penelitian</label>
    <div class="col-9">
        {!!Form::text('jenis_penelitian',null,['id'=>'jenis_penelitian','class'=>'form-control','placeholder'=>'jenis_penelitian'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Kategori Bdang Penelitian</label>
    <div class="col-9">
        {!!Form::text('kategori_bidang_penelitian',null,['id'=>'kategori_bidang_penelitian','class'=>'form-control','placeholder'=>'kategori_bidang_penelitian'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Bidang Penelitian</label>
    <div class="col-9">
        {!!Form::text('bidang_penelitian',null,['id'=>'bidang_penelitian','class'=>'form-control','placeholder'=>'bidang_penelitian'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Kategori Tujuan Sosial</label>
    <div class="col-9">
        {!!Form::text('kategori_tujuan_sosial',null,['id'=>'kategori_tujuan_sosial','class'=>'form-control','placeholder'=>'kategori_tujuan_sosial'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Tujuan Sosial</label>
    <div class="col-9">
        {!!Form::text('tujuan_sosial',null,['id'=>'tujuan_sosial','class'=>'form-control','placeholder'=>'tujuan_sosial'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Sumber Dana</label>
    <div class="col-9">
        <select class="form-control" name="sumber_dana">
            <option value='dalam-negeri'>Dalam Negeri</option>
            <option value='luar-negeri'>Luar Negeri</option>
        </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Institusi Sumber Dana</label>
    <div class="col-9">
        <select class="form-control" name="ins_sumber_dana">
            <option value='pemerintah'>Pemerintah</option>
            <option value='swasta'>Swasta</option>
            <option value='lembaga-multilateral'>Lembaga Multilateral</option>
            <option value='lembaga-nNirlaba'>Lembaga Nirlaba</option>
            <option value='internal-perguruan-tinggi'>Internal Perguruan Tinggi</option>
            <option value='pribadi-peneliti'>Pribadi Peneliti</option>
            <option value='sumber-dana-lain'>Sumber Dana Lain</option>
        </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Jumlah dana</label>
    <div class="col-9">
        {!!Form::text('jumlah_dana',null,['id'=>'jumlah_dana','class'=>'form-control','placeholder'=>'jumlah_dana'])!!}
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