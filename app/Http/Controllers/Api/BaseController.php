<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected function sendResponse($result, $message = 'Success'){
        return response()->json([
            'success'=> true,
            'message'=> $message,
            'data'=> $result
        ], 200);
    }

    protected function sendError($error, $errorMessage = [], $code = '404'){
        $response = [
            'success'=> false,
            'message' => $error
        ];

        if (!empty($errorMessage)) {
            $response['errors'] = $errorMessage;
        }

        return response()->json($response, $code);
    }
}
