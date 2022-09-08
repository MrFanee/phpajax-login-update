<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MhsModel extends Model
{
    protected $table = 'mhs';
    protected $primarykey = 'id';
    protected $fillable = ['id','nama','jk','jurusan','alamat'];
    public $timestamps = false;
}
