@extends('admin.board.layout')

@section('board')
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
                            <span class="float-right">tháng trước</span>
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
                            <span class="float-right">tháng trước</span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="border bg-secondary p-3 mt-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-white">
                                <strong>Lợi nhuận</strong>
                                <h3 class="text-body">289 $</h3>
                            </div>
                            <img src="https://picsum.photos/50" alt="..." class="rounded-circle">
                        </div>
                            <span class="text-danger">
                                <i class="fas fa-arrow-down"></i> 6% 
                            </span> 
                            <span class="float-right">tháng trước</span>
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
                            <span class="float-right">tháng trước</span>
                    </div>
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
        </div>
    </div>
@endsection