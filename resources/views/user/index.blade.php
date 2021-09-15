@extends('master')
@section('content')
<h1 class="br">SẢN PHẨM</h1>
<div class="container">
    <div class="row">
    @foreach ( $products as $product)     
    <div class="col-md-3 col-sm-6 p-4">
            <div class="card" style="width: 100%;" >
                <a href="{{url('product')}}/{{$product->slug}}" class="link-sp">
                <img class="card-img-top" src="{{url('public')}}/images/{{$product->feature_img}}" alt="Card image cap">
                    <p class="product-name">{{$product->title}}</p>
                    <p class="product-price">{{$product->price}}đ</p>
                </a>
                    <button class="btn btn-add">THÊM VÀO GIỎ HÀNG</button>
            </div>
        </div>
    @endforeach        
    </div>
</div>
@endsection 
