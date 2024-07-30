<?php
namespace App\Services;

class PaginationService {
    public static function makePagination($query , $request){
        $perPage = $request->input('per_page', 10);
        return $query->paginate($perPage);
    }

    public static function makePaginationWithParams($eloquent, $request)
    {
        $resultShowCount = $request->input('per_page', 10);

        $paginator = $eloquent->paginate($resultShowCount);

        // Retrieve additional pagination information
        $currentPage = $paginator->currentPage();
        $totalPages = $paginator->lastPage();
        $totalItems = $paginator->total();

        // Create an array that includes both pagination data and the paginated results
        $paginationData = [
            'current_page' => $currentPage,
            'total_pages' => $totalPages,
            'total_items' => $totalItems,
            'result' => $paginator->items(), // This contains the paginated data
        ];

        return $paginationData;
    }
}
