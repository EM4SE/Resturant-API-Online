<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePaymentDetRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'Idx' => 'integer',
            'RowNo' => 'integer',
            'PayTypeID' => 'integer',
            'Amount' => 'numeric',
            'Balance' => 'numeric',
            'SDate' => 'date',
            'Receipt' => 'string|max:10',
            'LocationID' => 'integer',
            'CashierID' => 'integer',
            'UnitNo' => 'integer',
            'BillTypeID' => 'integer',
            'SaleTypeID' => 'integer',
            'RefNo' => 'string|max:30',
            'BankId' => 'integer',
            'ChequeDate' => 'nullable|date',
            'IsRecallAdv' => 'boolean',
            'RecallNo' => 'string|max:10',
            'Descrip' => 'string|max:20',
            'EnCodeName' => 'string|max:50',
            'UpdatedBy' => 'integer',
            'Status' => 'integer',
            'CustomerID' => 'integer',
            'CustomerType' => 'integer',
            'CustomerCode' => 'string|max:50',
            'ZNo' => 'integer',
            'TerminalID' => 'integer',
            'LoyaltyType' => 'integer',
            'LocationIDBilling' => 'integer',
            'TableID' => 'integer',
            'TicketID' => 'integer',
            'OrderNo' => 'integer',
            'ShiftNo' => 'integer',
            'IsDayEnd' => 'boolean',
            'UpdateUnitNo' => 'integer',
            'ZDate' => 'date',
        ];
    }

    public function attributes()
    {
        return [
            'Idx' => 'payment detail ID',
            'RowNo' => 'row number',
            'PayTypeID' => 'payment type ID',
            'SDate' => 'sale date',
            'LocationID' => 'location ID',
            'CashierID' => 'cashier ID',
            'UnitNo' => 'unit number',
            'BillTypeID' => 'bill type ID',
            'SaleTypeID' => 'sale type ID',
            'RefNo' => 'reference number',
            'BankId' => 'bank ID',
            'ChequeDate' => 'cheque date',
        ];
    }
}
