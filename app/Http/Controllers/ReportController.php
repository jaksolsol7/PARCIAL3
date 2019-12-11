<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    public function list(){
        $reports = Report::all();
        return view('reports',['reports'=>$reports]);
    }
}
