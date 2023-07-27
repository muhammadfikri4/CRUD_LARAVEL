<!DOCTYPE html>
<html lang="en">

<head>
    <title>HIMTI - UMT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- Favicons -->
    @include('include.style')
    <style>
        .container .row .col header h1,
        header h2 {
            color: #191970;
            text-shadow: 0 5px 5px rgba(0, 0, 0, 0.7);
        }

        .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
            background-color: #435ebe !important;
            border: none
        }

        .custom-checkbox .custom-control-input:checked:focus~.custom-control-label::before {
            box-shadow: none
        }

        .custom-checkbox .custom-control-input:focus~.custom-control-label::before {
            box-shadow: none
        }

        .custom-checkbox .custom-control-input:active~.custom-control-label::before {
            background-color: #C8FFC8;
        }

        .btn-log {
            background-color: #435ebe;
            color: #fff;
        }

        .himti {
            margin-top: -100px
        }

        .log {
            margin-top: 100px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center log"><strong>LOGIN</strong></h1>
        <div class="row" style="margin-top: 100px;">
            <div class="col-md-8">
                <img class="himti" src="{{ asset('FrontEnd-Himti-master/assets/images/HIMTI.png') }}" width="100%"
                    height="100%" alt="">
            </div>
            <div class="col-md-4">

                @if (session('error'))
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" width="20px" height="20px"
                            role="img" aria-label="Warning:">
                            <path
                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                        <div>
                            {{ session('error') }}
                        </div>
                    </div>
                @endif

                <form action="{{ route('action-login') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-4">
                            <label>Email</label>
                        </div>
                        <div class="col-md-8 mb-3">
                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4">
                            <label>Password</label>
                        </div>
                        <div class="col-md-8 mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password" required
                                id="pw">
                            <div class="d-flex align-items-center my-2">
                                <input type="checkbox" id="showPW">
                                <span class="mx-2" style="font-size: 12px">Show Password</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="col-md-4"></div>
                        <div class="col-md-8 mb-3">
                            <button class="btn btn-log" type="submit">Log In</button>
                            <button class="btn btn-light" type="reset">Reset</button>
                        </div>
                    </div>
                    <div class="text-center mt-5 text-lg fs-4 d-flex">
                        <p class="text-gray-600 mx-3">
                            Tidak Memiliki Akun?
                        </p>
                        <a href="{{ route('register') }}" class="font-bold text-light">Register</a>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        const show = document.getElementById('showPW');
        const pw = document.getElementById('pw');
        show.addEventListener('click', function() {
            if (pw.type === 'password') {
                pw.type = 'text'
            } else {
                pw.type = 'password'
            }
        });
    </script>

</body>

</html>
