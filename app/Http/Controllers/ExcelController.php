<?php

namespace App\Http\Controllers;

use App\Http\Requests\Excel\ConvertRequest;
use App\Services\Excel\ConvertService;

class ExcelController extends Controller
{
    public function index()
    {
        return view('main.excel.index');
    }

    public function convert(ConvertRequest $request, ConvertService $service)
    {
        $result = $service->doService($request);

        return redirect()->route('excel.index')->with('result', $result);
    }
}
