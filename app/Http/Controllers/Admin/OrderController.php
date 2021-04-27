<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;

class OrderController extends Controller
{
    public function add()
    {
    	$list = Staff::all();
    	return view('admin.order.add',get_defined_vars());
    }
}
