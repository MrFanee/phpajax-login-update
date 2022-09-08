<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DosenModel extends Model
{
    protected $table = 'dosen';
    protected $primarykey = 'id_dosen';
    protected $fillable = ['id_dosen','nip','nama_dosen','jk','alamat'];
    public $timestamps = false;
}
