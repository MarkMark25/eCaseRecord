<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseVictims extends Model
{
    protected $table = 'case_victims';
    protected $primaryKey = 'id';
    protected $fillable = [
        'caseid','victim_name','weight','height'
    ];
}
