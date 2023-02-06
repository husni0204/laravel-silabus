<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller
{
    public function index()
    {
        // $tugass = DB::table('tugass')->get();
        // return view('tugass.index', compact('tugass'));

        // Jika mau mengurutkan
        // return view('tugass.index', ['tugass' => DB::table('tugass')->orderBy('id', 'desc')->get()]);

        // Retrieve database menggunakan model Tugas
        return view('tugass.index', [
            'tugass' => Tugas::orderBy('id', 'desc')->get(),
        ]);
    }

    public function create()
    {
        return view('tugass.create');
    }

    public function store(Request $request)
    {
        // DB::table('tugass')->insert([
        //     'list' => $request->list
        // ]);

        Tugas::create(['list' => $request->list]);

        // return redirect('tugas');
        return back();
    }

    public function edit($id)
    {
        // $tugass = DB::table('tugass')->where('id', $id)->first();
        $tugass = Tugas::find($id);

        // dd($tugass);

        return view('tugass.edit', ['tugass' => $tugass]);
    }

    public function update(Request $request, $id)
    {
        // dd($id);
        // DB::table('tugass')->where('id', $id)->update(['list' => $request->list]);
        Tugas::find($id)->update(['list' => $request->list]);

        return redirect('tugas');
    }

    public function destroy($id)
    {
        // DB::table('tugass')->where('id', $id)->delete();
        Tugas::find($id)->delete();
        return back();
    }
}
