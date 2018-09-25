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
        {!!Form::text('jenis',null,['id'=>'jenis','class'=>'form-control','placeholder'=>'Jenis'])!!}
    </div>
</div>

<div class="form-group row">
    <label class="col-3 col-form-label">Deskripsi</label>
    <div class="col-9">
        {!!Form::textarea('deskripsi',null,['id'=>'deskripsi','class'=>'form-control','placeholder'=>'Deskripsi'])!!}
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