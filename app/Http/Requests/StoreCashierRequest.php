<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCashierRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'CashierID' => 'unique:cashiers,CashierID',
            'Code'      => 'max:50|nullable',
            'LocationID'=> 'nullable',
            'Name'      => 'max:50|nullable',
            'LogName'   => 'nullable|max:10',
            'Password'  => 'nullable|max:10',
            'Encode'    => 'nullable|max:10',
            'Type'      => 'nullable',
            'IdWithLocation' => 'nullable|max:100',
        ];
    }

    public function attributes()
    {
        return [
            'CashierID'  => 'cashier ID',
            'LocationID' => 'location ID',
            'LogName'    => 'login name',
        ];
    }
}
