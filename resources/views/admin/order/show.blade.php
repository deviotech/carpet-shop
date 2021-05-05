@extends('layouts.admin')
@section('title', 'Staff')
@section('nav-title', 'Staff')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12 text-right">
                <a href="{{route('admin.staff.add')}}" class="btn btn-success">+ Add Staff</a>
            </div>
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title font-weight-bold">Staff List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table datatables table-bordered table-striped">
                            <thead class="text-primary">
                                <tr>
                                    <th>Inquery Date</th>
                                       <th>Inquery number</th>
                                    <th>Tower Contract </th>
                                    <th>Aircode 1</th>
                                   <th>Aircode 2</th>
                                    <th>Customer Name 1 </th>
                                    <th>Customer Name 2 </th>
                                    <th>Customer Email 1 </th>
                                    <th>Address 1 </th>
                                    <th>Action</th>


                                    {{--  <th>Customer Email 2 </th>
                                    <th>Customer Mobile 1 </th>
                                    <th>Customer Mobile 2 </th>

                                    <th>Address 1 </th>
                                    <th>Address 2 </th>
                                    <th>Address 3 </th>
                                    <th>Address 4 </th>  --}}


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                <tr>
                                    {{--  <td>{{ $loop->iteration }}</td  --}}
                                    <td>{{ $order->enquiry_date}}</td>
                                    <td>{{ $order->enquiry_number}}</td>
                                    <td>{{ $order->tower_contract}}</td>
                                    <td>{{ $order->aircode_1}}</td>
                                    <td>{{ $order->aircode_2}}</td>
                                    <td>{{ $order->cust_cont_name_1 }}</td>
                                    <td>{{ $order->cust_cont_name_2 ?? 'N/D'}}</td>
                                    <td>{{ $order->cust_cont_email_1 ?? 'N/D'}}</td>
                                    <td>{{ $order->cust_cont_address_1	 ?? 'N/D'}}</td>

                                    {{--  <td>{{ $order->cust_cont_email_2 ?? 'N/D'}}</td>
                                    <td>{{ $order->cust_cont_mobile_1 ?? 'N/D'}}</td>
                                    <td>{{ $order->cust_cont_mobile_2 ?? 'N/D'}}</td>
                                    <td>{{ $order->cust_cont_address_1	 ?? 'N/D'}}</td>
                                    <td>{{ $order->cust_cont_address_2 ?? 'N/D'}}</td>
                                    <td>{{ $order->cust_cont_address_3	 ?? 'N/D'}}</td>  --}}
                                    {{--  <td>{{ $order->cust_cont_address_4 ?? 'N/D'}}</td>  --}}

                                      <td>
                                        <a href="{{ route('admin.order.edit.order', $order->id) }}" rel="tooltip" class="btn btn-success btn-round" data-original-title="Edit" title="Edit">
                                            <i class="material-icons">edit</i>
                                        </a>
                                      </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
