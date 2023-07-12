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
        $result = " ";
        
        function calculator($num1,$num2,$calculator){
            $result =0;
            switch ($calculator) {
                case '+':
                    $result= $num1 + $num2;
                    break;
                case '-':
                    $result= $num1 - $num2; 
                    break;
                case '*':
                    $result= $num1 * $num2; 
                    break;
                case '/':
                    $re= $num1 / $num2; 
                     break;
                default:
                $result = 'Invalid!';
                    break;
            }
            return view('calculator', ['result'=>$result]);;
        }
    }
}