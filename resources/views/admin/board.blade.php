@extends('admin.layout.master')

@section('board')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline mr-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
            </form>

            <ul class="navbar-nav">
                <li class="nav-item mr-3">
                    <a class="nav-link" href="#"><i class="fas fa-home"></i></a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="#"><i class="fas fa-cog"></i></a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="#"><i class="fas fa-flag"></i></a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="#"><i class="fas fa-bell"></i></a>
                </li>
            </ul>

        </div>
        <div class="d-inline p-2 bg-primary text-white">
            <img src="https://picsum.photos/30" class="img-fluid mr-auto rounded-circle" alt="...">
            <small class="ml-1">Thắng Vương</small>
        </div>
    </nav>
    <div class="mt-5 container-fluid">
        <div class="row">
            <div class="col-md-3 bg-dark bd-sidebar" id="sidebar">
                <div class="list-group">
                    <h4 class="mt-3 mb-3 text-white">Quản lý chung</h4>
                    <div class="list-group-item">
                        <i class="fas fa-glass-martini"></i> <span class="ml-2">Loại sản phẩm</span>
                        <span class="badge badge-primary badge-pill float-right">14</span>
                    </div>
                    <div class="list-group-item">
                        <i class="fas fa-exclamation-circle"></i> <span class="ml-2">Thông báo</span>
                        <span class="badge badge-primary badge-pill float-right">14</span>
                    </div>
                    <div class="list-group-item">
                        <i class="fas fa-users"></i> <span class="ml-2">Người dùng</span>
                        <span class="badge badge-primary badge-pill float-right">14</span>
                    </div>
                    <div class="list-group-item">
                        <i class="fas fa-tshirt"></i> <span class="ml-2">Danh sách sản phẩm</span>
                        <span class="badge badge-primary badge-pill float-right">14</span>
                    </div>
                    <div class="list-group-item">
                        <i class="fas fa-comment-dots"></i> <span class="ml-2">Bình luận</span>
                        <span class="badge badge-primary badge-pill float-right">14</span>
                    </div>

                    <h4 class="mt-3 mb-3 text-white">Đơn hàng</h4>

                    <div class="list-group-item">
                        <i class="fas fa-shopping-basket"></i> <span class="ml-2">Đơn hàng chờ</span>
                        <span class="badge badge-danger badge-pill float-right">14</span>
                    </div>
                    <div class="list-group-item">
                        <i class="fas fa-motorcycle"></i> <span class="ml-2">Tiến trình giao hàng</span>
                        <span class="badge badge-primary badge-pill float-right">14</span>
                    </div>
                    <div class="list-group-item">
                        <i class="fas fa-star"></i> <span class="ml-2">Được quan tâm</span>
                        <span class="badge badge-primary badge-pill float-right">14</span>
                    </div>
                    <div class="list-group-item">
                        <i class="fas fa-envelope"></i> <span class="ml-2">Tin nhắn</span>
                        <span class="badge badge-primary badge-pill float-right">14</span>
                    </div>
                    <!--
                    <h4 class="mt-3 mb-3 text-white">Ứng dụng</h4>

                    <div class="list-group-item">
                        <i class="fas fa-money-bill-alt"></i> <span class="ml-2">Chuyển đổi</span>
                    </div>
                    <div class="list-group-item">
                        <i class="fas fa-calculator"></i> <span class="ml-2">Máy tính</span>
                    </div>
                    <div class="list-group-item">
                        <i class="fas fa-calendar-week"></i> <span class="ml-2">Xem lịch</span>
                    </div>
                    <div class="list-group-item">
                        <i class="fas fa-pen"></i> <span class="ml-2">Ghi chú</span>
                    </div>
                    -->
                    <br />
                </div>
            </div>
            <div class="col-md-9" id="main">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="mr-3 mt-4">Thống kê khách hàng</h4>
                            </div>
                            <div class="col-sm-6">
                                <div class="border bg-secondary p-3 mt-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="text-white">
                                            <strong>Khách truy cập</strong>
                                            <h3 class="text-body">33.000</h3>
                                        </div>
                                        <img src="https://picsum.photos/50" alt="..." class="rounded-circle">
                                    </div>
                                        <span class="text-success">
                                            <i class="fas fa-arrow-up"></i> 3% 
                                        </span> 
                                        <span class="float-right">so với tháng trước</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="border bg-secondary p-3 mt-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="text-white">
                                            <strong>Đơn hàng</strong>
                                            <h3 class="text-body">2.420</h3>
                                        </div>
                                        <img src="https://picsum.photos/50" alt="..." class="rounded-circle">
                                    </div>
                                        <span class="text-danger">
                                            <i class="fas fa-arrow-down"></i> 6% 
                                        </span> 
                                        <span class="float-right">so với tháng trước</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="border bg-secondary p-3 mt-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="text-white">
                                            <strong>Lợi nhuận</strong>
                                            <h3 class="text-body">39.000.000</h3>
                                        </div>
                                        <img src="https://picsum.photos/50" alt="..." class="rounded-circle">
                                    </div>
                                        <span class="text-danger">
                                            <i class="fas fa-arrow-down"></i> 6% 
                                        </span> 
                                        <span class="float-right">so với tháng trước</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="border bg-secondary p-3 mt-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="text-white">
                                            <strong>Người dùng mới</strong>
                                            <h3 class="text-dark">1.932</h3>
                                        </div>
                                        <img src="https://picsum.photos/50" alt="..." class="rounded-circle">
                                    </div>
                                        <span class="text-success">
                                            <i class="fas fa-arrow-up"></i> 29% 
                                        </span> 
                                        <span class="float-right">so với tháng trước</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 bg-warning p-3 m-2">
                                <h3 class="text-white">Mới cập nhật</h3>
                            </div>
                            <div class="col-sm-12 border ml-2 mr-2 p-3">
                                abc
                                <hr />
                                abc
                                <hr />
                                abc
                                <hr />
                                abc
                                <hr />
                                abc
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="mt-4">Phân tích khách hàng</h4>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="alert alert-success mt-4" role="alert">
                                <h4 class="alert-heading">Sản phẩm ưu thích</h4>
                                <hr>
                                <p>
                                    Hiện tại, với số lượt lớn xem qua và đặt hàng của các sản phẩm 
                                    <ul>
                                        <li>Quần jean nam hàn quốc</li>
                                        <li>Quần tây nam </li>
                                        <li>Combo quần lót nam</li>
                                        <li>Áo sweater mùa đông</li>
                                        <li>Quần đùi bộ thể thao </li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="p-3 border mb-3">
                                    Sản phẩm có giá trung bình được mua: <h5 class="text-danger">200.000</h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="p-3 border mb-3">
                                    Đơn hàng có giá trung bình được mua: <h5 class="text-danger">700.000</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="border bg-info p-3">
                                    <h2 class=" d-flex justify-content-center align-items-center">
                                        <i class="fas fa-calendar-week"></i>
                                    </h2>
                                    <h5 class="text-white text-center">XEM LỊCH</h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="border bg-info p-3">
                                    <h2 class=" d-flex justify-content-center align-items-center">
                                        <i class="fas fa-pen"></i>
                                    </h2>
                                    <h5 class="text-white text-center">GHI CHÚ</h5>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection