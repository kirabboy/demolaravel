
@foreach ( $products as $product)
<b>id:{{$product->id}}</b>
<div class="product-box">
    <div class="product-iamge">
        <img src="{{$product->feature_img}}" alt="">
    </div>
    <div class="product-text">
        <h3 class="title">{{$product->title}}</h3>
        <b class="price">{{$product->price}}</b>
        <div>
            {!!$product->long_desc!!}

        </div>
        <button>Mua ngay</button>
    </div>
</div>
@endforeach
