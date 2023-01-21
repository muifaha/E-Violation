<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    public function daftar_user()
    {
        return view('admin.page.daftar-user', [
            'users' => User::paginate(null)
        ]);
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect('/master-user');
    }
}