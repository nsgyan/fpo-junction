<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitBookletModel extends Model
{
    use HasFactory;
    protected $table = 'unitbooklet';

    protected $fillable = ['uid', 'code', 'type','lang', 'unit_title', 'unit_description', 'chapter_id', 'status' ,  'created_at' , 'updated_at'];
    
    protected $primaryKey = 'uid';
}
