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
    <label class="col-3 col-form-label">Judul Makalah</label>
    <div class="col-9">
        {!!Form::textarea('judul',null,['id'=>'judul','class'=>'form-control','placeholder'=>'judul'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Nama Forum</label>
    <div class="col-9">
        {!!Form::text('name',null,['id'=>'name','class'=>'form-control','placeholder'=>'name'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Institusi Penyelenggara</label>
    <div class="col-9">
        {!!Form::text('institusi_penyelenggara',null,['id'=>'institusi_penyelenggara','class'=>'form-control','placeholder'=>'institusi_penyelenggara'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Waktu Pelaksana</label>
    <div class="col-9">
        {!!Form::date('waktu_start',null,['id'=>'waktu_start','class'=>'form-control','placeholder'=>'waktu pelaksana'])!!}
        <span> s/d </span>
        {!!Form::date('waktu_end',null,['id'=>'waktu_end','class'=>'form-control','placeholder'=>'waktu selesai'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Tempat Pelaksana</label>
    <div class="col-9">
        {!!Form::text('tempat',null,['id'=>'tempat','class'=>'form-control','placeholder'=>'tempat'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Status</label>
    <div class="col-9">
        <select class="form-control" name="status_pemakalah">
            <option value='pemakalah-biasa'>Pemakalah Biasa</option>
            <option value='invited'>Invited / Keynote Speaker</option>
        </select>
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
