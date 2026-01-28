<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductMasterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'idx' => 'integer|unique:product_masters,idx,' . $this->productMaster->id,
            'ProductID' => 'integer',
            'LocationID' => 'integer',
            'ProductCode' => 'string|max:25',
            'BarCode' => 'nullable|string|max:25',
            'BarCodeFull' => 'nullable|integer',
            'BatchNo' => 'nullable|string|max:40',
            'ExpiaryDate' => 'nullable|date',
            'SerialNo' => 'nullable|string|max:200',
            'Stock' => 'numeric',
            'ReferenceCode1' => 'string|max:25',
            'ReferenceCode2' => 'string|max:25',
            'ReferenceCode3' => 'string|max:25',
            'ProductName' => 'nullable|string|max:100',
            'NameOnInvoice' => 'string|max:50',
            'DepartmentID' => 'integer',
            'CategoryID' => 'integer',
            'SubCategoryID' => 'integer',
            'SubCategory2ID' => 'integer',
            'SupplierID' => 'integer',
            'SearchColumn' => 'string|max:50',
            'BaseUnitOfMeasureID' => 'integer',
            'UnitOfMeasureID' => 'integer',
            'UnitOfMeasureName' => 'string|max:50',
            'ConvertFactor' => 'numeric',
            'PackSize' => 'string|max:25',
            'CostPrice' => 'numeric',
            'AverageCost' => 'numeric',
            'SellingPrice' => 'numeric',
            'WholeSalePrice' => 'numeric',
            'MinimumPrice' => 'numeric',
            'FixedDiscount' => 'numeric',
            'MaximumDiscount' => 'numeric',
            'MaximumPrice' => 'numeric',
            'FixedDiscountPercentage' => 'numeric',
            'MaximumDiscountPercentage' => 'numeric',
            'IsActive' => 'boolean',
            'IsBatch' => 'boolean',
            'IsPromotion' => 'boolean',
            'IsFreeIssue' => 'boolean',
            'IsExpiary' => 'boolean',
            'IsCountable' => 'boolean',
            'IsTax' => 'boolean',
            'IsSerial' => 'boolean',
            'IsStock' => 'boolean',
            'IsExtendedPropertiesOnSale' => 'boolean',
            'ProductDate' => 'date',
            'BatchDate' => 'date',
            'ProductBatchNoExpiaryDetailID' => 'integer',
            'ItemLayer1ID' => 'integer',
            'ItemLayer2ID' => 'integer',
            'OrderNo' => 'integer',
            'OrderTerminalID' => 'integer',
            'BillingLocationID' => 'integer',
            'IsRawMaterial' => 'nullable|boolean',
            'IsPastMovement' => 'boolean',
        ];
    }

    public function attributes()
    {
        return [
            'idx' => 'product master ID',
            'ProductID' => 'product ID',
            'LocationID' => 'location ID',
            'ProductCode' => 'product code',
            'BarCode' => 'barcode',
            'BarCodeFull' => 'full barcode',
            'BatchNo' => 'batch number',
            'ExpiaryDate' => 'expiry date',
            'SerialNo' => 'serial number',
            'NameOnInvoice' => 'name on invoice',
            'DepartmentID' => 'department ID',
            'CategoryID' => 'category ID',
            'SubCategoryID' => 'sub category ID',
            'SubCategory2ID' => 'sub category 2 ID',
            'SupplierID' => 'supplier ID',
            'BaseUnitOfMeasureID' => 'base unit of measure ID',
            'UnitOfMeasureID' => 'unit of measure ID',
            'UnitOfMeasureName' => 'unit of measure name',
            'ConvertFactor' => 'convert factor',
            'PackSize' => 'pack size',
            'CostPrice' => 'cost price',
            'AverageCost' => 'average cost',
            'SellingPrice' => 'selling price',
            'WholeSalePrice' => 'wholesale price',
            'MinimumPrice' => 'minimum price',
            'FixedDiscount' => 'fixed discount',
            'MaximumDiscount' => 'maximum discount',
            'MaximumPrice' => 'maximum price',
            'ProductDate' => 'product date',
            'BatchDate' => 'batch date',
        ];
    }
}
