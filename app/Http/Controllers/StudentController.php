<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\StudentResource;
use App\Models\student;
class StudentController extends Controller
{
    public function index(){
        $students = StudentResource::collection(student::paginate(10));
        return inertia('Students/index', [
           'students'=>  $students,
        ]);
    }
}
