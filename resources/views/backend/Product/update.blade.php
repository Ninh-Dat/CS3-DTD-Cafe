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
    <input type="text" name="name" placeholder="nhập tên" value="{{$product->name}}">
    <input type="text" name="title" placeholder="nhập tiêu đề" value="{{$product->title}}">
    <input type="number" name="price" placeholder="nhập giá" value="{{$product->price}}">
    <input type="file" name="img" placeholder="nhập ảnh" value="{{$product->img}}">
    <input type="text" name="description" placeholder="nhập mô tả" value="{{$product->description}}">
    <input type="number" name="category_id" value="1" hidden value="{{$product->category_id}}">
    <button>Update</button>
</form>
</body>
</html>
