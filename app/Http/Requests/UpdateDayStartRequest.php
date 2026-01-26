<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDayStartRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'idx' => 'integer|unique:day_starts,idx,' . $this->dayStart->id,
            'LocationID' => 'integer',
            'LocationIDBilling' => 'integer',
            'DayStartCashierID' => 'integer',
            'DayStart' => 'date',
            'Amount' => 'numeric',
            'StartSystemDate' => 'date',
            'IsDayEnd' => 'boolean',
            'DayEndCashierID' => 'integer',
            'EndSystemDate' => 'date',
            'DayEnd' => 'date',
            'ZNo' => 'integer',
            'CashInHand' => 'numeric',
            'IsShiftStarted' => 'boolean',
        ];
    }

    public function attributes()
    {
        return [
            'idx' => 'day start ID',
            'LocationID' => 'location ID',
            'LocationIDBilling' => 'billing location ID',
            'DayStartCashierID' => 'day start cashier ID',
            'DayStart' => 'day start date',
            'StartSystemDate' => 'start system date',
            'DayEndCashierID' => 'day end cashier ID',
            'EndSystemDate' => 'end system date',
            'DayEnd' => 'day end date',
            'CashInHand' => 'cash in hand',
        ];
    }
}
