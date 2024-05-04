<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $title }}</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="/assets/adminpage/plugins/fontawesome-free/css/all.min.css">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="/assets/adminpage/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="/assets/adminpage/dist/css/adminlte.min.css">

<meta name="csrf-token" content="{{ csrf_token() }}">

@yield('head')

<style>
    .hidden {
        display: none;
    }

    .btn-group {
        display: flex;
        align-items: center;
        /* Căn icon theo chiều dọc */
    }

    .btn-group .btn {
        margin-right: 10px;
        /* Khoảng cách giữa các nút */
    }
</style>
