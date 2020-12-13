@extends('admin.board.layout')

@section('product')

    <h1 class="border-bottom p-3 mb-3">
      Danh sách sản phẩm
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
                <th scope="col">Ảnh</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Giá</th>
                <th scope="col">Loại</th>
                <th scope="col">Xem</th>
              </tr>
            </thead>
            <tbody>
                
              @foreach ($data as $index=>$item)
              <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td><img src="https://picsum.photos/200" alt="" class="img-fluid" /></td>
                <td>{{ $item->name }}</td>
                <td>{{ Str::limit($item->content, 50) }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->getType->name }}</td>
                <td class="d-flex justify-content-center align-items-center">
                    <a href="{{ asset($item->link) }}" class="btn btn-sm btn-info">Xem</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <a href="{{ asset($staticLink."new") }}" class="btn btn-lg btn-success">Thêm thư mục</a>
@endsection