<?php

namespace App\Http\Controllers;

use App\Models\Kind_of_room;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Kind_of_roomRequest;
use Illuminate\Support\Facades\Redirect;

class Kind_of_roomController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }
    public function index()
    {
        $opj = new Kind_of_room();
        $this->v['list_kind_of_room'] = $opj->loadListKind();
        return view("admin/kind_of_room.index", $this->v);
    }
    public function add(Kind_of_roomRequest $request)
    {

        $method_route = 'Kind_of_room_add';
        if ($request->isMethod('post')) {
            $param = [];
            $param['cols'] = $request->post();
            unset($param['cols']['_token']);
            $modelTest = new Kind_of_room();
            $res = $modelTest->saveNew($param);
            if ($res = null) {
                return redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success', 'Them moi thanh cong');
            } else {
                Session::flash('error', 'Loi them moi nguoi dung');
                return redirect()->route($method_route);
            }
        }
        return view("admin/Kind_of_room.add", $this->v);
    }
    public function edit($id)
    {
        $tests = new Kind_of_room();
        $objItem = $tests->loadOne($id);
        $this->v['objItem'] = $objItem;
        return view("admin/Kind_of_room.edit", $this->v);
    }
}
