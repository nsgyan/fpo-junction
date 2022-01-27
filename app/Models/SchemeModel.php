<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchemeModel extends Model
{
    use HasFactory;

    protected $table = 'scheme';

    protected $fillable = ['id', 'main_category' , 'lang', 'category', 'title', 'description' , 'document', 'scheme_active' ,'url' , 'status'  , 'created_at' , 'updated_at'];

    protected $primaryKey = 'id';

    public static function update_scheme($id,$data){
        return DB::table('scheme')
          ->where('id', $id)
          ->update($data);
      }
}

