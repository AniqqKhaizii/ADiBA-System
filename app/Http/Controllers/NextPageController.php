<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NextPageController extends Controller
{
    public function index(Request $request)
    {
        // Retrieve the selected button data from the request
        $selectedButtons = $request->input('selected_buttons');

        // Store the selected button data in the session for later use
        session(['selected_buttons' => $selectedButtons]);

        // Do something with the selected button value
        dd($selectedButtons);

        // Redirect to the next page
        return redirect()->route('selectcolumn');
    }
}
