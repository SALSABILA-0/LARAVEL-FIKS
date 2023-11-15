<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

{}
        function table(){
            $petugas = DB::table('petugas')->get();
            return view('table', ['petugas'=> $petugas]);
        }
        function proses_tambah_petugas(request $request){

            $function->validate([
                'isi_laporan' =>'required|min:2'
            ]);
        }
            function proses_register_petugas(request $request){
                $id_petugas = $request->id_petugas;
                $nama_petugas = $request->nama_petugas;
                $username = $request->username;
                $password = $request->password;
                $no_telp = $request->no_telp;
                $level = $request->level;

                DB::table("petugas")->insert([
                    'id_petugas'=> $id_petugas,
                    'nama_petugas'=> $nama_petugas,
                    'username'=> $username,
                    'password'=> $password,
                    'no_telp'=> $no_telp,
                    'level'=> $level,
                ]);
            }

        function buatakun(){
            return 'petugas.home'('');
        }