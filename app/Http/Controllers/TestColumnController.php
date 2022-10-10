<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestColumnController extends Controller
{
    public function countColoumn(){
        $table = 'users';
        dd( DB::getSchemaBuilder()->getColumnListing($table));
    }

    public function complexityTime(){
      

    }
    
}