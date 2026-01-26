<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCashierRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'CashierID' => 'integer|unique:cashiers,CashierID,' . $this->cashier->id,
            'Code' => 'string|max:50',
            'LocationID' => 'integer',
            'Name' => 'string|max:50',
            'LogName' => 'string|max:10',
            // 'Password' => 'nullable|string|max:10',
            'Encode' => 'string|max:10',
            'Type' => 'nullable|integer',
        ];
    }

    public function attributes()
    {
        return [
            'CashierID' => 'cashier ID',
            'LocationID' => 'location ID',
            'LogName' => 'login name',
        ];
    }
}
