<?php

namespace App\Http\Controllers\Manage;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
//        dd($roles);
    }
}
