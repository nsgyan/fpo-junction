<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSliderModel extends Model
{
    use HasFactory;


    protected $table = 'subslider';

    protected $fillable = ['id', 'title', 'lang', 'category', 'sub_title' , 'sub_category' , 'description', 'link' ,  'image', 'subslider_active' , 'status' , 'banner_odering' , 'created_at' , 'updated_at'];

    protected $primaryKey = 'id';

    public static function update_sub_slider($id,$data){
        return DB::table('subslider')
          ->where('id', $id)
          ->update($data);
      }
  
 

}


