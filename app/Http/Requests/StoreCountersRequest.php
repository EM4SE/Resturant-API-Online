<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCountersRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'Idx' => 'required|integer|unique:counters,Idx',
            'GroupOfCompanyID' => 'nullable|integer',
            'LocationID' => 'nullable|integer',
            'LocationCode' => 'nullable|string|max:50',
            'LocationName' => 'nullable|string|max:100',
        ];
    }

    public function attributes()
    {
        return [
            'Idx' => 'index',
            'GroupOfCompanyID' => 'group of company ID',
            'LocationID' => 'location ID',
            'LocationCode' => 'location code',
            'LocationName' => 'location name',
        ];
    }
}
