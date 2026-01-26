<?php

namespace App\Http\Controllers;

use App\Models\InvDepartment;
use App\Http\Requests\StoreInvDepartmentRequest;
use App\Http\Requests\UpdateInvDepartmentRequest;
use Exception;

class InvDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $invDepartments = InvDepartment::where('IsDelete', false)->get();
            return response()->json($invDepartments);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve inventory departments',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInvDepartmentRequest $request)
    {
        try {
            $data = $request->validated();
            $data['CreatedDate'] = now();
            $data['ModifiedDate'] = now();

            $invDepartment = InvDepartment::create($data);

            return response()->json([
                'message' => 'Inventory department created successfully',
                'department' => $invDepartment,
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to create inventory department',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(InvDepartment $invDepartment)
    {
        try {
            return response()->json($invDepartment);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve inventory department',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInvDepartmentRequest $request, InvDepartment $invDepartment)
    {
        try {
            $data = $request->validated();
            $data['ModifiedDate'] = now();

            $invDepartment->update($data);

            return response()->json([
                'message' => 'Inventory department updated successfully',
                'department' => $invDepartment,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to update inventory department',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InvDepartment $invDepartment)
    {
        try {
            $invDepartment->update([
                'IsDelete' => true,
                'ModifiedDate' => now()
            ]);

            return response()->json([
                'message' => 'Inventory department deleted successfully',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to delete inventory department',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
