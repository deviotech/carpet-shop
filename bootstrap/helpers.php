<?php
use Carbon\Carbon;
use App\Models\Setting;
use App\Models\Subscription;
use App\Models\Category;
use App\Models\Product;
use App\Models\Location;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



    function uploadImage($file, $path){
        $name = time().'-'.str_replace(' ', '-', $file->getClientOriginalName());
        $file->move($path,$name);
        return $path.'/'.$name;
    }

    function stafff()
    {
        return Staff::all();
    }










?>
