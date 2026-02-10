<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use App\Http\Requests\StoreShiftRequest;
use App\Http\Requests\UpdateShiftRequest;
use Exception;
use Carbon\Carbon;

class ShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $shifts = Shift::all();
            return response()->json($shifts);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve shifts',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShiftRequest $request)
    {
        try {
            $shift = Shift::create($request->validated());

            return response()->json([
                'message' => 'Shift created successfully',
                'shift' => $shift,
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to create shift',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $shift = Shift::findOrFail($id);
            return response()->json($shift);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Shift not found',
                'message' => $e->getMessage()
            ], 404);
        }
    }

    /**
     * Update the specified resource using IdWithLocation.
     */
    public function update(UpdateShiftRequest $request, $IdWithLocation)
    {
        try {
            $shift = Shift::where('IdWithLocation', $IdWithLocation)->first();

            if (!$shift) {
                return response()->json([
                    'error' => 'Shift not found',
                ], 404);
            }

            $shift->update($request->validated());

            return response()->json([
                'message' => 'Shift updated successfully',
                'shift' => $shift,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to update shift',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource.
     */
    public function destroy($id)
    {
        try {
            $shift = Shift::findOrFail($id);
            $shift->delete();

            return response()->json([
                'message' => 'Shift deleted successfully',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to delete shift',
                'message' => $e->getMessage()
            ], 500);
        }
    }



    public function filterByIdx($IdWithLocation)
    {
        try {
            $shift = Shift::where('IdWithLocation', $IdWithLocation)->first();

            if (!$shift) {
                return response()->json([
                    'message' => 'No shift found with the given IdWithLocation'
                ], 404);
            }

            $shiftArray = $shift->toArray();

            // Boolean fields
            $boolFields = [
                'IsShiftEnd',
                'IsDayEnd'
            ];

            foreach ($boolFields as $field) {
                $shiftArray[$field] = (bool) $shift->$field;
            }

            // Decimal fields
            $decimalFields = [
                'Float',
                'CashInHand'
            ];

            foreach ($decimalFields as $field) {
                $shiftArray[$field] = $shift->$field !== null
                    ? (float) $shift->$field
                    : null;
            }

            // Date / DateTime fields
            $dateFields = [
                'DayStartDate',
                'ShiftDate',
                'ShiftDateTime',
                'ShiftStartSystemDate',
                'ShiftEndSystemDate',
                'ShiftEndDate',
                'ShiftEndDateTime'
            ];

            foreach ($dateFields as $field) {
                $shiftArray[$field] = $shift->$field
                    ? Carbon::parse($shift->$field)->toIso8601String()
                    : null;
            }

            return response()->json($shiftArray);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve shift',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
