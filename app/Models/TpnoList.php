<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TpnoList extends Model
{
    use HasFactory;
    protected $table = 'tbl_tpno_list';
    protected $fillable = [
        'ITPL_ID',
        'IL_ID',
        'ITP_ID',
    ];

    public function tpnoListRelation()
    {
        return $this->hasOne(Tpno::class, 'ITP_ID', 'ITP_ID');
    }
}
