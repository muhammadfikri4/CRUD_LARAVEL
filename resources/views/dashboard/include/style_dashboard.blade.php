<!--     Fonts and icons     -->
<link href="{{ asset('FrontEnd-Himti-master/assets/images/HIMTI.png') }}" rel="icon">
<link href="{{ asset('FrontEnd-Himti-master/assets/images/HIMTI.png') }}" rel="apple-touch-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
<!-- CSS Files -->
<link href="{{ asset('paper-dashboard/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('paper-dashboard/assets/css/paper-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="{{ asset('paper-dashboard/assets/demo/demo.css') }}" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

{{--  --}}
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap'); */
    /* .confirm-button-class {
        background-color: red !important;
        color: white !important;
        border: none !important;
    } */
    .confirm-button-class,
    .cancel-button-class {
        padding: 7px 17.6px 7px 17.6px !important;
        font-weight: normal !important;
    }

    @font-face {
        font-family: "Montserrat";
        src: url("../../../../public/Montserrat/static/Montserrat-ExtraLight.ttf");
    }

    .swal2-modal,
    .swal2-popup {
        padding-top: 30px !important;
    }

    .title-class {
        margin-top: 20px !important;
        font-size: 30px !important;
        font-family: 'Montserrat';

        font-weight: normal !important;

    }

    .swal2-html-container {
        padding: 17px !important;
        margin-top: -5px !important;
    }

    .icon-class {
        font-size: 17px !important;
    }

    /* .confirm-button-class .swal2-icon svg {
        width: 0px !important;
        height: 0px !important;
    } */

    .swal2-actions .swal2-confirm {
        background-color: #3085d6 !important;
        color: white !important;
        border: none !important;
        box-shadow: none !important;
    }

    .swal2-actions .swal2-cancel {
        box-shadow: none !important;
        border: none !important;
    }

    .swal2-confirm:focus,
    .swal2-cancel:focus {
        box-shadow: none !important;
        border: none !important;
    }

    .swal2-actions button:hover {
        /* border: none !important; */
    }
</style>
