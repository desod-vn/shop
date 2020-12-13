@extends('admin.board.layout')

@section('type--new')

    <h1 class="border-bottom p-3 mb-3">
        Thêm thư mục mới
    </h1>
        @if(count($errors) > 0)
            <div class="alert alert-warning">
                @foreach ($errors->all() as $error)
                    {{ $error }} <br />                    
                @endforeach
            </div>
        @endif
        <form method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Tên thư mục: </label>
                <br />
                <input type="text" class="form-control" name="name" id="name" value="" 
                placeholder="Điền tên thư mục" />
              </div>
              <button type="submit" class="btn btn-lg btn-primary mr-2">Thêm thư mục</button>
              <button type="reset" class="btn btn-lg btn-secondary">Làm mới</button>
        </form>
@endsection