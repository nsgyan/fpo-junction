<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoModel extends Model
{
    use HasFactory;

    
    protected $table = 'video';

    protected $fillable = ['id',  'category', 'lang', 'title', 'description' , 'video_url' , 'thumbnail_image', 'video_active' , 'status' ,  'created_at' , 'updated_at'];

    protected $primaryKey = 'id';

    public static function update_video($id,$data){
        return DB::table('video')
          ->where('id', $id)
          ->update($data);
      }
}

