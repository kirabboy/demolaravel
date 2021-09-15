@include('header')
    <div class="container">
        <h3 class="text-b">
            <u>San</u> Pham
        </h3>
    </div>
    <div class="container">
        <div class="row">
            @foreach ( $products as $product)
            <div class="col-sx-12 col-md-4 col-lg-3" >
                <div class="card text-center">
                    <div class="card-img">
                        <img src="{{$product->feature_img}}" style="width:100%">
                    </div>
                    <div class="card-title">
                        {{$product->title}}
                    </div>
                    <p>{{$product->price}}</p>
                    <div class="price">
                        <button class="btn">Them Vao Gio Hang</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@include('footer')
