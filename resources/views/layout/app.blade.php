<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chris</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Miriam+Libre:400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">

</head>

<body>
<div class="px-6">
    <div class="container mx-auto max-w-lg">
        <header class="text-center mx-6 mt-6 mb-3">
            <div class="sm:mb-4">
                <img class="w-32 h-32 rounded-full" src="/images/avatar-2.jpg">
            </div>
            <h1 class="text-4xl sm:mb-3 no-line-height">Chris Carver</h1>
            <div class="text-lg">
                <a class="text-grey hover:text-black sm:mr-3" href="https://twitter.com/chrislcarver"><i class="fab fa-lg fa-twitter"></i></a>
                <a class="text-grey hover:text-black" href="https://github.com/clcarver"><i class="fab fa-lg fa-github"></i></a>
            </div>
        </header>

        <div class="flex items-center h-32 mt-8">
            <div class="flex-1 text-center">

            </div>
        </div>
    </div>
</div>



    {{--@include('layout.nav')--}}
    @yield('content')
</body>
</html>