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
    <label class="col-3 col-form-label">judul</label>
    <div class="col-9">
        {!!Form::textarea('judul',null,['id'=>'judul','class'=>'form-control','placeholder'=>'judul'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">dana</label>
    <div class="col-9">
        {!!Form::text('dana',null,['id'=>'dana','class'=>'form-control','placeholder'=>'dana'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">program</label>
    <div class="col-9">
        {!!Form::text('program',null,['id'=>'program','class'=>'form-control','placeholder'=>'program'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Personil Mahasiswa</label>
    <div class="col-9">
        {!!Form::text('p_mhs',null,['id'=>'p_mhs','class'=>'form-control','placeholder'=>'Personil Mahasiswa'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Personil Alumni</label>
    <div class="col-9">
        {!!Form::text('p_alumni',null,['id'=>'p_alumni','class'=>'form-control','placeholder'=>'Personil Alumni'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Personil Staff</label>
    <div class="col-9">
        {!!Form::text('p_staff',null,['id'=>'p_staff','class'=>'form-control','placeholder'=>'Personil Staff'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">dokumen</label>
    <div class="col-9">
        <input type="file" id="dokumen" name="dokumen">
    </div>
</div>
<div class="form-group mb-0 justify-content-end row">
    <div class="col-9">
        <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
    </div>
</div>