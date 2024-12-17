<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Section;
class classes extends Model
{
    /** @use HasFactory<\Database\Factories\ClassesFactory> */
    use HasFactory;
    protected $table = "classes";
    protected $fillable = ["name"];


    public function sections() {
        return $this->hasMany(Section::class, 'classes_id');
    }
}
