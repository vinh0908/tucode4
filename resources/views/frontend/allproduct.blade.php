@extends('frontend.layout');

@section('allproduct')
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Toàn bộ sản phẩm</h2>
                    </div>
                </div>

                <div class="col-lg-9">
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

                                        <h6><a href="{{ route('product.detail.slug', [$slug]) }}">{{ $product->name }}</a>
                                        </h6>
                                        <h5>${{ number_format($product->price, 2) }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Tất cả danh mục</span>
                        </div>
                        <ul>
                            @foreach ($productCategories as $productCategory)
                                <li><a href="{{ route('tongsanpham',['categorySlug' => $productCategory->slug]) }}">{{ $productCategory->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('my-script')
<script type="text/javascript">
    $(document).ready(function(){
        $('.abc').on('click',function(){
            var url = $(this).data('url');
            $.ajax({
                type: 'GET', // method of form
                url: url,
                success: function(data){
                    $('#total-price-cart').html('$'+ data.total_price);
                    $('#total-items-cart').html(data.total_items);
                    // alert('Them san pham thanh cong !!!');
                    swal("Thành công!", "Thêm sản phẩm thành công !!!", "success");
                },
                error: function (){
                    alert('Thêm sản phẩm thất bại !!!');
                }
            });
        });
    });
</script>
@endsection
