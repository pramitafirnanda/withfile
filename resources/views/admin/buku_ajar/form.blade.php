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
    <label class="col-3 col-form-label">Judul</label>
    <div class="col-9">
        {!!Form::textarea('judul',null,['id'=>'judul','class'=>'form-control','placeholder'=>'judul'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">ISBN</label>
    <div class="col-9">
        {!!Form::text('isbn',null,['id'=>'isbn','class'=>'form-control','placeholder'=>'isbn'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Jumlah Halaman</label>
    <div class="col-9">
        {!!Form::text('jumlah_halaman',null,['id'=>'jumlah_halaman','class'=>'form-control','placeholder'=>'jumlah_halaman'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Penerbit</label>
    <div class="col-9">
        {!!Form::text('penerbit',null,['id'=>'penerbit','class'=>'form-control','placeholder'=>'penerbit'])!!}
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