<?php

namespace App\Http\Controllers;

use App\Models\DayStart;
use App\Http\Requests\StoreDayStartRequest;
use App\Http\Requests\UpdateDayStartRequest;
use Exception;

class DayStartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $dayStarts = DayStart::all();
            return response()->json($dayStarts);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve day starts',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDayStartRequest $request)
    {
        try {
            $dayStart = DayStart::create($request->validated());

            return response()->json([
                'message' => 'Day start created successfully',
                'dayStart' => $dayStart,
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to create day start',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(DayStart $dayStart)
    {
        try {
            return response()->json($dayStart);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve day start',
                'message' => $e->getMessage()
            ], 500);
        }
    }
    /**
     * Update the specified resource in storage using idx
     */
    public function update(UpdateDayStartRequest $request, $IdWithLocation)
    {
        try {
            // Find the record by idx
            $dayStart = DayStart::where('IdWithLocation', $IdWithLocation)->firstOrFail();

            // Update using validated request data
            $dayStart->update($request->validated());

            return response()->json([
                'message' => 'Day start updated successfully',
                'dayStart' => $dayStart,
            ]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Day start not found',
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to update day start',
                'message' => $e->getMessage()
            ], 500);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DayStart $dayStart)
    {
        try {
            $dayStart->delete();

            return response()->json([
                'message' => 'Day start deleted successfully',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to delete day start',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Filter DayStart by idx
     */
    public function filterByIdx($IdWithLocation)
    {
        try {
            $dayStart = DayStart::where('IdWithLocation', $IdWithLocation)->first(); // returns model or null

            if (!$dayStart) {
                return response()->json([
                    'message' => 'No day start found with the given idx'
                ], 404);
            }

            // Cast decimals to float to ensure JSON numbers
            $dayStartArray = $dayStart->toArray();
            $dayStartArray['Amount'] = $dayStart->Amount !== null ? (float)$dayStart->Amount : null;
            $dayStartArray['CashInHand'] = $dayStart->CashInHand !== null ? (float)$dayStart->CashInHand : null;

            $dayStartArray['StartSystemDate'] = $dayStart->StartSystemDate
                ? \Carbon\Carbon::parse($dayStart->StartSystemDate)->toIso8601String()
                : null;

            $dayStartArray['EndSystemDate'] = $dayStart->EndSystemDate
                ? \Carbon\Carbon::parse($dayStart->EndSystemDate)->toIso8601String()
                : null;


            $dayStartArray['IsDayEnd'] = (bool) $dayStart->IsDayEnd;
            $dayStartArray['IsShiftStarted'] = (bool) $dayStart->IsShiftStarted;


            return response()->json($dayStartArray);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve day start',
                'message' => $e->getMessage()
            ], 500);
        }
    }



    public function updateByIdx(UpdateDayStartRequest $request, $idx)
    {
        try {
            $dayStart = DayStart::where('idx', $idx)->firstOrFail();
            $dayStart->update($request->validated());

            return response()->json([
                'message' => 'Day start updated successfully',
                'dayStart' => $dayStart,
            ]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Day start not found',
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to update day start',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
