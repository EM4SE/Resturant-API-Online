<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counters extends Model
{
    /** @use HasFactory<\Database\Factories\CountersFactory> */
    use HasFactory;

    protected $fillable = [
        'Idx',
        'GroupOfCompanyID',
        'LocationID',
        'LocationCode',
        'LocationName',
        'IdWithLocation',
    ];
}
