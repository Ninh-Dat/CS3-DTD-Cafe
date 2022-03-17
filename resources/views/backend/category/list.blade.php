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
    <table class="table">
{{--        <a href="{{route('category.create')}}">CREATE</a>--}}
        <thead class="thead-dark">
        <tr style="text-align: center">
            <th>ID</th>
            <th>Name</th>
            <th colspan="5">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $key=>$category)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$category->name}}</td>
                <td><a href="{{route('category.detail',$category->id)}}" type="button" class="btn btn-info">Detail</a></td>
                <td><a href="{{route('category.edit',$category->id)}}" type="button" class="btn btn-info">Update</a></td>
                <td><a onclick="return confirm('Bạn có muốn xóa không ????')" href="{{route('category.destroy',$category->id)}}" type="button" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>

@endsection

