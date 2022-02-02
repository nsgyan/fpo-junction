<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQModel extends Model
{
    use HasFactory;

    protected $table = 'faq';

    protected $fillable = ['id',  'category', 'lang', 'question', 'answer' ,  'faq_active' , 'status' , 'created_at' , 'updated_at'];

    protected $primaryKey = 'id';
}

