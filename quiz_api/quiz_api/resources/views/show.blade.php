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



    <div class="container bg-danger">

        <div class="row">
            <div class="col-sm-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">question</th>
                            <th scope="col">A1</th>
                            <th scope="col">A2</th>
                            <th scope="col">A3</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $d)
                            <tr>
                                <th scope="row">{{ $d->question }}</th>
                                <td>{{ $d->answer_a }}</td>
                                <td>{{ $d->answer_b }}</td>
                                <td>{{ $d->answer_c }}</td>

                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>

            <div class="col-sm-4 ">
                <a class="btn btn-success " style="margin-top: 20px" href="{{ url('/')  }}"> cofnij </a>
            </div>
        </div>




    </div>












    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>

</body>

</html>
