<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatkulModel extends Model
{
    protected $table = 'matkul';
    protected $primarykey = 'id_matkul';
    protected $fillable = ['id_matkul','kode_matkul','matkul','sks'];
    public $timestamps = false;
}
