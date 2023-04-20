<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Tpno extends Model
{
    use HasFactory;
    protected $table = 'tbl_tpno';
    protected $fillable = [
        'ITP_ID',
        'VTP_NAME',
        'ITP_TPNO',
    ];
}
