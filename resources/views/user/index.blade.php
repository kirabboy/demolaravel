@extends('master')
@section('content')

<section class="section-sanpham">
    <div class="container">
        <!-- Tiêu đề Trang -->
        <div class="page-title">
            <h1 class="tborder">Sản Phẩm</h1>
        </div>

        <!--  -->
        <div class="row">
            <div class="col-md-12">
                <div class="shop-container">
                    <!-- Sản Phẩm -->
                    <div class="products row">
                        @foreach ( $products as $product)
                            <div class="col col-6 col-md-4 col-lg-3">
                                <div class="product-box box">
                                    <div class="box-image">
                                        <div class="image-cover">
                                            <a href="#">
                                                <img src="{{$product->feature_img}}" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="box-text">
                                        <div class="title-wrapper">
                                            <a href="#">
                                                <p class="product-title">{{$product->title}}</p>
                                            </a>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price">
                                                <span class="amount">{{number_format($product->price, 0,'', ',')}}₫</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="product-add">
                                        <a href="#" class="btn-add-cart">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- paginate -->
                    <div class="text-center">
                        <div class="nav_pager">
                            <ul class="pagination">
                                <li class="active">
                                    <span aria-current="page" class="page-numbers current">1</span>
                                </li>
                                <li>
                                    <a class="page-numbers" href="#">2</a>
                                </li>
                                <li>
                                    <a class="page-numbers" href="#">3</a>
                                </li>
                                <li>
                                    <span class="page-numbers dots">…</span>
                                </li>
                                <li>
                                    <a class="page-numbers" href="#">7</a>
                                </li>
                                <li>
                                    <a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection