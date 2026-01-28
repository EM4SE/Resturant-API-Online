<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCountersRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'GroupOfCompanyID' => 'nullable|integer',
            'LocationID' => 'nullable|integer',
            'LocationCode' => 'nullable|string|max:50',
            'LocationName' => 'nullable|string|max:100',
        ];
    }

    public function attributes()
    {
        return [
            'GroupOfCompanyID' => 'group of company ID',
            'LocationID' => 'location ID',
            'LocationCode' => 'location code',
            'LocationName' => 'location name',
        ];
    }
}
