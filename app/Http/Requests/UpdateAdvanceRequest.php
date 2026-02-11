<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdvanceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'RowNo' => 'sometimes|integer',
            'PayTypeID' => 'sometimes|integer',

            'Amount' => 'sometimes|numeric|min:0',
            'Balance' => 'sometimes|numeric|min:0',

            'SDate' => 'sometimes|date',
            'Receipt' => 'sometimes|string|max:50',

            'LocationID' => 'sometimes|integer',
            'CashierID' => 'sometimes|integer',

            'UnitNo' => 'sometimes|string|max:50',
            'BillTypeID' => 'sometimes|integer',
            'SaleTypeID' => 'sometimes|integer',

            'RefNo' => 'sometimes|string|max:100',
            'BankId' => 'sometimes|integer',
            'ChequeDate' => 'sometimes|date',

            'IsRecallAdv' => 'sometimes|boolean',
            'RecallNo' => 'sometimes|string|max:100',

            'Descrip' => 'sometimes|string|max:255',
            'EnCodeName' => 'sometimes|string|max:100',

            'TerminalID' => 'sometimes|integer',
            'LocationIDBilling' => 'sometimes|integer',

            'TableID' => 'sometimes|integer',
            'TicketID' => 'sometimes|integer',

            'OrderNo' => 'sometimes|string|max:100',
            'CustomerCode' => 'sometimes|string|max:100',

            'DayStartDate' => 'sometimes|date',
            'ShiftDate' => 'sometimes|date',

            'IsDayEnd' => 'sometimes|boolean',

            'TempPaymentReceipt' => 'sometimes|string|max:100',
        ];
    }
}
