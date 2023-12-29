<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory;
    
    protected $fillable = ['first_name','last_name','father_name','email','cnic','mobile','domicile','date_of_birth','gender'];
    
    public function academicInformation() : HasOne {
        return $this->hasOne(AcademicInformation::class);
    }
}
