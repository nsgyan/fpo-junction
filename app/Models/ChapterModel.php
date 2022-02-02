<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChapterModel extends Model
{
    use HasFactory;

   
    protected $table = 'chapter';

    protected $fillable = ['id',  'business_id','code', 'chapter_name', 'lang', 'c_description' ,   'created_at' , 'updated_at'];

    protected $primaryKey = 'id';

    
}


