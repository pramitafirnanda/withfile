@extends('layouts.base')

@section('content')
<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Publikasi Jurnal</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row">

            <div class="col-12">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title"><b>Publikasi Jurnal</b></h4>
                    <table id="datatable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Tahun kegiatan</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Jurnal</th>
                                <th>Dokumen</th>
                                <th>Status</th>
                                <th>operation</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($datas as $data)
                            <tr>
                                <td>{{$data->years->tahun}}</td>
                                <td>{{$data->judul}}</td>
                                <td>
                                    {{$data->penulis}}<br>
                                    @foreach ($data->dosens as $dosen)
                                        <i class="fa fa-user-circle-o"></i> <strong>{{$dosen->name}}</strong> <i>{{$dosen->nidn}}</i><br>
                                    @endforeach
                                </td>
                                <td><strong>{{$data->nama_jurnal}}</strong></td>
                                <td>
                                    @if(empty($data->dokumen))
                                        <span class="badge badge-info badge-pill">tidak ada file</span>
                                    @else
                                        <a href="kinerja-jurnal/{{$data->dokumen}}" title="download"><i class="fa fa-download fa-lg"></i> </a>
                                        <a href="{{ asset('file_dokumen/kinerja/jurnal/'.$data->dokumen) }}" title="lihat dokumen" target="_blank"><i class="fa fa-eye fa-lg"></i></a>
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
                                            <button type="button" class="dropdown-item waves-effect" data-toggle="modal" data-target=".reject_{{$data->id}}">reject</button>
                                            <button type="button" class="dropdown-item waves-effect" data-toggle="modal" data-target=".accept_{{$data->id}}">accept</button>
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
                                            {{Form::model($data,['route'=> ['lppm-pjurnal.show', $data->id], 'method'=>'PUT', 'files'=> true])}}
                                            @include('lppm.kinerja_luaran.publikasi_jurnal.form')
                                            {{ Form::close() }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--modal reject--}}
                            <div class="modal fade reject_{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h5 class="modal-title" id="myLargeModalLabel">Detail Data</h5>
                                        </div>
                                        <div class="modal-body">
                                            {{Form::model($data,['route'=> ['lppm-pjurnal.update', $data->id], 'method'=>'PUT', 'files'=> true])}}
                                            <div class="form-group row">
                                                <input name="status" type="hidden" value="1">
                                                <label class="col-3 col-form-label">Komentar</label>
                                                <div class="col-9">
                                                    {!!Form::textarea('komentar',null,['id'=>'komentar','class'=>'form-control','placeholder'=>'komentar'])!!}
                                                </div>
                                            </div>

                                            <div class="form-group mb-0 justify-content-end row text-right">
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
                                                </div>
                                            </div>
                                            {{ Form::close() }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--modal accept--}}
                            <div class="modal accept_{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <span>Apakah Anda yakin Menyetujui data ini?</span>
                                            {{Form::model($data,['route'=> ['lppm-pjurnal.update', $data->id], 'method'=>'PUT', 'files'=> true])}}
                                            <input name="status" type="hidden" value="0">
                                            <input name="komentar" type="hidden" value="">

                                            <button class="btn btn-info" type="submit">Accept</button>
                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
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