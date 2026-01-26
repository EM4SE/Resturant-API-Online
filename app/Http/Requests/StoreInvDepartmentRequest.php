<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInvDepartmentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'InvDepartmentID'   => 'unique:inv_departments,InvDepartmentID',
            'DepartmentCode'    => 'nullable|max:15',
            'DepartmentName'    => 'nullable|max:50',
            'Remark'            => 'nullable|max:150',
            'GroupOfCompanyID'  => 'nullable',
            'CreatedUser'       => 'nullable|max:50',
            'ModifiedUser'      => 'nullable|max:50',
            'DataTransfer'      => 'nullable',
        ];
    }

    public function attributes()
    {
        return [
            'InvDepartmentID'   => 'inventory department ID',
            'DepartmentCode'    => 'department code',
            'DepartmentName'    => 'department name',
            'GroupOfCompanyID'  => 'group of company ID',
            'CreatedUser'       => 'created user',
            'ModifiedUser'      => 'modified user',
            'DataTransfer'      => 'data transfer',
        ];
    }
}
