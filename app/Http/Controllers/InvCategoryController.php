<?php

namespace App\Http\Controllers;

use App\Models\InvCategory;
use App\Http\Requests\StoreInvCategoryRequest;
use App\Http\Requests\UpdateInvCategoryRequest;
use Exception;

class InvCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $invCategories = InvCategory::all();
            return response()->json($invCategories);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve inventory categories',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInvCategoryRequest $request)
    {
        try {
            $invCategory = InvCategory::create($request->validated());

            return response()->json([
                'message' => 'Inventory category created successfully',
                'category' => $invCategory,
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to create inventory category',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(InvCategory $invCategory)
    {
        try {
            return response()->json($invCategory);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve inventory category',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInvCategoryRequest $request, InvCategory $invCategory)
    {
        try {
            $invCategory->update($request->validated());

            return response()->json([
                'message' => 'Inventory category updated successfully',
                'category' => $invCategory,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to update inventory category',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InvCategory $invCategory)
    {
        try {
            $invCategory->delete();

            return response()->json([
                'message' => 'Inventory category deleted successfully',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to delete inventory category',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
