<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lost extends Model
{
    use HasFactory;
     protected $primaryKey='phone';
    // protected $fillable=['national_id','driving_licence_id','insurance_id','student_id','first_name','last_name','passport_number','road','phone','email','lost_month','lost_day','lost_year'];
}
