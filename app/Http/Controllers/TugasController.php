<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller
{
    public function index()
    {
        // $tugass = DB::table('tugass')->get();

        // Jika mau mengurutkan
        return view('tugass.index', ['tugass' => DB::table('tugass')->orderBy('id', 'desc')->get()]);

        // return view('tugass.index', compact('tugass'));
    }

    public function create()
    {
        return view('tugass.create');
    }

    public function store(Request $request)
    {
        DB::table('tugass')->insert([
            'list' => $request->list
        ]);

        // return redirect('tugas');
        return back();
    }

    public function edit($id)
    {
        $tugass = DB::table('tugass')->where('id', $id)->first();

        // dd($tugass);

        return view('tugass.edit', ['tugass' => $tugass]);
    }

    public function update(Request $request, $id)
    {
        // dd($id);
        $tugass = DB::table('tugass')->where('id', $id)->update(['list' => $request->list]);

        return redirect('tugas');
    }
}
