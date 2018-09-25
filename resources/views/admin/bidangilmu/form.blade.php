<div class="form-group row">
    <label class="col-3 col-form-label">Dosen</label>
    <div class="col-9">
        <select class="form-control" name="dosen_id">
            @foreach($dosens as $dosen)
                <option value='{{$dosen->id}}'>{{$dosen->name}}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Kategori Bidang Ilmu</label>
    <div class="col-9">
        {!!Form::text('kategoriBidangIlmu',null,['id'=>'kategoriBidangIlmu','class'=>'form-control','placeholder'=>'kategoriBidangIlmu'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Bidang Ilmu</label>
    <div class="col-9">
        {!!Form::text('bidangIlmu',null,['id'=>'bidangIlmu','class'=>'form-control','placeholder'=>'bidangIlmu'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Kategori Kepakaran</label>
    <div class="col-9">
        {!!Form::text('kategoriKepakaran',null,['id'=>'kategoriKepakaran','class'=>'form-control','placeholder'=>'kategoriKepakaran'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Kepakaran</label>
    <div class="col-9">
        {!!Form::text('kepakaran',null,['id'=>'kepakaran','class'=>'form-control','placeholder'=>'kepakaran'])!!}
    </div>
</div>
<div class="form-group mb-0 justify-content-end row">
    <div class="col-9">
        <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
    </div>
</div>