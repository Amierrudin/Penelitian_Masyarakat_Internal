<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengusulController extends Controller
{
    public function index(Request $request)
    {   
        if($request->has('cari')){
            $data_pengusul = \App\Models\Pengusul::where('nama_lengkap','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_pengusul = \App\Models\Pengusul::all();
        }
        return view('pengusul.pengusul_index',['data_pengusul' => $data_pengusul]);
    }

    public function create(Request $request)
    {
        // Validasi Form
        $this->validate($request,[
            'nama_lengkap' => 'required|min:5',
            'jenis_kelamin' => 'required',
            'email' => 'required|email|unique:pengusul',
            'avatar' => 'mimes:jpg,png',
        ]);

        //insert ke table user
        $user = new \App\Models\User;
        $user->role = 'pengusul';
        $user->name = $request->nama_lengkap;
        $user->email = $request->email;
        $user->password = bcrypt('polindra');
        $user->remember_token = str_random(60);
        $user->save();

        //insert ke table pengusul
        $request->request->add(['user_id' => $user->id]);
        $pengusul = \App\Models\Pengusul::create($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $pengusul->avatar = $request->file('avatar')->getClientOriginalName();
            $pengusul->save();
        }
        return redirect('/pengusul')->with('sukses','Data berhasil diinput');
    }
    
    public function edit($id)
    {
        $pengusul = \App\Models\Pengusul::find($id);
        return view('pengusul/edit',['pengusul' => $pengusul]);
    }

    public function update(Request $request,$id)
    {
        $pengusul = \App\Models\Pengusul::find($id);
        $pengusul->update($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $pengusul->avatar = $request->file('avatar')->getClientOriginalName();
            $pengusul->save();
        }
        return redirect('/pengusul')->with('sukses','Data berhasil diupdate');
    }

    public function delete($id)
    {
        $pengusul = \App\Models\Pengusul::find($id);
        $pengusul->delete();
        return redirect('/pengusul')->with('sukses','Data berhasil dihapus');
    }
    public function profile($id)
    {
        $pengusul = \App\Models\Pengusul::find($id);
        return view('pengusul.profile',['pengusul' => $pengusul]);
    }

    public function profilsaya()
    {
        return view('pengusul.profilsaya');
    }

}