<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>{{ $title }}</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/feather/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/icons/flags/flags.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
        .login-body {
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(to right, #e9f2fa, #c8e2ff, #e9f2fa);
            height: 100vh;
            margin: 0;
        }

        .login-card {
            width: 100%;
            max-width: 500px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            background-color: #fff;
            padding: 20px;
            border-top: 5px solid #007bff;
        }

        .login-header {
            text-align: center;
            margin-bottom: 20px;
            color: #007bff;
        }

        .login-header img {
            width: 100px;
            margin-bottom: 10px;
        }

        .login-header h1,
        .login-header h2 {
            font-size: 22px;
            margin-bottom: 10px;
        }

        .form-group.position-relative {
            margin-bottom: 20px;
        }

        .form-group.position-relative .profile-views,
        .form-group.position-relative .toggle-password {
            position: absolute;
            top: 70%;
            transform: translateY(-50%);
            right: 10px;
            cursor: pointer;
            color: #007bff;
        }

        .form-control {
            position: relative;
        }

        .toggle-password:hover {
            color: #0056b3;
        }

        .forgotpass {
            margin-top: 10px;
        }

        .forgotpass .remember-me {
            margin-bottom: 0;
        }

        .forgotpass a {
            color: #007bff;
        }

        .forgotpass a:hover {
            color: #0056b3;
        }

        .login-or {
            text-align: center;
            margin: 20px 0;
        }

        .login-or .or-line {
            display: block;
            height: 1px;
            background-color: #e9ecef;
            margin: 0 30px;
            position: relative;
            top: -10px;
        }

        .login-or .span-or {
            background-color: #fff;
            padding: 0 10px;
            position: relative;
            z-index: 1;
            color: #007bff;
        }

        .social-login {
            text-align: center;
        }

        .social-login a {
            margin: 0 5px;
            font-size: 18px;
            color: #495057;
        }

        .social-login a:hover {
            color: #007bff;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .form-control {
            border: 1px solid #007bff;
        }

        .form-control:focus {
            border-color: #0056b3;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .invalid-feedback {
            color: #d9534f;
        }
    </style>
</head>

<body>
    <div class="main-wrapper login-body">
        <div class="login-card">
            <div class="login-header">
                <img src="https://seeklogo.com/images/S/smarts-logo-8F737FF005-seeklogo.com.png" alt="SMARTS Logo">

                <h2 class="mt-5">{{ $title }}</h2>
            </div>

            @if (session()->has('errorMessage'))
                <div class="alert alert-danger">
                    {{ session('errorMessage') }}
                </div>
            @endif

            <form method="POST" action="{{ route('email-reset') }}" autocomplete="off">
                @csrf
                <div class="form-group position-relative">
                    <label>Email <span class="login-danger">*</span></label>
                    <input type="email" id="email" name="email"
                        class="form-control @error('email') is-invalid @enderror"
                        placeholder="Enter email" autofocus>
                    <span class="profile-views"><i class="fas fa-envelope"></i></span>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-group mt-4">
                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                </div>
            </form>
            <div class="mt-4">
                <a href="{{ route('login') }}" class="btn btn-warning btn-block">Back to Login</a>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>
