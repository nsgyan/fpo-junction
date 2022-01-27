<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KnowledgeSeriesModel extends Model
{
    use HasFactory;

    protected $table = 'knowledge_series';

    protected $fillable = ['serice_id','lang','serice_title','serice_desc','serice_image','serice_status','created_at','updated_at'];

    protected $primaryKey = 'serice_id';

    public static function update_fpo($serice_id,$data){
        return DB::table('knowledge_series')
          ->where('serice_id', $serice_id)
          ->update($data);
      }
}
