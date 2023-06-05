<?php

namespace App\Http\Controllers;
use App\Models\Pelamar;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function listPelamar()
    {
        $pelamar = Pelamar::where('level', 'pelamar')->get();
        return view ('admin.daftarUser', compact(['pelamar']));
    }
    public function listPerusahaan()
    {
        $perusahaan = Pelamar::where('level', 'company')->get();
        return view ('admin.daftarPerusahaan', compact(['perusahaan']));
    }

    public function view_profile(string $id)
    {
        $data = Pelamar::findOrFail($id);
        return view('admin.profileUser', compact(['data']));
    }

    //delete
    public function delete_akun_pelamar($id)
    {
        $delete_akun = Pelamar::find($id);
        $delete_akun->delete();
        return redirect('/admin/daftarUser')->with('success', "Akun berhasil dihapus");
    }
    public function delete_akun_perusahaan($id)
    {
        $delete_akun = Pelamar::find($id);
        $delete_akun->delete();
        return redirect('/admin/daftarPerusahaan')->with('success', "Akun berhasil dihapus");
    }
}
