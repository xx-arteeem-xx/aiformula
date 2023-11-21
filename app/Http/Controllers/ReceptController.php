<?php

namespace App\Http\Controllers;
use App\Models\recept;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReceptController extends Controller
{
    public function index(){
        $recept = recept::find(1);
        dump($recept->name);

    }
}
