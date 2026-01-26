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
     * Update the specified resource in storage.
     */
    public function update(UpdateDayStartRequest $request, DayStart $dayStart)
    {
        try {
            $dayStart->update($request->validated());

            return response()->json([
                'message' => 'Day start updated successfully',
                'dayStart' => $dayStart,
            ]);
        } catch (Exception $e) {
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
}
