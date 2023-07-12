<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('admin.layouts.head')
    <title>Down Stream</title>
</head>

<body>
    <div class="flex-center">
        <div class="center-form">
            <div class="form-header">
                {{-- <img src="img/logo.svg" alt=""> --}}
                <h2 class="text-white">Down Stream</h2>
            </div>
            <div class="form-body">
                <h5>Welcome Back!</h5>
                @if (Session::has('error'))
                    <p class="text-danger">{{ Session::get('error') }}</p>
                @endif
                @if (Session::has('success'))
                    <p class="text-success">{{ Session::get('success') }}</p>
                @endif
                <form action="{{ url('dashboard') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input id="email" class="sign-inputs" name="email" id="email" type="text" placeholder="Email / Username">
                        @if ($errors->has('email'))
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input id="password" class="sign-inputs" type="password" name="password" placeholder="Password">
                        @if ($errors->has('password'))
                            <p class="text-danger">{{ $errors->first('password') }}</p>
                        @endif
                    </div>
                    <div class="d-flex justify-content-between align-items-center">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember">
                            <label class="form-check-label" for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="my-3">
                        <input type="submit" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('admin.layouts.script')
</body>

</html>
