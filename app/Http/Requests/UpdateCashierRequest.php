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

            'Code'      => 'max:50|nullable',
            'LocationID'=> 'nullable',
            'Name'      => 'max:50|nullable',
            'LogName'   => 'nullable|max:10',
            'Password'  => 'nullable|max:10',
            'Encode'    => 'nullable|max:10',
            'Type'      => 'nullable',
        ];
    }

    public function attributes()
    {
        return [

            'LocationID' => 'location ID',
            'LogName'    => 'login name',
        ];
    }
}
