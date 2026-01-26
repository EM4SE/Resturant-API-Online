<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSysConfigRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'idx'              => 'nullable',
            'GroupOfCompanyID' => 'nullable',
            'LocationID'       => 'nullable',
            'LocationCode'     => 'nullable|max:15',
            'LocationName'     => 'nullable|max:50',
            'Head1'            => 'nullable|max:48',
            'Head2'            => 'nullable|max:48',
            'Head3'            => 'nullable|max:48',
            'Head4'            => 'nullable|max:48',
            'Head5'            => 'nullable|max:48',
            'Head6'            => 'nullable|max:48',
            'Head7'            => 'nullable|max:48',
            'Head8'            => 'nullable|max:48',
            'Head9'            => 'nullable|max:48',
            'Head10'           => 'nullable|max:48',
            'Tail1'            => 'nullable|max:48',
            'Tail2'            => 'nullable|max:48',
            'Tail3'            => 'nullable|max:48',
            'Tail4'            => 'nullable|max:48',
            'Tail5'            => 'nullable|max:48',
            'Tail6'            => 'nullable|max:48',
            'Tail7'            => 'nullable|max:48',
            'Tail8'            => 'nullable|max:48',
            'Tail9'            => 'nullable|max:48',
            'Tail10'           => 'nullable|max:48',
        ];
    }
}
