<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTransactionDetRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'Idx' => 'integer|unique:transaction_dets,TransactionDetID,' . $this->transactionDet->id,
            'ProductID' => 'integer',
            'ProductCode' => 'string|max:25',
            'RefCode' => 'string|max:25',
            'BarCodeFull' => 'integer',
            'Descrip' => 'string|max:50',
            'BatchNo' => 'string|max:50',
            'SerialNo' => 'string|max:50',
            'ExpiaryDate' => 'nullable|date',
            'Cost' => 'numeric',
            'AvgCost' => 'numeric',
            'Price' => 'numeric',
            'Qty' => 'numeric',
            'Amount' => 'numeric',
            'UnitOfMeasureID' => 'integer',
            'UnitOfMeasureName' => 'string|max:10',
            'ConvertFactor' => 'numeric',
            'IDI1' => 'integer',
            'IDis1' => 'numeric',
            'IDiscount1' => 'numeric',
            'IDI1CashierID' => 'integer',
            'IDI2' => 'integer',
            'IDis2' => 'numeric',
            'IDiscount2' => 'numeric',
            'IDI2CashierID' => 'integer',
            'IDI3' => 'integer',
            'IDis3' => 'numeric',
            'IDiscount3' => 'numeric',
            'IDI3CashierID' => 'integer',
            'IDI4' => 'integer',
            'IDis4' => 'numeric',
            'IDiscount4' => 'numeric',
            'IDI4CashierID' => 'integer',
            'IDI5' => 'integer',
            'IDis5' => 'numeric',
            'IDiscount5' => 'numeric',
            'IDI5CashierID' => 'integer',
            'Rate' => 'numeric',
            'IsSDis' => 'boolean',
            'SDNo' => 'integer',
            'SDID' => 'integer',
            'SDIs' => 'numeric',
            'SDiscount' => 'numeric',
            'DDisCashierID' => 'integer',
            'Nett' => 'numeric',
            'LocationID' => 'integer',
            'DocumentID' => 'integer',
            'BillTypeID' => 'integer',
            'SaleTypeID' => 'integer',
            'Receipt' => 'string|max:10',
            'SalesmanID' => 'integer',
            'Salesman' => 'string|max:15',
            'CustomerID' => 'integer',
            'Customer' => 'string|max:150',
            'CashierID' => 'integer',
            'Cashier' => 'string|max:15',
            'StartTime' => 'date_format:H:i:s',
            'EndTime' => 'date_format:H:i:s',
            'RecDate' => 'date',
            'BaseUnitID' => 'integer',
            'UnitNo' => 'integer',
            'RowNo' => 'integer',
            'IsRecall' => 'boolean',
            'RecallNo' => 'string|max:10',
            'RecallAdv' => 'boolean',
            'TaxAmount' => 'numeric',
            'IsTax' => 'boolean',
            'TaxPercentage' => 'numeric',
            'IsStock' => 'boolean',
            'UpdateBy' => 'integer',
            'Status' => 'integer',
            'CustomerType' => 'integer',
            'ZNo' => 'integer',
            'TransStatus' => 'integer',
            'IsPromotionApplied' => 'boolean',
            'PromotionID' => 'integer',
            'IsPromotion' => 'boolean',
            'LocationIDBilling' => 'integer',
            'TableID' => 'integer',
            'OrderTerminalID' => 'integer',
            'TicketID' => 'integer',
            'OrderNo' => 'integer',
            'IsPrinted' => 'boolean',
            'ItemComment' => 'string|max:100',
            'Packs' => 'integer',
            'IsCancelKOT' => 'boolean',
            'StewardID' => 'integer',
            'StewardName' => 'string|max:50',
            'ServiceCharge' => 'numeric',
            'ServiceChargeAmount' => 'numeric',
            'ShiftNo' => 'integer',
            'IsDayEnd' => 'boolean',
            'UpdateUnitNo' => 'integer',
            'ZDate' => 'date',
            'TagNo' => 'string|max:50',
        ];
    }

    public function attributes()
    {
        return [
            'Idx' => 'transaction detail ID',
            'ProductID' => 'product ID',
            'ProductCode' => 'product code',
            'RefCode' => 'reference code',
            'BarCodeFull' => 'full barcode',
            'ExpiaryDate' => 'expiry date',
            'UnitOfMeasureID' => 'unit of measure ID',
            'UnitOfMeasureName' => 'unit of measure name',
        ];
    }
}
