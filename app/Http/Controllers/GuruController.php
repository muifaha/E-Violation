<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Student;
use App\Models\WaliKelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    public function daftar_siswa()
    {
        $wali_kelas = WaliKelas::where('user_id', auth()->user()->id)->first();
        $siswas = Student::where('kelas_id', $wali_kelas->kelas_id)->paginate(null)->withQueryString();
        return view('guru.page.daftar-siswa', compact('siswas', 'wali_kelas'));
    }

    public function master_history()
    {
        $wali_kelas = WaliKelas::where('user_id', auth()->user()->id)->first();
        $siswas = Student::whereHas('history', function($q) use($wali_kelas){
            $q->where('kelas_id', $wali_kelas->kelas_id);
        })->get();
        $id_student = [];
        foreach($siswas as $siswa){
            $id_student[] = $siswa->id;
        }


        $histories = History::whereIn('student_id', $id_student)->latest()->paginate(7);
        $tanggal = $histories->unique('tanggal')->pluck('tanggal');
        return view('guru.page.master-history', compact('histories', 'tanggal', 'wali_kelas', 'siswas'));
    }

    public function history_siswa($id)
    {
        $wali_kelas = WaliKelas::where('user_id', auth()->user()->id)->first();
        $siswas = Student::where('kelas_id', $wali_kelas->kelas_id)->first();
        $histories = History::latest()->where('student_id', $id)->paginate(7);
        $tanggal = $histories->unique('tanggal')->pluck('tanggal');
        return view('guru.page.history', compact('histories', 'tanggal', 'siswas'));
    }
}