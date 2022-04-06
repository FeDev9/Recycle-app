<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{assets('/css/app.css')}}">
    <link rel="stylesheet" href="{{assets('/css/weekly-dailyView.css')}}">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="wrapper">
        <div class="header">
            <h1 class="title">Daily View</h1>
            <a href="/"><i class="fas fa-home home-icon"></i></a>

        </div>

        <div class="create-container">
            <a class="create-button" href="/collections/create">Create new collection</a>
        </div>

        @foreach ($collections as $collection )
        <div class="text-color">
            <a href="/collections/{{$collection->id}}/edit">
                <div class="collection-container">
                    <h5>Garbage: <span>{{$collection->typeOfGarbage}}</span> </h5>
                    <h5> Day: <span class="text">
                            {{$collection->day == 1 ? "Monday" : ""}}
                            {{$collection->day == 2 ? "Tuesday" : ""}}
                            {{$collection->day == 3 ? "Wednesday" : ""}}
                            {{$collection->day == 4 ? "Thursay" : ""}}
                            {{$collection->day == 5 ? "Friday" : ""}}
                            {{$collection->day == 6 ? "Saturday" : ""}}
                            {{$collection->day == 7 ? "Sunday" : ""}}
                        </span></h5>
                    <h5>Hour: <span>{{$collection->hour}}</span></h5>

                </div>
            </a>
        </div>
        @endforeach
    </div>

</body>

</html>