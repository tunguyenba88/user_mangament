<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        return view('list', ['users' => $users]);
    }
}
