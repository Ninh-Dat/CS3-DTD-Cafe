@extends("master")

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
<h1>Thêm sản phẩm</h1>
<form method="post" action="{{route('products.store')}}" enctype="multipart/form-data" class="container mt-3">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">Tên</label>
        <input type="text" class="form-control" name="name" placeholder="nhập tên">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Tiêu đề">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect2">Giá sản phẩm</label>
        <input type="number" class="form-control" name="price" placeholder="nhập giá">
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Chọn ảnh</label>
        <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect2">Mô tả</label>
        <input type="text" class="form-control" name="description" placeholder="nhập mô tả">
    </div>
    <label for="exampleFormControlSelect2">Thể loại</label>
    <select name="category_id" class="form-control ">
        <option>--Tùy chọn--</option>
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>

    <button class="btn btn-success mt-3">Create</button>
    <p><a href="{{route('products.index')}}"class="btn btn-warning mt-2">< Back</a></p>

</form>
</div>
</body>
</html>
@endsection
