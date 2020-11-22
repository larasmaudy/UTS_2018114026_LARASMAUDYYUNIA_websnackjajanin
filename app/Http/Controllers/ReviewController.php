<?php

namespace App\Http\Controllers;
use App\models\Reviews;

use Illuminate\Http\Request;

// tipe 2 required
use Validator;
 
class ReviewController extends Controller
{
    public function create()
    {
        return view('reviews.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'no.tlp' => 'required',
            'ulasan' => 'required'
        ];
 
        $messages = [
            'nama.required' => 'Nama wajib diisi.',
            'no_tlp.required' => 'No. Tlp wajib diisi.',
            'ulasan.required' => 'Ulasan wajib diisi.',
        ];
 
        $validator = Validator::make($request->all(), $rules, $messages);
         
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
 
        $review           = new Order;
        $review->nama     = $request->nama;
        $review->no_tlp = bcrypt($request->no_tlp);
        $review->ulasan    = $request->ulasan;
        $review->save();
       
        return back()->with('success', 'User created successfully.');
    }
}