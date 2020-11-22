<?php
 
 namespace App\Http\Controllers;

 use App\models\Orders;
 use Illuminate\Http\Request;
// tipe 2 required
use Validator;
 
class OrderController extends Controller
{
    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'no.wa' => 'required',
            'email' => 'required|email|unique:users'
        ];
 
        $messages = [
            'nama.required' => 'Nama wajib diisi.',
            'no_wa.required' => 'No. Whatssap wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
        ];
 
        $validator = Validator::make($request->all(), $rules, $messages);
         
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
 
        $order           = new Order;
        $order->nama     = $request->nama;
        $order->password = bcrypt($request->no.wa);
        $order->email    = $request->email;
        $order->save();
       
        return back()->with('success', 'User created successfully.');
    }
}