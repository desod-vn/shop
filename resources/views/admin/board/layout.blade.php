<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    
    <script src="https://kit.fontawesome.com/2d837f5405.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/jquery.dataTables.min.js></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/dataTables.bootstrap4.min.js></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/admin.style.css') }}" />

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                    <a class="nav-link" href="{{ asset('admin') }}"><i class="fas fa-home"></i></a>
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 bg-dark bd-sidebar" id="sidebar">
                <div class="list-group">
                    <h4 class="mt-3 mb-3 text-white">Quản lý chung</h4>
                    <a href="{{ asset('admin/types') }}"class="list-group-item list-group-item-action {{ Request::is('admin/types*') ? 'active' : '' }}">
                        <i class="fas fa-glass-martini"></i> <span class="ml-2">Thư mục</span>
                        <span class="badge badge-primary badge-pill float-right">{{ $types ?? '' }}</span>
                    </a>
                    <a href="{{ asset('admin/notifications') }}"class="list-group-item list-group-item-action {{ Request::is('admin/notifications*') ? 'active' : '' }}">
                        <i class="fas fa-exclamation-circle"></i> <span class="ml-2">Thông báo</span>
                        <span class="badge badge-primary badge-pill float-right">{{ $notifications ?? '' }}</span>
                    </a>
                    <a href="{{ asset('admin/products') }}"class="list-group-item list-group-item-action {{ Request::is('admin/products*') ? 'active' : '' }}">
                        <i class="fas fa-tshirt"></i> <span class="ml-2">Sản phẩm</span>
                        <span class="badge badge-primary badge-pill float-right">{{ $notifications ?? '' }}</span>
                    </a>
                    <a href="#"class="list-group-item list-group-item-action">
                        <i class="fas fa-users"></i> <span class="ml-2">Người dùng</span>
                        <span class="badge badge-primary badge-pill float-right">14</span>
                    </a>
                    
                    <a href="#"class="list-group-item list-group-item-action">
                        <i class="fas fa-comment-dots"></i> <span class="ml-2">Bình luận</span>
                        <span class="badge badge-primary badge-pill float-right">14</span>
                    </a>

                    <h4 class="mt-3 mb-3 text-white">Đơn hàng</h4>

                    <a href="#"class="list-group-item list-group-item-action">
                        <i class="fas fa-shopping-basket"></i> <span class="ml-2">Đơn hàng chờ</span>
                        <span class="badge badge-danger badge-pill float-right">14</span>
                    </a>
                    <a href="#"class="list-group-item list-group-item-action">
                        <i class="fas fa-motorcycle"></i> <span class="ml-2">Tiến trình giao hàng</span>
                        <span class="badge badge-primary badge-pill float-right">14</span>
                    </a>
                    <a href="#"class="list-group-item list-group-item-action">
                        <i class="fas fa-star"></i> <span class="ml-2">Được quan tâm</span>
                        <span class="badge badge-primary badge-pill float-right">14</span>
                    </a>
                    <a href="#"class="list-group-item list-group-item-action">
                        <i class="fas fa-envelope"></i> <span class="ml-2">Tin nhắn</span>
                        <span class="badge badge-primary badge-pill float-right">14</span>
                    </a>
                    <!--
                    <h4 class="mt-3 mb-3 text-white">Ứng dụng</h4>

                    <a href="#"class=" list-group-item list-group-item-action">
                        <i class="fas fa-money-bill-alt"></i> <span class="ml-2">Chuyển đổi</span>
                    </a>
                    <a href="#"class=" list-group-item list-group-item-action">
                        <i class="fas fa-calculator"></i> <span class="ml-2">Máy tính</span>
                    </a>
                    <a href="#"class=" list-group-item list-group-item-action">
                        <i class="fas fa-calendar-week"></i> <span class="ml-2">Xem lịch</span>
                    </a>
                    <a href="#"class=" list-group-item list-group-item-action">
                        <i class="fas fa-pen"></i> <span class="ml-2">Ghi chú</span>
                    </a>
                    -->
                    <br />
                </div>
            </div>
            <div class="col-md-9" id="main">
                
                @yield($main)
                
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function () {
    $('#data--table').DataTable();
    });
</script>  
</html>