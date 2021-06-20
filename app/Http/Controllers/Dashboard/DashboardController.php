<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Participant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use PDF;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $participant = Participant::all()->count();
        $income = $participant * 5000;
        return view('admin.dashboard', compact('participant', 'income'));
    }

    public function report()
    {
        $participants = Participant::all();
        $participant = Participant::all()->count();
        $income = $participant * 5000;
        $pdf = PDF::loadview('admin.report', compact('participants', 'income'));
        return $pdf->stream();
    }
}
