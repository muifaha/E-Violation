<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\WaliKelas;
use App\Models\Penanganan;
use Illuminate\Http\Request;

class PenangananController extends Controller
{
    public function index()
    {
        $penanganan = Penanganan::with('siswa')->latest()->paginate(null);
        return view('admin.page.penanganan', compact('penanganan'));
    }

    public function konfirmasi($id)
    {
        $penanganan = Penanganan::findOrFail($id);
        $penanganan->update([
            'konfirmasi' => true
        ]);
        return redirect()->back()->with('success', 'Terkonfirmasi');
    }

    public function guru_index()
    {
        $wali_kelas = WaliKelas::where('user_id', auth()->user()->id)->first();
        $siswas = Student::where('kelas_id', $wali_kelas->kelas_id)->first();
        $penanganan = Penanganan::latest()->where('student_id', $siswas->id)->paginate(null);
        return view('guru.page.penanganan', compact('penanganan', 'siswas'));
    }

    public function guru_konfirmasi($id)
    {
        $penanganan = Penanganan::findOrFail($id);
        $penanganan->update([
            'konfirmasi' => true
        ]);
        return redirect()->back()->with('success', 'Terkonfirmasi');
    }
}