<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookletModel extends Model
{
    use HasFactory;

    protected $table = 'booklet';

    protected $fillable = ['booklet_id','code', 'type', 'lang', 'booklet_title', 'booklet_description', 'attachment', 'banner_image',  'booklet_unit' ,'booklet_gallery','booklet_active','status','created_at' , 'updated_at'];

    protected $primaryKey = 'booklet_id';

    public static function getData()
    {

    $value=DB::table('booklet')->get(); 
    return $value;
    }
}
