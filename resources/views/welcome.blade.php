<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Recycle App</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">

</head>

<body>

    <div class="wrapper">
        <h1 class="title">Waste Sorting</h1>
        <p class="para">Monitoring of waste collection activities</p>

        <div class="buttons-container">
            <a class="button" role="button" href="/daily-view"><span class="text">Daily View</span></a>
            <a class="button" href="/collections"><span class="text">Weekly View</span></a>
        </div>

        @if (\Session::has('success'))
        <div class="notification">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
        @endif
    </div>




</body>

</html>