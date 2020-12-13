@extends('admin.board.layout')

@section('type')

    <h1 class="border-bottom p-3 mb-3">
      Quản lý thư mục
    </h1>
      @if(session('message'))
        <div class="alert alert-info">
          {{ session('message') }}
        </div>
      @endif    
        <table id="data--table" class="table table-hover table-bordered">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tên thư mục</th>
                <th scope="col">Đường dẫn </th>
                <th scope="col">Hành động</th>
              </tr>
            </thead>
            <tbody>
                
              @foreach ($data as $index=>$item)
              <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->link }}</td>
                <td class="d-flex justify-content-between align-items-center">
                    <a href="{{ asset($staticLink."update/".$item->id) }}" class="btn btn-sm btn-primary">Sửa</a>
                    <a href="{{ asset($staticLink."delete/".$item->id) }}" class="btn btn-sm btn-danger">Xóa</a>
                    <a href="{{ asset($item->link) }}" class="btn btn-sm btn-info">Xem</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <a href="{{ asset($staticLink."new") }}" class="btn btn-lg btn-success">Thêm thư mục</a>
@endsection