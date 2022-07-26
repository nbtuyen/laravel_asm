<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kind_of_room extends Model
{
    use HasFactory;
    protected $table = "kind_of_room";
    protected $fillable = ['id', 'name', 'status', 'created_at', 'updated_at'];
    // public function loadList($param = [])
    // {
    //     $query = DB::table($this->table)
    //         ->select($this->fillable)
    //         ->where('id', '>', 2);

    //     $lists = $query->get();
    //     return $lists;
    // }
    public function loadList($param = [])
    {
        $query = DB::table($this->table)
            ->select($this->fillable);
        $lists = $query->paginate(10);
        return $lists;
    }
    public function saveNew($param)
    {
        $data = array_merge(
            $param['cols']
        );
        $res = DB::table($this->table)->insertGetId($data);
        return $res;
    }
}