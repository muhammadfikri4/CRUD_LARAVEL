<!DOCTYPE html>
<html lang="en">

<head>
    <title>HIMTI - UMT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @include('include.style')

</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
    @include('include.navbar')
    @yield('content')


    @include('include.script')
</body>

</html>
