<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Census extends Model
{
    protected $fillable=['household_id','name','fathers_name','mothers_name','occupation_id','mobile_no','nid','education_id','dob','gender_id','religion_id','marital_id'];
}
