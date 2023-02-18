<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {
        $data = DB::table('data')->orderBy('id', 'DESC')->get();
        return view('home', compact('data'));
    }

    public function create()
    {
        return view('formtambah');
    }

    public function store(Request $request)
    {   
        $request->validate([
            'nis'=>['required'],
            'nama'=>['required'],
            'tetala'=>['required'],
            'jenis_kelamin'=>['required'],
            'alamat'=>['required'],
            'no_telp'=>['required'],
        ]);

        DB::table('data')->insert([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'tetala' => $request->tetala,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);
        
        return redirect('/');
    }

    public function edit($id)
    {
        return view('formedit', [
            'data' => DB::table('data')->find($id)
        ]);
    }

    public function detail($id)
    {
        return view('datadetail', [
           'data' => DB::table('data')->find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nis'=>['required'],
            'nama'=>['required'],
            'tetala'=>['required'],
            'jenis_kelamin'=>['required'],
            'alamat'=>['required'],
            'no_telp'=>['required'],
        ]);
        
        // $data = DB::table('data')->where('id', $id)->first();
        

        DB::table('data')->where('id', $id)->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'tetala' => $request->tetala,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);

        return redirect('/');
    }
    

    public function destroy($id)
    {
       DB::table('data')->delete($id);
       return back();
    }
}