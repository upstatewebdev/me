<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chris</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Miriam+Libre:400,700" rel="stylesheet" type="text/css">

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">

</head>

<body>
    @include('layout.nav')
    @yield('content')
</body>
</html>