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
<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="nhập tên">
    <input type="text" name="title" placeholder="nhập tiêu đề">
    <input type="number" name="price" placeholder="nhập giá">
    <input type="file" name="img" placeholder="nhập ảnh">
    <input type="text" name="description" placeholder="nhập mô tả">
    <input type="number" name="category_id" value="1" hidden>
    <button>Create</button>
</form>
</body>
</html>
@endsection
