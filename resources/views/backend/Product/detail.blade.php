@extends('backend.master')
    @section('content')
<div class="container mt-4">
    <h1>Thông tin sản phẩm</h1>
    <div class="row no-gutters">
        <div class="col-md-3">
            <h3 class="card-title ml-5" style="font-size:35px; color: #915229">{{$product->name}}</h3>
            <img src="{{asset('storage/'.$product->img)}}" alt="..." width="200" height="200">
        </div>
        <div class="col-md-9 mt-5 ">
            <div class="card-body" style="font-size: 25px; font-family:'Comic Sans MS'">
                <p class="card-text" >{{$product->description}}</p>
                <p>Giá:<b> {{$product->price}}</b> </p>
                <p>Thể Loại: <b>{{$product->category->name}}</b></p>
                <a href="{{route('products.index')}}"class="btn btn-success">< Back</a>
            </div>
        </div>
    </div>
</div>

@endsection
