<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryModel extends Model
{
    use HasFactory;

    protected $table = 'photo_gallery';

    protected $fillable = ['id',  'code', 'model_name','lang','image' ,  'gallery_active' ,'status', 'created_at' , 'updated_at'];

    protected $primaryKey = 'id';
}