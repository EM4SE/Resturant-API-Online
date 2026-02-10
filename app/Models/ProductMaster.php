<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMaster extends Model
{
    /** @use HasFactory<\Database\Factories\ProductMasterFactory> */
    use HasFactory;

    protected $fillable = [
        'idx',
        'ProductID',
        'LocationID',
        'ProductCode',
        'BarCode',
        'BarCodeFull',
        'BatchNo',
        'ExpiaryDate',
        'SerialNo',
        'Stock',
        'ReferenceCode1',
        'ReferenceCode2',
        'ReferenceCode3',
        'ProductName',
        'NameOnInvoice',
        'DepartmentID',
        'CategoryID',
        'SubCategoryID',
        'SubCategory2ID',
        'SupplierID',
        'SearchColumn',
        'BaseUnitOfMeasureID',
        'UnitOfMeasureID',
        'UnitOfMeasureName',
        'ConvertFactor',
        'PackSize',
        'CostPrice',
        'AverageCost',
        'SellingPrice',
        'WholeSalePrice',
        'MinimumPrice',
        'FixedDiscount',
        'MaximumDiscount',
        'MaximumPrice',
        'FixedDiscountPercentage',
        'MaximumDiscountPercentage',
        'IsActive',
        'IsBatch',
        'IsPromotion',
        'IsFreeIssue',
        'IsExpiary',
        'IsCountable',
        'IsTax',
        'IsSerial',
        'IsStock',
        'IsExtendedPropertiesOnSale',
        'ProductDate',
        'BatchDate',
        'ProductBatchNoExpiaryDetailID',
        'ItemLayer1ID',
        'ItemLayer2ID',
        'OrderNo',
        'OrderTerminalID',
        'BillingLocationID',
        'IsRawMaterial',
        'IsPastMovement',
        'IdWithLocation',
    ];
}
