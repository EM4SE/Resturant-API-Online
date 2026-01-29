<?php

namespace App\Http\Controllers;

use App\Models\Paytype;
use App\Http\Requests\StorePaytypeRequest;
use App\Http\Requests\UpdatePaytypeRequest;
use Exception;

class PaytypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $paytypes = Paytype::all();
            return response()->json($paytypes);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve payment types',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaytypeRequest $request)
    {
        try {
            $paytype = Paytype::create($request->validated());

            return response()->json([
                'message' => 'Payment type created successfully',
                'paytype' => $paytype,
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to create payment type',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Paytype $paytype)
    {
        try {
            return response()->json($paytype);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve payment type',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaytypeRequest $request, $paymentID)
    {
        try {
            $paytype = Paytype::where('PaymentID', $paymentID)->first();

            if (!$paytype) {
                return response()->json([
                    'error' => 'Payment type not found',
                ], 404);
            }

            $paytype->update($request->validated());

            return response()->json([
                'message' => 'Payment type updated successfully',
                'paytype' => $paytype,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to update payment type',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paytype $paytype)
    {
        try {
            $paytype->delete();

            return response()->json([
                'message' => 'Payment type deleted successfully',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to delete payment type',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function filterByPaymentID($paymentID)
    {
        try {
            $paytype = Paytype::where('PaymentID', $paymentID)->first();

            if (!$paytype) {
                return response()->json([
                    'message' => 'No payment type found with the given PaymentID'
                ], 404);
            }

            // Convert to array
            $paytypeArray = $paytype->toArray();

            // ✅ Cast for C# compatibility
            $paytypeArray['IsSwipe'] = (bool) $paytype->IsSwipe;
            $paytypeArray['IsRefundable'] = (bool) $paytype->IsRefundable;
            $paytypeArray['IsActive'] = (bool) $paytype->IsActive;
            $paytypeArray['IsBillCopy'] = (bool) $paytype->IsBillCopy;

            $paytypeArray['Type'] = (int) $paytype->Type;
            $paytypeArray['MaxLength'] = (int) $paytype->MaxLength;
            $paytypeArray['OrderNo'] = (int) $paytype->OrderNo;

            $paytypeArray['Rate'] = $paytype->Rate !== null
                ? (float) $paytype->Rate
                : null;

            return response()->json($paytypeArray);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve payment type',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
