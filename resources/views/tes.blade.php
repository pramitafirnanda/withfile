@extends('layouts.base')

@section('content')

<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Datatable</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">

                    {!! Form::open(array('route' => 'tes.store', 'data-parsley-validate' => '')) !!}
                        {!!Form::text('title',null,['id'=>'title','class'=>'form-control','placeholder'=>'title'])!!}
                        <br>
                        {!!Form::text('body',null,['id'=>'body','class'=>'form-control','placeholder'=>'body'])!!}

                        <select class="form-control" name="dosens[]" multiple="multiple">
                            @foreach($dosenss as $dosen)
                                <option value='{{ $dosen->id }}'>{{ $dosen->name }}</option>
                            @endforeach
                        </select>

                        {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
                    {!! Form::close() !!}

                </div>
            </div>
        </div> <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>title</th>
                            <th>body</th>
                            <th>Dosen</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datas as $data)
                            <tr>
                                <td>{{$data->title}}</td>
                                <td>{{$data->body}}</td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div> <!-- end row -->

    </div> <!-- end container -->
</div>
<!-- end wrapper -->
@endsection
@section('scripts')


@endsection