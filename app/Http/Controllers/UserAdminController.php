<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\User;
use App\Models\WaliKelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAdminController extends Controller
{
    public function daftar_user()
    {
        return view('admin.page.daftar-user', [
            'users' => User::paginate(null)
        ]);
    }

    public function edit($id)
    {
        return User::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $rules =  [];

        $user = User::findOrFail($id);
        $this->validate($request, [
            'nisn' => 'required|numeric|digits_between:8,10|unique:users,nisn,' . $id,
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
        ]);

        $user->update([
            'nisn' => $request->nisn,
            'name' => $request->name,
            'email' => $request->email,
            'info' => $request->info,
            'role' => $request->role
        ]);

        return back();
    }

    public function update_pass(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $this->validate($request, [
            'password' => 'required', 'string', 'min:8', 'max:255'
        ]);
        $user->update([
            'password' => Hash::make($request->get('password')),
        ]);
        return back();
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return back();
    }


    // Guru

    public function daftar_guru()
    {
        $wali_kelas = WaliKelas::with('kelas')->latest()->paginate(10);
        $kelas = Kelas::doesnthave('wali')->get();
        $users = User::doesnthave('wali')->where('role', 2)->get();
        return view('admin.page.daftar-guru', compact('wali_kelas', 'kelas', 'users'));
    }

    public function tambah_guru(Request $request)
    {
        $this->validate($request, [
            'kelas_id' => 'required|unique:wali_kelas,kelas_id,',
            'name' => 'required|max:255'
        ]);

        WaliKelas::create($request->all());

        return back();
    }

    public function hapus_guru($id)
    {
        WaliKelas::findOrFail($id)->delete();
        return back();
    }
}