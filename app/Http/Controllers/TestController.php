<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        var_dump('test branch test');
        var_dump(User::all());
    }
}
