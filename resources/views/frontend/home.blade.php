@extends('frontend.layout')


@section('categories')
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/anh1.jpeg">
                            <h5><a href="#">Fresh Fruit</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/anh2.jpeg">
                            <h5><a href="#">Dried Fruit</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/anh3.jpeg">
                            <h5><a href="#">Vegetables</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/anh4.jpeg">
                            <h5><a href="#">drink fruits</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/anh5.jpeg">
                            <h5><a href="#">drink fruits</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

{{-- @section('hero-product-category')
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All departments</span>
                    </div>
                    <ul>
                        @foreach ($productCategories as $productCategory)
                            <li><a href="#">{{ $productCategory->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+65 11.188.888</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
                <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                    <div class="hero__text">
                        <span>FRUIT FRESH</span>
                        <h2>Vegetable <br />100% Organic</h2>
                        <p>Free Pickup and Delivery Available</p>
                        <a href="#" class="primary-btn">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection --}}



@section('hero-product-category')
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <section class=" slider_section position-relative">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="slider_item-box">
                                        <div class="slider_item-container">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="slider_img-box">
                                                            <div>
                                                                <img src="img/featured/anht1.jpeg"
                                                                    alt="" class="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="slider_item-detail">
                                                            <div>
                                                                <h1>
                                                                    Áo LS2 Airy Man
                                                                </h1>
                                                                <p>
                                                                    Áo LS2 Airy Man thiết kế dạng lưới để tăng sự thoải mái
                                                                    tối đa cho người lái ở khí hậu nóng. Form áo LS2 Airy
                                                                    Man trẻ trung, ôm gọn cơ thể. Áo LS2 Airy Man có đủ các
                                                                    lớp đệm mút EVA bảo vệ cơ bản ở lưng, ngực và cánh tay.
                                                                    Với tiêu chí đề cao sự linh hoạt, thoải mái, áo moto LS2
                                                                    Airy Man là một sự lựa chọn tuyệt vời cho anh em lần đầu
                                                                    mua áo khoác an toàn đi chơi bằng xe máy.
                                                                </p>
                                                                <div class="d-flex">
                                                                    <a href="" class="slider-btn1 mr-3">
                                                                        Read More
                                                                    </a>
                                                                    <a href="" class="slider-btn2">
                                                                        Contact Us
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="slider_item-box">
                                        <div class="slider_item-container">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="slider_img-box">
                                                            <div>
                                                                <img src="img/featured/anht2.jpeg"
                                                                    alt="" class="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="slider_item-detail">
                                                            <div>
                                                                <h1>
                                                                    Nón Fullface Yohe 977
                                                                </h1>
                                                                <p>
                                                                    Sau những thành công lớn của mẫu nón Fullface 978 suốt 3
                                                                    năm qua tại VN, hãng mũ bảo hiểm Yohe đã cho ra mắt sản
                                                                    phẩm mới nhất của mình - Mũ bảo hiểm Yohe Fullface 977.
                                                                </p>
                                                                <div class="d-flex">
                                                                    <a href="" class="slider-btn1 mr-3">
                                                                        Read More
                                                                    </a>
                                                                    <a href="" class="slider-btn2">
                                                                        Contact Us
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="slider_item-box">
                                        <div class="slider_item-container">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="slider_img-box">
                                                            <div>
                                                                <img src="img/featured/anht3.jpeg"
                                                                    alt="" class="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="slider_item-detail">
                                                            <div>
                                                                <h1 class="">
                                                                    Găng tay LS2 Dart Man
                                                                </h1>
                                                                <p>
                                                                    Hãng LS2 Tây Ban Nha vừa cho ra mắt đôi găng tay xe máy
                                                                    LS2 Dart Man mới với chất liệu vải thông thoáng, đạt
                                                                    chuẩn an toàn cao cấp của châu Âu. Găng tay LS2 Dart Man
                                                                    thiết kế hiện đại, trẻ trung năng động phù hợp đi dạo
                                                                    phố, đi tour xe máy, moto
                                                                </p>
                                                                <div class="d-flex">
                                                                    <a href="" class="slider-btn1 mr-3">
                                                                        Read More
                                                                    </a>
                                                                    <a href="" class="slider-btn2">
                                                                        Contact Us
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom_carousel-control">
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="bi bi-arrow-left"></span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="bi bi-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Tất cả danh mục</span>
                        </div>
                        <ul>
                            @foreach ($productCategories as $productCategory)
                                <li><a
                                        href="{{ route('tongsanpham', ['categorySlug' => $productCategory->slug]) }}">{{ $productCategory->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



@section('featured-product')
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Một số sản phẩm</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".oranges">Sản Phẩm Mới</li>
                            <li data-filter=".fresh-meat">Sản Phẩm Hot</li>
                            <li data-filter="#">Bán Chạy</li>
                            <li data-filter=".fastfood">Giảm Giá</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">

                @foreach ($products as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                        <div class="featured__item">

                            @php
                                $image = empty($product->image) ? 'image_product_default.png' : $product->image;
                            @endphp

                            <div class="featured__item__pic set-bg" data-setbg="{{ asset('images') . '/' . $image }}">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li>
                                        <a class="abc"
                                            data-url="{{ route('add.product.to.cart', [$product->id, 1]) }}">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">

                                @php $slug = is_null($product->slug) ? '' : $product->slug  @endphp

                                <h6><a href="{{ route('product.detail.slug', [$slug]) }}">{{ $product->name }}</a></h6>
                                <h5>{{ number_format($product->price, 2) }}vnđ</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection


@section('banner')
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/ban2.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/ban1.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('latest-product')
<section class="latest-product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Latest Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/ap1.jpeg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/ap2.jpeg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/ap1.jpeg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/ap2.jpeg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/ap1.jpeg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/ap2.jpeg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Top Rated Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/ap1.jpeg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/ap2.jpeg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/ap1.jpeg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/ap2.jpeg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/ap1.jpeg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/ap2.jpeg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Review Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/ap1.jpeg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/ap2.jpeg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/ap1.jpeg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/ap2.jpeg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/ap1.jpeg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/ap2.jpeg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('from-blog')
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/bl1.jpeg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Cooking tips make cooking simple</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/bl2.jpeg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/bl2.jpeg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

{{-- @section('iconss')
<div class="icons">
    <ul>
        <li><a href=""><i class="bi bi-cloud-fill"></i></a></li>
        <li><a href=""><i class="fa fa-favorite"></i></a></li>
        <li><a href=""><i class="bi bi-paperclip"></i></a></li>
        <li><a href=""><i class="bi bi-laptop-fill"></i></a></li>
    </ul>
</div>
@endsection --}}

{{-- @section('pupup')
    <div class="tbpopup" id="tbpopup-1">
        <div class="tboverlay"></div>
        <div class="tbcontent">
            <div class="tbclose-btn" onclick="thongbaopopup()">&times;</div>
            <div style="font-size:30px;font-weight:bold">Khuyến mãi tết giảm giá 50%</div>
            <p>Kính chào quý khách hàng.</p>
            <p>Chương trình khuyến mãi Tết, <strong>Shopphukienmoto</strong> xin thông báo khuyến mãi <strong>giảm giá
                    từ 10% đến 50%</strong> khi mua sản
                phẩm tại cửa hàng.</p>
            <p>Và để tiện phục vụ từ ngày 29/01/2022 chúng tôi chuyển về địa chỉ mới: <strong>số 67 Nguyễn thị minh
                    khai, Q1 , tpHCM.</strong></p>
            <p>Cám ơn quý khách hàng đã quan tâm và ủng hộ.</p>
        </div>
    </div>
@endsection --}}

@section('my-script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.abc').on('click', function() {
                var url = $(this).data('url');
                $.ajax({
                    type: 'GET', // method of form
                    url: url,
                    success: function(data) {
                        $('#total-price-cart').html('$' + data.total_price);
                        $('#total-items-cart').html(data.total_items);
                        // alert('Them san pham thanh cong !!!');
                        swal("Thành công!", "Thêm sản phẩm thành công !!!", "success");
                    },
                    error: function() {
                        alert('Them san pham that bai !!!');
                    }
                });
            });
        });
    </script>
@endsection
