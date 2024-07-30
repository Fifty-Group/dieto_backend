<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Product\DeleteProductRequest;
use App\Http\Requests\V1\Product\StoreProductRequest;
use App\Http\Requests\V1\Product\UpdateProductRequest;
use App\Http\Resources\V1\Product\IndexProductResource;
use App\Http\Resources\V1\Product\ShowProductResource;
use App\Models\V1\Product;
use App\Services\FileSave;
use App\Services\MeasureCupProductService;
use App\Services\PaginationService;
use App\Traits\V1\ApiResponserTrait;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use ApiResponserTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = Product::query();
        $resultPagination = PaginationService::makePaginationWithParams($data, $request);
        $resultPagination['result'] = IndexProductResource::collection($resultPagination['result']);
        return $this->response(1, $resultPagination , 'success', 200, 200);
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
    public function store(StoreProductRequest $storeProductRequest)
    {
        // return $storeProductRequest->measure_cup_products;
        $measureCupId = null;
        if ($storeProductRequest->measure_type_id == 3) {
            $measureCupId = 2;
        }
        else{
            $measureCupId = $storeProductRequest->measure_cup_id;
        }
        $measureCupValue = null;
        if ($measureCupId == 2) {
            $measureCupValue = 250;
        } else {
            $measureCupValue = $storeProductRequest->measure_cup_value;
        }
        $newProduct = Product::create([
            'title' => json_encode($storeProductRequest->title),
            'measure_type_id' => $storeProductRequest->measure_type_id,
            'measure_cup_id' => $measureCupId,
            'measure_cup_value' => $measureCupValue,
            'calories' => $storeProductRequest->calories,
            'permission_description' => json_encode($storeProductRequest->permission_description)
        ]);
        if ($storeProductRequest->file('image')) {
            $newImage = FileSave::storeFile('product/images', $storeProductRequest->file('image'));
            $newProduct->image = $newImage;
            $newProduct->update();
        }
        return $this->response(1, new IndexProductResource($newProduct), 'created', 201, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return $this->response(1, new ShowProductResource($product), 'created', 200, 200);
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
    public function update(UpdateProductRequest $updateProductRequest, Product $product)
    {
        $measureCupId = null;
        if ($updateProductRequest->measure_type_id == 3) {
            $measureCupId = 2;
        }
        else{
            $measureCupId = $updateProductRequest->measure_cup_id;
        }
        $measureCupValue = null;
        if ($measureCupId == 2) {
            $measureCupValue = 250;
        } else {
            $measureCupValue = $updateProductRequest->measure_cup_value;
        }
        $product->update([
            'title' => json_encode($updateProductRequest->title),
            'measure_type_id' => $updateProductRequest->measure_type_id,
            'measure_cup_id' => $measureCupId,
            'measure_cup_value' => $measureCupValue,
            'calories' => $updateProductRequest->calories,
            'permission_description' => json_encode($updateProductRequest->permission_description)
        ]);
        if ($updateProductRequest->file('image')) {
            $newImage = FileSave::storeFile('product/images', $updateProductRequest->file('image'));
            $product->image = $newImage;
            $product->update();
        }
        return $this->response(1, new IndexProductResource($product), 'updated', 200, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeleteProductRequest $deleteProductRequest ,Product $product)
    {
        $product->delete();
        return $this->response(1, new ShowProductResource($product), 'deleted', 200, 200);
    }
}
