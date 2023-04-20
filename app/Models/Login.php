<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Login extends Model
{
    use HasFactory;
    protected $table = 'tbl_login';
    protected $fillable = [
        'ILOG_ID',
        'VLOG_NAME',
        'VLOG_PASSWORD',
    ];
}
