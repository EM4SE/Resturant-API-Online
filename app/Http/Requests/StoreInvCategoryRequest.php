<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInvCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'InvCategoryId'   => 'unique:inv_categories,InvCategoryId',
            'InvCategoryName' => 'nullable|max:100',
        ];
    }

    public function attributes()
    {
        return [
            'InvCategoryId'   => 'inventory category ID',
            'InvCategoryName' => 'inventory category name',
        ];
    }
}
