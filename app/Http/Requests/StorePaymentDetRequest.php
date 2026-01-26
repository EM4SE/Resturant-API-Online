<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaymentDetRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'idx'        => 'nullable',
            'RowNo'               => 'nullable',
            'PayTypeID'           => 'nullable',
            'Amount'              => 'nullable',
            'Balance'             => 'nullable',
            'SDate'               => 'nullable',
            'Receipt'             => 'nullable|max:10',
            'LocationID'          => 'nullable',
            'CashierID'           => 'nullable',
            'UnitNo'              => 'nullable',
            'BillTypeID'          => 'nullable',
            'SaleTypeID'          => 'nullable',
            'RefNo'               => 'nullable|max:30',
            'BankId'              => 'nullable',
            'ChequeDate'          => 'nullable',
            'IsRecallAdv'         => 'nullable',
            'RecallNo'            => 'nullable|max:10',
            'Descrip'             => 'nullable|max:20',
            'EnCodeName'          => 'nullable|max:50',
            'UpdatedBy'           => 'nullable',
            'Status'              => 'nullable',
            'CustomerID'          => 'nullable',
            'CustomerType'        => 'nullable',
            'CustomerCode'        => 'nullable|max:50',
            'ZNo'                 => 'nullable',
            'TerminalID'          => 'nullable',
            'LoyaltyType'         => 'nullable',
            'LocationIDBilling'   => 'nullable',
            'TableID'             => 'nullable',
            'TicketID'            => 'nullable',
            'OrderNo'             => 'nullable',
            'ShiftNo'             => 'nullable',
            'IsDayEnd'            => 'nullable',
            'UpdateUnitNo'        => 'nullable',
            'ZDate'               => 'nullable',
        ];
    }

    public function attributes()
    {
        return [
            'idx'        => 'payment detail ID',
            'RowNo'               => 'row number',
            'PayTypeID'           => 'payment type ID',
            'SDate'               => 'sale date',
            'LocationID'          => 'location ID',
            'CashierID'           => 'cashier ID',
            'UnitNo'              => 'unit number',
            'BillTypeID'          => 'bill type ID',
            'SaleTypeID'          => 'sale type ID',
            'RefNo'               => 'reference number',
            'BankId'              => 'bank ID',
            'ChequeDate'          => 'cheque date',
            'RecallNo'            => 'recall number',
            'EnCodeName'          => 'encode name',
            'UpdatedBy'           => 'updated by',
            'CustomerID'          => 'customer ID',
            'CustomerType'        => 'customer type',
            'CustomerCode'        => 'customer code',
            'TerminalID'          => 'terminal ID',
            'LoyaltyType'         => 'loyalty type',
            'LocationIDBilling'   => 'billing location ID',
            'TableID'             => 'table ID',
            'TicketID'            => 'ticket ID',
            'OrderNo'             => 'order number',
            'ShiftNo'             => 'shift number',
            'UpdateUnitNo'        => 'update unit number',
            'ZDate'               => 'Z date',
        ];
    }
}
