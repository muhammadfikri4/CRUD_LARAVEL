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


        .btn-reg {
            background-color: #435ebe;
            color: #fff;
        }

        .himti {
            margin-top: -100px
        }

        .reg {
            margin-top: 100px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center reg"><strong>REGISTRATION</strong></h1>
        <div class="row" style="margin-top: 100px;">

            <div class="col-md-8">
                <img class="himti" src="{{ asset('FrontEnd-Himti-master/assets/images/HIMTI.png') }}" width="100%"
                    height="100%" alt="">
            </div>
            <div class="col-md-4">
                <form action="{{ route('reg') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-4">
                            <label>Name</label>
                        </div>
                        <div class="col-md-8 mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4">
                            <label>Email</label>
                        </div>
                        <div class="col-md-8 mb-3">
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4">
                            <label>Password</label>
                        </div>
                        <div class="col-md-8 mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password"
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
                            <button class="btn btn-reg" type="submit">Sign Up</button>
                            <a href="anggota.html"><button class="btn btn-light" type="button">Reset</button></a>
                        </div>
                    </div>
                    <div class="text-center mt-5 text-lg fs-4 d-flex">
                        <p class="text-gray-600 mx-3">
                            Sudah Memiliki Akun?
                        </p>
                        <a href="{{ route('login') }}" class="font-bold text-light">Login</a>

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
