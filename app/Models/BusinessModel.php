<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessModel extends Model
{
    use HasFactory;

    protected $table = 'business_model';

    protected $fillable = ['business_id', 'code', 'state', 'lang', 'b_title', 'b_description' ,  'banner_image' ,'attachment','link','status', 'created_at' , 'updated_at'];

    protected $primaryKey = 'business_id';

    public static function getDataRoi($code)
    {
    	$data=DB::table('business_model')->where('business_model.code',$code)
        ->join('roi_analysis', 'business_model.code', '=', 'roi_analysis.code')
        ->get();
    	return $data;
    }

    public static function getDataChapter($code)
    {
    	$data=DB::table('business_model')->where('business_model.code',$code)
        ->join('chapter', 'business_model.code', '=', 'chapter.code')
        ->get();
    	return $data;
    }


    public static function update_business($code,$data){
        return DB::table('business_model')
          ->where('code', $code)
          ->update($data);
      }


}

