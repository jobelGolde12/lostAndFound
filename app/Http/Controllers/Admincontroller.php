<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class Admincontroller extends Controller
{
    public function index(){
        return inertia('Admin');
    }
}
