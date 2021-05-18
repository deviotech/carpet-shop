<?php

namespace App\Http\Controllers\Admin;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard()
    {     $Staff_count = DB::table('staff')->count();
         $orders_count = DB::table('orders')->count();
            // dd($Staff_count);
    	return view('admin.dashboard',get_defined_vars());
    }

    public function index()
    {
        return redirect()->route('login');
    }
}
