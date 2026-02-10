<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DayStart extends Model
{
    /** @use HasFactory<\Database\Factories\DayStartFactory> */
    use HasFactory;


      protected $fillable = [
        'idx',
        'LocationID',
        'LocationIDBilling',
        'DayStartCashierID',
        'DayStart',
        'Amount',
        'StartSystemDate',
        'IsDayEnd',
        'DayEndCashierID',
        'EndSystemDate',
        'DayEnd',
        'ZNo',
        'CashInHand',
        'IsShiftStarted',
        'IdWithLocation',
    ];
}
