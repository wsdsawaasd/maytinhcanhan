<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculatorController extends Controller
{
    public function calculate()
    {
        return view('index');
    }

    public function calculate1(Request $request)
    {
        $firstNumber = $request->firstNumber;
        $secondNumber = $request->secondNumber;
        if (isset($_POST['add'])) {
            $result = $firstNumber + $secondNumber;
            return view('index', compact('result'));
        } else if (isset($_POST['sub'])) {
            $result = $firstNumber - $secondNumber;
            return view('index', compact('result'));
        } else if (isset($_POST['Mul'])) {
            $result = $firstNumber * $secondNumber;
            return view('index', compact('result'));
        } else {
            try {
                $result = $firstNumber/ $secondNumber;
                return view('index', compact('result'));
            } catch (\Exception $exception) {
                echo $exception->getMessage();
            }
        }
    }
}
