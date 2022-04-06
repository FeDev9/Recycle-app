<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{url('../css/app.css')}}">
    <link rel="stylesheet" href="{{url('../css/create-edit.css')}}">
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <h1 class="title">Edit collection</h1>
            <a href="/" class="home-icon">Home</a>

        </div>



        <form action="/collections/{{$collection->id}}" method="POST">
            @method('PATCH')
            @csrf

            <h4 class="title-select">Type of garbage</h4>
            <div class="radio-toolbar">

                <input type="radio" id="paper & cartons" name="typeOfGarbage" value="paper & cartons" <?php echo
                    $collection->typeOfGarbage
                ==
                "paper & cartons" ? "checked" : "" ?>
                >
                <label for="paper & cartons">Paper & cartons</label>

                <input type="radio" id="mixed glass" name="typeOfGarbage" value="mixed glass" <?php echo
                    $collection->typeOfGarbage
                ==
                "mixed glass" ? "checked" : "" ?>>
                <label for="mixed glass">Mixed Glass</label>

                <input type="radio" id="plastic" name="typeOfGarbage" value="plastic" <?php echo
                    $collection->typeOfGarbage
                ==
                "plastic" ? "checked" : "" ?>>
                <label for="plastic">Plastic</label>

                <input type="radio" id="food waste" name="typeOfGarbage" value="food waste" <?php echo
                    $collection->typeOfGarbage
                ==
                "food waste" ? "checked" : "" ?>>
                <label for="food waste">Food Waste</label>

                <input type="radio" id="metal" name="typeOfGarbage" value="metal" <?php echo $collection->typeOfGarbage
                ==
                "metal" ? "checked" : "" ?>>
                <label for="metal">Metal</label>

                <input type="radio" id="general waste" name="typeOfGarbage" value="general waste" <?php echo
                    $collection->typeOfGarbage
                ==
                "general waste" ? "checked" : "" ?>>
                <label for="general waste">General Waste</label>



            </div>

            <h4 class="title-select">DAY OF THE WEEK</h4>
            <div class="radio-toolbar">
                <input type="radio" id="1" name="day" value="1" <?php echo $collection->day ==
                "1" ? "checked" : "" ?>>
                <label for="1">Monday</label>

                <input type="radio" id="2" name="day" value="2" <?php echo $collection->day ==
                "2" ? "checked" : "" ?>>
                <label for="2">Tuesday</label>

                <input type="radio" id="3" name="day" value="3" <?php echo $collection->day ==
                "3" ? "checked" : "" ?>>
                <label for="1">Wednesday</label>

                <input type="radio" id="4" name="day" value="4" <?php echo $collection->day ==
                "4" ? "checked" : "" ?>>
                <label for="4">Thursday</label>

                <input type="radio" id="5" name="day" value="5" <?php echo $collection->day ==
                "5" ? "checked" : "" ?>>
                <label for="5">Friday</label>

                <input type="radio" id="6" name="day" value="6" <?php echo $collection->day ==
                "6" ? "checked" : "" ?>>
                <label for="6">Saturday</label>

                <input type="radio" id="7" name="day" value="7" <?php echo $collection->day ==
                "7" ? "checked" : "" ?>>
                <label for="7">Sunday</label>

            </div>

            <h4 class="title-select">HOUR OF THE DAY</h4>
            <p class="information">collection can take place within two hours from the indicated time</p>
            <div class="radio-toolbar">

                <input type="radio" id="07:00" name="hour" value="07:00" <?php echo $collection->hour ==
                "07:00:00" ? "checked" : "" ?>>
                <label for="07:00">07:00</label>

                <input type="radio" id="09:00" name="hour" value="09:00" <?php echo $collection->hour ==
                "09:00:00" ? "checked" : "" ?>>
                <label for="09:00">09:00</label>

                <input type="radio" id="11:00" name="hour" value="11:00" <?php echo $collection->hour ==
                "11:00:00" ? "checked" : "" ?>>
                <label for="11:00">11:00</label>

                <input type="radio" id="13:00" name="hour" value="13:00" <?php echo $collection->hour ==
                "13:00:00" ? "checked" : "" ?>>
                <label for="13:00">13:00</label>

                <input type="radio" id="15:00" name="hour" value="15:00" <?php echo $collection->hour ==
                "15:00:00" ? "checked" : "" ?>>
                <label for="15:00">15:00</label>

                <input type="radio" id="17:00" name="hour" value="17:00" <?php echo $collection->hour ==
                "17:00:00" ? "checked" : "" ?>>
                <label for="17:00">17:00</label>

                <input type="radio" id="19:00" name="hour" value="19:00" <?php echo $collection->hour ==
                "19:00:00" ? "checked" : "" ?>>
                <label for="19:00">19:00</label>

            </div>

            <div class="submit-container">
                <button class="submit" type="submit">Update collection</button>
            </div>


        </form>

        <div class="separator"></div>

        <form action="/collections/{{$collection->id}}" method="POST">
            @method('DELETE')
            @csrf

            <div class="submit-container">
                <button class="submit-delete" type="submit">Delete</button>
            </div>

        </form>

        @if ($errors->any())
        <div class="notification">
            <ul>
                @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>




</body>

</html>