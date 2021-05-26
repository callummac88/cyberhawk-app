<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class InspectionController extends Controller
{
    public function inspection() {
        $data = [];
        $i;
        for ($i = 1; $i <= 100; $i++)
        {
        // number divisible by 3 and 5
        if ($i % 15 == 0)
        $data[$i] = [
            "id" => $i . random_int(100000, 999999),
            "notes" => "Coating Damage and Lightning Strike",
            "status" => "error",
            "highlight" => true
        ];
        // number divisible by 3
        else if (($i % 3) == 0)
        $data[$i] = [
            "id" => $i . random_int(100000, 999999),
            "notes" => "Coating Damage",
            "status" => "error",
            "highlight" => true
        ];
        // number divisible by 5
        else if (($i % 5) == 0)
        $data[$i] = [
            "id" => $i . random_int(100000, 999999),
            "notes" => "Lightning Damage",
            "status" => "error",
            "highlight" => true
        ];
        else // print the number
        $data[$i] = [
            "id" => $i . random_int(100000, 999999),
            "notes" => "$i",
            "status" => "success",
            "highlight" => false
        ];
        }

        return response()->json($data);
    }
}
