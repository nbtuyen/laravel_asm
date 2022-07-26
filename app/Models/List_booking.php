<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class List_booking extends Model
{
    use HasFactory;
    protected $table = "list_booking";
    protected $fillable = ['id', 'id_user', 'id_room', 'checkin_date', 'checkout_date', 'id_service', 'quantity', 'created_at', 'updated_at'];
    public function saveNew($param = [])
    {
        $data = array_merge(
            $param['cols']
        );
        $res = DB::table($this->table)->insertGetId($data);
        return $res;
    }
    public function loadList1()
    {
        $query = DB::table($this->table)
            ->select($this->fillable);
        $lists = $query->paginate(10);
        return $lists;
    }
    public function loadList($id_user)
    {
        $query = DB::table($this->table)
            ->where('id_user', '=', $id_user);
        $lists = $query->paginate(10);
        return $lists;
    }
    public function bookingDetail($id)
    {
        $query = DB::table($this->table)
            ->where('id', '=', $id);
        $lists = $query->first();
        return $lists;
    }
    public function deleteBooking($id)
    {
        $query = DB::table($this->table)
            ->where('id', '=', $id);
        $lists = $query->delete();
        return $lists;
    }
}
