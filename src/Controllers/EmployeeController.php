<?php

namespace CoreHR\Employee\Controllers;

use App\Http\Controllers\Controller;
use CoreHR\Employee\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        return Employee::all();
    }
}
