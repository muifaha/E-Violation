<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use App\Models\WaliKelas;
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
     * Show the application home.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->role == 1) {
            $siswas = Student::all();
            $users = User::all();
            return view('home', compact('siswas', 'users'));
        }
        if (auth()->user()->role == 2) {
            $wali_kelas_id = WaliKelas::where('user_id', auth()->user()->id)->first();
            $siswas = Student::where('kelas_id', $wali_kelas_id->kelas_id)->get();

            return view('home', compact('siswas'));
        }
        if (auth()->user()->role == 3) {

            $siswas = Student::with('user')->take(10)->get()->sortByDesc('poin');
            $siswa = Student::where('nisn', auth()->user()->nisn)->first();
            $nama = strtok($siswa['nama'], " ");
            return view('home', compact('siswas', 'siswa', 'nama'));
        }
    }

    // public function penanganan()
    // {
    //     return view('home');
    // }
}