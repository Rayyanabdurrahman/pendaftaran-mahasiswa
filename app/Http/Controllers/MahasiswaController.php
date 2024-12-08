<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;
class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mahasiswa.index');
    }
    public function mahasiswa(){
        $mahasiswa = Mahasiswa::orderBy('id', 'asc')->paginate(2);
        return view('mahasiswa.data', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $check = Mahasiswa::create([
        'nama' => $request->nama,
        'tanggal_tempat_lahir' => $request->Tempat_lahir,
        'email' => $request->Email,
        'alamat' => $request->Alamat,
        'nomor_telepon' => $request->telepon,
        'jenis_kelamin' => $request->Jenis_kelamin,
        'orang_tua' => $request->orang_tua,
        'no_hp_orang_tua' => $request->No_HP_Orang_Tua,
      ]);
      if($check){
        return redirect()->back()->with('message', 'pendaftaran berhasil di lakukan');
      }else{
        return redirect()->back()->with('failed', 'pendaftaran berhasil di lakukan');
      }
   }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect()->back()->with('message', 'Mahasiswa berhasil di hapus');
    }

    public function formulir(){
        return view('mahasiswa.formulir');
    }
    public function detail($id){
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.detail', compact('mahasiswa'));
    }
    public function failed($id){
        $mahasiswa = Mahasiswa::find($id);
        $email = $mahasiswa->email;
        $subjek = "ini subjek";
        $pesannya = "Maaf atas ketidak terimanya di Uviversitas ini di keranakan alamat dan emailnya tidak valid, mungkin anda bisa mencoba di tahun berikutnya";

        $url = "https://mail.google.com/mail/?view=cm&fs=1&to=$email&su=".urlencode($subjek)."&body=" . urlencode($pesannya);
        return redirect($url);
    }
    public function success($id){
        $mahasiswa = Mahasiswa::find($id);
        $email = $mahasiswa->email;
        $subjek = "ini subjek";
        $pesannya = "Selamat anda di terima di universitas RYN, dan semngat terus dalam belajar";

        $url = "https://mail.google.com/mail/?view=cm&fs=1&to=$email&su=".urlencode($subjek)."&body=" . urlencode($pesannya);
        return redirect($url);
    }
    public function search(Request $request){
        $search = $request->search;
        $mahasiswa = Mahasiswa::where('nama', 'LIKE', '%'.$search.'%')->get();
        return view('mahasiswa.data', compact('mahasiswa'));
    }
}
