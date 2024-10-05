<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ContactController extends Controller
{
    public function store(Request $request){

    }
    public function index(){
        return inertia('ContactPage');
    }
}
