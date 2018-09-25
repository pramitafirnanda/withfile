@extends('layouts.base')

@section('content')
<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Bidang Ilmu</h4>
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
                            {{ Form::open(['method' => 'post', 'route' => 'bidangilmu.store', 'class' => 'form-horizontal']) }}
                                @include('admin.bidangilmu.form')
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12">
                <div class="card-box table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Dosen</th>
                                <th>Kategori Bidang Ilmu</th>
                                <th>Kategori Kepakaran</th>
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($datas as $data)
                            <tr>
                                <td>
                                    {{$data->datadosens->name}}
                                    <br>{{$data->datadosens->nidn}}
                                    <br>{{$data->datadosens->programstudi}}
                                    <br>{{$data->datadosens->jk}}
                                    <br>{{$data->datadosens->status}}
                                </td>
                                <td>
                                    {{$data->datadosens->pendidikan}}
                                    <br>{{$data->datadosens->jabatanfungsional}}
                                </td>
                                <td>
                                    <span><b>Bidang Ilmu : </b>({{$data->kategoriBidangIlmu}}) {{$data->bidangIlmu}}</span>
                                    <br><span><b>Kepakaran : </b>({{$data->kategoriKepakaran}}) {{$data->kepakaran}}</span>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target=".update_{{$data->id}}">Edit</button>
                                </td>
                            </tr>
                            <div class="modal fade update_{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h5 class="modal-title" id="myLargeModalLabel">Tambah User</h5>
                                        </div>
                                        <div class="modal-body">
                                            {{Form::model($data,['route'=> ['bidangilmu.update', $data->id], 'method'=>'PUT'])}}
                                                @include('admin.bidangilmu.edit')
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