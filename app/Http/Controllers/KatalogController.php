<?php

namespace App\Http\Controllers;
use App\models\Katalogs;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
    {
        $katalogs = Katalogs::OrderBy('id', 'desc') -> paginate(3);

        return view('katalogs.index', compact('katalogs'));
    }

    public function create()
    {
        return view('katalogs.create');
    }

    public function store(Request $request)
    {
        // validate the request... 
        $request->validate([
            'nama' => 'required|unique:katalogs|max:255',
            'persedian' => 'required|text',
            'harga' => 'required',
        ]);
        
        $katalog = new Katalogs;

        $katalog->nama = $request->nama;
        $katalog->persediaan = $request->persediaan; 
        $katalog->harga = $request->harga;       

        $katalog->save();

        return redirect('/');
    }

    public function show($id)
    {
        $katalogs = Katalogs::where('id', $id)->first();
        return view('katalogs.show', ['katalog' => $katalog]);
    }

    public function edit($id)
    {
        $katalogs = Katalogs::where('id', $id)->first();
        return view('katalogs.edit', ['katalog' => $katalog]);
    }

    public function update(Request $request, $id)
    {
        // validate the request... 
        $request->validate([
            'nama' => 'required|unique:katalogs|max:255',
            'persedian' => 'required|text',
            'harga' => 'required',
        ]);
        
        $katalogs = find($id)-> update([

        'nama' => $request->nama,
        'persedian' => $request->persediaan,
        'harga' => $request->harga,
        ]);       

        
        return redirect('/');
    }

    public function destroy($id)
    {
        Katalogs::find($id)->delete();
        return redirect('/');
    }
}