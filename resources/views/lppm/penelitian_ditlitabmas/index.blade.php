@extends('layouts.base')

@section('content')
<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Penelitian Ditlitabmas</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title"><b>Data Tahun Kegiatan</b></h4>
                    <table id="datatable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Personil</th>
                                <th>Hibah</th>
                                <th>Penelitian</th>
                                <th>Dokumen</th>
                                <th>Status</th>
                                <th>operation</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($datas as $data)
                            <tr>
                                <td>
                                    {{$data->id}}
                                </td>
                                <td>
                                    @foreach ($data->dosens as $dosen)
                                        - {{$dosen->name}} ({{$dosen->nidn}})<br>
                                    @endforeach
                                </td>
                                <td>
                                    Hibah: {{$data->hibah}}<br>
                                    Skema: {{$data->skema}}<br>
                                    Judul: {{$data->judul}}
                                </td>
                                <td>
                                    Penelitian: <strong>{{$data->bidang_penelitian}}</strong><br>
                                    Dana dr Dikti: {{$data->dana}}
                                </td>
                                <td>
                                    @if(empty($data->dokumen))
                                        <span class="badge badge-info badge-pill">tidak ada file</span>
                                    @else
                                        <a href="ditlitabmas/{{$data->dokumen}}" title="download"><i class="fa fa-download fa-lg"></i> </a>
                                        <a href="{{ asset('file_dokumen/penelitian/ditlitabmas/'.$data->dokumen) }}" title="lihat dokumen" target="_blank"><i class="fa fa-eye fa-lg"></i></a>
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
                                            {{Form::model($data,['route'=> ['lppm-ditlitabmas.show', $data->id], 'method'=>'PUT', 'files'=> true])}}
                                            @include('lppm.penelitian_ditlitabmas.form')
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
                                            {{Form::model($data,['route'=> ['lppm-ditlitabmas.update', $data->id], 'method'=>'PUT', 'files'=> true])}}
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
                                            {{Form::model($data,['route'=> ['lppm-ditlitabmas.update', $data->id], 'method'=>'PUT', 'files'=> true])}}
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