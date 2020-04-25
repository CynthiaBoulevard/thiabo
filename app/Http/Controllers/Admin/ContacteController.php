<?php

namespace App\Http\Controllers\Admin;

use App\Contacte;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContacteController extends Controller
{
    public function index()
    {
        $contactes = Contacte::all();
        return view('admin.contacte.index',compact('contactes'));
    }
}

