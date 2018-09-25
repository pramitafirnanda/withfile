@extends('layouts.base')

@section('content')
<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Menu</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-3" style="padding-bottom: 20px">
                <button type="button" class="btn btn-pink waves-effect waves-light -align-right" data-toggle="modal" data-target=".bs-example-modal-lg">Tambah Data</button>
            </div>


            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h5 class="modal-title" id="myLargeModalLabel">Tambah Data</h5>
                        </div>
                        <div class="modal-body">
                            {{ Form::open(['method' => 'post', 'route' => 'menu.store', 'class' => 'form-horizontal']) }}
                                @include('master.menu.form')
                            {{ Form::close() }}
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->


            <div class="col-12">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title"><b>Data Menu</b></h4>
                    <table id="datatable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>title</th>
                                <th>link</th>
                                <th>id parent</th>
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($datas as $data)
                            <tr>
                                <td>{{$data->title}}</td>
                                <td>{{$data->link}}</td>
                                <td>{{$data->id_parent}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target=".update_{{$data->id}}">Update Data</button>
                                </td>
                            </tr>
                            <div class="modal fade update_{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h5 class="modal-title" id="myLargeModalLabel">Tambah Data</h5>
                                        </div>
                                        <div class="modal-body">
                                            {{Form::model($data,['route'=> ['menu.update', $data->id], 'method'=>'PUT'])}}
                                                @include('master.menu.form')
                                            {{ Form::close() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</div>

@stop