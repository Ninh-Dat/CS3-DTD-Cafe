@extends("main")
@section('content')
    <div class="container mt-4">
        <h1>Thông tin sản phẩm</h1>
        <div class="row no-gutters">
            <div class="col-md-3">
                <h3 class="card-title ml-5" style="font-size:35px; color: #915229">{{$productHome->name}}</h3>
                <img src="{{asset('storage/'.$productHome->img)}}" alt="..." width="200" height="200">
            </div>
            <div class="col-md-9  ">
                <div class="card-body" style="font-size: 25px; font-family:'Comic Sans MS'">
                    <p class="card-text" >{{$productHome->description}}</p>
                    <p>Giá:<b> {{$productHome->price}}</b> </p>
                    <p>Thể Loại: <b>{{$productHome->category->name}}</b></p>
                    <a href="{{route('homeDisplay')}}" type="button" class="btn btn-warning">Back Home</a>
                    <a href="" type="button" class="btn btn-info">Mua</a>
                </div>
            </div>
        </div>
    </div>

@endsection
