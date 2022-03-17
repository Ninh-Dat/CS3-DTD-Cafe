@extends("master")
@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa thể loại</title>
</head>
<body>
<form action="{{route('category.update',$category->id)}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="nhap name" value="{{$category->name}}">
    <button>Update</button>
</form>
</body>
</html>

@endsection
