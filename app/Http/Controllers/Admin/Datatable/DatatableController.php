<?php

namespace App\Http\Controllers\Admin\Datatable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use DB;

class DatatableController extends Controller
{
    public function simpleTable()
    {
        $users=User::all();
    	return view('admin.datatable.simple_table',compact('users'));
    }
}
