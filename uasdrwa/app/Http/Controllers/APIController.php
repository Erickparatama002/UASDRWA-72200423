<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Guru;
use App\Kelas;
use App\Mapel;
use App\Jadwal_guru;
use App\Presensi_harian;
use App\Presensi_mengajar;

class APIController extends Controller
{
    public function listguru(request $req){
        $guru = Guru::all();
        return response()->json([
            'success' => true,
            'message' => 'Show Success',
            'data' => $guru
        ],200);
        

    }
    public function listmapel(request $req){
        $mapel = Mapel::all();
        return response()->json([
            'success' => true,
            'message' => 'Show Success',
            'data' => $mapel
        ],200);
        

    }

    public function listkelas(request $req){
        $kelas = Kelas::all();
        return response()->json([
            'success' => true,
            'message' => 'Show Success',
            'data' => $kelas
        ],200);
        

    }

    public function listjadwal(request $req){
        $jadwal_guru = Jadwal_guru::all();
        return response()->json([
            'success' => true,
            'message' => 'Show Success',
            'data' => $jadwal_guru
        ],200);
        

    }

    public function listpresh(request $req){
        $presensi_harian = Presensi_harian::all();
        return response()->json([
            'success' => true,
            'message' => 'Show Success',
            'data' => $presensi_harian
        ],200);
        

    }

    public function listpresm(request $req){
        $presen_m = Presensi_mengajar::all();
        return response()->json([
            'success' => true,
            'message' => 'Show Success',
            'data' => $presen_m
        ],200);
        

    }

    public function addguru(request $req){
        $guru = DB::table('guru')->insert([
            'rfid' => $req-> rfid,
            'nip' => $req-> nip,
            'nama_guru' => $req-> nama_guru,
            'alamat' => $req-> alamat,
            'status_guru' => $req-> status_guru,
      
            ]);
        if ($guru) {
            return response()->json([
                    'success' => true,
                    'messsage' =>'Saving Success',
                ], 200);
        } else {
            return response()->json([
                    'success' => false,
                    'messsage' =>'Saving Failed',
                ], 401);
        }
    }


    public function addjadwal(request $req){
        $jadwal_guru = DB::table('jadwal_guru')->insert([
            'tahun_akademik' => $req-> tahun_akademik,
            'semester' => $req-> semester,
            'id_guru' => $req-> id_guru,
            'hari' => $req-> hari,
            'id_kelas' => $req-> id_kelas,
            'id_mapel' => $req-> id_mapel,
            'jam_mulai' => $req-> jam_mulai,
            'jam_selesai' => $req-> jam_selesai,
      
            ]);
        if ($jadwal_guru) {
            return response()->json([
                    'success' => true,
                    'messsage' =>'Saving Success',
                ], 200);
        } else {
            return response()->json([
                    'success' => false,
                    'messsage' =>'Saving Failed',
                ], 401);
        }

        
    }

    public function addkelas(request $req){
        $kelas = DB::table('kelas')->insert([
            'kelas' => $req-> kelas,
            'jurusan' => $req-> jurusan,
            'sub' => $req-> sub,
      
            ]);
        if ($kelas) {
            return response()->json([
                    'success' => true,
                    'messsage' =>'Saving Success',
                ], 200);
        } else {
            return response()->json([
                    'success' => false,
                    'messsage' =>'Saving Failed',
                ], 401);
        }
    }
            public function updateguru(request $req){
                DB::table('guru')->where('id_guru',$req->input('id_guru'))->update([
                    'rfid' => $req-> input('rfid'),
                    'nip' => $req-> input('nip'),
                    'nama_guru' => $req-> input('nama_guru'),
                    'alamat' => $req-> input('alamat'),
                    'status_guru' => $req-> input('status_guru'),
                ]);
             
            }
           
    }



