<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        HIMTI ADMIN
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    @include('dashboard.include.style_dashboard')
</head>

<body class="">
    <div class="wrapper ">
        @include('dashboard.include.sidebar_dashboard')
        @yield('content')
        @include('dashboard.include.footer_dashboard')
    </div>
    </div>

    @include('sweetalert::alert')
    @include('dashboard.include.script_dashboard')
</body>

</html>
