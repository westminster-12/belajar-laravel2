<?php

namespace App\Http\Controllers;
use App\Models\Siswa;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SiswaController extends Controller
{
    public function index(){
        $students = DB::select('SELECT * FROM tb_siswa');
        return view('siswa.index', ['students' => $students]);
    }
}
