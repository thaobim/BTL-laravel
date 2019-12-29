@extends('master.master')
@section('content')
<link rel="stylesheet" href="/css/blog.css">
<div class="content">
    <div class="doashboard">
        <div class="text-doashboard">
            <a href="../index.html">HOME</a>
            <span class="brn_arrow">/</span>
            <span class="current">BLOG</span>
        </div>
    </div>
    <div class="container">
        <div class="list-post">
            <div class="row">
                <div class="col-md-4">
                    <div class="first-child">
                        <div class="img-post">
                            <img src="../images/blog/anh2.jpg" alt="">
                        </div>
                        <div class="content-post-blog">
                            <h3>Bữa cơm nhiều màu sắc giúp ngừa ung thư</h3>
                            <p><span><i class="far fa-calendar-alt"></i> 10/05/2019</span></p>
                            <p>Suspendisse ac quam sed massa tincidunt blandit. Cras aliquam mi sit amet justo rutrum, at dignissim</p>
                            <button class="btn btn-readmore"><a href="../html/viewpost.html">Xem chi tiết</a> <i class="fas fa-angle-double-right"></i></button>
                        </div>
                    </div>
                    <div class="last-child">
                        <div class="img-post">
                            <img src="../images/blog/anh5.jpg" alt="">
                        </div>
                        <div class="content-post-blog">
                            <h3>Bữa cơm nhiều màu sắc giúp ngừa ung thư</h3>
                            <p><span><i class="far fa-calendar-alt"></i> 10/05/2019</span></p>
                            <p>Suspendisse ac quam sed massa tincidunt blandit. Cras aliquam mi sit amet justo rutrum, at dignissim</p>
                            <button class="btn btn-readmore"><a href="../html/viewpost.html">Xem chi tiết</a> <i class="fas fa-angle-double-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="first-child">
                        <div class="img-post post2">
                            <img src="../images/blog/khoai-tay.jpg" alt="">
                        </div>
                        <div class="content-post-blog">
                            <h3>Bữa cơm nhiều màu sắc giúp ngừa ung thư</h3>
                            <p><span><i class="far fa-calendar-alt"></i> 10/05/2019</span></p>
                            <p>Suspendisse ac quam sed massa tincidunt blandit. Cras aliquam mi sit amet justo rutrum, at dignissim</p>
                            <button class="btn btn-readmore"><a href="../html/viewpost.html">Xem chi tiết</a> <i class="fas fa-angle-double-right"></i></button>
                        </div>
                    </div>
                    <div class="last-child">
                        <div class="img-post post2">
                            <img src="../images/blog/anh4.jpg" alt="">
                        </div>
                        <div class="content-post-blog">
                            <h3>Bữa cơm nhiều màu sắc giúp ngừa ung thư</h3>
                            <p><span><i class="far fa-calendar-alt"></i> 10/05/2019</span></p>
                            <p>Suspendisse ac quam sed massa tincidunt blandit. Cras aliquam mi sit amet justo rutrum, at dignissim</p>
                            <button class="btn btn-readmore"><a href="../html/viewpost.html">Xem chi tiết</a> <i class="fas fa-angle-double-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="first-child">
                        <div class="img-post post3">
                            <img src="../images/blog/anh3.jpg" alt="">
                        </div>
                        <div class="content-post-blog">
                            <h3>Bữa cơm nhiều màu sắc giúp ngừa ung thư</h3>
                            <p><span><i class="far fa-calendar-alt"></i> 10/05/2019</span></p>
                            <p>Suspendisse ac quam sed massa tincidunt blandit. Cras aliquam mi sit amet justo rutrum, at dignissim</p>
                            <button class="btn btn-readmore"><a href="../html/viewpost.html">Xem chi tiết</a> <i class="fas fa-angle-double-right"></i></button>
                        </div>
                    </div>
                    <div class="last-child">
                        <div class="img-post post">
                            <img src="../images/blog/anh6.jpg" alt="">
                        </div>
                        <div class="content-post-blog">
                            <h3>Bữa cơm nhiều màu sắc giúp ngừa ung thư</h3>
                            <p><span><i class="far fa-calendar-alt"></i> 10/05/2019</span></p>
                            <p>Suspendisse ac quam sed massa tincidunt blandit. Cras aliquam mi sit amet justo rutrum, at dignissim</p>
                            <button class="btn btn-readmore"><a href="../html/viewpost.html">Xem chi tiết</a> <i class="fas fa-angle-double-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-viewmore">
            <button class="btn btn-success">Xem nhiều hơn <br> <span><i class="fas fa-angle-double-down"></i></span></button>
        </div>
        </div>


        <div class="brand">
            <div class="title-product">
                <h1>Thương hiệu</h1>
                <p>Chúng tôi là thị trường thực phẩm hữu cơ trực tuyến</p>
            </div>
            <div class="container">
                <div class="img-brand">
                    <span><img src="../images/thuonghieu/anh1.png" alt=""></span>
                    <span><img src="../images/thuonghieu/anh2.png" alt=""></span>
                    <span><img src="../images/thuonghieu/anh3.png" alt=""></span>
                    <span><img src="../images/thuonghieu/anh4.png" alt=""></span>
                    <span><img src="../images/thuonghieu/anh5.png" alt=""></span>
                    <span><img src="../images/thuonghieu/anh6.png" alt=""></span>
                </div>

            </div>
        </div>
        <div class="subscibe">
            <div class="title-product">
                <h1>Nhận tin mới từ Organic</h1>
                <p>Chúng tôi là thị trường thực phẩm hữu cơ trực tuyến</p>
            </div>
            <div class="container">
                <div class="box-sub">
                    <input type="text" placeholder="Email của bạn"><br>
                    <button class="btn btn-success subscibe">Subscibe</button>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
