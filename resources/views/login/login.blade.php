<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Template</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-5">

                        <img src="images/login.jpg" alt="login" class="login-card-img">

                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <div class="brand-wrapper">
                                <a href="{{ route('landing.home') }}">
                                    <img src="images/logo.svg" alt="logo" class="logo">
                                </a>
                            </div>
                            <p class="login-card-description">Sign into your account</p>
                            <form action="{{ route('auth.login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Email address">
                                    @error('email')
                                        <span style="color: red;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="***********">
                                    @error('password')
                                        <span style="color: red;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit"
                                    value="Login">
                            </form>
                            <a href="#!" class="forgot-password-link">Forgot password?</a>
                            <p class="login-card-footer-text">Don't have an account? <a href="#!"
                                    class="text-reset">Register here</a></p>
                            <nav class="login-card-footer-nav">
                                <a href="#!">Terms of use.</a>
                                <a href="#!">Privacy policy</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
