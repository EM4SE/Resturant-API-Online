<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInvCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            // 'InvCategoryId' => 'integer|unique:inv_categories,InvCategoryId,' . $this->invCategory->id,
            'InvCategoryName' => 'string|max:100',
        ];
    }

    public function attributes()
    {
        return [
            // 'InvCategoryId' => 'inventory category ID',
            'InvCategoryName' => 'inventory category name',
        ];
    }
}
