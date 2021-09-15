@include('header')
@foreach ( $products as $product)

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6" >
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


        </div>

    </div>
@endforeach
@include('footer')




