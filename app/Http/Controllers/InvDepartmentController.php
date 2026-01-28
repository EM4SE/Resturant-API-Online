<?php

namespace App\Http\Controllers;

use App\Models\InvDepartment;
use App\Http\Requests\StoreInvDepartmentRequest;
use App\Http\Requests\UpdateInvDepartmentRequest;
use Exception;
use Carbon\Carbon;

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
    public function update(UpdateInvDepartmentRequest $request, $invDepartmentID)
    {
        try {
            $invDepartment = InvDepartment::where('InvDepartmentID', $invDepartmentID)->first();

            if (!$invDepartment) {
                return response()->json([
                    'error' => 'Inventory department not found',
                ], 404);
            }

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


    public function filterByInvDepartmentID($invDepartmentID)
    {
        try {
            $invDepartment = InvDepartment::where('InvDepartmentID', $invDepartmentID)->first();

            if (!$invDepartment) {
                return response()->json([
                    'message' => 'No inventory department found with the given InvDepartmentID'
                ], 404);
            }

            $invDepartmentArray = $invDepartment->toArray();

            // ✅ Explicit casting for C#
            $invDepartmentArray['IsDelete'] = (bool) $invDepartment->IsDelete;
            $invDepartmentArray['DataTransfer'] = (bool) $invDepartment->DataTransfer;

            $invDepartmentArray['CreatedUser'] = $invDepartment->CreatedUser !== null
                ? (int) $invDepartment->CreatedUser
                : null;

            $invDepartmentArray['ModifiedUser'] = $invDepartment->ModifiedUser !== null
                ? (int) $invDepartment->ModifiedUser
                : null;

            // ✅ ISO-8601 datetime
            $invDepartmentArray['CreatedDate'] = $invDepartment->CreatedDate
                ? Carbon::parse($invDepartment->CreatedDate)->toIso8601String()
                : null;

            $invDepartmentArray['ModifiedDate'] = $invDepartment->ModifiedDate
                ? Carbon::parse($invDepartment->ModifiedDate)->toIso8601String()
                : null;

            return response()->json($invDepartmentArray);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve inventory department',
                'message' => $e->getMessage()
            ], 500);
        }
    }
    public function updateByInvDepartmentID(UpdateInvDepartmentRequest $request, $invDepartmentID)
    {
        try {
            $invDepartment = InvDepartment::where('InvDepartmentID', $invDepartmentID)->first();

            if (!$invDepartment) {
                return response()->json([
                    'error' => 'Inventory department not found',
                ], 404);
            }

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
}
