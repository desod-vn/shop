@extends('admin.board.layout')

@section('type--delete')

    <h1 class="border-bottom p-3 mb-3">
        Xóa thư mục: <small>{{ $data->name }}</small>
    </h1>
    <div class="alert alert-info mb-2">
        Bạn có chắc chắn muốn xóa thư mục này. Sau khi xóa mọi bài viết, sản phẩm, thông tin
        thuộc thư mục này cũng sẽ bị xóa.
    </div>
        <a href="{{ asset($staticLink."delete-sure/".$data->id) }}" class="btn btn-lg btn-danger mr-2">Xóa</a>
        <a href="{{ asset($staticLink) }}" class="btn btn-lg btn-primary">Quay lại</a>
@endsection