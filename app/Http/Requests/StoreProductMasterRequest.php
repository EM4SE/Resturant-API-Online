<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductMasterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'idx'                  => '',
            'ProductID'                        => 'nullable',
            'LocationID'                       => 'nullable',
            'ProductCode'                      => 'nullable|max:25',
            'BarCode'                          => 'nullable|max:25',
            'BarCodeFull'                      => 'nullable',
            'BatchNo'                          => 'nullable|max:40',
            'ExpiaryDate'                      => 'nullable',
            'SerialNo'                         => 'nullable|max:200',
            'Stock'                            => 'nullable',
            'ReferenceCode1'                   => 'nullable|max:25',
            'ReferenceCode2'                   => 'nullable|max:25',
            'ReferenceCode3'                   => 'nullable|max:25',
            'ProductName'                      => 'nullable|max:100',
            'NameOnInvoice'                    => 'nullable|max:50',
            'DepartmentID'                     => 'nullable',
            'CategoryID'                       => 'nullable',
            'SubCategoryID'                    => 'nullable',
            'SubCategory2ID'                   => 'nullable',
            'SupplierID'                       => 'nullable',
            'SearchColumn'                     => 'nullable|max:50',
            'BaseUnitOfMeasureID'              => 'nullable',
            'UnitOfMeasureID'                  => 'nullable',
            'UnitOfMeasureName'                => 'nullable|max:50',
            'ConvertFactor'                    => 'nullable',
            'PackSize'                         => 'nullable|max:25',
            'CostPrice'                        => 'nullable',
            'AverageCost'                      => 'nullable',
            'SellingPrice'                     => 'nullable',
            'WholeSalePrice'                   => 'nullable',
            'MinimumPrice'                     => 'nullable',
            'FixedDiscount'                    => 'nullable',
            'MaximumDiscount'                  => 'nullable',
            'MaximumPrice'                     => 'nullable',
            'FixedDiscountPercentage'          => 'nullable',
            'MaximumDiscountPercentage'        => 'nullable',
            'IsActive'                         => 'nullable',
            'IsBatch'                          => 'nullable',
            'IsPromotion'                      => 'nullable',
            'IsFreeIssue'                      => 'nullable',
            'IsExpiary'                        => 'nullable',
            'IsCountable'                      => 'nullable',
            'IsTax'                            => 'nullable',
            'IsSerial'                         => 'nullable',
            'IsStock'                          => 'nullable',
            'IsExtendedPropertiesOnSale'       => 'nullable',
            'ProductDate'                      => 'nullable',
            'BatchDate'                        => 'nullable',
            'ProductBatchNoExpiaryDetailID'    => 'nullable',
            'ItemLayer1ID'                     => 'nullable',
            'ItemLayer2ID'                     => 'nullable',
            'OrderNo'                          => 'nullable',
            'OrderTerminalID'                  => 'nullable',
            'BillingLocationID'                => 'nullable',
            'IsRawMaterial'                    => 'nullable',
            'IsPastMovement'                   => 'nullable',
            'IdWithLocation'                   => 'nullable|max:150|unique:product_masters,IdWithLocation',
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
            'IdWithLocation' => 'ID with location',
        ];
    }
}
