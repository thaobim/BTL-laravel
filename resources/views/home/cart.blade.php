@extends('master.master')
@section('content')
<link rel="stylesheet" href="/css/cart.css">
<div class="content">
    <div class="doashboard">
        <div class="text-doashboard">
            <a href="../index.html">HOME</a>
            <span class="brn_arrow">/</span>
            <span class="current">MY CART</span>
        </div>
    </div>
    <div class="container">
        <div class="table-shop">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Sản phẩm</th>
                        <th scope="col">Giá tiền</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Tổng số tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-myproduct">
                            <div class="delete">
                                <span><i class="fas fa-times"></i></span>
                            </div>
                            <div class="product-cart">
                                <img src="../images/sanphamyeuthich/sanpham3.1.jpg" alt="">
                            </div>
                        </td>
                        <td>Dâu tây đỏ</td>
                        <td>100.000 VNĐ</td>
                        <td>
                            <input type="button" value="-" class="minus">
                            <input type="text" value="1" class="number">
                            <input type="button" value="+" class="plus">
                        </td>
                        <td>200.000 VNĐ</td>
                    </tr>
                    <tr>
                        <td colspan="6">
                            <div class="actions">
                                <div class="coupon">
                                    <input type="text" placeholder="Mã giảm giá">
                                    <button class="btn btn-success">Áp dụng</button>
                                </div>
                                <div class="update">
                                    <button class="btn btn-success">Cập nhật giỏ hàng</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="checkout">
                <button class="btn btn-success shopnow"><a href="">Thanh toán <i class="fas fa-angle-double-right"></i></a></button>
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
