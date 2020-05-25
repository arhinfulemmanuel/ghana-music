<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chart;

class ChartsController extends Controller
{
    //
    public function index(Request $request){

        if ($request->input('chart_value')==5) {
            $charts = Chart::orderBy('position', 'ASC')->paginate(10);
            return view('blog.charts', ['charts'=>$charts]);
        }
        else {
            $charts = Chart::orderBy('position', 'ASC')->paginate(5);
            return view('blog.charts', ['charts'=>$charts]);
        }
    }
}