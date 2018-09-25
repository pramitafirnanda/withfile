@extends('layouts.base')

@section('content')
<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Kegiatan Dana Non DRPM</h4>
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
                            {{ Form::open(['method' => 'post', 'route' => 'pengabdian-nondrpm.store', 'class' => 'form-horizontal', 'files'=> true]) }}
                                @include('admin.kinerja.pengabdian_nondrpm.form')
                            {{ Form::close() }}
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->


            <div class="col-12">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title"><b>Kegiatan Dana Non DRPM</b></h4>
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Tahun Kegiatan</th>
                            <th>Judul</th>
                            <th>Dana</th>
                            <th>Personil</th>
                            <th>Dokumen</th>
                            <th>Status</th>
                            <th>operation</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datas as $data)
                            <tr>
                                <td>{{$data->years->tahun}}</td>
                                <td>
                                    <strong>{{$data->judul}}</strong><br>
                                    @foreach ($data->dosens as $dosen)
                                        <i class="fa fa-user-circle-o"></i> <strong>{{$dosen->name}}</strong> <i>{{$dosen->nidn}}</i><br>
                                    @endforeach
                                </td>
                                <td>
                                    <strong>Rp.&nbsp;{{$data->dana}}</strong><br>
                                    {{$data->program}}
                                </td>
                                <td>
                                    <b>Mahasiswa : </b> {{$data->p_mhs}}<br>
                                    <b>Alumni : </b> {{$data->p_alumni}}<br>
                                    <b>Staff : </b> {{$data->p_staff}}<br>
                                </td>
                                <td>
                                    @if(empty($data->dokumen))
                                        <span class="badge badge-info badge-pill">tidak ada file</span>
                                    @else
                                        <a href="pengabdian-nondrpm/{{$data->dokumen}}" title="download"><i class="fa fa-download fa-lg"></i> </a>
                                        <a href="{{ asset('file_dokumen/publikasi/PengabdianNonDrpm/'.$data->dokumen) }}" title="lihat dokumen" target="_blank"><i class="fa fa-eye fa-lg"></i></a>
                                    @endif
                                </td>
                                <td>
                                    @if($data->status == "1")
                                        <button type="button" class="btn btn-danger waves-effect waves-light btn-sm" data-toggle="modal" data-target=".komen_{{$data->id}}">reject</button>
                                        <div class="modal komen_{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <span>
                                                            <h3>KOMENTAR: </h3><br>
                                                            {{$data->komentar}}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif($data->status == "0")
                                        <span class="badge badge-success">accept</span>
                                    @else
                                        <span class="badge badge-warning">pending</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group m-b-10">
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars"></i></button>
                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 36px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <button type="button" class="dropdown-item waves-effect" data-toggle="modal" data-target=".view_{{$data->id}}">Detail</button>
                                            <button type="button" class="dropdown-item waves-effect" data-toggle="modal" data-target=".update_{{$data->id}}">Update</button>
                                            <button type="button" class="dropdown-item waves-effect" data-toggle="modal" data-target=".delete_{{$data->id}}">Delete</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            {{--modal view--}}
                            <div class="modal fade view_{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h5 class="modal-title" id="myLargeModalLabel">Detail Data</h5>
                                        </div>
                                        <div class="modal-body">
                                            {{Form::model($data,['route'=> ['pengabdian-nondrpm.show', $data->id], 'method'=>'PUT', 'files'=> true])}}
                                            {{--@include('lppm.kinerja.pengabdian-drpm.form')--}}
                                            {{ Form::close() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal delete_{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <span>Apakah Anda yakin menghapus data?</span>
                                            <form action="{{action('PengabdianNonDrpmController@destroy', $data['id'])}}" method="post">
                                                {{csrf_field()}}
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button class="btn btn-danger" type="submit">Ya, Delete</button>
                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade update_{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h5 class="modal-title" id="myLargeModalLabel">Tambah Data</h5>
                                        </div>
                                        <div class="modal-body">
                                            {{Form::model($data,['route'=> ['pengabdian-nondrpm.update', $data->id], 'method'=>'PUT', 'files'=> true])}}
                                                @include('admin.kinerja.pengabdian_nondrpm.form')
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