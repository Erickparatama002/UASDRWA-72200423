<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $fillable = ['id_guru','rfid','nip','nama_guru','alamat','status_guru'];
}
