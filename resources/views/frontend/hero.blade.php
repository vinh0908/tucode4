<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="{{ route('product.list') }}" method="GET">
                            <input type="text" name="name" value="{{ request()->query('name') ?? '' }}" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>0902346055</h5>
                            <span>Hỗ trợ 24/24</span>
                        </div>
                    </div>
                </div>
                {{-- <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                    <div class="hero__text">
                        <span>FRUIT FRESH</span>
                        <h2>Vegetable <br />100% Organic</h2>
                        <p>Free Pickup and Delivery Available</p>
                        <a href="#" class="primary-btn">SHOP NOW</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
