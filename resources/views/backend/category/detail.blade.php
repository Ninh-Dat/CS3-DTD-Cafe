<a href="{{route('category.index')}}">Trang chủ</a>
<table border="10">
<tr>
    <th>ID</th>
    <th>Name</th>
</tr>
<tr>
    <td>{{$category->id}}</td>
    <td>{{$category->name}}</td>
</tr>
</table>
