<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\History;
use App\Models\Student;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function daftar_siswa()
    {
        if (request('kelas')) {
            Kelas::firstWhere('nama_kelas', request('kelas'));
        };

        return view('admin.page.daftar-siswa', [
            'siswas' => Student::latest('poin')->filter(request(['search', 'kelas']))->paginate(null)->withQueryString(),
            'kelas' => Kelas::all()
        ]);
    }

    public function histori_index()
    {
        $histories = History::with('siswa')->latest()->paginate(7);
        $tanggal = $histories->unique('tanggal')->pluck('tanggal');
        return view('admin.page.master-history', compact('histories', 'tanggal'));
    }

    public function histori_admin($id)
    {
        $histories = History::latest()->where('student_id', $id)->paginate(7);
        $tanggal = $histories->unique('tanggal')->pluck('tanggal');
        return view('admin.page.history', compact('histories', 'tanggal'));
    }
}