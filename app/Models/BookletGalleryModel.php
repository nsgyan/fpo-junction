<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookletGalleryModel extends Model
{
    use HasFactory;
    protected $table = 'booklet_gallery';

    protected $fillable = ['g_id','code', 'type','lang','gallery_title', 'gallery_desc','file_upload','status','created_at','updeate_at'];
     
    protected $primaryKey = 'g_id';

    public static function getData()
    {
        $value=DB::table('booklet_gallery')->get(); 
        return $value;
    }

    public static function update_booklet_gallery($id,$data){
        return DB::table('booklet_gallery')
          ->where('g_id', $id)
          ->update($data);
      }

      public static function getDatagroup()
    {
        $data=DB::table('booklet_gallery')->groupBy('code')->get();
        return $data;
    }
}
