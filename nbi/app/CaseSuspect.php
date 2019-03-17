<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseSuspect extends Model
{
    protected $table = 'case_suspects';
    protected $primaryKey = 'id';
    protected $fillable = [
        'caseid','suspect_name','height','weight'
    ];
}
