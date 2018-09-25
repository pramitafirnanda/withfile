<div class="form-group row">
    <label class="col-3 col-form-label">Name</label>
    <div class="col-9">
        {!!Form::text('name',null,['id'=>'name','class'=>'form-control','placeholder'=>'Name'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">NIDN</label>
    <div class="col-9">
        {!!Form::text('nidn',null,['id'=>'nidn','class'=>'form-control','placeholder'=>'nidn'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Password</label>
    <div class="col-9">
        {!!Form::text('password',null,['id'=>'password','class'=>'form-control','placeholder'=>'password'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Program Studi</label>
    <div class="col-9">
        {!!Form::text('programstudi',null,['id'=>'programstudi','class'=>'form-control','placeholder'=>'programstudi'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Jenis Kelamin</label>
    <div class="col-9">
        {!!Form::text('jk',null,['id'=>'jk','class'=>'form-control','placeholder'=>'jk'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Pendidikan</label>
    <div class="col-9">
        {!!Form::text('pendidikan',null,['id'=>'pendidikan','class'=>'form-control','placeholder'=>'pendidikan'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Jabatan Fungsional</label>
    <div class="col-9">
        {!!Form::text('jabatanfungsional',null,['id'=>'jabatanfungsional','class'=>'form-control','placeholder'=>'jabatanfungsional'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">Status</label>
    <div class="col-9">
        {{ Form::select('status', ['aktif','tidak aktif'], null, ['class' => 'form-control']) }}
    </div>
</div>
<div class="form-group mb-0 justify-content-end row">
    <div class="col-9">
        <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
    </div>
</div>