@include('header')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 content">
            <div class="title">
                <h3>Sản phẩm</h3>
            </div>
        </div>
            @foreach ( $products as $product)
            <div class="col-12 col-md-4 col-lg-3 product">
                <div class="product__box">
                    <div class="product__box-img">
                        <img src="{{$product->feature_img}}" alt="">
                    </div>
                    <div class="product__box-text">
                        <a href=""><h3 class="title">{{$product->title}}</h3></a>
                        <b class="price">{{$product->price}}</b>
                    {{-- <div>{!!$product->long_desc!!}</div> --}}
                    </div>
                    <div class="product__box-btn">
                        <p>Thêm vào giỏ hàng</p>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>
@include('footer')
