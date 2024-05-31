<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css"
        integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
</head>

<body>

    <div class="container bg-success" style="min-height: 100vh">

        <div class="row">
            <div class="col" style="margin-top: 30px; margin-bottom: 50px">
                <h1>Aplikacja pobiera dane z serwera na temat quizu i zapisuje je w bazie danych</h1><br><br>
                <p class="" style="font-size: 20px">Aplikacja jest zrobiona w PHP framework Laravel</p>
            </div>
        </div>

        <div class="row  ">
            <div class="col-sm-8 ">
                <a class="btn btn-primary" href="{{ url('/fetch') }}"> Pobierz dane </a> <br><br>
                <a class="btn btn-success" href="{{ url('/show') }}"> Pokaz dane </a> <br><br>
                <a class="btn btn-danger" href="{{ route('delete') }}"> Usun dane </a> <br><br>
            </div>
        </div>




    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>

</body>

</html>
