<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSoalRequest;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function index(Request $request) {
        $soals = \App\Models\Soal::paginate(10);
        return view('pages.soals.index', compact('soals'));
    }

    public function create() {
        return view('pages.soals.create');
    }

    public function store(StoreSoalRequest $request) {
        $data = $request->all();
        \App\Models\Soal::create($data);
        return redirect()->route('soal.index')->with('success', 'Soal succesfully created');
    }
}
