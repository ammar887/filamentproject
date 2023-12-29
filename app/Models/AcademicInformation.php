<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AcademicInformation extends Model
{
    use HasFactory;
    
    protected $fillable = ['student_id','degree','obtained_marks','total_marks','cgpa','percentage','institution','year_of_passing','grade'];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
