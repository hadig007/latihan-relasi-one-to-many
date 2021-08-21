<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Buku;

class PageController extends Controller
{
    public function buku()
    {
        $buku = Buku::all();
        $user = User::all();
        return view('buku',compact('buku','user'));
    }
}
