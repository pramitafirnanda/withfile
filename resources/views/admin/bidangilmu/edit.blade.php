<div class="card-box">
    <h4 class="header-title">Data Dosen</h4>
        <div class="form-group row">
            <label class="col-3 col-form-label">Name</label>
            <div class="col-9">
                <input type="text" class="form-control" readonly="" value="{{$data->datadosens->name}}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 col-form-label">nidn</label>
            <div class="col-9">
                <input type="text" class="form-control" readonly="" value="{{$data->datadosens->nidn}}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 col-form-label">Program Studi</label>
            <div class="col-9">
                <input type="text" class="form-control" readonly="" value="{{$data->datadosens->programstudi}}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 col-form-label">Jenis Kelamin</label>
            <div class="col-9">
                <input type="text" class="form-control" readonly="" value="{{$data->datadosens->jk}}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 col-form-label">Jabatan Fungsional</label>
            <div class="col-9">
                <input type="text" class="form-control" readonly="" value="{{$data->datadosens->jabatanfungsional}}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 col-form-label">Status</label>
            <div class="col-9">
                <input type="text" class="form-control" readonly="" value="{{$data->datadosens->status}}">
            </div>
        </div>
</div>
<div class="card-box">
    <h4 class="header-title">Bidang Ilmu dan Kepakaran</h4>
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
            <button type="submit" class="btn btn-info waves-effect waves-light">Update</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
        </div>
    </div>
</div>