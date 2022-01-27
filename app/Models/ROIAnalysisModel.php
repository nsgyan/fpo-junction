<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ROIAnalysisModel extends Model
{
    use HasFactory;

    protected $table = 'roi_analysis';

    protected $fillable = ['id',   'code', 'title', 'lang', 'value' ,  'color','status', 'created_at' , 'updated_at'];

    protected $primaryKey = 'id';

   


}