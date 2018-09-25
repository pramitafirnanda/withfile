@extends('layouts.base')
@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="card-box table-responsive" style="color: #000000">
                        <img src="{{URL::asset('theme/assets/images/lppm.jpg')}}"><br>
                        <p style="padding-top: 20px">{{ Auth::user()->name }}, Selamat Datang di</p>
                        <h4>LPPM UWP</h4>
                        <h5>Lembaga Penelitian dan Pengabdian Kepada Masyarakat</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop