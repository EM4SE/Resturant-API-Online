<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePaytypeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'PaymentID' => 'integer|unique:paytypes,PaytypeID,' . $this->paytype?->id,
            'Descrip' => 'string|max:15',
            'IsSwipe' => 'boolean',
            'Type' => 'integer',
            'Rate' => 'numeric',
            'IsRefundable' => 'boolean',
            'IsActive' => 'boolean',
            'IsBillCopy' => 'boolean',
            'PrintDescrip' => 'string|max:12',
            'PreFix' => 'string|max:5',
            'MaxLength' => 'integer',
            'OrderNo' => 'integer',
        ];
    }

    public function attributes()
    {
        return [
            'PaymentID' => 'payment type ID',
            'Descrip' => 'description',
            'IsSwipe' => 'is swipe',
            'Type' => 'type',
            'Rate' => 'rate',
            'IsRefundable' => 'is refundable',
            'IsActive' => 'is active',
            'IsBillCopy' => 'is bill copy',
            'PrintDescrip' => 'print description',
            'PreFix' => 'prefix',
            'MaxLength' => 'max length',
            'OrderNo' => 'order number',
        ];
    }
}
