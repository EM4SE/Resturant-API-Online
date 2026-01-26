<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SysConfig extends Model
{
    /** @use HasFactory<\Database\Factories\SysConfigFactory> */
    use HasFactory;

protected $fillable = [
    'idx',
    'GroupOfCompanyID',
    'LocationID',
    'LocationCode',
    'LocationName',
    'Head1',
    'Head2',
    'Head3',
    'Head4',
    'Head5',
    'Head6',
    'Head7',
    'Head8',
    'Head9',
    'Head10',
    'Tail1',
    'Tail2',
    'Tail3',
    'Tail4',
    'Tail5',
    'Tail6',
    'Tail7',
    'Tail8',
    'Tail9',
    'Tail10',
];

}
