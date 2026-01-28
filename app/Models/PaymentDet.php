<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentDet extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentDetFactory> */
    use HasFactory;

    protected $fillable = [
        'Idx',
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
        'UpdatedBy',
        'Status',
        'CustomerID',
        'CustomerType',
        'CustomerCode',
        'ZNo',
        'TerminalID',
        'LoyaltyType',
        'LocationIDBilling',
        'TableID',
        'TicketID',
        'OrderNo',
        'ShiftNo',
        'IsDayEnd',
        'UpdateUnitNo',
        'ZDate',
    ];
}
