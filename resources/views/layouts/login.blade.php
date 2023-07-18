<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sistem Informasi RT">
    <title>
        Halaman - Login
    </title>
    @include('include._header-script')
</head>

<body class="" id="body">
    <div class="container d-flex flex-column justify-content-between vh-100">
        <div class="row justify-content-center mt-5">
            <div class="col-xl-5 col-lg-6 col-md-10">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="app-brand bg-primary">
                            <a href="/login" class="brand-name">
                                <span>HALAMAN LOGIN</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-5">
                        @if($errors->any())
                        <div class="alert alert-dismissible fade show alert-danger" role="alert">
                            {{$errors->first()}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <h4 class="text-dark mb-5">Login</h4>
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-row col-md-12 mb-4">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control input-lg" id="username" placeholder="Masukan Username" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                    <p class="mt-1">Username : admin</p>
                                </div>
                                <div class="form-row col-md-12 mb-4">
                                    <label>Password</label>
                                    <input type="password" class="form-control input-lg" id="password" placeholder="Masukan Password" name="password" required autocomplete="current-password">
                                    <p class="mt-1">Password : admin1234</p>
                                </div>
                                <div class="form-row col-md-12">
                                    <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Login </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright pl-0">
            <p class="text-center">
                &copy; <span id="copy-year">2023 Copyright </span>
            </p>
        </div>
        <script>
            let d = new Date();
            let year = d.getFullYear();
            document.getElementById("copy-year").innerHTML = year + ' Copyright Laka Arane';
        </script>
    </div>

    @include('include._footer-script')
</body>

</html>