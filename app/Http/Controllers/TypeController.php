<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Type;

use Illuminate\Support\Str;

class TypeController extends Controller
{
    public function index() 
    {
        $data = Type::all();
        $title = "Quản lý thư mục";
        $main  = "type";
        $staticLink = "/admin/types/";
        return view('admin.board.types.index', compact('staticLink', 'data', 'title', 'main'));
    }

    public function getUpdate($id) 
    {
        $data = Type::find($id);
        $title = "Sửa thư mục: " . $data->name;
        $main  = "type--update";
        return view('admin.board.types.update', compact('data', 'title', 'main'));
    }

    public function postUpdate(Request $req, $id) 
    {
        $data = Type::find($id);
        
        $this->validate($req,
            [
                'name' => 'required|unique:types,name|min:3|max:100'
            ], 
            [
                'name.required' => 'Bạn chưa nhập tên thể loại.',
                'name.unique' => 'Tên thể loại đã tồn tại, vui lòng kiểm tra lại.',
                'name.min' => 'Bạn vui lòng nhập tên thể loại ít nhất có độ dài trên 3 ký tự.',
                'name.max' => 'Bạn vui lòng nhập tên thể loại nhiều nhất có độ dài dưới 100 ký tự'
            ]);
        
        $data->name = $req->name;
        $data->link = Str::slug($data->name, '-');
        $data->save();

        return redirect()->route('ViewType')->with('message', 'Đã cập nhật thư mục thành công.');
    }

    public function getNew() 
    {
        $title = "Thêm thư mục mới";
        $main  = "type--new";
        return view('admin.board.types.new', compact('title', 'main'));
    }

    public function postNew(Request $req) 
    {
        $data = new Type;
        
        $this->validate($req,
            [
                'name' => 'required|unique:types,name|min:3|max:100'
            ], 
            [
                'name.required' => 'Bạn chưa nhập tên thể loại.',
                'name.unique' => 'Tên thể loại đã tồn tại, vui lòng kiểm tra lại.',
                'name.min' => 'Bạn vui lòng nhập tên thể loại ít nhất có độ dài trên 3 ký tự.',
                'name.max' => 'Bạn vui lòng nhập tên thể loại nhiều nhất có độ dài dưới 100 ký tự'
            ]);
        
        $data->name = $req->name;
        $data->link = Str::slug($data->name, '-');
        $data->save();

        return redirect()->route('ViewType')->with('message', 'Đã tạo thư mục thành công.');
    }

    public function getDelete($id)
    {
        $data = Type::find($id);
        $title = "Xóa thư mục: " . $data->name;
        $main  = "type--delete";
        $staticLink = "/admin/types/";
        return view('admin.board.types.delete', compact('staticLink', 'data', 'title', 'main'));
    }

    public function delete($id)
    {
        $data = Type::find($id);
        $data->delete();
        return redirect()->route('ViewType')->with('message', 'Đã xóa thư mục thành công.');
    }


}
