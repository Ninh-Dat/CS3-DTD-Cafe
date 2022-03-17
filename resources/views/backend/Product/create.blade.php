@extends("master")
@section('content')
    <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data" class="container mt-3">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">tên</label>
            <input type="text" class="form-control" name="name" placeholder="nhập tên">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">tiêu đề</label>
            <input type="text" class="form-control" name="title" placeholder="nhập tiêu đề">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">giá tiền</label>
            <input type="number" class="form-control" name="price" placeholder="nhập giá">
        </div>
        <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
{{--            <label for="exampleFormControlFile1">ảnh sản phẩm</label>--}}
{{--            <input type="file" class="form-control" name="img" placeholder="nhập ảnh">--}}
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Mô Tả</label>
            <input type="text" class="form-control" name="description" placeholder="nhập mô tả">
        </div>
        <select name="category_id" class="form-control form-control-lg">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
{{--            <div class="form-group">--}}
{{--                <label for="exampleFormControlFile1">thêm thể loại</label>--}}
{{--                <input type="number" class="form-control" name="category_id" value="1">--}}
{{--            </div>--}}
                <button>Create</button>
    </form>
@endsection
