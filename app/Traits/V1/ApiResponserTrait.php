<?php

namespace App\Traits\V1;

trait ApiResponserTrait
{
    protected function response($status = true, $data = [], string $message = null, $messageCode = null, int $code = 200): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data,
            'status_code' => $messageCode
        ], $code);
    }
}
