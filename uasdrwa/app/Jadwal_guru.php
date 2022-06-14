<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Jadwal_guru extends Model
{
    protected $table = 'jadwal_guru';
    protected $fillable = ['tahun_akademik','semester','id_guru','hari','id_kelas','id_mapel','jam_mulai','jam_selesesai'];
}
