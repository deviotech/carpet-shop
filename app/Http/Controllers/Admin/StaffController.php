<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
	public function list()
	{
		$list = Staff::all();
		return view('admin.staff.list',get_defined_vars());
	}
    public function add()
    {
    	return view('admin.staff.add');
    }
    public function save(Request $req, $id = null)
    {
    	// dd($req);
        $req->validate([
        	'name' => 'required',
        ]);

        if (is_null($id)) {
          		$staff = new Staff();
                $staff->name = $req->name;
                $staff->save();	

                $msg = "Staff Added Successfully!";
            }
            
        else {
            $staff = Staff::find($id);
            	$staff->name = $req->name;
                $staff->save();

            $msg = "Staff Updated Successfully!";
        }

        return redirect()->route('admin.staff.list')->with('success', $msg);
    }
    public function edit(Request $req)
    {
    	$staff=Staff::find($req->id);
    	return view("admin.staff.edit",get_defined_vars());
    } 
    public function delete(Request $req)
    {
    	Staff::find($req->id)->delete();
    	return back()->with("success","Staff deleted successfully");
    }
}