<?php

namespace App\Http\Controllers;

use App\Models\Rule;
use App\Models\User;
use App\Models\Kelas;
use App\Models\History;
use App\Models\Student;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function daftar_siswa()
    {
        $title = '';
        if (request('kelas')) {
            $kelas = Kelas::firstWhere('nama_kelas', request('kelas'));
            $title = ' in ' . $kelas->nama_kelas;
        };

        return view('admin.page.daftar-siswa', [
            'siswas' => Student::latest('poin')->filter(request(['search', 'kelas']))->paginate(2)->withQueryString(),
            'kelas' => Kelas::all()
        ]);
    }

    public function pelanggaran(Student $siswa)
    {
        return view('admin.page.tambah-poin', [
            'siswa' => $siswa,
            'rules' => Rule::oldest()->filter(request('search'))->get()
        ]);
    }

    public function tambah_poin(Request $request, $id)
    {
        // return $student_id;
        $siswa = Student::findOrFail($id);
        // dd($request->rule);
        $histories = $request->input('rule');

        foreach ($histories as $history) {

            History::create([
                'student_id' => $siswa->id,
                'rule_id' => $history,
                'tanggal' => date('Y-m-d', time())
            ]);
        }
        $siswa->update([
            'poin' => $siswa->poin + $request->total
        ]);



        return redirect()->back()->with('success', 'Poin berhasil ditambahkan');
    }

    public function pelanggaran2(Student $siswa)
    {
        return view('admin.page.kurang-poin', [
            'siswa' => $siswa,
            'rules' => Rule::all()
        ]);
    }

    public function kurang_poin(Request $request, $id)
    {
        // return $student_id;
        $siswa = Student::findOrFail($id);

        $siswa->update([
            'poin' => $siswa->poin + $request->total
        ]);
        $histories = $request->input('name');

        foreach ($histories as $history) {
            History::create([
                'student_id' => $siswa->id,
                'rule_id' => $history,
                'tanggal' => date('Y-m-d', time())
            ]);
        }

        return redirect()->back()->with('success', 'Poin berhasil dikurangi');
    }

    public function histori_index()
    {
        $histories = History::latest()->paginate(5);
        $tanggal = $histories->unique('tanggal')->pluck('tanggal');
        return view('admin.page.master-history', compact('histories', 'tanggal'));
    }

    public function histori_admin($id)
    {
        $histories = History::latest('tanggal')->where('student_id', $id)->paginate(3);
        $tanggal = $histories->unique('tanggal')->pluck('tanggal');
        return view('admin.page.history', compact('histories', 'tanggal'));
    }

    public function daftar_user()
    {
        return view('admin.page.daftar-user', [
            'users' => User::all()
        ]);
    }
}