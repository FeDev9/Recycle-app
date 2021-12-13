<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{url('../css/app.css')}}">
    <link rel="stylesheet" href="{{url('../css/create-edit.css')}}">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="wrapper">
        <div class="header">
            <h1 class="title" style="font-size: 25px;">Create new garbage collection</h1>
            <a href="/"><i class="fas fa-home home-icon"></i></a>

        </div>

        <form action="/collections" method="POST">
            @csrf

            <h4 class="title-select">Type of garbage</h4>
            <div class="radio-toolbar">

                <input type="radio" id="paper & cartons" name="typeOfGarbage" value="paper & cartons">
                <label for="paper & cartons">Paper & Cartons</label>

                <input type="radio" id="mixed glass" name="typeOfGarbage" value="mixed glass">
                <label for="mixed glass">Mixed Glass</label>

                <input type="radio" id="plastic" name="typeOfGarbage" value="plastic">
                <label for="plastic">Plastic</label>

                <input type="radio" id="food waste" name="typeOfGarbage" value="food waste">
                <label for="food waste">Food Waste</label>

                <input type="radio" id="metal" name="typeOfGarbage" value="metal">
                <label for="metal">Metal</label>

                <input type="radio" id="general waste" name="typeOfGarbage" value="general waste">
                <label for="general waste">General Waste</label>



            </div>

            <h4 class="title-select">day of the week</h4>

            <div class="radio-toolbar">
                <input type="radio" id="1" name="day" value="1">
                <label for="1">Monday</label>

                <input type="radio" id="2" name="day" value="2">
                <label for="2">Tuesday</label>

                <input type="radio" id="3" name="day" value="3">
                <label for="3">Wednesday</label>

                <input type="radio" id="4" name="day" value="4">
                <label for="4">Thursday</label>

                <input type="radio" id="5" name="day" value="5">
                <label for="5">Friday</label>

                <input type="radio" id="6" name="day" value="6">
                <label for="6">Saturday</label>

                <input type="radio" id="7" name="day" value="7">
                <label for="7">Sunday</label>
            </div>

            <h4 class="title-select">hour of the day</h4>
            <p class="information">collection can take place within two hours from the indicated time</p>

            <div class="radio-toolbar">

                <input type="radio" id="07:00" name="hour" value="07:00">
                <label for="07:00">07:00</label>

                <input type="radio" id="09:00" name="hour" value="09:00">
                <label for="09:00">09:00</label>

                <input type="radio" id="11:00" name="hour" value="11:00">
                <label for="11:00">11:00</label>

                <input type="radio" id="13:00" name="hour" value="13:00">
                <label for="13:00">13:00</label>

                <input type="radio" id="15:00" name="hour" value="15:00">
                <label for="15:00">15:00</label>

                <input type="radio" id="17:00" name="hour" value="17:00">
                <label for="17:00">17:00</label>

                <input type="radio" id="19:00" name="hour" value="19:00">
                <label for="19:00">19:00</label>

            </div>


            <div class="submit-container">
                <button class="submit" type="submit">Add new collection</button>
            </div>



            @if ($errors->any())
            <div class="notification">
                <ul>
                    @foreach ($errors->all() as $error )
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif



        </form>
    </div>


</body>

</html>