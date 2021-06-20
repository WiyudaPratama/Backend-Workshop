<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Participant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $participants = Participant::orderBy('created_at', 'desc')->get();
        return view('admin.peserta', compact('participants'));
    }

    public function update($id)
    {
        Participant::find($id)->update([
            'status' => 'Konfirmasi',
        ]);

        return redirect()->route('peserta.index')->with('alert', 'Pembayaran peserta telah terkonfirmasi');
    }
}
