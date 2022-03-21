@extends("master")
@section('content')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sản phẩm</title>
</head>
<body>
<div class="container mt-4">
    <h1>Danh sách sản phẩm</h1>
<table class="table table-striped mt-4">
    <thead>
    <tr>
        <th scope="col">Stt</th>
        <th scope="col">Ảnh</th>
        <th scope="col">Tên</th>
        <th scope="col">Giá</th>
        <th scope="col">Thể loại</th>
        <th scope="col" colspan="4">Lựa chọn</th>

    </tr>
    </thead>
    <tbody>
    @foreach($products as $key=>$product)
        <tr>
            <td>{{$key+1}}</td>
            <td><img src="{{asset('storage/'.$product->img)}}" width="100px" height="70" alt=""></td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->category->name}}</td>
            <td><a href="{{route('products.show',$product->id)}}" type="button" class="btn btn-info">Detail</a>
        <a href="{{route('products.edit',$product->id)}}" type="button" class="btn btn-success">Update</a>
            <a onclick="return confirm('Bạn có muốn xóa sản phẩm này không')" href="{{route('products.destroy',$product->id)}}" type="button" class="btn btn-danger">Delete</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
</body>
</html>

@endsection

