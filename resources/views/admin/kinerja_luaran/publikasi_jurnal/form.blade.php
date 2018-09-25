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
    <label class="col-3 col-form-label">Penulis</label>
    <div class="col-9">
        {!!Form::text('penulis',null,['id'=>'penulis','class'=>'form-control','placeholder'=>'penulis'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">jurnal</label>
    <div class="col-9">
        {!!Form::text('nama_jurnal',null,['id'=>'nama_jurnal','class'=>'form-control','placeholder'=>'jurnal'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">dokumen</label>
    <div class="col-9">
        <input type="file" id="dokumen" name="dokumen">
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Waktu Pelaksana</label>
    <div class="col-9">
        {!!Form::date('waktu',null,['id'=>'waktu','class'=>'form-control','placeholder'=>'waktu pelaksana'])!!}
    </div>
</div>
<input name="created_by" type="hidden" value="{{Auth::user()->name}}">
<div class="form-group mb-0 justify-content-end row">
    <div class="col-9">
        <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
    </div>
</div>
