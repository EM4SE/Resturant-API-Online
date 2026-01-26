<?php

namespace App\Http\Controllers;

use App\Models\TransactionDet;
use App\Http\Requests\StoreTransactionDetRequest;
use App\Http\Requests\UpdateTransactionDetRequest;
use Exception;

class TransactionDetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $transactionDets = TransactionDet::all();
            return response()->json($transactionDets);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve transaction details',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransactionDetRequest $request)
    {
        try {
            $transactionDet = TransactionDet::create($request->validated());

            return response()->json([
                'message' => 'Transaction detail created successfully',
                'transaction' => $transactionDet,
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to create transaction detail',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(TransactionDet $transactionDet)
    {
        try {
            return response()->json($transactionDet);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve transaction detail',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionDetRequest $request, TransactionDet $transactionDet)
    {
        try {
            $transactionDet->update($request->validated());

            return response()->json([
                'message' => 'Transaction detail updated successfully',
                'transaction' => $transactionDet,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to update transaction detail',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TransactionDet $transactionDet)
    {
        try {
            $transactionDet->delete();

            return response()->json([
                'message' => 'Transaction detail deleted successfully',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to delete transaction detail',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
