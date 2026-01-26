<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaytypeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'PaymentID'     => 'unique:paytypes,PaytypeID',
            'Descrip'       => 'nullable|max:15',
            'IsSwipe'       => 'nullable',
            'Type'          => 'nullable',
            'Rate'          => 'nullable',
            'IsRefundable'  => 'nullable',
            'IsActive'      => 'nullable',
            'IsBillCopy'    => 'nullable',
            'PrintDescrip'  => 'nullable|max:12',
            'PreFix'        => 'nullable|max:5',
            'MaxLength'     => 'nullable',
            'OrderNo'       => 'nullable',
        ];
    }

    public function attributes()
    {
        return [
            'PaymentID'     => 'payment type ID',
            'Descrip'       => 'description',
            'IsSwipe'       => 'is swipe',
            'Type'          => 'type',
            'Rate'          => 'rate',
            'IsRefundable'  => 'is refundable',
            'IsActive'      => 'is active',
            'IsBillCopy'    => 'is bill copy',
            'PrintDescrip'  => 'print description',
            'PreFix'        => 'prefix',
            'MaxLength'     => 'max length',
            'OrderNo'       => 'order number',
        ];
    }
}
