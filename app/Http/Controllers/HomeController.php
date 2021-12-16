<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $users = DB::table('surat_ijin_riset_individu')->get();

        return view('/home', ['surat_ijin_riset_individu' => $users]);
    }
}
