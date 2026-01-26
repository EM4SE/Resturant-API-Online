<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cashier extends Model
{
    /** @use HasFactory<\Database\Factories\CashierFactory> */
    use HasFactory;

    protected $fillable = [
        'CashierID',
        'Code',
        'LocationID',
        'Name',
        'LogName',
        // 'Password',
        'Encode',
        'Type',
    ];

    protected $casts = [
        'Type' => 'integer', // smallint mapped as integer
    ];
}
