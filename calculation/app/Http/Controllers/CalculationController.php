<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculationController extends Controller
{
    //
    public function getData(Request $request)
{
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    $calculator = $request->input('calculator');
    
    function calculator($num1, $calculator, $num2)
    {
        switch ($calculator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2; 
                break;
            case '*':
                $result = $num1 * $num2; 
                break;
            case '/':
                $result = $num1 / $num2; 
                break;
            default:
                $result = 'Invalid!';
                break;
        }
        
        return $result;
    }
    
    $result = calculator($num1, $calculator, $num2);
    
    return view('calculator', ['result' => $result]);
}
}