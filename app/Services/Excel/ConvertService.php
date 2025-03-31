<?php

namespace App\Services\Excel;

use Illuminate\Http\Request;

class ConvertService
{
    public function doService(Request $request)
    {
        preg_match('/^([A-Za-z]+)(\d+)$/', $request->cell, $matches);

        $columnLetters = strtoupper($matches[1]);
        $rowNumber = (int)$matches[2];
        $columnNumber = 0;
        foreach (str_split($columnLetters) as $char) {
            $columnNumber = $columnNumber * 26 + (ord($char) - ord('A') + 1);
        }
        return $columnNumber . '.' . $rowNumber;
    }
}
