<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\User;
use App\Models\Student;
use App\Models\Penanganan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;


class StudentController extends Controller
{
    public function show()
    {
        return view('siswa.show', [
            'siswa' => Student::where('user_id', auth()->user()->id)->first()
        ]);
    }

    public function history()
    {
        $siswa = Student::where('nisn', Auth::user()->nisn)->first();
        $histories = History::where('student_id', $siswa->id)->latest()->paginate(3);
        $tanggal = $histories->unique('tanggal')->pluck('tanggal');
        $nama = strtok($siswa['nama'], " ");
        return view('siswa.history', compact('histories', 'nama', 'tanggal'));
    }

    public function store(Request $request)
    {
        $message = [
            'max' => ':attribute maksimal :max karakter!',
            'min' => ':attribute minimal :min karakter!',
            'unique' => ':attribute sudah digunakan!',
            'required' => ':attribute harus di isi!',
            'numeric' => ':attribute harus berisi angka!',
            'digits_between' => ':attribute harus berisi :min dan :max digits.'
        ];

        $this->validate($request, [
            'nama' => 'required|max:255',
            'nisn' => 'required|max:10',
            'ttl' => 'required|max:255',
            'jk' => 'required|max:20',
            'agama' => 'required|max:20',
            'alamat' => 'required|max:255',
            'no_telp' => 'required|numeric|digits_between:8,13|unique:students',
            'n_ayah' => 'required|max:255',
            'n_ibu' => 'required|max:255',
            'alamat_ortu' => 'required|max:255',
            'no_telp_rumah' => 'required|numeric|digits_between:5,13',
        ]);

        $ttl = $request->ttl . ', ' . $request->date;
        // $kls = $request->kelas;
        // $kls_explode = explode('|', $kls);
        // dd($kls);
        $data = [
            'user_id' => auth()->user()->id,
            'kelas_id' => $request->kelas,
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'ttl' => $ttl,
            'jk' => $request->jk,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'n_ayah' => $request->n_ayah,
            'n_ibu' => $request->n_ibu,
            'alamat_ortu' => $request->alamat_ortu,
            'no_telp_rumah' => $request->no_telp_rumah,
        ];
        Student::create($data);

        User::findOrFail(Auth::user()->id)->update([
            'name' => $request->nama,
            'info' => true
        ]);

        return redirect('/home')->with('toast_info', 'Welcome ' . $request->nama . '!');
    }
    public function edit($id)
    {
        return view('siswa.detail.edit', [
            'siswa' => Student::find($id)
        ]);
    }

    public function pesan()
    {
        $siswa = Student::where('user_id', auth()->user()->id)->first();
        $pesan = Penanganan::where('student_id', $siswa->id)->latest()->paginate(null);
        $nama = strtok($siswa['nama'], " ");
        return view('siswa.pesan', compact('pesan', 'siswa', 'nama'));
    }

    public function checkpesan($id)
    {
        $penanganan = Penanganan::findOrFail($id);
        $pdf = PDF::loadView('public/surat/' . $penanganan->berkas);
        return $pdf->stream($penanganan->berkas);
    }
}