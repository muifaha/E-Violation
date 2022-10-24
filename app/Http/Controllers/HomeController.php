<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'datasiswa']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->is_admin == true) {
            $siswas = Student::all();
            $users = User::all();
            return view('home', compact('siswas', 'users'));
        }
        $siswas = Student::with('user')->take(10)->get()->sortByDesc('poin');
        $siswa = Student::where('user_id', auth()->user()->id)->first();
        $nama = strtok($siswa['nama'], " ");
        return view('home', compact('siswas', 'siswa', 'nama'));
    }

    // public function penanganan()
    // {
    //     return view('home');
    // }
}