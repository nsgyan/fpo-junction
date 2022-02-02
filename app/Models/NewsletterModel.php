<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsletterModel extends Model
{
    use HasFactory;

    protected $table = 'newsletter';

    protected $fillable = ['id', 'email' , 'created_at' , 'updated_at'];

    protected $primaryKey = 'id';
}
