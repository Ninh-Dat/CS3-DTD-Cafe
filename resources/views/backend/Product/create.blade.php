<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <a href="{{route()}}">tạo sản phẩm</a>
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
    @foreach($products as $key=>$product)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->title}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->img}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->category_id}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>

