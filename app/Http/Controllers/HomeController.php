<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        $participants = Participant::orderBy('created_at', 'desc')->get(); 
        return view('home', compact('participants'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'npm' =>'required|string|max:8|unique:participants,npm',
            'email' => 'required|email|string|max:100|unique:participants,email',
            'handphone' => 'required|string|max:13',
            'image' => 'mimes:jpeg,jpg,png',
            'image' => 'required|image|max:1024',
        ],
        [
            'required' => ':attribute tidak boleh kosong.',
            'string' => ':attribute harus harus text.',
            'max' => ':attribute maksimal berjumlah :max karakter.',
            'email' => ':attribute haruslah email yang valid.',
            'unique' => ':attribute sudah terdaftar sebelumnya.',
            'mimes' => ':attribute harus berekstensi jpeg,jpg,png.',
            'image' => ':attribute harus berupa gambar.',
        ]    
    );
    
    $namaFile = Str::random(30) . '.' . $request->image->getClientOriginalExtension();
    $request->image->move(public_path('/storage/image'), $namaFile);

    Participant::create([
        'nama' => $request->nama,
        'npm' => $request->npm,
        'email' => $request->email,
        'nohp' => $request->handphone,
        'image' => $namaFile,
        'status' => 'Menunggu Konfirmasi',
    ]);

    return redirect()->route('home')->with('alert', 'Yeay Success!');

    }
}
