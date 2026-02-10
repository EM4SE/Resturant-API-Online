<?php

namespace App\Http\Controllers;

use App\Models\Counters;
use App\Http\Requests\StoreCountersRequest;
use App\Http\Requests\UpdateCountersRequest;
use Exception;

class CountersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $counters = Counters::all();
            return response()->json($counters);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve counters',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCountersRequest $request)
    {
        try {
            $data = $request->validated();

            $counter = Counters::create($data);

            return response()->json([
                'message' => 'Counter created successfully',
                'counter' => $counter,
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to create counter',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Counters $counter)
    {
        try {
            return response()->json($counter);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve counter',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCountersRequest $request, $IdWithLocation)
    {
        try {
            $counter = Counters::where('IdWithLocation', $IdWithLocation)->first();

            if (!$counter) {
                return response()->json([
                    'error' => 'Counter not found',
                ], 404);
            }

            $data = $request->validated();
            $counter->update($data);

            return response()->json([
                'message' => 'Counter updated successfully',
                'counter' => $counter,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to update counter',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Counters $counter)
    {
        try {
            $counter->delete();

            return response()->json([
                'message' => 'Counter deleted successfully',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to delete counter',
                'message' => $e->getMessage()
            ], 500);
        }
    }


    public function filterByIdx($IdWithLocation)
    {
        try {
            $counter = Counters::where('IdWithLocation', $IdWithLocation)->first();

            if (!$counter) {
                return response()->json([
                    'message' => 'No counter found with the given IdWithLocation'
                ], 404);
            }

            return response()->json($counter);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve counter',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function updateByIdx(UpdateCountersRequest $request, $idx)
    {
        try {
            $counter = Counters::where('Idx', $idx)->first();

            if (!$counter) {
                return response()->json([
                    'error' => 'Counter not found',
                ], 404);
            }

            $data = $request->validated();
            $counter->update($data);

            return response()->json([
                'message' => 'Counter updated successfully',
                'counter' => $counter,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to update counter',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
