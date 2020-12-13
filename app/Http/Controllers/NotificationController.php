<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Notification;

class NotificationController extends Controller
{
    public function index() 
    {
        $data = Notification::all();
        $title = "Quản lý thông báo";
        $main  = "notification";
        $staticLink = "/admin/notifications/";
        return view('admin.board.notifications.index', compact('staticLink', 'data', 'title', 'main'));
    }

    public function getUpdate($id) 
    {
        $data = Notification::find($id);
        $title = "Sửa thông báo: ";
        $main  = "notification--update";
        return view('admin.board.notifications.update', compact('data', 'title', 'main'));
    }

    public function postUpdate(Request $req, $id) 
    {
        $data = Notification::find($id);
        
        $this->validate($req,
        [
            'content' => 'required|min:10|max:1000'
        ], 
        [
            'content.required' => 'Bạn chưa nhập nội dung thông báo.',
            'content.min' => 'Bạn vui lòng nhập tên thể loại ít nhất có độ dài trên 10 ký tự.',
            'content.max' => 'Bạn vui lòng nhập tên thể loại nhiều nhất có độ dài dưới 1000 ký tự'
        ]);
    
    $data->content = $req->content;
    $data->show = $req->show;
    $data->save();

    return redirect()->route('ViewNotification')->with('message', 'Đã cập nhật thông báo thành công.');
    }

    public function getNew() 
    {
        $title = "Thêm thông báo mới";
        $main  = "notification--new";
        return view('admin.board.notifications.new', compact('title', 'main'));
    }

    public function postNew(Request $req) 
    {
        $data = new Notification;
        
        $this->validate($req,
            [
                'content' => 'required|unique:notifications,content|min:10|max:1000'
            ], 
            [
                'content.required' => 'Bạn chưa nhập nội dung thông báo.',
                'content.unique' => 'Một thông báo tương tự đã tồn tại, vui lòng kiểm tra lại.',
                'content.min' => 'Bạn vui lòng nhập tên thể loại ít nhất có độ dài trên 10 ký tự.',
                'content.max' => 'Bạn vui lòng nhập tên thể loại nhiều nhất có độ dài dưới 1000 ký tự'
            ]);
        
        $data->content = $req->content;
        $data->show = $req->show;
        $data->save();

        return redirect()->route('ViewNotification')->with('message', 'Đã thêm thông báo thành công.');
    }

    public function delete($id)
    {
        $data = Notification::find($id);
        $data->delete();
        return redirect()->route('ViewNotification')->with('message', 'Đã xóa thông báo thành công.');
    }
}
