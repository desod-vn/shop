@extends('admin.board.layout')

@section('notification--new')

    <h1 class="border-bottom p-3 mb-3">
        Thêm thông báo mới
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
                <label for="content">Nội dung thông báo: </label>
                <br />
                <textarea class="form-control" rows="5" id="content" name="content"></textarea>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="show" id="show" value="1" checked>
                <label class="form-check-label" for="show">
                  Hiện thông báo
                </label>
              </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="show" id="hidden" value="0">
                <label class="form-check-label" for="hidden">
                  Ẩn thông báo
                </label>
            </div>
            <br />
            <button type="submit" class="btn btn-lg btn-primary mr-2">Thêm thông báo</button>
        </form>
@endsection

