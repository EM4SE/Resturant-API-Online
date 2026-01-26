<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvCategory extends Model
{
    /** @use HasFactory<\Database\Factories\InvCategoryFactory> */
    use HasFactory;


    protected $fillable = [
       'InvCategoryId',
       'InvCategoryName',
    ];
}
