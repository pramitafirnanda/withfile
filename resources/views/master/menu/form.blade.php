<div class="form-group row">
    <label class="col-3 col-form-label">title</label>
    <div class="col-9">
        {!!Form::text('title',null,['id'=>'title','class'=>'form-control','placeholder'=>'title'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">link</label>
    <div class="col-9">
        {!!Form::text('link',null,['id'=>'link','class'=>'form-control','placeholder'=>'link'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label">id_parent</label>
    <div class="col-9">
        {!!Form::text('id_parent',null,['id'=>'id_parent','class'=>'form-control','placeholder'=>'id_parent'])!!}
    </div>
</div>
<div class="form-group mb-0 justify-content-end row">
    <div class="col-9">
        <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
    </div>
</div>