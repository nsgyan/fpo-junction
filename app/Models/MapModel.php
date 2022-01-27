<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapModel extends Model
{
    use HasFactory;
    protected $table = 'map';

    protected $fillable = ['mapid','type','code', 'fpo_name','ceo_name','email', 'mobile','street_address','address','state','city','zip_code','country','user_name','fpo_password','promotion_institute','resorce_institute','programm','ri_popi','status','created_at','updated_at'];
     
    protected $primaryKey = 'mapid';
}
