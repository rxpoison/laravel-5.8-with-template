<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    <link href="/template/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="/template/css/animate.css" rel="stylesheet">
    <link href="/template/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name" style="letter-spacing:0px!important;">
                    <span style="font-size:7.5rem;">CRM</span>
                </h1>

            </div>
            <h3>Welcome to CRM</h3>
            {{-- <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p> --}}
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder="Username" name="email" value="{{ old('email') }}" required autocomplete="email"
                        autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" placeholder="Password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}"><small>Forgot password?</small></a>
                @endif
                {{-- <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a> --}}
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="/template/js/jquery-3.1.1.min.js"></script>
    <script src="/template/js/popper.min.js"></script>
    <script src="/template/js/bootstrap.js"></script>

</body>

</html>
