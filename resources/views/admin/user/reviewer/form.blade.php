<div class="form-group row">
    <label class="col-3 col-form-label">Name</label>
    <div class="col-9">
        {!!Form::text('name',null,['id'=>'name','class'=>'form-control','placeholder'=>'name'])!!}
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
        {!!Form::password('password',null,['id'=>'password','class'=>'form-control','placeholder'=>'password'])!!}
    </div>
</div>

<div class="form-group mb-0 justify-content-end row">
    <div class="col-9">
        <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
    </div>
</div>