<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessState extends Model
{
    use HasFactory;

    protected $table = 'business_state';

    protected $fillable = ['state_id', 'code', 'state', 'status', 'created_at' , 'updated_at'];

    protected $primaryKey = 'state_id';



}

