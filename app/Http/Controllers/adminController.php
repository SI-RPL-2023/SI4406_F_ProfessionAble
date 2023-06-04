<?php

namespace App\Http\Controllers;
use App\Models\Pelamar;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function listUser()
    {
        $pelamar = Pelamar::where('level', 'pelamar')->get();
        $perusahaan = Pelamar::where('level', 'company')->get();
        return view ('admin.pantauUser', compact(['pelamar', 'perusahaan']));
    }

    public function editUser(string $id)
    {
        $data = Pelamar::findOrFail($id);
        return view('admin.updateUser', compact(['data']));
    }

    public function updateUser(Request $request, string $id)
    {

        if (isset($request->type_disability)) {
            $data = [
                'description' => $request->description,
                'name' => $request->name,
                'gender' => $request->gender,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'education' => $request->education,
                'website' => $request->website,
                'url' => $request->url,
                'industri' => $request->industri,
                'ukuran_perusahaan' => $request->ukuran_perusahaan,
                'jenis_perusahaan' => $request->jenis_perusahaan,
                'type_disability' => implode(', ', $request->type_disability)
            ];
        } else {
            $data = [
                'description' => $request->description,
                'name' => $request->name,
                'gender' => $request->gender,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'education' => $request->education,
                'website' => $request->website,
                'url' => $request->url,
                'industri' => $request->industri,
                'ukuran_perusahaan' => $request->ukuran_perusahaan,
                'jenis_perusahaan' => $request->jenis_perusahaan,
                'type_disability' => ''
            ];
        }
        
        $upload_foto = Pelamar::find($id);
        if ( $request -> hasFile("foto") ) {
            $request -> file("foto")->move("foto/", $request->file("foto")->getClientOriginalName());
            $upload_foto -> foto = $request -> file("foto")->getClientOriginalName();
            $upload_foto -> save();
        }
             
        $update = Pelamar::where('id', $id)->update($data);
        return redirect('/admin/pantauUser');
    }

    //delete
    public function delete_akun($id)
    {
        $delete_akun = Pelamar::find($id);
        $delete_akun->delete();
        return redirect('/admin/pantauUser')->with('success', "Akun berhasil dihapus");
    }
}
