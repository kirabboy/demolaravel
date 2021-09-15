@extends('master')
@section('content')
<h1 class="br">Chi tiết sản phẩm</h1>
<div class="container">    
<section id="content">
    <div class="row content">
        <div class="col-md-6 sidenav">
            <div class="img-box">
                <img src="{{url('public')}}/images/{{$product->feature_img}}" alt="">
            </div>
        </div>

        <div class="col-md-6">
        <h3>{{$product->title}}</h3>
        <h4 class="product-price">{{$product->price}} Đ</h4>
        <P>{!!$product->short_desc!!}</P>
        <button class="btn btn-add">THÊM VÀO GIỎ HÀNG</button>
        </div>
    </div>
</section>
<section id="description">
    <div class="row">
        <h5 class="des">Mô tả</h5>
        <p>{!!$product->long_desc!!}</p>
    </div>
</section>
</div>
 
@endsection 
