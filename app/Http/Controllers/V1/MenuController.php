<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Menu\StoreMenuRequest;
use App\Http\Requests\V1\MenuPart\StoreMenuPartRequest;
use App\Http\Resources\V1\Menu\MenuShowResource;
use App\Models\V1\MenuPart;
use App\Models\V1\MenuPartProduct;
use App\Models\V1\MenuSize;
use App\Traits\V1\ApiResponserTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    use ApiResponserTrait;
    public function store(StoreMenuRequest $storeMenuRequest)
    {
        try {
            DB::transaction(function () use ($storeMenuRequest) {
                $menuParts = $storeMenuRequest->menu_parts;
                foreach ($menuParts as $menuPart) {
                    $newMenuPart = MenuPart::create([
                        'menu_size_id' => $storeMenuRequest->menu_size_id,
                        'menu_type_id' => $menuPart['menu_type_id'],
                        'calories' => $menuPart['calories']
                    ]);
                    $menuPartProducts = $menuPart['menu_part_products'];
                    foreach ($menuPartProducts as $menuPartProduct) {
                        $newMenuPartProduct = MenuPartProduct::create([
                            'menu_part_id' => $newMenuPart->id,
                            'product_id' => $menuPartProduct['product_id'],
                            'measure_cup_count' => key_exists('measure_cup_count', $menuPartProduct) ? $menuPartProduct['measure_cup_count'] : null,
                            'calories' => $menuPartProduct['calories'],
                            'measure_type_count' => $menuPartProduct['measure_type_count']
                        ]);
                    }
                }
            });
            return $this->response(1, [], 'stored', 200, 200);
        } catch (Exception $e) {
            return $this->response(0, [
                'error' => [
                    'message' => $e->getMessage(),
                    'file' => $e->getFile(),
                    'line' => $e->getLine()
                ]
            ], 'error', 500, 200);
        }
    }

    public function store_menu_part(StoreMenuPartRequest $storeMenuPartRequest)
    {
        try {
            DB::transaction(function () use ($storeMenuPartRequest) {
                $newMenuPart = MenuPart::create([
                    'menu_size_id' => $storeMenuPartRequest->menu_size_id,
                    'menu_type_id' => $storeMenuPartRequest->menu_type_id,
                    'calories' => $storeMenuPartRequest->calories
                ]);
                $menuPartProducts = $storeMenuPartRequest->menu_part_products;
                foreach ($menuPartProducts as $menuPartProduct) {
                    $newMenuPartProduct = MenuPartProduct::create([
                        'menu_part_id' => $newMenuPart->id,
                        'product_id' => $menuPartProduct['product_id'],
                        'measure_cup_count' => key_exists('measure_cup_count', $menuPartProduct) ? $menuPartProduct['measure_cup_count'] : null,
                        'calories' => $menuPartProduct['calories'],
                        'measure_type_count' => $menuPartProduct['measure_type_count']
                    ]);
                }
            });
            return $this->response(1, [], 'stored', 200, 200);
        } catch (Exception $e) {
            return $this->response(0, [
                'error' => [
                    'message' => $e->getMessage(),
                    'file' => $e->getFile(),
                    'line' => $e->getLine()
                ]
            ], 'error', 500, 200);
        }
    }

    public function index(MenuSize $menuSize)
    {
        $menuSize->load('menu_parts');
        $menuSize->load('menu_parts.menu_part_products');
        $menuSize->load('menu_parts.menu_part_products.product');
        return $this->response(1, new MenuShowResource($menuSize), 'success', 200, 200);
    }

    public function destroy_menu_part(MenuPart $menuPart)
    {
        MenuPartProduct::where('menu_part_id', $menuPart->id)->delete();
        $menuPart->delete();
        return $this->response(1, [], 'deleted', 200, 200);
    }
}
