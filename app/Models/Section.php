<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\student;
use App\Models\classes;
class Section extends Model
{
    /** @use HasFactory<\Database\Factories\SectionFactory> */
    use HasFactory;
    protected $table = "sections";
    protected $fillable = ["name", "classes_id"];


public function students() {
    return $this->hasMany(student::class);
}

public function classes() {
     return $this->belongsTo(classes::class);
}


}






