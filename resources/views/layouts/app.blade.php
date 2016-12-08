<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'blog') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <!-- <link href="/css/app.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>
    <!-- Scripts -->
    <!-- <script src="js/app.js"></script> -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
