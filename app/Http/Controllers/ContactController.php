<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }
    public function index()
    {
        $opj = new Contact();
        $this->v['list_contact'] = $opj->loadList();
        return view("admin/contact.index", $this->v,);
    }
    public function add(Request $request)
    {
        $method_route = 'contact';
        if ($request->isMethod('post')) {
            $param = [];
            $param['cols'] = $request->post();
            unset($param['cols']['_token']);
            $modelTest = new Contact();
            $res = $modelTest->saveNew($param);
            if ($res == null) {
                return redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success', 'Thêm thành công');
            } else {
                Session::flash('error', 'Lỗi thêm mới người dùng');
                return redirect()->route($method_route);
            }
        }
        return view("client.contact", $this->v);
    }
    public function deleteContact($id)
    {
        $opj = new Contact();
        $this->v['list_contact'] = $opj->deleteContact($id);
        return back();
    }
}
