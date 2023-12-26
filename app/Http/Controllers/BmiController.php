<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BmiController extends Controller
{
    public function hitungBMI(Request $request) {
        $berat = $request->input('berat');
        $tinggi = $request->input('tinggi');
        $tinggiMeter = $tinggi / 100;
        $bmi = $berat / ($tinggiMeter * $tinggiMeter);
        return view('bmi', ['bmi' => $bmi]);
    }
}
