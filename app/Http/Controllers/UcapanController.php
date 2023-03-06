<?php

namespace App\Http\Controllers;

use App\Models\Ucapan;
use Illuminate\Http\Request;

class UcapanController extends Controller
{
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'ucapan' => 'required',
            'hadir' => 'required',
            'jumlahOrang' => 'required',
        ]);

        Ucapan::create($validateData);

        return redirect('/undangan-8')->with('success', 'Terimakasih sudah memberikan ucapan spesial');
    }
}
