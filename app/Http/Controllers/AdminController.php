<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function LoginAdmin () {
        $title = "Đăng nhập với quyền quản trị";
        $main  = "login"; 
        return view('admin.login', compact('title', 'main'));
    }

    public function BoardAdmin () {
        $title = "Quản lý toàn diện";
        $main  = "login"; 
        return view('admin.layout.board', compact('title', 'main'));
    }
}
