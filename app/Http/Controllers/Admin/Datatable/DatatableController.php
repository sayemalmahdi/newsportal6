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

    public function datatable()
    {
        $users=User::all();
    	return view('admin.datatable.datatable',compact('users'));
    }

    public function ajaxDatatable()
    {
        // $users=User::all();
        // return view('admin.datatable.ajax_datatable',compact('users'));

        return view('admin.datatable.ajax_datatable');
    }



}
