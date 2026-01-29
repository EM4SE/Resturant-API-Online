<?php

namespace App\Http\Controllers;

use App\Models\SysConfig;
use App\Http\Requests\StoreSysConfigRequest;
use App\Http\Requests\UpdateSysConfigRequest;
use Exception;

class SysConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $sysConfigs = SysConfig::all();
            return response()->json($sysConfigs);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve system configurations',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSysConfigRequest $request)
    {
        try {
            $sysConfig = SysConfig::create($request->validated());

            return response()->json([
                'message' => 'System config created successfully',
                'config' => $sysConfig,
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to create system configuration',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(SysConfig $sysConfig)
    {
        try {
            return response()->json($sysConfig);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve system configuration',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSysConfigRequest $request, $idx)
    {
        try {
            $sysConfig = SysConfig::where('idx', $idx)->first();

            if (!$sysConfig) {
                return response()->json([
                    'error' => 'System configuration not found',
                ], 404);
            }

            $sysConfig->update($request->validated());

            return response()->json([
                'message' => 'System config updated successfully',
                'config' => $sysConfig,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to update system configuration',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SysConfig $sysConfig)
    {
        try {
            $sysConfig->delete();

            return response()->json([
                'message' => 'System config deleted successfully',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to delete system configuration',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function filterByIdx($idx)
    {
        try {
            $sysConfig = SysConfig::where('idx', $idx)->first();

            if (!$sysConfig) {
                return response()->json([
                    'message' => 'No system configuration found with the given idx'
                ], 404);
            }

            return response()->json($sysConfig);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to retrieve system configuration',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
