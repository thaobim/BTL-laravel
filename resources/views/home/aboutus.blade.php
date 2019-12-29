@extends('master.master')
@section('content')
<link rel="stylesheet" href="/css/aboutus.css">
<div class="content">
    <div class="doashboard">
        <div class="text-doashboard">
            <a href="../index.html">HOME</a>
            <span class="brn_arrow">/</span>
            <span class="current">ABOUT US</span>
        </div>
    </div>
    <div class="container">
        <div class="content-aboutus">
            <div class="ourstory">
                <div class="wpb_wrapper">
                    <h1>OUR STORY</h1>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commyolk augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Lorem ipsum dolor sit amet.</p>
                        <p>“ Duis dictum, neque at hendrerit euismod, elit nulla mattis mi, vel auctor sem dolor nec nisl. Etiam hendrerit arcu pretium, aliquet nulla eu, placerat ipsum. Nullam suscipit nulla a sapien gravida euismod.”</p>
                        <p>Etiam nulla nunc, aliquet vel metus nec, scelerisque tempus enim. Sed eget blandit lectus. Donec facilisis ornare turpis id pretium. Maecenas scelerisque interdum dolor in vestibulum. Proin euismod dui purus, non lacinia ligula luctus aIn volutpat cursus.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="picture">
                            <img src="../images/aboutus/about-story-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="ourskill">
                <div class="wpb_wrapper">
                    <h1>OUR STORY</h1>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="skill">
                            <h6>WORDPRESS</h6>
                            <div class="progress progress-heigh">
                                <div class="progress-bar progress-color" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill">
                            <h6>PHOTOSHOP</h6>
                            <div class="progress progress-heigh">
                                <div class="progress-bar progress-color" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill">
                            <h6>HTML/CSS</h6>
                            <div class="progress progress-heigh">
                                <div class="progress-bar progress-color" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <h6>OTHER</h6>
                        <div class="skill">
                            <div class="progress progress-heigh">
                                <div class="progress-bar progress-color" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <p>Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Lorem ipsum dolor sit amet.Aliquam ornare hendrerit augue. Cras tellusCras tellus.</p>
                        <p>
                            Proin euismod dui purus, non lacinia ligula. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Maecenas scelerisque interdum dolor in vestibulum. Proin euismod dui purus, non lacinia ligula luctus aIn volutpat cursus quam, a blandit neque accumsan vitae.
                        </p>
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable.There are many variations of passages of Lorem Ipsum available.
                        </p>
                    </div>
                </div>
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
