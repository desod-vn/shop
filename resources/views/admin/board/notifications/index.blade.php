@extends('admin.board.layout')

@section('notification')

    <h1 class="border-bottom p-3 mb-3">
      Quản lý thông báo
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
                <th scope="col">TT</th>
                <th scope="col">Thông báo</th>
                <th scope="col">Hành động</th>
              </tr>
            </thead>
            <tbody>
                
              @foreach ($data as $index=>$item)
              <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td class="text-center">
                    @if($item->show)
                        <i class="text-success fas fa-eye"></i>
                    @else
                        <i class="fas fa-eye-slash"></i>
                    @endif
                </td>
                <td>{{ $item->content }}</td>
                <td class="d-flex justify-content-between align-items-center">
                    <a href="{{ asset($staticLink."update/".$item->id) }}" class="btn btn-sm btn-primary">Sửa</a>
                    <a href="{{ asset($staticLink."delete/".$item->id) }}" class="btn btn-sm btn-danger">Xóa</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <a href="{{ asset($staticLink."new") }}" class="btn btn-lg btn-success">Thêm thông báo</a>
@endsection