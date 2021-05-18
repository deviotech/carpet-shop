<?php

namespace App\Http\Controllers\Admin;
use Barryvdh\DomPDF\Facade as PDF;
use view;
use App\Models\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AreaDetail;
use App\Models\MaterialDetail;
use App\Models\Order;
use App\Models\Trim;
use App\Models\Underlay;

class OrderController extends Controller
{
    public function add()
    {
    	$list = Staff::all();
    	return view('admin.order.add',get_defined_vars());
    }


    public function orderCreate(Request $request)
    {
      $request->validate([
                'enquiry_date' => 'required',
                'enquiry_number' => 'required',
                'tower_contract' => 'required',
                'aircode_1' => 'required',
                'cust_cont_name_1'=>'required',
                'cust_cont_address_1' => 'required',
                'cust_cont_email_1' => 'required',
                'cust_cont_mobile_1' => 'required',

            ]);

    $order = Order::create([
            'enquiry_date' => $request->enquiry_date,
            'enquiry_number' => $request->enquiry_number,
            'tower_contract' => $request->tower_contract,
            'cust_cont_name_1' => $request->cust_cont_name_1,
            'cust_cont_email_1' => $request->cust_cont_email_1,
            'cust_cont_address_1' =>$request->cust_cont_address_1,
            'cust_cont_mobile_1'=>$request->cust_cont_mobile_1,
            'aircode_1'=>$request->aircode_1,
            'cust_cont_name_2'=>$request->cust_name_2,
            'cust_cont_email_2' => $request->cust_email_2,
            'cust_cont_mobile_2'=>$request->cust_mobile_2,
            'cust_cont_address_2' =>$request->cust_cont_address_2,
            'cust_cont_address_3' =>$request->sec_address_1,
            'cust_cont_address_4' =>$request->sec_address_2,
            'aircode_2'=>$request->aircode_2,
            'area_type'=>$request->area_type,
            'sub_floor_type'=>$request->floor_type,
            'build_type'=>$request->build_type,
            'moisture_read_need'=>$request->moisture,
            'moisture_read_per'=>$request->moisture_per,
            'underfloor_heating'=>$request->underfloor,
            'speed_required'=>$request->screed,
            'speed_detail'=>$request->screed_detail,
            'door_saddles_place'=>$request->saddles,
            'door_saddles_need'=>$request->saddles_uplifted,
            'skirting_place'=>$request->skirting,
            'action_skirting'=>$request->action_skit,
            'stairs'=>$request->stairs,
            'runner'=>$request->runner,
            'binding_type'=>$request->binding,
            'rod'=>$request->rodes,
            'rod_no'=>$request->rod_no,
            'rod_type'=>$request->rods_type,
            'rod_size'=>$request->rods_size,
            'up_lift'=>$request->rods,
            'to_measure_unscheduled'=>$request->unscheduled,
            'estimate_date'=>$request->estimate_date,
            'to_measure_scheduled'=>$request->sc_estimate_date,
            'to_price_quoted'=>$request->price,
            'job_agreed'=>$request->job,
            'comment'=>$request->comment,
            'full_comment'=>$request->full_comment,
            'calendar_for_install_date'=>$request->Install_date,
            'job_schedule'=>$request->job_schedule,
            'total_value'=>$request->total,
            'payment_comment_val'=>$request->total_comment,
            'intial_deposit'=>$request->intial_dep,
            'payment_comment_intial'=>$request->int_comment,
            'additional_payment'=>$request->additional_payment,
            'payment_comment_additional'=>$request->add_comment,
            'balance_due'=>$request->balance_due,
            'status'=>$request->status,
            'job_status'=>$request->enquiry_status,

        ]);



    	 for ($i=0; $i < count($request->product)  ; $i++)
    	 {
    	 	MaterialDetail::create([
    	 		'order_id'  => $order->id,
    	 		'product'       =>$request->product[$i],
    	 	]);
    	 }
if($request->area_name!=null)
{
 for ($i=0; $i < count($request->area_name)  ; $i++)
    	 {
    	 	AreaDetail::create([
    	 		'order_id'  => $order->id,
    	 		'area_name'       =>$request->area_name[$i],
                'length_in_m'       =>$request->length[$i],
                'width_in_m'=>$request->width[$i],
                'type'=>$request->type[$i],
                'material_chosen'=>$request->material[$i],
                'expected_material_delivery'=>$request->exp_date[$i],
                'scheduled_fit_date'=>$request->sch_date[$i],
                'room_price'=>$request->room_price[$i],
                'going_ahead'=>$request->going_ahead[$i],
                'fit_complete'=>$request->fit_complete[$i],
    	 	]);
    	 }
}


for ($i=0; $i < count($request->underlay)  ; $i++)
    	 {
    	 	Underlay::create([
    	 		'order_id'  => $order->id,
    	 		'underlay'       =>$request->underlay[$i],
                'area'       =>$request->area[$i],
    	 	]);
    	 }

for ($i=0; $i < count($request->trim)  ; $i++)
    	 {
    	 	Trim::create([
    	 		'order_id'  => $order->id,
    	 		'trim'       =>$request->trim[$i],
                'trim_area'       =>$request->trim_area[$i],
    	 	]);
    	 }

 	return back()->with("success","Added listing successfully");
     //return view('admin.order.add',get_defined_vars());
    }

    public function showOrder()
    {


        $orders=Order::orderBy('created_at','DESC')->get();

        return view('admin.order.show',get_defined_vars());

    }


    public function edit($id)
    {

        $orders=Order::with('products','Areadetail','underlay','trim')->where('id',$id)->first();
// dd($orders);
        return view('admin.order.edit',get_defined_vars());

    }

    public function update($id,Request $request)
    {


        $request->validate([
            'enquiry_date' => 'required',
            'enquiry_num' => 'required',
            'staff' => 'required',
            'eircode' => 'required',
            'cust_cont_name_1'=>'required',
            'address_1' => 'required',
            'cust_email_1' => 'required',
            'cust_cont_mobile_1' => 'required',

        ]);

    $orders=Order::where('id',$id)->first();
    $orders->update([
           'enquiry_date' => $request->enquiry_date,
            'enquiry_number' => $request->enquiry_num,
            'tower_contract' => $request->staff,
            'cust_cont_name_1' => $request->cust_cont_name_1,
            'cust_cont_email_1' => $request->cust_email_1,
            'cust_cont_address_1' =>$request->address_1,
            'cust_cont_mobile_1'=>$request->cust_cont_mobile_1,
            'aircode_1'=>$request->eircode,
            'cust_cont_name_2'=>$request->cust_name_2,
            'cust_cont_email_2' => $request->cust_email_2,
            'cust_cont_mobile_2'=>$request->cust_mobile_2,
            'cust_cont_address_2' =>$request->address_2,
            'cust_cont_address_3' =>$request->sec_address_1,
            'cust_cont_address_4' =>$request->sec_address_2,
            'aircode_2'=>$request->eircode2,
            'area_type'=>$request->area_type,
            'sub_floor_type'=>$request->floor_type,
            'build_type'=>$request->build_type,
            'moisture_read_need'=>$request->moisture,
            'moisture_read_per'=>$request->moisture_per,
            'underfloor_heating'=>$request->underfloor,
            'speed_required'=>$request->screed,
            'speed_detail'=>$request->screed_detail,
            'door_saddles_place'=>$request->saddles,
            'door_saddles_need'=>$request->saddles_uplifted,
            'skirting_place'=>$request->skirting,
            'action_skirting'=>$request->action_skit,
            'stairs'=>$request->stairs,
            'runner'=>$request->runner,
            'binding_type'=>$request->binding,
            'rod'=>$request->rodes,
            'rod_type'=>$request->rods_type,
            'rod_size'=>$request->rods_size,
            'rod_no'=>$request->rod_no,
            'up_lift'=>$request->rods,
            'to_measure_unscheduled'=>$request->unscheduled,
            'estimate_date'=>$request->estimate_date,
            'to_measure_scheduled'=>$request->sc_estimate_date,
            'to_price_quoted'=>$request->price,
            'job_agreed'=>$request->job,
            'comment'=>$request->comment,
            'full_comment'=>$request->full_comment,
            'calendar_for_install_date'=>$request->Install_date,
            'job_schedule'=>$request->job_schedule,
            'total_value'=>$request->total,
            'payment_comment_val'=>$request->total_comment,
            'intial_deposit'=>$request->intial_dep,
            'payment_comment_intial'=>$request->int_comment,
            'additional_payment'=>$request->additional_payment,
            'payment_comment_additional'=>$request->add_comment,
            'balance_due'=>$request->balance_due,
            'status'=>$request->status,
        'job_status'=>$request->enquiry_status,

        ]);
//materialdetail table
        if ($request->product) {
                $product = MaterialDetail::where('order_id', $orders->id)->get();
                if ($product) {
                    for ($i = 0; $i < count($product); $i++) {
                        $product[$i]->delete();
                    }
                }
                $product_data = count($request->product);
                for ($i = 0; $i < $product_data; $i++) {
                    $product =  new MaterialDetail();
                    $product->order_id = $orders->id;
                    $product->product = $request->product[$i];
                    $product->save();
                }
            }

//area detail table
                    if ($request->area_name) {
                $areaDetail = AreaDetail::where('order_id', $orders->id)->get();
                if ($areaDetail) {
                    for ($i = 0; $i < count($areaDetail); $i++) {
                        $areaDetail[$i]->delete();
                    }
                }

                $Detailarea = count($request->area_name);
                for ($i = 0; $i <$Detailarea; $i++) {
                    $schedule =  new AreaDetail();
                    $schedule->order_id = $orders->id;
                    $schedule->area_name = $request->area_name[$i];
                    $schedule->length_in_m = $request->length[$i];
                    $schedule->width_in_m = $request->width[$i];
                    $schedule->type= $request->type[$i];
                    $schedule->material_chosen= $request->material[$i];
                    $schedule->expected_material_delivery= $request->exp_date[$i];
                    $schedule->scheduled_fit_date= $request->sch_date[$i];
                    $schedule->room_price= $request->room_price[$i];
                    $schedule->going_ahead= $request->going_ahead[$i];
                    $schedule->fit_complete= $request->fit_complete[$i];
                    $schedule->save();
                }
            }


//underlay table
                    if ($request->underlay) {
                $product = Underlay::where('order_id', $orders->id)->get();
                if ($product) {
                    for ($i = 0; $i < count($product); $i++) {
                        $product[$i]->delete();
                    }
                }
                $underlay_data = count($request->underlay);
                for ($i = 0; $i <$underlay_data; $i++) {
                    $product =  new Underlay();
                    $product->order_id = $orders->id;
                    $product->underlay = $request->underlay[$i];
                    $product->area = $request->area[$i];
                    $product->save();
                }
            }

///trim table
                   if ($request->trim) {
                $trim_data = Trim::where('order_id', $orders->id)->get();
                if ($trim_data) {
                    for ($i = 0; $i < count($trim_data); $i++) {
                        $trim_data[$i]->delete();
                    }
                }
                $data_trim = count($request->trim);
                for ($i = 0; $i <$data_trim; $i++) {
                    $product =  new Trim();
                    $product->order_id = $orders->id;
                    $product->trim=$request->trim[$i];
                    $product->trim_area = $request->trim_area[$i];
                    $product->save();
                }
            }

    	return back()->with("success","Update listing successfully");

    }

      public function orderListDelete($id)
    {
    	$list = Order::find($id);
        $list->delete();
    	return back()->with("success","Delete Order listing successfully");
    }

    public function orderPDF($id)
    {
        $order = Order::find($id);
        set_time_limit(600);
        $pdf=PDF::loadView('pdf.measure_pdf',['order'=>$order])->setPaper('a4','landscape');
        return $pdf->download('Measure PDF.pdf');
    }


}
