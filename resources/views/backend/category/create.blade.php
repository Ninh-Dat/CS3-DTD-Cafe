@extends("backend.master")

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

<div class="container mt-4">
    <h1>Thêm thể loại</h1>
    <form method="post" action="{{route('category.store')}}">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Tên</label>
            <input type="text" class="form-control" name="name" placeholder="Nhập tên">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Mô tả</label>
            <input type="text" class="form-control" name="description" placeholder="Nhập mô tả">
        </div>

        <button class="btn btn-success mt-3">Create</button>
        <p><a href="{{route('category.index')}}"class="btn btn-warning mt-2">< Back</a></p>

    </form>
</div>
</body>
</html>
@endsection

