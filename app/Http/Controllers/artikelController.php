<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
<<<<<<< HEAD

=======
>>>>>>> origin/Lala
use Illuminate\Http\Request;

class artikelController extends Controller
{
    //show
    public function tampil()
    {
        $list_artikel = Artikel::all();
<<<<<<< HEAD
        return view('/home', compact('list_artikel'));
=======
        return view('/admin/artikel', compact('list_artikel'));
>>>>>>> origin/Lala
    }

    //tambah artikel
    public function article_view()
    {
<<<<<<< HEAD
        return view('#namafile');
=======
        return view('/admin/tambahArtikel');
>>>>>>> origin/Lala
    }

    //simpan
    public function make_article(Request $request)
    {
        $artikel = new Artikel();
        $artikel->title = $request->title;
        $artikel->author = $request->author;
        $artikel->posting_date = $request->posting_date;
        $artikel->isi = $request->isi;
<<<<<<< HEAD
        $artikel->save();

        return redirect('#fileartikel')->with('success', "Artikel telah diposting");
=======
        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $nama_file = $file->getClientOriginalName();
            $file->move('cover', $nama_file);
            $artikel->gambar = $nama_file;
        }
        $artikel->save();

        return redirect('/artikel')->with('success', "Artikel telah diposting");
>>>>>>> origin/Lala
    }

    public function edit_articleView(string $id)
    {
        $edit_artikel= Artikel::where('id', $id);
        return view('#viewedit')->with('edit_artikel', $edit_artikel);
    }

    //update
    public function update(Request $request, $id)
    {
        $update_artikel = Artikel::find($id);
        $update_artikel->title = $request->title;
        $update_artikel->author = $request->author;
        $update_artikel->posting_date = $request->posting_date;
        $update_artikel->isi = $request->isi;
        $update_artikel->save();
        if ( $request -> hasFile("gambar") ) {
            $request -> file("gambar")->move("cover/", $request->file("gambar")->getClientOriginalName());
            $update_artikel -> foto = $request -> file("gambar")->getClientOriginalName();
            $update_artikel -> save();
        }
        return redirect('#')->with('success', "Artikel berhasil update");
    }

    //hapus artikel
    public function destroy($id)
    {
        $hapus_artikel = Artikel::find($id);
        $hapus_artikel->delete();
<<<<<<< HEAD
        return redirect('#home')->with('success', "Artikel berhasil dihapus");
=======
        return redirect('/artikel')->with('success', "Artikel berhasil dihapus");
    }

    //tampil artikel
    public function tampilArtikel(Request $request)
    {
        return view('/admin/artikel', [
            'tampil_artikel' => Artikel::latest()->filter(request(['search']))->get(),
        ]);
>>>>>>> origin/Lala
    }
}
