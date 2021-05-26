<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class DashboardController extends Controller
{
    public function inspection() {
        $data = [];
        $i;
        for ($i = 1; $i <= 100; $i++)
        {
        // number divisible by 3 and 5
        if ($i % 15 == 0)
           
            $data[$i] = [
                "notes" => "Coating Damage and Lightning Strike"
            ];

        // number divisible by 3
        else if (($i % 3) == 0)
        $data[$i] = [
            "notes" => "Coating Damage"
        ];

        // number divisible by 5
        else if (($i % 5) == 0)
        $data[$i] = [
            "notes" => "Lightning Damage"
        ];

        else // print the number
        $data[$i] = [
            "notes" => "$i"
        ];
        }

        return response()->json($data);
    }
}
