<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateShiftRequest extends FormRequest
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
            'CashierID' => 'nullable|numeric',
            'DayStartDate' => 'nullable|date',
            'ShiftDate' => 'nullable|date',
            'ShiftDateTime' => 'nullable|date',
            'ShiftStartSystemDate' => 'nullable|date',
            'Float' => 'nullable|numeric',
            'IsShiftEnd' => 'nullable|boolean',
            'ShiftEndCashierID' => 'nullable|numeric',
            'ShiftEndSystemDate' => 'nullable|date',
            'ShiftEndDate' => 'nullable|date',
            'ShiftEndDateTime' => 'nullable|date',
            'ZNo' => 'nullable|numeric',
            'ShiftNo' => 'nullable|numeric',
            'CashInHand' => 'nullable|numeric',
            'UnitNo' => 'nullable|integer',
            'IsDayEnd' => 'nullable|boolean',
        ];
    }
}
