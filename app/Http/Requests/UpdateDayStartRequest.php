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
            'LocationID' => 'nullable|integer',
            'LocationIDBilling' => 'nullable|integer',
            'DayStartCashierID' => 'nullable|integer',
            'DayStart' => 'nullable|date',
            'Amount' => 'nullable|numeric',
            'StartSystemDate' => 'nullable|date',
            'IsDayEnd' => 'nullable|boolean',
            'DayEndCashierID' => 'nullable|integer',
            'EndSystemDate' => 'nullable|date',
            'DayEnd' => 'nullable|date',
            'ZNo' => 'nullable|integer',
            'CashInHand' => 'nullable|numeric',
            'IsShiftStarted' => 'nullable|boolean',
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
