<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WPMSG extends Model
{
    use HasFactory;
    protected $table = 'tbl_wpmsg';
    protected $fillable = [
        'IWP_ID',
        'IWP_GROUPNO',
        'VWP_GROUPTPNO_LIST',  //Phone number list in groups
        'VWP_MSG',
    ];
}
