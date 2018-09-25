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
    <label class="col-3 col-form-label">judul</label>
    <div class="col-9">
        {!!Form::textarea('judul',null,['id'=>'judul','class'=>'form-control','placeholder'=>'judul'])!!}
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
    <label class="col-3 col-form-label">jenis_hki</label>
    <div class="col-9">
        {!!Form::text('jenis_hki',null,['id'=>'jenis_hki','class'=>'form-control','placeholder'=>'jenis_hki'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">No.Pendaftaran</label>
    <div class="col-9">
        {!!Form::text('nope',null,['id'=>'nope','class'=>'form-control','placeholder'=>'nope'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">status Hki</label>
    <div class="col-9">
        {!!Form::text('status_hki',null,['id'=>'status_hki','class'=>'form-control','placeholder'=>'status_hki'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">No.HKI</label>
    <div class="col-9">
        {!!Form::text('no_hki',null,['id'=>'no_hki','class'=>'form-control','placeholder'=>'no_hki'])!!}
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