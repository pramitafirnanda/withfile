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
            <div class="col-3" style="padding-bottom: 20px">
                <button type="button" class="btn btn-pink waves-effect waves-light -align-right" data-toggle="modal" data-target=".bs-example-modal-lg">Tambah User Dosen</button>
            </div>


            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h5 class="modal-title" id="myLargeModalLabel">Tambah User</h5>
                        </div>
                        <div class="modal-body">
                            {{ Form::open(['method' => 'post', 'route' => 'datadosen.store', 'class' => 'form-horizontal', 'files'=> true]) }}
                                @include('admin.dosen.form')
                            {{ Form::close() }}
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->


            <div class="col-12">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title"><b>Data Dosen Perguruan Tinggi</b></h4>
                    <table id="datatable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>nidn</th>
                                <th>Program Studi</th>
                                <th>JK</th>
                                <th>Pendidikan</th>
                                <th>Jabatan Fungsional</th>
                                <th>Status</th>
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($dtdosens as $dtdosen)
                            <tr>
                                <td>{{$dtdosen->name}}</td>
                                <td>{{$dtdosen->nidn}}</td>
                                <td>{{$dtdosen->programstudi}}</td>
                                <td>{{$dtdosen->jk}}</td>
                                <td>{{$dtdosen->pendidikan}}</td>
                                <td>{{$dtdosen->jabatanfungsional}}</td>
                                <td>{{$dtdosen->status}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target=".update_{{$dtdosen->id}}">Update Data</button>
                                </td>
                            </tr>
                            <div class="modal fade update_{{$dtdosen->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h5 class="modal-title" id="myLargeModalLabel">Tambah User</h5>
                                        </div>
                                        <div class="modal-body">
                                            {{Form::model($dtdosen,['route'=> ['datadosen.update', $dtdosen->id], 'method'=>'PUT', 'files'=> true])}}
                                                @include('admin.dosen.form')
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