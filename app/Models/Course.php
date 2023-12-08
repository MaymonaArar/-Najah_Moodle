<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['title', 'description', 'instructor_id'];

    // Define a relationship between the Course and User (instructor)
    public function instructor()
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }

    // Define a method to calculate student progress (this is just a simple example)
    public function calculateProgress()
    {
        // Logic to calculate and return progress data
    }
}
