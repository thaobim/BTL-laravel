@extends('master.master')
@section('content')
<div class="content">
    <div class="doashboard">
        <div class="text-doashboard">
            <a href="../index.html">HOME</a>
            <span class="brn_arrow">/</span>
            <span class="current">MY ACCOUNT</span>
        </div>
    </div>
    <div class="container">
        <div class="form">
            <div class="row">
                <div class="col-md-6">
                    <h5>LOGIN</h5>
                    <p><b>Username or email address <span style="color: #82b53f">*</span></b></p>
                    <input type="text">
                    <p><b>Password <span style="color: #82b53f">*</span></b></p>
                    <input type="text">
                    <p class="btn-login">
                        <span><button class="btn btn-success">LOG IN</button></span>
                        <span><input type="checkbox"></span><b> Remember me</b>
                        <p><a href="">Lost your password?</a></p>
                    </p>

                </div>
                <div class="col-md-6">
                    <h5>REGISTER</h5>
                    <p><b>Email address <span style="color: #82b53f">*</span></b></p>
                    <input type="text">
                    <p><b>Password <span style="color: #82b53f">*</span></b></p>
                    <input type="text">
                    <div class="checkbox">
                        <input type="radio" name="checked"><b> I am a customer</b><br>
                        <input type="radio" name="checked"><b> I am a customer</b><br><br>
                        <input type="checkbox" name=checked"><b> Apply to become a vendor? </b> <br>
                    </div>
                    <button class="btn btn-success btn-register">REGISTER</button>
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
