<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;

class FrontController extends Controller
{

    public function homepage()
    {
        $portfolios = Portfolio::where('featured', 1)->latest()->simplePaginate(3);
        return view('front.index')->with('portfolios', $portfolios);

    }

}