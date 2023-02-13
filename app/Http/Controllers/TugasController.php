<?php

namespace App\Http\Controllers;

use App\Http\Requests\TugasRequest;
use App\Models\Tugas;
use Illuminate\Http\Request;

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
            'tugas' => new Tugas,
            'submit' => 'Create',
            'tugass' => Tugas::orderBy('id', 'desc')->get(),
        ]);
    }

    public function create()
    {
        return view('tugass.create');
    }

    public function store(TugasRequest $request)
    {
        // DB::table('tugass')->insert([
        //     'list' => $request->list
        // ]);

        // Tugas::create(['list' => $request->list]);

        // $request->validate([
        //     'list' => ['required']
        // ]);

        Tugas::create($request->all());

        // return redirect('tugas');
        return back();
    }

    public function edit(Tugas $tuga)
    {
        // $tugass = DB::table('tugass')->where('id', $id)->first();
        // $tugass = Tugas::find($id);

        // dd($tugass);

        // return view('tugass.edit', ['tugass' => $tugass]);
        return view('tugass.edit', [
            'tugas' => new Tugas,
            'submit' => 'Update',
            'tugas' => $tuga
        ]);
    }

    public function update(TugasRequest $request, $id)
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
