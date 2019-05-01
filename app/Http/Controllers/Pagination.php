<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class Pagination extends Controller
{
    public function users () {
      $users = User::simplepaginate(5);
      return view ('pagination', compact('users'));
    }
}
