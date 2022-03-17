@extends("master")
@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi tiết</title>
</head>
<body>
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
    </tr>


    </tbody>
</table>
</body>
</html>

@endsection
