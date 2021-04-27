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
						</div>
						<div class="row">
							<div class="col-md-12 text-right">
								<button type="button" class="btn btn-primary add-area">+ More Area</button>
							</div>
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
    
</script>
@endsection