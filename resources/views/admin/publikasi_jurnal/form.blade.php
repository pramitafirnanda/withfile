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
    <label class="col-3 col-form-label">Nama Jurnal</label>
    <div class="col-9">
        {!!Form::text('nama_jurnal',null,['id'=>'nama_jurnal','class'=>'form-control','placeholder'=>'nama_jurnal'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">ISSN</label>
    <div class="col-9">
        {!!Form::text('issn',null,['id'=>'issn','class'=>'form-control','placeholder'=>'issn'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Volume</label>
    <div class="col-9">
        {!!Form::text('volume',null,['id'=>'volume','class'=>'form-control','placeholder'=>'volume'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Nomor</label>
    <div class="col-9">
        {!!Form::text('nomor',null,['id'=>'nomor','class'=>'form-control','placeholder'=>'nomor'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Halaman</label>
    <div class="col-9">
        <div class="col-2">
            {!!Form::text('hal_start',null,['id'=>'hal_start','class'=>'form-control','placeholder'=>'hal_start'])!!}
        </div>
        <div class="col-2">
            {!!Form::text('hal_end',null,['id'=>'hal_end','class'=>'form-control','placeholder'=>'hal_end'])!!}
        </div>
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">URL</label>
    <div class="col-9">
        {!!Form::text('url',null,['id'=>'url','class'=>'form-control','placeholder'=>'url'])!!}
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