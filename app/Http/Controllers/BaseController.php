<?php

namespace App\Http\Controllers;

class BaseController extends Controller
{
 Public function getIndex(){
 return view('welcome');
 }
}
