<?php

namespace App\Http\Controllers;

use App\Models\ProductMaster;
use App\Http\Requests\StoreProductMasterRequest;
use App\Http\Requests\UpdateProductMasterRequest;
use Exception;
use Carbon\Carbon;

class ProductMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $productMasters = ProductMaster::where('IsActive', true)->get();
            return response()->json($productMasters);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve product masters',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductMasterRequest $request)
    {
        try {
            $productMaster = ProductMaster::create($request->validated());

            return response()->json([
                'message' => 'Product master created successfully',
                'product' => $productMaster,
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to create product master',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductMaster $productMaster)
    {
        try {
            return response()->json($productMaster);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve product master',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductMasterRequest $request, $idx)
    {
        try {
            $productMaster = ProductMaster::where('idx', $idx)->first();

            if (!$productMaster) {
                return response()->json([
                    'error' => 'Product master not found',
                ], 404);
            }

            $productMaster->update($request->validated());

            return response()->json([
                'message' => 'Product master updated successfully',
                'product' => $productMaster,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to update product master',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductMaster $productMaster)
    {
        try {
            $productMaster->update(['IsActive' => false]);

            return response()->json([
                'message' => 'Product master deleted successfully',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to delete product master',
                'message' => $e->getMessage()
            ], 500);
        }
    }


    public function filterByIdx($idx)
    {
        try {
            $productMaster = ProductMaster::where('idx', $idx)->first();

            if (!$productMaster) {
                return response()->json([
                    'message' => 'No product master found with the given idx'
                ], 404);
            }

            $productMasterArray = $productMaster->toArray();

            $boolFields = [
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
                'IsRawMaterial',
                'IsPastMovement'
            ];

            foreach ($boolFields as $field) {
                $productMasterArray[$field] = (bool) $productMaster->$field;
            }

            $decimalFields = [
                'Stock',
                'ConvertFactor',
                'CostPrice',
                'AverageCost',
                'SellingPrice',
                'WholeSalePrice',
                'MinimumPrice',
                'MaximumPrice',
                'FixedDiscount',
                'MaximumDiscount',
                'FixedDiscountPercentage',
                'MaximumDiscountPercentage'
            ];

            foreach ($decimalFields as $field) {
                $productMasterArray[$field] = $productMaster->$field !== null
                    ? (float) $productMaster->$field
                    : null;
            }

            $dateFields = ['ProductDate', 'BatchDate'];

            foreach ($dateFields as $field) {
                $productMasterArray[$field] = $productMaster->$field
                    ? Carbon::parse($productMaster->$field)->toIso8601String()
                    : null;
            }

            return response()->json($productMasterArray);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve product master',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
