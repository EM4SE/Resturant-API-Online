<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSysConfigRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'idx' => 'nullable',
            'GroupOfCompanyID' => 'integer',
            'LocationID' => 'integer',
            'LocationCode' => 'string|max:15',
            'LocationName' => 'string|max:50',
            'Head1' => 'nullable|string|max:48',
            'Head2' => 'nullable|string|max:48',
            'Head3' => 'nullable|string|max:48',
            'Head4' => 'nullable|string|max:48',
            'Head5' => 'nullable|string|max:48',
            'Head6' => 'nullable|string|max:48',
            'Head7' => 'nullable|string|max:48',
            'Head8' => 'nullable|string|max:48',
            'Head9' => 'nullable|string|max:48',
            'Head10' => 'nullable|string|max:48',
            'Tail1' => 'nullable|string|max:48',
            'Tail2' => 'nullable|string|max:48',
            'Tail3' => 'nullable|string|max:48',
            'Tail4' => 'nullable|string|max:48',
            'Tail5' => 'nullable|string|max:48',
            'Tail6' => 'nullable|string|max:48',
            'Tail7' => 'nullable|string|max:48',
            'Tail8' => 'nullable|string|max:48',
            'Tail9' => 'nullable|string|max:48',
            'Tail10' => 'nullable|string|max:48',
        ];
    }
}
