<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvDepartment extends Model
{
    /** @use HasFactory<\Database\Factories\InvDepartmentFactory> */
    use HasFactory;

    protected $fillable = [
        'InvDepartmentID',
        'DepartmentCode',
        'DepartmentName',
        'Remark',
        'IsDelete',
        'GroupOfCompanyID',
        'CreatedUser',
        'CreatedDate',
        'ModifiedUser',
        'ModifiedDate',
        'DataTransfer',
    ];
}
