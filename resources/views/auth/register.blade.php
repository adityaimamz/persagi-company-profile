<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- My Style -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">

</head>

<body>
    <!-- Login -->
    <div class="container  ">
        <div class="row ">
            <div class="col-3">
                <img src="Assets/png/logo-persagi-text.png" alt="">
            </div>
            <div class="col">
                <div class="row">
                    <img src="Assets/png/hero-img.png" style="width: 594px;">
                </div>
                <div class="row" style="margin-top: -100px ;">
                    <div class="card login-form card-form">
                        <div class="card-body">
                            <h1 class="card-title d-blok text-center text-main">Register</h1>
                            @if (Session::has('register'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{ Session::get('register') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            <div class="card-text">
                                <form action="{{ route('register.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Name</label>
                                        <input type="username" class="form-control" id="username"
                                            aria-describedby="username" name="name" required>
                                        <div class="errors text-danger" style="font-size: 14px">{{ $errors->register->first('name') }}</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="username" class="form-control" id="username"
                                            aria-describedby="username" name="username" required>
                                            <div class="errors text-danger" style="font-size: 14px">{{ $errors->register->first('username') }}</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                        <div class="errors text-danger" style="font-size: 14px">{{ $errors->register->first('email') }}</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Kata Sandi</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password" name="password" required>
                                            <button type="button" id="togglePassword"
                                            class="btn btn-outline-secondary"><i class="bi-eye"></i></button>
                                        </div>
                                        <div class="errors text-danger" style="font-size: 14px">{{ $errors->register->first('password') }}</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Konfirmasi Kata
                                            Sandi</label>
                                        <input type="password" class="form-control" id="re-password" name="retype_password" required>
                                        <div class="errors text-danger" style="font-size: 14px">{{ $errors->register->first('retype_password') }}</div>
                                    </div>

                                    <div class="mb-3 form-check">
                                        <div class="">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Tetap Masuk</label>
                                        </div>
                                        <div class="right">
                                            <label><a href="#">Lupa Kata Sandi?</a></label>
                                        </div>
                                    </div>
                                    <input type="hidden" name="role_id" value="3">
                                    <input type="hidden" name="is_active" value="1">
                                    <button type="submit" class="btn btn-primary bg-main long">Daftar</button>
                                    <a href="/login" class="text-center no-decoration">
                                        <p class="pt-4 fs-9">
                                            Sudah memiliki akun? Masuk
                                        </p>
                                    </a>
                                    <a href="#" class="text-center no-decoration fs-9">
                                        <p>Login sebagai anggota DPC Persagi Karawang? Klik disini</p>
                                    </a>
                                </form>
                                <a href="/" class="btn back2"><i class="bi-arrow-left-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </script>
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
</body>

<script src="{{ asset('assets/js/login.js') }}"></script>
@yield('js')

</html>
