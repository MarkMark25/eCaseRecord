<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    protected $table = 'cases';
    protected $primaryKey = 'caseid';
    //protected $fillable = ['ccn']; linagay ko lang
    protected $fillable = [
        'ccn','docketnumber','acmo','dateTerminated','statusid','complainantname','caseStatus'
    ];
}
