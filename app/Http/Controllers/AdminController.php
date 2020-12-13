<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Type;

use App\Models\Notification;

class AdminController extends Controller
{
    public function LoginAdmin () {
        $title = "Đăng nhập với quyền quản trị";
        $main  = "login"; 
        return view('admin.login', compact('title', 'main'));
    }

    public function BoardAdmin () {
        $title = "Quản lý toàn diện";
        $main  = "board";
        $types = count(Type::all());
        $notifications = count(Notification::all());
        return view('admin.board.index', compact('notifications', 'types', 'title', 'main'));
    }
}
