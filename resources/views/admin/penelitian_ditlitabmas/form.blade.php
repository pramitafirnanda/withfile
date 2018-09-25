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
    <label class="col-3 col-form-label">hibah</label>
    <div class="col-9">
        {!!Form::text('hibah',null,['id'=>'hibah','class'=>'form-control','placeholder'=>'hibah'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">skema</label>
    <div class="col-9">
        {!!Form::text('skema',null,['id'=>'skema','class'=>'form-control','placeholder'=>'skema'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">judul</label>
    <div class="col-9">
        {!!Form::text('judul',null,['id'=>'judul','class'=>'form-control','placeholder'=>'judul'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">bidang_penelitian</label>
    <div class="col-9">
        {!!Form::text('bidang_penelitian',null,['id'=>'bidang_penelitian','class'=>'form-control','placeholder'=>'bidang_penelitian'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">dana</label>
    <div class="col-9">
        {!!Form::text('dana',null,['id'=>'dana','class'=>'form-control','placeholder'=>'dana'])!!}
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