<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    //
    public function sendResponse($result, $message, $statusCode)
    {

        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message,
        ];
        return response()->json($response, $statusCode);
    }

    public function sendError($errorResult, $errorMessage, $statusCode)
    {
        $response = [
            'success' => false,
            'message' => $errorMessage,
        ];
        if (!empty($errorResult)) {
            $response['data'] = $errorResult;
        }
        return response()->json($response, $statusCode);
    }
}
