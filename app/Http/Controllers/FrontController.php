<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {

        $tanggal = "";
        if (request('tanggal')) {
            $tanggal = date('d-m-Y', strtotime(request('tanggal')));
        };

        $histories = History::where('tanggal', Carbon::today()->toDateString())->filter(request(['tanggal', 'student']))->paginate(10)->withQueryString();
        return view('layouts.app', compact('histories', 'tanggal'));
    }

    public function search_nisn()
    {
        return Student::with('kelas')->firstWhere('nisn', request('nisn'));
    }
}