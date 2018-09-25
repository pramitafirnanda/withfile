<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>LPPM - Sistem Informasi LPPM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="LPPM - Sistem Informasi LPPM" name="description" />
    <meta content="LPPM - Sistem Informasi LPPM" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="theme/assets/images/favicon.ico">

    <link href="{{ asset('theme/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/assets/css/icons.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/assets/css/style.css') }}" rel="stylesheet">

    <script src="{{ asset('theme/assets/js/modernizr.min.js') }}"></script>
</head>


<body style="background-image: url(/theme/assets/images/researchforabook2.jpg); max-width: 100%; height: auto">

<!-- HOME -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="wrapper-page">

                    <div class="account-pages">
                        <div class="account-box">
                            <div class="account-logo-box">
                                <h2 class="text-uppercase text-center">
                                    <a href="/" class="text-success">
                                        <span>
                                            <img src="{{URL::asset('theme/assets/images/lppm.jpg')}}" height="70px" alt="LPPM-UWP">
                                        </span>
                                    </a>
                                </h2>
                                <h6 class="text-uppercase text-center font-bold mt-4">Sign In</h6>
                            </div>
                            <div class="account-content">
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group m-b-20 row{{ $errors->has('nidn') ? ' has-error' : '' }}">
                                        <div class="col-12">
                                            <label for="nidn">NIDN</label>
                                            <input id="nidn" type="text" class="form-control" name="nidn" placeholder="NIDN" value="{{ old('nidn') }}" required autofocus>

                                            @if ($errors->has('nidn'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('nidn') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row m-b-20{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <div class="col-12">
                                            <label for="password">Password</label>
                                            <input id="password" type="password" class="form-control" placeholder="Enter your password" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row text-center m-t-10">
                                        <div class="col-12">
                                            <button class="btn btn-block btn-gradient waves-effect waves-light" type="submit">Sign In</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end card-box-->

                </div>
                <!-- end wrapper -->
            </div>
        </div>
    </div>
</section>
<!-- END HOME -->




<script src="{{ asset('theme/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('theme/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('theme/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('theme/assets/js/waves.js') }}"></script>
<script src="{{ asset('theme/assets/js/jquery.slimscroll.js') }}"></script>
<!-- App js -->
<script src="{{ asset('theme/assets/js/jquery.core.js') }}"></script>
<script src="{{ asset('theme/assets/js/jquery.app.js') }}"></script>

</body>

</html>
