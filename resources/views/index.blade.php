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
                    <h4 class="m-t-0 header-title"><b>Dosen Perguruan Tinggi</b></h4>
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Akademik</th>
                            <th>Bidang Ilmu & Kepakaran</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                        </thead>


                        <tbody>
                        <tr>
                            <td>
                                ABDULLAH M.Si
                                <br>NIDN : 9907009200
                                <br>Prodi : Ilmu Administrasi Publik
                                <br>Jenis Kelamin : Laki-laki
                                <br>AKTIF
                            </td>
                             <td>
                                Pendidikan :  S-2
                                <br>Fungsional :  Tidak Punya
                            </td>
                            <td>
                                Bidang Ilmu:
                                <br> Ilmu Administrasi (Niaga, Negara, Publik, Pembangunan, Dll)
                                <br> Kepakaran :  Public administration
                            </td>
                            <td>
                                Data Lengkap :  Ya
                                <br> Validasi :  Ya
                                <br> Tanggal :  30/01/2018
                            </td>
                            <td>
                                <button>add</button>
                                <button>del</button>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end row -->

    </div> <!-- end container -->
</div>
<!-- end wrapper -->
@endsection