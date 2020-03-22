<?php

namespace App\Http\Controllers;

use App\User;
use DataTables;
use Illuminate\Http\Request;

class DatatablesController extends Controller
{
    public function index(){
    //   $users =  User::all();

    //   return view('datatables.datatables',['users'=>$users]);

    return DataTables::of(User::query())->make(true); 
    }
}