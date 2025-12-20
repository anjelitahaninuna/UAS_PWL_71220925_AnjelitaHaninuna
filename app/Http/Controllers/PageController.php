<?php

namespace App\Http\Controllers;
use App\Parfum;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

// ditambahkan 23 november 2025
use App\User;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard()
    {
        return view('dashboard', [
            'key' => 'dashboard',
            'totalParfum' => Parfum::count(),
            'totalUser' => User::count(),
            'stokHabis' => Parfum::where('stok', 0)->count(),
            'parfumTerbaru' => Parfum::orderBy('id','desc')->take(5)->get()
        ]);
    }

    public function parfums()
    {
        $parfum = Parfum::orderBy('id','desc')->get();
        return view('parfums', ['key' => 'parfums', "parfums"=> $parfum]);
    }

    public function detailProduk($id)
    {
        $parfum = Parfum::find($id);
        return view('detailProduk', ['key' => 'detail', 'parfm'=>$parfum]);
    }

    public function keranjang()
    {
        return view('keranjang', ['key' => 'keranjang']);
    }

    public function pemesanan()
    {
        return view('pemesanan', ['key' => 'pemesanan']);
    }

    public function tambahParfum()
    {
        return view('tambahParfum', ['key' => 'tambahParfum']);
    }

    public function saveParfum(Request $request)
    {
        if ($request->hasFile('gambar'))
        {
            $file_name = time()."_".$request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->storeAs('gambar', $file_name, 'public');
        }
        else
        {
            $file_name = null;
            $path = null;
        }
        Parfum::create([
            'namaParfum' => $request->namaParfum,
            'merek' => $request->merek,
            'jenisAroma' => $request->jenisAroma,
            'volume_ml' => $request->volume_ml,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'deskripsi' => $request->description,
            'gambar' => $file_name,
        ]);
        return redirect('/parfums')->with('alert', 'Data Berhasil Disimpan');
    }

    public function editParfum($id)
    {
        $parfum = Parfum::find($id);
        return view('editParfum', ['key' => 'editParfum', 'p' => $parfum]);
    }

    public function updateParfum(Request $request, $id)
    {
        $parfum = Parfum::find($id);
        $parfum->namaParfum = $request->namaParfum;
        $parfum->merek = $request->merek;
        $parfum->jenisAroma = $request->jenisAroma;
        $parfum->volume_ml = $request->volume_ml;
        $parfum->harga = $request->harga;
        $parfum->stok = $request->stok;
        $parfum->deskripsi = $request->description;
        if ($request->gambar)
        {
            if ($parfum->gambar)
            {
                Storage::disk('public')->delete('gambar/'.$parfum->gambar);
            }
            $file_name = time()."_".$request->file('gambar')->getClientOriginalName();
            $path= $request->file('gambar')->storeAs('gambar', $file_name, 'public');
            $parfum->gambar = $file_name;
        }

        $parfum->save();
      return redirect('/parfums')->with('alert', 'Data Berhasil Diedit');;
    }

    public function deleteParfum($id)
    {
        if( $parfum= Parfum::find($id)){
            if ($parfum->gambar)
            {
                Storage::disk('public')->delete('gambar/'.$parfum->gambar);
            }
            $parfum->delete();
            return redirect('/parfums')->with('alert', 'Data Berhasil Dihapus');;
        }
    }

    // ditambahkan 23 november 2025
    public function users() {
        $users = User::orderBy('id', 'desc')->get();
        return view('users', ['key' => 'users', 'usr' => $users]);
    }

    public function usersaddform() {
        return view('usersaddform', ['key' => 'users']);
    }

    public function userssave(Request $request) {
        if ($request->hasFile('foto')) {
            $file_name = time() . '-' .  $request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('foto', $file_name, 'public');
        } else {
            $file_name = null;
            $path = null;
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'foto' => $file_name
        ]);
        return redirect('/users')->with('alert', 'Data Berhasil Disimpan');
    }

    public function usersdelete($id) {
        $user = User::find($id);
        if ($user->foto){
            Storage::disk('public')->delete('foto/' . $user->foto);
        }
        $user->delete();
        return redirect('/users')->with('alert', 'Data Berhasil Dihapus');;
    }

    public function changespass(){
        return view('changespass', ['key' => 'changespass']);
    }

    public function updatepass(Request $request){
        $user = Auth::user();

        if(!Auth::attempt(['email' => $user->email, 'password' => $request->passwordLama]))
        {
            return redirect('/changespass')->with('alert', 'Password lama salah');
        }

        $user->update([
            'password' => bcrypt($request->passwordBaru)]);
        return redirect('/dashboard')->with('alert', 'Password berhasil diubah');
    }


}
