<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInvDepartmentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'InvDepartmentID' => 'integer|unique:inv_departments,InvDepartmentID,' . $this->invDepartment->id,
            'DepartmentCode' => 'string|max:15',
            'DepartmentName' => 'string|max:50',
            'Remark' => 'nullable|string|max:150',
            'GroupOfCompanyID' => 'integer',
            'ModifiedUser' => 'nullable|string|max:50',
            'DataTransfer' => 'nullable|integer',
        ];
    }

    public function attributes()
    {
        return [
            'InvDepartmentID' => 'inventory department ID',
            'DepartmentCode' => 'department code',
            'DepartmentName' => 'department name',
            'GroupOfCompanyID' => 'group of company ID',
            'ModifiedUser' => 'modified user',
            'DataTransfer' => 'data transfer',
        ];
    }
}
