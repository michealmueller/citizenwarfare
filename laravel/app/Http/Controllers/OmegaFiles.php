<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OmegaFiles extends Controller
{
    //

    public function  __construct()
    {
    }

    public function index()
    {
        dd(Storage::disk('omega'));
    }
}
