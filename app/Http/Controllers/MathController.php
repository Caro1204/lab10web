<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function suma($num1, $num2)
    {
        return response()->json(['result' => $num1 + $num2]);
    }

    public function mult($num1, $num2)
    {
        return response()->json(['result' => $num1 * $num2]);
    }
}
