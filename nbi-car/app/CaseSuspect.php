<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseSuspect extends Model
{
    protected $table = 'case_suspects';
    protected $primaryKey = 'id';
    protected $fillable = [
        'caseid','suspect_name','suspect_Address','suspect_Contact_Number','suspect_Sex','suspect_Age','suspect_Civil_Status','suspect_Occupation',
    ];
}
