<?php

namespace App\Http\Controllers\Admin\Datatable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use DB;
class APIController extends Controller
{
    public function getUsers()
    {
        // $query = User::select('first_name', 'last_name', 'email');
        $query = User::select('*');
        return datatables($query)->make(true);
    }
}
