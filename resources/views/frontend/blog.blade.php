@extends('frontend.layout')

@section('blog')
    <!-- Breadcrumb Section Begin -->
    {{-- <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Blog</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Home</a>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-4 col-md-5">
                <div class="blog__sidebar">
                    <div class="blog__sidebar__search">
                        <form action="#">
                            <input type="text" placeholder="Search...">
                            <button type="submit"><span class="icon_search"></span></button>
                        </form>
                    </div>
                    <div class="blog__sidebar__item">
                        <h4>Categories</h4>
                        <ul>
                            <li><a href="#">All</a></li>
                            <li><a href="#">Beauty (20)</a></li>
                            <li><a href="#">Food (5)</a></li>
                            <li><a href="#">Life Style (9)</a></li>
                            <li><a href="#">Travel (10)</a></li>
                        </ul>
                    </div>
                    <div class="blog__sidebar__item">
                        <h4>Recent News</h4>
                        <div class="blog__sidebar__recent">
                            <a href="#" class="blog__sidebar__recent__item">
                                <div class="blog__sidebar__recent__item__pic">
                                    <img src="img/blog/sidebar/sr-1.jpg" alt="">
                                </div>
                                <div class="blog__sidebar__recent__item__text">
                                    <h6>09 Kinds Of Vegetables<br /> Protect The Liver</h6>
                                    <span>MAR 05, 2019</span>
                                </div>
                            </a>
                            <a href="#" class="blog__sidebar__recent__item">
                                <div class="blog__sidebar__recent__item__pic">
                                    <img src="img/blog/sidebar/sr-2.jpg" alt="">
                                </div>
                                <div class="blog__sidebar__recent__item__text">
                                    <h6>Tips You To Balance<br /> Nutrition Meal Day</h6>
                                    <span>MAR 05, 2019</span>
                                </div>
                            </a>
                            <a href="#" class="blog__sidebar__recent__item">
                                <div class="blog__sidebar__recent__item__pic">
                                    <img src="img/blog/sidebar/sr-3.jpg" alt="">
                                </div>
                                <div class="blog__sidebar__recent__item__text">
                                    <h6>4 Principles Help You Lose <br />Weight With Vegetables</h6>
                                    <span>MAR 05, 2019</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="blog__sidebar__item">
                        <h4>Search By</h4>
                        <div class="blog__sidebar__item__tags">
                            <a href="#">Apple</a>
                            <a href="#">Beauty</a>
                            <a href="#">Vegetables</a>
                            <a href="#">Fruit</a>
                            <a href="#">Healthy Food</a>
                            <a href="#">Lifestyle</a>
                        </div>
                    </div>
                </div>
            </div> --}}
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Blog</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="https://thunggivi.vn/wp-content/uploads/2018/04/Exciter-150-Gan-Thung-Givi-2.jpg"
                                        alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Gắn Thùng Xe Exciter 155 Ở Đâu??? Phụ Kiện Phượt</a></h5>
                                    <p>Hiện tại số lượng xe Ex155 ra thị trường khá nhiều !!! Nhưng kiếm đâu ra điểm có thể
                                        làm baga đẹp , chắc chắn để buộc balo hoặc gắn thùng??? Qua đơn giản nha!!! Các bạn
                                        có thể search Phụ Kiện Phượt để ghé shop hoặc alo 0938484186 cho Mr.VŨ . Đảm bảo đây
                                        là điểm gắn thùng gắn baga rất tuyệt với !!! </p>
                                    <a href="#" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="https://thunggivi.vn/wp-content/uploads/2018/04/Exciter-150-Gan-Thung-Givi-2.jpg"
                                        alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Tại Sao Nên Mua Nón 1/2 KYT Tiger Jet Tại Phụ Kiện Phượt !!!!</a>
                                    </h5>
                                    <p>Khi mua nón Kyt Tiger Jet 1/2 đầu tại Phụ Kiện Phượt các bạn có thể lựa chọn màu kình
                                        ( trong hoặc đen ). Ngoài ra với sự sáng tạo không ngừng Phụ Kiện Phượt còn thiết kế
                                        riêng lưỡi trai để tặng quý Khách hàng nhầm mục đích đạp ứng đầy đủ nhu cầu của quý
                                        Khách hàng. Giá cả cực kỳ hợp lý và shop luôn </p>
                                    <a href="#" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="https://thunggivi.vn/wp-content/uploads/2018/04/Exciter-150-Gan-Thung-Givi-2.jpg"
                                        alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Thùng Givi Gắn Các Loại Xe Moto!!!</a></h5>
                                    <p>Bạn có 1 chiếc moto thật đẹp và muốn lên thùng xe ?? ? Ghé shopphukienmoto để được tư
                                        vấn và hỗ trợ lắp đặt bao đẹp . Xem thật nhiều hình ảnh thùng givi gắn xe moto để có
                                        nhiều lựa chọn !!!

                                    </p>
                                    <a href="#" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="https://thunggivi.vn/wp-content/uploads/2018/04/Exciter-150-Gan-Thung-Givi-2.jpg"
                                        alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Thùng Givi , Thùng Sau Givi , Thùng 2 Bên Givi Các Loại Xe</a>
                                    </h5>
                                    <p>Hôm nay shopphukienmot xin gửi đến ae biker muốn lên thùng givi 10 chiếc xe gắn thùng
                                        tại shop để mọi người có thể cảm nhận việc lên thùng givi cho từng loại xe như thế
                                        nào !!!!

                                    </p>
                                    <a href="#" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="https://thunggivi.vn/wp-content/uploads/2018/04/Exciter-150-Gan-Thung-Givi-2.jpg"
                                        alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Thùng Givi , Thùng Moto Xe Máy !!!</a></h5>
                                    <p>Bạn muốn lên thùng xe để chưa đồ ??? Nhưng chưa biết lựa chọn thương hiệu thùng
                                        nào??? Cửa hàng nào uy tín ??? Shop xin giới thiệu đến bạn thương hiệu thùng uy tín
                                        nhất Việt Nam cũng như Thế Giới đó là Thùng Givi . Còn các bạn muốn xem trực tiếp
                                        thùng givi hoặc muốn được tư vấn về thùng Givi thì có </p>
                                    <a href="#" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="https://thunggivi.vn/wp-content/uploads/2018/04/Exciter-150-Gan-Thung-Givi-2.jpg"
                                        alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Áo Giáp TAICHI RSJ307 AIR PARKA</a></h5>
                                    <p>Cửa hàng chuyên cung cấp các trang phục bảo hộ và phụ kiện mô tô như: áo khoác moto,
                                        mũ bảo hiểm, găng tay, giày bảo hộ, áo mưa, túi cứng moto, ba lô... từ các thương
                                        hiệu nổi tiếng trên thế giới như Komine, Taichi, Givi, HJC, v.v.</p>
                                    <a href="#" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="product__pagination blog__pagination">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection
