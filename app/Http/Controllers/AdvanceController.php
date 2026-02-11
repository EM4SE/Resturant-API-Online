<?php

namespace App\Http\Controllers;

use App\Models\Advance;
use App\Http\Requests\StoreAdvanceRequest;
use App\Http\Requests\UpdateAdvanceRequest;
use Exception;
use Carbon\Carbon;

class AdvanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $advances = Advance::all();
            return response()->json($advances);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve advances',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdvanceRequest $request)
    {
        try {
            $data = $request->validated();
            $advance = Advance::create($data);

            return response()->json([
                'message' => 'Advance created successfully',
                'advance' => $advance,
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to create advance',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Advance $advance)
    {
        try {
            return response()->json($advance);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve advance',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdvanceRequest $request, $id)
    {
        try {
            $advance = Advance::find($id);

            if (!$advance) {
                return response()->json([
                    'error' => 'Advance not found'
                ], 404);
            }

            $advance->update($request->validated());

            return response()->json([
                'message' => 'Advance updated successfully',
                'advance' => $advance,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to update advance',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $advance = Advance::find($id);

            if (!$advance) {
                return response()->json([
                    'error' => 'Advance not found'
                ], 404);
            }

            $advance->delete();

            return response()->json([
                'message' => 'Advance deleted successfully'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to delete advance',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function filterByIdx($IdWithLocation)
    {
        try {
            $advance = Advance::where('IdWithLocation', $IdWithLocation)->first();

            if (!$advance) {
                return response()->json([
                    'message' => 'No advance found with the given IdWithLocation'
                ], 404);
            }

            $advanceArray = $advance->toArray();

            // Boolean fields
            $boolFields = [
                'IsRecallAdv',
                'IsDayEnd'
            ];

            foreach ($boolFields as $field) {
                $advanceArray[$field] = (bool) $advance->$field;
            }

            // Decimal fields
            $decimalFields = [
                'Amount',
                'Balance'
            ];

            foreach ($decimalFields as $field) {
                $advanceArray[$field] = $advance->$field !== null
                    ? (float) $advance->$field
                    : null;
            }

            // Date / DateTime fields
            $dateFields = [
                'SDate',
                'ChequeDate',
                'DayStartDate',
                'ShiftDate',
            ];

            foreach ($dateFields as $field) {
                $advanceArray[$field] = $advance->$field
                    ? Carbon::parse($advance->$field)->toIso8601String()
                    : null;
            }

            return response()->json($advanceArray);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve advance',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
