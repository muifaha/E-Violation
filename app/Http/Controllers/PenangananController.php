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
        $siswas = Student::whereHas('penanganan', function($q) use($wali_kelas){
                    $q->where('kelas_id', $wali_kelas->kelas_id);
                })->get();
        $id_student = [];
        foreach($siswas as $siswa){
            $id_student[] = $siswa->id;
        }
        $penanganan = Penanganan::whereIn('student_id', $id_student)->latest()->paginate(null);
        return view('guru.page.penanganan', compact('penanganan', 'siswas', 'wali_kelas'));
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