<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuccessStoriesModel extends Model
{
    use HasFactory;

    protected $table = 'succes_stories';

    protected $fillable = ['id', 'category', 'lang','title', 'description' ,  'image', 'success_s_active' , 'status' , 'created_at' , 'updated_at'];

    protected $primaryKey = 'id';

    public static function update_stories($id,$data){
        return DB::table('succes_stories')
          ->where('id', $id)
          ->update($data);
      }
}
