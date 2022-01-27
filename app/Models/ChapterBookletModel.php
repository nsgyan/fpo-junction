<?php

namespace App\Models;
use DB;
use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChapterBookletModel extends Eloquent
{
    use HasFactory;

    protected $table = 'booklet_chapter';

    protected $fillable = ['cid', 'code', 'type', 'lang','chapter_title', 'chapter_description', 'subid'  , 'status' , 'created_at' , 'updated_at'];

    protected $primaryKey = 'cid';

    public function Subchapter()
    {
        return $this->belongsTo(SubchapterBookletModel::class, 'subid', 'subid');
    }
   
}


