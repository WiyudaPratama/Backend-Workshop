<?php

namespace App\Http\Controllers\Dashboard;

use Mail;
use App\Mail\ConfirmationSuccess;

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
        $participant = Participant::where('id', $id)->get();
        Participant::find($id)->update([
            'status' => 'Konfirmasi',
        ]);

        // Kirim email ke peserta
        Mail::to($participant)->send(
            new ConfirmationSuccess($participant)
        );


        return redirect()->route('peserta.index')->with('alert', 'Pembayaran peserta telah terkonfirmasi');
    }
}
