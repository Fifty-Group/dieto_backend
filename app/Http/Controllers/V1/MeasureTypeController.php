<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\MeasureType\IndexMeasureTypeResource;
use App\Models\V1\MeasureType;
use App\Traits\V1\ApiResponserTrait;
use Illuminate\Http\Request;
use App\Services\PaginationService;

class MeasureTypeController extends Controller
{
    use ApiResponserTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = MeasureType::query();
        $result = PaginationService::makePaginationWithParams($data, $request);
        $result['result'] = IndexMeasureTypeResource::collection($result['result']);
        return $this->response(1, $result, 'success', 200, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
