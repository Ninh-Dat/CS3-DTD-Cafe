@extends("backend.master")
@section('content')
    <div class="container mt-3">
        <h1>Update lại thể loại</h1>
        <form method="post" action="{{route('category.update',$category->id)}}"  >
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Tên</label>
                <input type="text" class="form-control" name="name" value="{{$category->name}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Mô tả</label>
                <input type="text" class="form-control" name="description" value="{{$category->description}}">
            </div>
            <button class="btn btn-success mt-3">Update Category</button>
            <p><a href="{{route('category.index')}}"class="btn btn-warning mt-2">< Back</a></p>
        </form>
    </div>
    </body>
    </html>
@endsection
