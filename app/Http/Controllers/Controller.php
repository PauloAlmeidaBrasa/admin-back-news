<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    static function respondWithSucess($data,$feat) {
        return response()->json([
            'success' => true,
            'data' => [
                $feat => $data
            ]
        ],200);
    }
}
