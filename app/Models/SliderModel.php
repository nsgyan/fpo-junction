<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
{
    use HasFactory;

    protected $table = 'add_slider';

    protected $fillable = ['slider_id', 'title', 'lang', 'category', 'image', 'slider_active' , 'status' , 'banner_ordering' , 'created_at' , 'updated_at'];

    protected $primaryKey = 'slider_id';

    public static function update_slider($id,$data){
        return DB::table('add_slider')
          ->where('slider_id', $id)
          ->update($data);
      }


   

}


