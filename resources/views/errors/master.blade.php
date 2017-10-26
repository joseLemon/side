<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404</title>
    <link rel="icon" href="{{ asset('public/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
    @yield('head')
    <style>
        @import url('https://fonts.googleapis.com/css?family=Ubuntu:400,700');

        body {
            font-family: 'Ubuntu', sans-serif;
            background-color: #222d32;
        }

        h1 {
            font-size: 50px;
            margin-bottom: 5px;
            font-weight: 700;
        }

        h1, h2 {
            margin: 0;
            color: #666;
        }

        .container {
            padding: 100px 10px;
        }

        .error-box {
            max-width: 600px;
            padding: 20px;
            margin: 0 auto;
            background-color: #fffefe;
            box-shadow: 0px 5px 10px rgba(0,0,0,.5);
        }

        .error-header {
            border-bottom: 1px dashed #a3a3a3;
            margin-bottom: 15px;
            padding: 15px 0;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="error-box">
        <div class="error-header text-center">
            <h1>@yield('error_code')</h1>
            <h2>@yield('error_title')</h2>
        </div>
        <div class="error-body">
            @yield('error_message')
        </div>
    </div>
</div>
</body>
</html>