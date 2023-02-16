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
        $wali_kelas = WaliKelas::firstWhere('user_id', auth()->user()->id);
        $siswas = Student::where('kelas_id', $wali_kelas->kelas_id)->paginate(null)->withQueryString();
        return view('guru.page.daftar-siswa', compact('siswas', 'wali_kelas'));
    }

    public function master_history()
    {
        $wali_kelas = WaliKelas::firstWhere('user_id', auth()->user()->id);
        $siswas = Student::firstWhere('kelas_id', $wali_kelas->kelas_id);

        $siswa = Student::whereHas('history', function ($q) use ($wali_kelas) {
            $q->where('kelas_id', $wali_kelas->kelas_id);
        })->get();

        $id_student = [];
        foreach ($siswa as $item) {
            $id_student[] = $item->id;
        }

        if (request('tanggal')) {
            $histories = History::with('siswa')->where('tanggal', request('tanggal'))->filter(request(['tanggal']))->paginate(7)->withQueryString();
            $tanggal = date('d-m-Y', strtotime(request('tanggal')));
        } else {
            $histories = History::whereIn('student_id', $id_student)->latest()->filter(request(['tanggal']))->paginate(7)->withQueryString();;
            $tanggal = $histories->unique('tanggal')->pluck('tanggal');
        }

        return view('guru.page.master-history', compact('histories', 'tanggal', 'wali_kelas', 'siswas'));
    }

    public function history_siswa($id)
    {
        $wali_kelas = WaliKelas::firstWhere('user_id', auth()->user()->id);
        $siswas = Student::firstWhere('kelas_id', $wali_kelas->kelas_id);

        if (request('tanggal')) {
            $histories = History::with('siswa')->where('tanggal', request('tanggal'))->where('student_id', $id)->filter(request(['tanggal']))->paginate(7)->withQueryString();
            $tanggal = date('d-m-Y', strtotime(request('tanggal')));
        } else {
            $histories = History::latest()->with('siswa')->where('student_id', $id)->filter(request(['tanggal']))->paginate(7)->withQueryString();
            $tanggal = $histories->unique('tanggal')->pluck('tanggal');
        };

        return view('guru.page.history', compact('histories', 'tanggal', 'siswas'));
    }
}