@extends('admin.layout.master')

@section('login')
    <div class="wraper">
        <div class="box">
            <div class="box--start">
                Đăng nhập
            </div>
            <form>
                <input type="text" id="username" name="login" placeholder="username">
                <input type="password" id="password" name="login" placeholder="password">
                <input type="submit" value="Log In">
            </form>
            <div class="box--pause">
                <a href="#">Quên mật khẩu?</a>
            </div>
            <div class="box--slide">
                <div class="line"></div>
                <div class="text">HOẶC</div>
                <div class="line"></div>
            </div>
            <a class="through--fb" href="#"><i class="fab fa-facebook-square"></i> Facebook</a>
            <a class="through--gg" href="#"><i class="fab fa-google"></i> Google</a>
            <div class="box--end">
                Nếu chưa có tài khoản? <a href="#">Đăng ký</a>
            </div>
        </div>    
    </div>    




@endsection
