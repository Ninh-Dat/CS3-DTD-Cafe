@extends("master")
@section('content')
<div class="container mt-3">
    <h1>Update lại sản phẩm</h1>
    <form method="post" action="{{route('products.update',$product->id)}}"  >
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Tên</label>
            <input type="text" class="form-control" name="name" value="{{$product->name}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Title</label>
            <input type="text" class="form-control" name="title"value="{{$product->title}}" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Giá sản phẩm</label>
            <input type="number" class="form-control" name="price" value="{{$product->price}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Chọn ảnh</label>
            <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1" value="{{asset('storage/'.$product->img)}}" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Mô tả</label>
            <input type="text" class="form-control" name="description" value="{{$product->description}}">
        </div>
        <label for="exampleFormControlSelect2">Thể loại</label>
        <select name="category_id" class="form-control ">
            <option>--Tùy chọn--</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>

        <button class="btn btn-success mt-3">Update Product</button>
        <p><a href="{{route('products.index')}}"class="btn btn-warning mt-2">< Back</a></p>
    </form>
    </div>
    </body>
</html>
@endsection
