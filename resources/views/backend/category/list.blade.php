@extends('master')
@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thể loại</title>
</head>
<body>
<div class="container">
    <table class="table mt-4">
        <thead>
        <tr>
            <th>Stt</th>
            <th>Tên</th>
            <th>Mô tả</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $key=>$category)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td><a href="{{route('category.detail',$category->id)}}" type="button" class="btn btn-info">Detail</a>
                <a href="{{route('category.edit',$category->id)}}" type="button" class="btn btn-success">Update</a>
                <a onclick="return confirm('Bạn có muốn xóa không ?')" href="{{route('category.destroy',$category->id)}}" type="button" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>

@endsection

