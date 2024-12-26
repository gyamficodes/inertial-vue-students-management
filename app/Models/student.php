<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Section;
use App\Models\classes;
class student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;
    protected $table = "students";
    protected $fillable = ["name", "email", "classes_id","section_id"];

    protected $with = ['classes', 'section'];

    public function classes() {
        return $this->belongsTo(classes::class);
    }

    public function sections() {
        return $this->belongsTo( Section::class);
    }
}
