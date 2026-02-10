<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    /** @use HasFactory<\Database\Factories\ShiftFactory> */
    use HasFactory;

    protected $fillable = [
        'Idx',
        'LocationID',
        'LocationIDBilling',
        'CashierID',
        'DayStartDate',
        'ShiftDate',
        'ShiftDateTime',
        'ShiftStartSystemDate',
        'Float',
        'IsShiftEnd',
        'ShiftEndCashierID',
        'ShiftEndSystemDate',
        'ShiftEndDate',
        'ShiftEndDateTime',
        'ZNo',
        'ShiftNo',
        'CashInHand',
        'UnitNo',
        'IsDayEnd',
        'IdWithLocation',
    ];
}
