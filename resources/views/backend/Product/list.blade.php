@extends("backend.master")
    @section('title','Danh sách sản phẩm')
    @section('content')
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
<div class="container">
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Stt</th>
        <th scope="col">Ảnh</th>
        <th scope="col">Tên</th>
        <th scope="col">Tiêu đề</th>
        <th scope="col">Giá</th>
        <th scope="col">Nội dung</th>
        <th scope="col">Thể loại</th>

    </tr>
    </thead>
    <tbody>
    @foreach($products as $key=>$product)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$product->img}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->title}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->category_id}}</td>
            <td><a href="{{route('products.show',$product->id)}}" type="button" class="btn btn-info">Detail</a></td>
            <td><a onclick="return confirm('Bạn có muốn xóa sản phẩm này không')" href="{{route('products.destroy',$product->id)}}" type="button" class="btn btn-info">Delete</a></td>
            <td></td>
            <td></td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
</body>
</html>

@endsection

