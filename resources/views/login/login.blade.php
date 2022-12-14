<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body>
    <style>
        @keyframes animatedBackground {
            from {
                background-position: 0 0;
            }

            to {
                background-position: 100% 0;
            }
        }

        /* #animate-area {
            width: 1200px;
            height: 713px;
            background-image: url('assets/img/blurred-bg.jpg');
            background-position: 0px 0px;
            background-repeat: repeat-x;
            animation: animatedBackground 10s linear infinite alternate;
            box-shadow: 0px 28px 28px #000;
            -moz-box-shadow: 0px 28px 28px #000;
            -webkit-box-shadow: 0px 28px 28px #000;
            -khtml-box-shadow: 0px 28px 28px #000;
        } */

        body {
            background-image: url('assets/img/image1.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    </style>

    <!-- <div id="animate-area" class="mx-auto" style="background-color: #f0f0f0"> -->

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5" style="border-radius: 3%">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <img class="my-5 mx-5" src="{{ asset('assets/img/lgoundip.png') }}" width="280"
                                    height="325">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><b>Selamat Datang!</b></h1>
                                        <h5 class="h5 text-gray-900 mb-4">Di</h5>
                                        <marquee class="h4 text-gray-900" direction="right" behavior="alternate">
                                            <b>DIPO PATHS</b>
                                        </marquee>
                                        @if (session()->has('logingagal'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ session('logingagal') }}
                                        </div>
                                        @endif
                                    </div>
                                    <form class="user" action="/" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" name="email"
                                                class="form-control form-control-user @error('email') is-invalid @enderror"
                                                id="email" placeholder="Email Address" required
                                                value="{{ old('email') }}" autofocus>
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password"
                                                class="form-control form-control-user @error('password') is-invalid @enderror""
                                                id=" password" placeholder="Input your password" required>
                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block" type="submit">
                                            Login
                                        </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

</body>

</html>