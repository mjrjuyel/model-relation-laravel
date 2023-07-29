<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <h1 class="text-center">Department and Student</h1>
                <table class="table">
            <thead>
                <tr>
                <th scope="col">Department</th>
                <th scope="col">Studentty</th>
                </tr>
            </thead>
            <tbody>
                @foreach($country as $data)
                <tr>
                <td>{{$data->country->country_name}}</td>
                <td>{{$data->city_name}}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
    </body>
</html>
