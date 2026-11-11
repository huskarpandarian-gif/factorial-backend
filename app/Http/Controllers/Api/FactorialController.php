<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\FactorialService;
use Illuminate\Http\JsonResponse;
class FactorialController extends Controller
{
    public function calculate(
        Request $request,
         FactorialService $factorialService
    ):JsonResponse
    {
        $validatedData = $request->validate([
            'number' => 'required|integer|min:0',
        ]);

        $number = (int)$validatedData['number'];

        $result = $factorialService->calculateFactorial($number);

        return response()->json([
            'success' => true,
            'data' => [
                'number' => $number,
                'factorial' => $result,
            ]
        ]);
    }
}
