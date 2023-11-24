<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tradereq;
use App\Models\soldtable;
use App\Models\Calculator;

class SearchController extends Controller
{


    public function search()
    {
        $search_text = $_GET['query'];
        $ruturaj = tradereq::where('FarmerAddress', 'LIKE', '%' . $search_text . '%')->get();

        return view('FarmerViews.search', compact('data'));
    }

    public function showForm()
    {

        return view('FarmerViews.calculator');
    }

    // public function calculate(Request $request)
    // {

    //     // Validate form input

    //     $validatedData = $request->validate([

    //         'operand1' => 'required|numeric',

    //         'operand2' => 'required|numeric',

    //         'operator' => 'required|in:add,subtract,multiply,divide', // Add other operators here

    //     ]);

    //     // Create a new Calculator instance

    //     $calculator = new Calculator($validatedData);

    //     // Perform calculation based on the selected operator

    //     $result = $calculator->{$validatedData['operator']}();

    //     // Return the result view with the calculated result

    //     return view('calculator.result', ['result' => $result]);
    // }

    public function calculate()
    {
        return view('Farmerviews.calciresult');
    }
}
