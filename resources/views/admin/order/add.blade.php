@extends('layouts.admin')
@section('title', 'Order')
@section('nav-title', 'Order')
@section('css')
<style>
	.table thead th{
		font-size: 12px !important;
	}
	.table td input.form-control, select.form-control{
		font-size: 12px !important;
	}
	.remove-item{
        position: absolute;
        right: 30px;
        top: 24px;
    }
    #area-table input.form-control, select.form-control {
    	height: calc(2.0rem + 1px) !important;
    	background: #fff;
	}
	form .form-group select.form-control
	{
		position: relative !important;
	}
	.hidden
	{
		display: none;
	}
	#new-trim label
	{
		position: relative !important;
		color: black;
	}
	#new-underlay label
	{
		position: relative !important;
		color: black;
	}
</style>
@endsection
@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header card-header-tabs card-header-primary">
					<div class="nav-tabs-navigation">
						<div class="nav-tabs-wrapper">
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="nav-item">
									<a class="nav-link active information_tab" href="#information" data-toggle="tab">
										<i class="material-icons">receipt</i> Information
										<div class="ripple-container"></div>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#material" data-toggle="tab">
										<i class="material-icons">receipt</i> Material Detail
										<div class="ripple-container"></div>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#area" data-toggle="tab">
										<i class="material-icons">receipt</i>Area Detail
										<div class="ripple-container"></div>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#survey" data-toggle="tab">
										<i class="material-icons">receipt</i> Survey Detail
										<div class="ripple-container"></div>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#intial_enquiry" data-toggle="tab">
										<i class="material-icons">receipt</i> Intial Enquiry
										<div class="ripple-container"></div>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#payment" data-toggle="tab">
										<i class="material-icons">receipt</i> Payment Detail
										<div class="ripple-container"></div>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="tab-content">
						<div class="tab-pane active" id="information">
							<form method="POST" action="">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Date of Enquiry</label>
											<input type="text" name="enquiry_date" class="form-control datepicker">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Enquiry Number</label>
											<input type="text" name="enquiry_num" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Tower Contract</label>
											<select name="staff" class="form-control select2">
												<option selected disabled>Select One..</option>
												@foreach($list as $item)
												<option value="{{$item->id}}">{{$item->name}}</option>
												@endforeach
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Customer Contact Name 1</label>
											<input type="text" name="cust_name_1" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Customer Contact Mobile 1</label>
											<input type="text" name="cust_mobile_1" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Customer Contact Email 1</label>
											<input type="text" name="cust_email_1" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Address 1</label>
											<input type="text" name="address_1" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Address 2</label>
											<input type="text" name="address_2" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Eircode</label>
											<input type="text" name="eircode" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Customer Contact Name 2</label>
											<input type="text" name="cust_name_2" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Customer Contact Mobile 2</label>
											<input type="text" name="cust_mobile_2" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Customer Contact Email 2</label>
											<input type="text" name="cust_email_2" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Address 1</label>
											<input type="text" name="sec_address_1" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Address 2</label>
											<input type="text" name="sec_address_2" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Eircode</label>
											<input type="text" name="eircode" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Area Type</label>
											<select name="type" class="form-control select2">
												<option value="residential" selected> Residential</option>
												<option value="commercial"> Commercial</option>
											</select>	
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<button type="submit" class="btn btn-success">Save</button>
										<a href="" class="btn btn-danger">Close</a>
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane" id="material">
							<div class="row first-row">
								<div class="col-md-12">
									<div class="form-group product">
										<label>Product <font class="p-count">1</font> viewed</label>
										<input type="text" name="product[]" class="form-control" placeholder="Enter Product Name">	
									</div>
								</div>
							</div>
							<div class="second">
								
							</div>
							<div class="row">
								<div class="col-md-12 text-right">
									<button type="submit" class="btn btn-primary submit">Add Product</button>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="area">
							<div class="row">
								<div class="table-responsive">
			                        <table id="area-table" class="table table-bordered">
			                            <thead class="text-primary">
			                                <tr>
			                                    <th>Area</th>
			                                    <th>Area Name</th>
			                                    <th>Length In M</th>
			                                    <th>Width In M</th>
			                                    <th>Type</th>
			                                    <th>Material Chosen</th>
			                                    <th>Expected Material delivery</th>
			                                    <th>Scheduled Fit Date</th>
			                                    <th>Room Price</th>
			                                    <th>Going Ahead</th>
			                                    <th>Fit Complete</th>
			                                    <th>Action</th>
			                                </tr>
			                            </thead>
			                            <tbody>
			                            	<tr class="new-row" id="t-row-1">
			                            		<td> <font class="count">1</font></td>
			                            		<td>
			                            			<input type="text" name="area_name" class="form-control">
			                            		</td>
			                            		<td>
			                            			<input type="text" name="length" class="form-control">
			                            		</td>
			                            		<td>
			                            			<input type="text" name="width" class="form-control">
			                            		</td>
			                            		<td>
			                            			<select name="type" class="form-control">
			                            				<option selected disabled>Select One..</option>
			                            				<option value="wood">Wood</option>
			                            				<option value="lvt">LVT</option>
			                            				<option value="carpet">Carpet</option>
			                            			</select>
			                            		</td>
			                            		<td>
			                            			<select name="material" class="form-control">
			                            				<option selected disabled>Select One..</option>
			                            				<option value="rose_white">Rose White</option>
			                            				<option value="ilster">ULster</option>
			                            			</select>
			                            		</td>
			                            		<td>
			                            			<input type="text" name="exp_date" class="form-control datepicker">
			                            		</td>
			                            		<td>
			                            			<input type="text" name="sch_date" class="form-control datepicker">
			                            		</td>
			                            		<td>
			                            			<input type="text" name="room_price" class="form-control">
			                            		</td>
			                            		<td>
			                            			<select name="going_ahead" class="form-control">
			                            				<option selected disabled>Select One..</option>
			                            				<option value="yes">Yes</option>
			                            				<option value="no">No</option>
			                            			</select>
			                            		</td>
			                            		<td>
			                            			<select name="fit_complete" class="form-control">
			                            				<option selected disabled>Select One..</option>
			                            				<option value="yes">Yes</option>
			                            				<option value="no">No</option>
			                            			</select>
			                            		</td>
			                            		<td class="remove-btn"></td>
			                            	</tr>
			                            	
			                            </tbody>
			                            <tbody id="new-tbody">
			                            	
			                            </tbody>
			                        </table>
			                    </div>
							</div>
							<div class="row">
								<div class="col-md-12 text-right">
									<button type="button" class="btn btn-primary add-area">+ More Area</button>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="survey">
							<form method="" action="">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Sub Floor type</label>
											<select name="floor_type" class="form-control">
												<option selected disabled>Select One</option>
												<option value="Concrete">Concrete</option>
												<option value="Wood">Wood</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Build type</label>
											<select name="build_type" class="form-control">
												<option selected disabled>Select One</option>
												<option value="New">New</option>
												<option value="Old">Old</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Moisture Reading Needed?</label>
											<select name="moisture" class="form-control moisture">
												<option selected disabled>Select One</option>
												<option value="Yes">Yes</option>
												<option value="No">No</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 moisture_per hidden">
										<div class="form-group">
											<label>Moisture reading %</label>
											<input type="text" name="moisture_per" class="form-control" placeholder="Enter Moisture Reading %">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Underfloor heating?</label>
											<select name="underfloor" class="form-control">
												<option selected disabled>Select One</option>
												<option value="Yes">Yes</option>
												<option value="No">No</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Screed required?</label>
											<select name="screed" class="form-control screed">
												<option selected disabled>Select One</option>
												<option value="Yes">Yes</option>
												<option value="No">No</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 screed_detail hidden">
										<div class="form-group">
											<label>Screed details</label>
											<input type="text" name="screed_detail" class="form-control" placeholder="Enter Screed Detail">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Door Saddles in place?</label>
											<select name="saddles" class="form-control saddles">
												<option selected disabled>Select One</option>
												<option value="Yes">Yes</option>
												<option value="No">No</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 door_saddles hidden">
										<div class="form-group">
											<label>Door Saddles need to uplifted</label>
											<select name="saddles_uplifted" class="form-control saddles_uplifted">
												<option selected disabled>Select One</option>
												<option value="Yes">Yes</option>
												<option value="No">No</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Skirting in place ?</label>
											<select name="skirting" class="form-control skirting">
												<option selected disabled>Select One</option>
												<option value="Yes">Yes</option>
												<option value="No">No</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 action_skit hidden">
										<div class="form-group">
											<label>Action on skirting</label>
											<select name="action_skit" class="form-control">
												<option selected disabled>Select One</option>
												<option value="Reuse">Reuse</option>
												<option value="Replace">Replace</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Stairs?</label>
											<select name="stairs" class="form-control stairs">
												<option selected disabled>Select One</option>
												<option value="Yes">Yes</option>
												<option value="No">No</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 stairs_yes hidden">
										<div class="form-group">
											<label>Runner</label>
											<select name="runner" class="form-control runner">
												<option value="Yes">Yes</option>
												<option value="No" selected>No</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 runner_yes hidden">
										<div class="form-group">
											<label>Binding Type</label>
											<select name="binding" class="form-control binding">
												<option selected disabled>Select One</option>
												<option value="Cotton">Cotton</option>
												<option value="Yarn">Yarn</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Rods</label>
											<select name="rods" class="form-control rods">
												<option value="Yes">Yes</option>
												<option value="No" selected>No</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 rods_yes hidden">
										<div class="form-group">
											<label>Rods type</label>
											<input type="text" name="rods_type" class="form-control rods_type" placeholder="Enter Rods Type">
										</div>
									</div>
									<div class="col-md-6 rods_yes hidden">
										<div class="form-group">
											<label>Rods size</label>
											<input type="text" name="rods_size" class="form-control rods_size" placeholder="Enter Rods Size">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Uplift + Dispose old material</label>
											<select name="rods" class="form-control rods">
												<option value="Yes" selected>Yes</option>
												<option value="No">No</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row underlay-row" id="underlay-1">
									<div class="col-md-12">
										<div class="remove-btn-under text-right"></div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Underlay <font class="new-count">1</font></label>
											<input type="text" name="underlay[]" class="form-control" placeholder="Enter Underlay..">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Area</label>
											<input type="text" name="area[]" class="form-control" placeholder="Enter Area..">
										</div>
									</div>
								</div>
								<div id="new-underlay">
									
								</div>
									
								<div class="row">
									<div class="col-md-12 text-right">
										<button type="button" class="btn btn-primary btn-sm add-underlay">+ Add Underlay Type</button>
									</div>
								</div>

								<div class="row trim-row" id="trim-1">
									<div class="col-md-12">
										<div class="remove-btn-trim text-right"></div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Trim <font class="new-count-2">1</font></label>
											<input type="text" name="trim[]" class="form-control" placeholder="Enter Trim..">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Area</label>
											<input type="text" name="trim_area[]" class="form-control" placeholder="Enter Area..">
										</div>
									</div>
								</div>
								<div id="new-trim">
									
								</div>
									
								<div class="row">
									<div class="col-md-12 text-right">
										<button type="button" class="btn btn-primary btn-sm add-trim">+ Add Trim Detail</button>
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane" id="intial_enquiry">
							<form method="" action="">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>To measure unscheduled</label>
											<select name="unscheduled" class="form-control unscheduled">
												<option selected disabled>Select One</option>
												<option value="Yes">Yes</option>
												<option value="No">No</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 unscheduled_yes hidden">
										<label>Estimate date</label>
										<input type="text" name="un_estimate_date" class="form-control datepicker">
									</div>
									<div class="col-md-6">
										<label>To Measure scheduled</label>
										<input type="text" name="sc_estimate_date" class="form-control datepicker">
									</div>
									<div class="col-md-6">
										<label>Price given to customer (Quoted)</label>
										<input type="text" name="price" class="form-control" placeholder="Enter price, detail etc..">
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Job Agreed</label>
											<select name="job" class="form-control job">
												<option selected disabled>Select One</option>
												<option value="Yes">Yes</option>
												<option value="No">No</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 job_yes hidden">
										<label>Calendar for install date</label>
										<input type="text" name="Install_date" class="form-control datepicker">
									</div>
									<div class="col-md-6 job_no hidden">
										<label>Comment</label>
										<input type="text" name="comment" class="form-control">
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Job Schedule</label>
											<select name="job_schedule" class="form-control job_schedule">
												<option selected disabled>Select One</option>
												<option value="Yes">Yes</option>
												<option value="No">No</option>
											</select>
										</div>
									</div>
									<div class="col-md-12 job_schedule_no hidden">
										<label>Full Job Comment</label>
										<textarea rows="3" name="full_comment" class="form-control" placeholder="Enter Full Job Comment ..."></textarea>
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane" id="payment">
							<form method="" action="">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Total Value</label>
											<input type="number" name="total" class="form-control total" placeholder="Enter Total Value..">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Payment Comment</label>
											<input type="text" name="total_comment" class="form-control" placeholder="Enter Comment Here..">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Initial Deposit</label>
											<input type="number" name="intial_dep" class="form-control deposit" placeholder="Enter Intial Deposit..">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Payment Comment</label>
											<input type="text" name="int_comment" class="form-control" placeholder="Enter Comment Here..">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Additonal Payments</label>
											<input type="number" name="add_payment" class="form-control additonal" placeholder="Enter Additonal Payment..">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Payment Comment</label>
											<input type="text" name="add_comment" class="form-control" placeholder="Enter Comment Here..">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Balance Due</label>
											<input type="number" name="add_comment" class="form-control balance" readonly>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('js')
<script>
	$(document).on('click','.submit',function(e){
		e.preventDefault();
		var code= $('.product').html();
		$('.first-row').append('<div class="col-md-12">'+code+'</div>');
	});

	var row= 1;
	var count= 1;
	$(document).on('click','.add-area',function(){
		
		// md.initFormExtendedDatetimepickers();
		
		var count = $('.count').length;
		if(count<10)
		{
			var content = $('#t-row-1').html();
			$('#new-tbody').append('<tr class="new-row" id="t-row-'+(row+1)+'">'+content+'</tr>');
	            $('#t-row-'+(row+1)).find('input').val("");
	            // md.initFormExtendedDatetimepickers();
	            $('#t-row-'+(row+1)).find('.count').text(count+1);
	            $('#t-row-'+(row+1)).find('.remove-btn').append('<button type="button" class="remove-row btn btn-sm btn-danger"><i class="fa fa-times"></i></button>');
		}
		count++;
		row++;
		if(count == 10)
                $(this).fadeOut();
	});

	$(document).on('click', '.remove-row', function(){
		var count = $('.count').length;
        $(this).closest('.new-row').remove();
        var align = 1;
        $('.new-row').each(function(){
            $(this).find('.count').text(align);
            align++;
        });
        if(count == 10)
            $('.add-area').fadeIn();
        count--;
    });
    $(document).on('change', '.moisture', function(){
    	if($(this).val() == "Yes")
    	{
    		$('.moisture_per').removeClass('hidden');
    	}
    	if($(this).val() == "No")
    	{
    		$('.moisture_per').addClass('hidden');
    	}
    });
    $(document).on('change', '.screed', function(){
    	if($(this).val() == "Yes")
    	{
    		$('.screed_detail').removeClass('hidden');
    	}
    	if($(this).val() == "No")
    	{
    		$('.screed_detail').addClass('hidden');
    	}
    });
    $(document).on('change', '.saddles', function(){
    	if($(this).val() == "Yes")
    	{
    		$('.door_saddles').removeClass('hidden');
    	}
    	if($(this).val() == "No")
    	{
    		$('.door_saddles').addClass('hidden');
    	}
    });
    $(document).on('change', '.skirting', function(){
    	if($(this).val() == "Yes")
    	{
    		$('.action_skit').removeClass('hidden');
    	}
    	if($(this).val() == "No")
    	{
    		$('.action_skit').addClass('hidden');
    	}
    });
    $(document).on('change', '.stairs', function(){
    	if($(this).val() == "Yes")
    	{
    		$('.stairs_yes').removeClass('hidden');
    	}
    	if($(this).val() == "No")
    	{
    		$('.stairs_yes').addClass('hidden');
    	}
    });
    $(document).on('change', '.runner', function(){
    	if($(this).val() == "Yes")
    	{
    		$('.runner_yes').removeClass('hidden');
    	}
    	if($(this).val() == "No")
    	{
    		$('.runner_yes').addClass('hidden');
    	}
    });
    $(document).on('change', '.rods', function(){
    	if($(this).val() == "Yes")
    	{
    		$('.rods_yes').removeClass('hidden');
    	}
    	if($(this).val() == "No")
    	{
    		$('.rods_yes').addClass('hidden');
    	}
    });
    $(document).on('change', '.unscheduled', function(){
    	if($(this).val() == "Yes")
    	{
    		$('.unscheduled_yes').removeClass('hidden');
    	}
    	if($(this).val() == "No")
    	{
    		$('.unscheduled_yes').addClass('hidden');
    	}
    });
    $(document).on('change', '.job', function(){
    	if($(this).val() == "Yes")
    	{
    		$('.job_yes').removeClass('hidden');
    		$('.job_no').addClass('hidden');
    	}
    	if($(this).val() == "No")
    	{
    		$('.job_no').removeClass('hidden');
    		$('.job_yes').addClass('hidden');
    	}
    });
    $(document).on('change', '.job_schedule', function(){
    	if($(this).val() == "Yes")
    	{
    		$('.job_schedule_no').addClass('hidden');
    	}
    	if($(this).val() == "No")
    	{
    		$('.job_schedule_no').removeClass('hidden');
    	}
    });

    var under= 1;
	var new_count= 1;
	$(document).on('click','.add-underlay',function(){
		var new_count = $('.new-count').length;
		if(new_count<3)
		{
			var content = $('#underlay-1').html();
			$('#new-underlay').append('<div class="row new-underlay" id="underlay-'+(under+1)+'">'+content+'</div>');
	            $('#underlay-'+(under+1)).find('input').val("");
	            // md.initFormExtendedDatetimepickers();
	            $('#underlay-'+(under+1)).find('.new-count').text(new_count+1);
	            $('#underlay-'+(under+1)).find('.remove-btn-under').append('<button type="button" class="remove-row btn btn-sm btn-danger"><i class="fa fa-times"></i></button>');
		}
		new_count++;
		under++;
		if(new_count == 3)
                $(this).fadeOut();
	});

	$(document).on('click', '.remove-btn-under', function(){
		var new_count = $('.new-count').length;
        $(this).closest('.new-underlay').remove();
        var align = 1;
        $('.new-trim').each(function(){
            $(this).find('.new-count').text(align);
            align++;
        });
        if(new_count == 3)
            $('.add-underlay').fadeIn();
        new_count--;
    });

    var trim= 1;
	var new_count_2= 1;
	$(document).on('click','.add-trim',function(){
		var new_count_2 = $('.new-count-2').length;
		if(new_count_2<3)
		{
			var content = $('#trim-1').html();

			$('#new-trim').append('<div class="row new-trim" id="trim-'+(trim+1)+'">'+content+'</div>');
	            $('#trim-'+(trim+1)).find('input').val("");
	            // md.initFormExtendedDatetimepickers();
	            $('#trim-'+(trim+1)).find('.new-count-2').text(new_count_2+1);
	            $('#trim-'+(trim+1)).find('.remove-btn-trim').append('<button type="button" class="remove-row btn btn-sm btn-danger"><i class="fa fa-times"></i></button>');
		}
		new_count_2++;
		trim++;
		if(new_count_2 == 3)
                $(this).fadeOut();
	});

	$(document).on('click', '.remove-btn-trim', function(){
		var new_count_2 = $('.new-count-2').length;
        $(this).closest('.new-trim').remove();
        var align = 1;
        $('.new-trim').each(function(){
            $(this).find('.new-count-2').text(align);
            align++;
        });
        if(new_count_2 == 3)
            $('.add-trim').fadeIn();
        new_count_2--;
    });
    $(document).on('keyup', '.total, .deposit, .additonal', function(){
    	var total = $('.total').val();
    	var deposit = $('.deposit').val();
    	var additonal = $('.additonal').val();
    	var balance = total - deposit - additonal;
    	$('.balance').val(balance);
    });
</script>
@endsection