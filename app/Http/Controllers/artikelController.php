<?php

namespace App\Http\Controllers;
use App\Models\Artikel;

use Illuminate\Http\Request;

class artikelController extends Controller
{
    //show
    public function tampil()
    {
        $list_artikel = Artikel::all();
        return view('/home', compact('list_artikel'));
    }

    //tambah artikel
    public function article_view()
    {
        return view('#namafile');
    }

    //simpan
    public function make_article(Request $request)
    {
        $artikel = new Artikel();
        $artikel->title = $request->title;
        $artikel->author = $request->author;
        $artikel->posting_date = $request->posting_date;
        $artikel->isi = $request->isi;
        $artikel->save();

        return redirect('#fileartikel')->with('success', "Artikel telah diposting");
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
        return redirect('#home')->with('success', "Artikel berhasil dihapus");
    }
}
