<?php

namespace App\Models;
use DB;
use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubchapterBookletModel extends Eloquent
{
    use HasFactory;
    protected $table = 'subchapterbooklet';

    protected $fillable = ['subid',  'type', 'lang', 'subchapter_title', 'subchapter_des', 'status', 'created_at' ,  'updated_at'];
    
    protected $primaryKey = 'subid';

    public static function getData()
    {

    $value=DB::table('subchapterbooklet')->get(); 
    return $value;
    }


    public static function edit_subchapter($subid,$subchapter_des){
        return DB::table('subchapterbooklet')
          ->where('subid', $subid)
          ->update($subchapter_des);
      }

    
}
