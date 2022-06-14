@extends('layout')
@section('content')
<!-- All Products -->
<br>
<section class="section sort-category">

    <div class="title-container ">
        @foreach($catalog as $key => $catalogs)
        <div class="section-titles">
            <div class="section-title active filter-btn" data-id="trend">
                <span class="dot"></span>
                <h1 class="primary-title"><a href="/{{Str::slug($catalogs->catalog_name)}}">{{$catalogs->catalog_name}}</a></h1>
            </div>
        </div>
        @endforeach
    </div>

    <div class="product-center container">
        @foreach($man_product as $key => $mans)
        <div class="product">
            <div class="product-header">
                <img src="./uploads/{{$mans->product_image_link}}" class='small' alt="{{$mans->product_name}}">
            </div>
            <div class="product-footer">
                <h3>{{$mans->product_name}}</h3>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="product-price">
                    <h4>{{number_format($mans->product_price).' '. 'VND'}}</h4>
                </div>
            </div>
            <ul>
                <li>
                    <a href="/product-detail?id={{$mans->product_id}}/{{Str::slug($mans->product_name)}}">
                        <i class="far fa-eye"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="far fa-heart"></i>
                    </a>
                </li>
            </ul>
        </div>
        @endforeach
    </div>
    <br>
    <div class="product-center container">
        {{$man_product->links('pagination::bootstrap-4')}}
    </div>
</section>
@endsection