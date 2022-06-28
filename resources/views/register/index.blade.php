<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.98.0"> --}}
        <title>{{ $title }}</title>

    {{-- <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/"> --}}





<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="/assets/css/style.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    {{-- <link href="signin.css" rel="stylesheet"> --}}
</head>
<body class="text-center">

    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration w-100 m-auto">
                <form action="/register" method="POST">
                    @csrf

                    <img class="mb-1" src="/assets/img/Vpm Logo.png" alt="" width="182" height="167">
                    <h1 class="h3 mb-4 fw-normal text-center">Registration Form</h1>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" required value="{{ old('name') }}">
                        {{-- <label for="name">Name</label> --}}
                        @error('name')
                        <div class="invalid-feedback text-lg-start">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded @error('username') is-invalid @enderror" name="username" id="username" placeholder="username" required value="{{ old('username') }}">
                        {{-- <label for="username">Username</label> --}}
                        @error('username')
                        <div class="invalid-feedback text-lg-start">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control rounded @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                        {{-- <label for="email">Email address</label> --}}
                        @error('email')
                        <div class="invalid-feedback text-lg-start">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                        {{-- <label for="password">Password</label> --}}
                        @error('password')
                        <div class="invalid-feedback text-lg-start">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
                    <small class="d-block text_center mt-3">Allready Registered ? <a href="/">Login</a></small>
                    <p class="mt-2 mb-3 text-muted">&copy; 2022</p>
                </form>
            </main>
        </div>
    </div>




</body>
</html>
