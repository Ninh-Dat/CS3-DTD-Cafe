@extends('master')
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
<table>
    <thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>title</th>
        <th>price</th>
        <th>img</th>
        <th>description</th>
        <th>category_id</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->title}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->img}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->category_id}}</td>
    </tr>
    </tbody>
</table>
</body>
</html>


@endsection
