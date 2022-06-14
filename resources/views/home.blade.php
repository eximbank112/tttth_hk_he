@extends('layout')
@section('content')
<main>
  <!-- Hero banner -->
  <section class="hero">
    <div class="glide glide1" id="glide1">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides glide__hero">

          <li class="glide__slide">
            <div class="banner">
              <div class="banner-content">
                <span>New Inspiration 2020</span>
                <h1>CLOTHING MADE FOR YOU!</h1>
                <h3>Trending from men and women style collection</h3>
                <!-- <div class="buttons-group">
                  <button>shop women's</button>
                  <button>shop men's</button>
                </div> -->
              </div>
              <img src="./front-end/banner/banner_1.png" class="special_01" alt="">
          </li>

          <li class="glide__slide">
            <div class="banner banner1">
              <div class="banner-content">
                <span>New Inspiration 2020</span>
                <h1>CLOTHING MADE FOR YOU!</h1>
                <h3>Trending from men and women style collection</h3>
                <!-- <div class="buttons-group">
                  <button>shop women's</button>
                  <button>shop men's</button>
                </div> -->
              </div>
              <img src="./front-end/banner/banner_2.png" class="special_02" alt="">
            </div>
          </li>

          <li class="glide__slide">
            <div class="banner">
              <div class="banner-content">
                <span>New Inspiration 2020</span>
                <h1>CLOTHING MADE FOR YOU!</h1>
                <h3>Trending from men and women style collection</h3>
                <!-- <div class="buttons-group">
                  <button>shop women's</button>
                  <button>shop men's</button>
                </div> -->
              </div>
              <img src="./front-end/banner/banner_3.png" class="special_03" alt="">
            </div>
          </li>

        </ul>
      </div>

      <!-- Arrows -->
      <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-arrow-left"></i></button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fas fa-arrow-right"></i></button>
      </div>
    </div>
  </section>

  <!-- Category -->
  <section class="section category">
    <h2 class="title">Allow your style to match your ambition!</h2>
    <div class="category-center container">

      <div class="category-box">
        <img src="./front-end/banner/cat1.jpg" alt="">
        <div class="content">
          <h2>Shop for Woman</h2>
          <span>{{$count_woman_items}} Products in stock</span>
          <a href="/womans">shop now</a>
        </div>
      </div>

      <div class="category-box">
        <img src="./front-end/banner/cat2.jpg" alt="">
        <div class="content">
          <h2>Shop for Man</h2>
          <span>{{$count_man_items}} Products in stock</span>
          <a href="/mans">shop now</a>
        </div>
      </div>

      <div class="category-box">
        <img src="./front-end/banner/cat3.jpg" alt="">
        <div class="content">
          <h2>Shop for Kids</h2>
          <span>{{$count_kids_items}} Products in stock</span>
          <a href="/kids">shop now</a>
        </div>
      </div>

    </div>
  </section>

  <!-- Trending Products -->
  <section class="section sort-category" id="load_product">
    <div class="title-container ">
      <div class="section-titles">
        <div class="section-title active filter-btn" data-id="trend">
          <span class="dot"></span>
          <h1 class="primary-title">Trending Products</h1>
        </div>
      </div>
    </div>

    <div class="product-center container">
      @foreach($trending as $key => $value)
      <div class="product">
        <div class="product-header">
          <img src="./uploads/{{$value->detail_product_image}}" class="small" alt="product">
        </div>
        <div class="product-footer">
          <h3>{{$value->detail_product_name}}</h3>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <br>
          <div class="product-price">
            <h4>{{number_format($value->detail_product_price).' '. 'VND'}}</h4>
          </div>
        </div>
        <ul>
          <li>
            <a href="/product-detail?id={{$value->detail_product_id}}/{{Str::slug($value->detail_product_name)}}">
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
    <!-- <br>
    <div class="container" id="removed_row">
      <div class="row">
        <div class="col-md-12">
          <center>
            <button type="button" id="load_more" data-id="{{$value->detail_product_id}}" class="btn btn-dark" style="font-size: large;">Load more</button>
          </center>
        </div>
      </div>
    </div> -->
  </section>

  <!-- discount product -->
  <section class="section sort-category" id="load_product_sale">
    <div class="title-container ">
      <div class="section-titles">
        <div class="section-title active filter-btn" data-id="trend">
          <span class="dot"></span>
          <h1 class="primary-title">Sale up to 15% Products</h1>
        </div>
      </div>
    </div>

    <div class="product-center container">

      @foreach($saleoff as $key => $value)
      <div class="product">
        <div class="product-header">
          <img src="./uploads/{{$value->product_image_link}}" class="small" alt="product">
        </div>
        <div class="product-footer">
          <h3>{{$value->product_name}}</h3>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <br>
          <div class="product-price">
            <h4>{{number_format($value->product_price).' '. 'VND'}}</h4>
          </div>
        </div>
        <ul>
          <li>
            <a href="/product-detail?id={{$value->product_id}}/{{Str::slug($value->product_name)}}">
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
    <div class="container" id="removed_row_sale">
      <div class="row">
        <div class="col-md-12">
          <center>
            <button type="button" id="load_more_sale" data-id="{{$value->product_id}}" class="btn btn-dark" style="font-size: large;">Load more</button>
          </center>
        </div>
      </div>
    </div>
  </section>

  <!-- Latest product -->
  <section class="section sort-category" id="load_product_lastest">
    <div class="title-container ">
      <div class="section-titles">
        <div class="section-title active filter-btn" data-id="trend">
          <span class="dot"></span>
          <h1 class="primary-title">Latest Products</h1>
        </div>
      </div>
    </div>

    <div class="product-center container">

      @foreach($lastest as $key => $value)
      <div class="product">
        <div class="product-header">
          <img src="./uploads/{{$value->product_image_link}}" class="small" alt="product">
        </div>
        <div class="product-footer">
          <h3>{{$value->product_name}}</h3>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <br>
          <div class="product-price">
            <h4>{{number_format($value->product_price).' '. 'VND'}}</h4>
          </div>
        </div>
        <ul>
          <li>
            <a href="/product-detail?id={{$value->product_id}}/{{Str::slug($value->product_name)}}">
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
    <div class="container" id="removed_row_lastest">
      <div class="row">
        <div class="col-md-12">
          <center>
            <button type="button" id="load_more_lastest" data-id="{{$value->product_id}}" class="btn btn-dark" style="font-size: large;">Load more</button>
          </center>
        </div>
      </div>
    </div>
  </section>

  <!-- blog -->
  <section class="section blog" id="blog">
    <div class="title-container">
      <div class="section-titles">
        <div class="section-title active">
          <span class="dot"></span>
          <h1 class="primary-title">Latest News</h1>
        </div>
      </div>
    </div>

    <div class="blog-container container">
      <div class="glide" id="glide3">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            <li class="glide__slide">
              <div class="blog-card">
                <div class="card-header">
                  <img src="./front-end/banner/blog_1.jpg" alt="" width="100%" height="350px">
                </div>
                <div class="card-footer">
                  <h3>Styling White Shirts After A Cool Day</h3>
                  <span>By Admin</span>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo praesentium, numquam non
                    provident rem sed minus natus unde vel modi!</p>
                  <a href="#"><button>Read More</button></a>
                </div>
              </div>
            </li>
            <li class="glide__slide">
              <div class="blog-card">
                <div class="card-header">
                  <img src="./front-end/banner/blog_2.jpg" alt="" width="100%" height="350px">
                </div>
                <div class="card-footer">
                  <h3>Styling White Shirts After A Cool Day</h3>
                  <span>By Admin</span>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo praesentium, numquam non
                    provident rem sed minus natus unde vel modi!</p>
                  <a href="#"><button>Read More</button></a>
                </div>
              </div>
            </li>
            <li class="glide__slide">
              <div class="blog-card">
                <div class="card-header">
                  <img src="./front-end/banner/blog_3.jpg" alt="" width="100%" height="350px">
                </div>
                <div class="card-footer">
                  <h3>Styling White Shirts After A Cool Day</h3>
                  <span>By Admin</span>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo praesentium, numquam non
                    provident rem sed minus natus unde vel modi!</p>
                  <a href="#"><button>Read More</button></a>
                </div>
              </div>
            </li>
            <li class="glide__slide">
              <div class="blog-card">
                <div class="card-header">
                  <img src="./front-end/banner/blog_4.jpg" alt="" width="100%" height="350px">
                </div>
                <div class="card-footer">
                  <h3>Styling White Shirts After A Cool Day</h3>
                  <span>By Admin</span>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo praesentium, numquam non
                    provident rem sed minus natus unde vel modi!</p>
                  <a href="#"><button>Read More</button></a>
                </div>
              </div>
            </li>
            <li class="glide__slide">
              <div class="blog-card">
                <div class="card-header">
                  <img src="./front-end/banner/blog_5.jpg" alt="" width="100%" height="350px">
                </div>
                <div class="card-footer">
                  <h3>Styling White Shirts After A Cool Day</h3>
                  <span>By Admin</span>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo praesentium, numquam non
                    provident rem sed minus natus unde vel modi!</p>
                  <a href="#"><button>Read More</button></a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Facility -->
  <section class="facility section" id="facility">
    <div class="facility-contianer container">
      <div class="facility-box">
        <div class="facility-icon">
          <i class="fas fa-plane"></i>
        </div>
        <p>FREE SHIPPING WORLD WIDE</p>
      </div>

      <div class="facility-box">
        <div class="facility-icon">
          <i class="fas fa-credit-card"></i>
        </div>
        <p>100% MONEY BACK GUARANTEE</p>
      </div>

      <div class="facility-box">
        <div class="facility-icon">
          <i class="far fa-credit-card"></i>
        </div>
        <p>MANY PAYMENT GATWAYS</p>
      </div>

      <div class="facility-box">
        <div class="facility-icon">
          <i class="fas fa-headset"></i>
        </div>
        <p>24/7 ONLINE SUPPORT</p>
      </div>
    </div>
  </section>
</main>
@endsection