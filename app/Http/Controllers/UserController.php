<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class UserController extends Controller
{
    public function welcome() {
        $data['modelStudent'] = Student::all();
        return view('welcome', $data);
    }
}
