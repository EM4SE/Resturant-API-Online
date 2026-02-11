<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advance extends Model
{
    /** @use HasFactory<\Database\Factories\AdvanceFactory> */
    use HasFactory;

    protected $fillable = [
        'RowNo',
        'PayTypeID',
        'Amount',
        'Balance',
        'SDate',
        'Receipt',
        'LocationID',
        'CashierID',
        'UnitNo',
        'BillTypeID',
        'SaleTypeID',
        'RefNo',
        'BankId',
        'ChequeDate',
        'IsRecallAdv',
        'RecallNo',
        'Descrip',
        'EnCodeName',
        'TerminalID',
        'LocationIDBilling',
        'TableID',
        'TicketID',
        'OrderNo',
        'CustomerCode',
        'DayStartDate',
        'ShiftDate',
        'IsDayEnd',
        'TempPaymentReceipt',
        'IdWithLocation'
    ];
}
