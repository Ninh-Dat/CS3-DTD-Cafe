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
<div class="container mt-4">
<table class="table">

    <tr>
        <th scope="col">Name</th>
        <th scope="col">Name</th>

    </tr>

    <tr>
        <td>{{$category->name}}</td>
        <td>{{$category->description}}</td>
    </tr>

</table>
    <p><a href="{{route('category.index')}}"class="btn btn-warning mt-2">< Back</a></p>

</div>
</body>
</html>

@endsection
