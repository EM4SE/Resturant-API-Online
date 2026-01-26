<?php

namespace App\Http\Controllers;

use App\Models\PaymentDet;
use App\Http\Requests\StorePaymentDetRequest;
use App\Http\Requests\UpdatePaymentDetRequest;
use Exception;

class PaymentDetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $paymentDets = PaymentDet::all();
            return response()->json($paymentDets);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve payment details',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaymentDetRequest $request)
    {
        try {
            $paymentDet = PaymentDet::create($request->validated());

            return response()->json([
                'message' => 'Payment detail created successfully',
                'payment' => $paymentDet,
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to create payment detail',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(PaymentDet $paymentDet)
    {
        try {
            return response()->json($paymentDet);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve payment detail',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentDetRequest $request, PaymentDet $paymentDet)
    {
        try {
            $paymentDet->update($request->validated());

            return response()->json([
                'message' => 'Payment detail updated successfully',
                'payment' => $paymentDet,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to update payment detail',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaymentDet $paymentDet)
    {
        try {
            $paymentDet->delete();

            return response()->json([
                'message' => 'Payment detail deleted successfully',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to delete payment detail',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
