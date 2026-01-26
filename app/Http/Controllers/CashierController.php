<?php

namespace App\Http\Controllers;

use App\Models\Cashier;
use App\Http\Requests\StoreCashierRequest;
use App\Http\Requests\UpdateCashierRequest;
use Exception;
use Illuminate\Support\Facades\Hash;

class CashierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $cashiers = Cashier::all();
            return response()->json($cashiers);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve cashiers',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCashierRequest $request)
    {
        try {
            $data = $request->validated();

            // // Hash the password before storing
            // if (isset($data['Password'])) {
            //     $data['Password'] = Hash::make($data['Password']);
            // }

            $cashier = Cashier::create($data);

            return response()->json([
                'message' => 'Cashier created successfully',
                'cashier' => $cashier,
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to create cashier',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Cashier $cashier)
    {
        try {
            return response()->json($cashier);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve cashier',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCashierRequest $request, Cashier $cashier)
    {
        try {
            $data = $request->validated();

            // Hash the password if it's being updated
            // if (isset($data['Password'])) {
            //     $data['Password'] = Hash::make($data['Password']);
            // }

            $cashier->update($data);

            return response()->json([
                'message' => 'Cashier updated successfully',
                'cashier' => $cashier,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to update cashier',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cashier $cashier)
    {
        try {
            $cashier->delete();

            return response()->json([
                'message' => 'Cashier deleted successfully',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to delete cashier',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
