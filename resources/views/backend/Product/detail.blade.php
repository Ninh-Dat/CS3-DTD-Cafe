@extends('master')
    @section('content')

<div class="container mt-3">
<div class="card mb-3" style="max-width: 540px;">
</div>
    <div class="row no-gutters">
        <div class="col-md-4">
            <img width="300px" src="{{asset('storage/'.$product->img)}}" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{$product->title}}</h5>
                <h3 class="card-title">{{$product->name}}</h3>
                <p class="card-text">{{$product->description}}</p>
                <h5>Giá: {{$product->price}}</h5>
               <h5>Thể loại: {{$product->category->name}}</h5>
            </div>
        </div>
    </div>
</div>

@endsection
