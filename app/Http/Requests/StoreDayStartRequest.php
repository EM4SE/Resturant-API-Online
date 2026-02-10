<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDayStartRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'idx'           => 'unique:day_starts,idx',
            'LocationID'           => 'nullable',
            'LocationIDBilling'    => 'nullable',
            'DayStartCashierID'    => 'nullable',
            'DayStart'             => 'nullable',
            'Amount'               => 'nullable',
            'IsDayEnd'             => 'nullable',
            'StartSystemDate'      => 'nullable',
            'DayEndCashierID'      => 'nullable',
            'EndSystemDate'        => 'nullable',
            'DayEnd'               => 'nullable',
            'ZNo'                  => 'nullable',
            'CashInHand'           => 'nullable',
            'IsShiftStarted'       => 'nullable',
            'IdWithLocation'       => 'unique:day_starts,IdWithLocation',
        ];
    }

    public function attributes()
    {
        return [
            'idx'           => 'day start ID',
            'LocationID'           => 'location ID',
            'LocationIDBilling'    => 'billing location ID',
            'DayStartCashierID'    => 'day start cashier ID',
            'IsDayEnd'            => 'is day end',
            'DayStart'             => 'day start date',
            'StartSystemDate'      => 'start system date',
            'DayEndCashierID'      => 'day end cashier ID',
            'EndSystemDate'        => 'end system date',
            'DayEnd'               => 'day end date',
            'CashInHand'           => 'cash in hand',
            'IsShiftStarted'       => 'is shift started',
        ];
    }
}
