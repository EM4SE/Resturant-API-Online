<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdvanceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'RowNo' => 'nullable|integer',
            'PayTypeID' => 'nullable|integer',

            'Amount' => 'required|numeric|min:0',
            'Balance' => 'required|numeric|min:0',

            'SDate' => 'nullable|date',
            'Receipt' => 'nullable|string|max:50',

            'LocationID' => 'nullable|integer',
            'CashierID' => 'nullable|integer',

            'UnitNo' => 'nullable|string|max:50',
            'BillTypeID' => 'nullable|integer',
            'SaleTypeID' => 'nullable|integer',

            'RefNo' => 'nullable|string|max:100',
            'BankId' => 'nullable|integer',
            'ChequeDate' => 'nullable|date',

            'IsRecallAdv' => 'nullable|boolean',
            'RecallNo' => 'nullable|string|max:100',

            'Descrip' => 'nullable|string|max:255',
            'EnCodeName' => 'nullable|string|max:100',

            'TerminalID' => 'nullable|integer',
            'LocationIDBilling' => 'nullable|integer',

            'TableID' => 'nullable|integer',
            'TicketID' => 'nullable|integer',

            'OrderNo' => 'nullable|string|max:100',
            'CustomerCode' => 'nullable|string|max:100',

            'DayStartDate' => 'nullable|date',
            'ShiftDate' => 'nullable|date',

            'IsDayEnd' => 'nullable|boolean',

            'TempPaymentReceipt' => 'nullable|string|max:100',

            'IdWithLocation' => 'nullable|string|max:255',
        ];
    }
}
