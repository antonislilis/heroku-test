<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        var_dump('μανα μου η χωριστρα asou');
        var_dump(User::all());
    }
}
