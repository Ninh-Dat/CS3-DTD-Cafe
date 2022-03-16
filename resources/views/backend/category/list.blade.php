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
<table border="1">
    <a href="{{route('category.create')}}">Thêm</a>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $key=>$category)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$category->name}}</td>
            <td><a href="{{route('category.detail', $category->id)}}">Chi tiết</a></td>
            <td><a href="{{route('category.edit', $category->id)}}">Sửa</a></td>
            <td><a onclick="return confirm('Bạn có muốn xóa không ???')" href="{{route('category.destroy', $category->id)}}">Xóa</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
