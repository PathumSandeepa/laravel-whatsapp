<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblList extends Model
{
    use HasFactory;
    protected $table = 'tbl_list';
    protected $fillable = [
        'IL_ID',
        'VL_NAME',
    ];
}
