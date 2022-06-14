<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Presensi_mengajar extends Model
{
    protected $table = 'presensi_mengajar';
    protected $fillable = ['id_jadwal_guru','tanggal','jam_mulai','jam_pselesai','metode','keterangan'];
}
