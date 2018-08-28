<?php
namespace App\Http\Controllers;

use App\Hello;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   
    public function index()
    {
        return view('welcome');
    }
}
