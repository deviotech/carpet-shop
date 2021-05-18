@extends('layouts.admin')
@section('title', 'Order')
@section('nav-title', 'Order')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12 text-right">
                <a href="{{route('admin.order.add')}}" class="btn btn-success">+ Add Order</a>
            </div>
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title font-weight-bold">Oder List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table datatables table-bordered table-striped">
                            <thead class="text-primary">
                                <tr>
                                    <th>Sr#</th>
                                    <th>Enquiry Date</th>
                                    <th>Enquiry Numbe</th>
                                    <th>Tower Contract </th>
                                    <th>Eircode </th>
                                    <th>Customer Name  </th>
                                    <th>Customer Email  </th>
                                    <th>Address  </th>
                                    <th>Job Status</th>
                                    <th>Action</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $loop->iteration }}</td  >
                                    <td>{{ $order->enquiry_date  ?? 'N/D' }}</td>
                                    <td>{{ $order->enquiry_number  ?? 'N/D' }}</td>
                                    @php
                                        $staff=tower_contract($order->tower_contract);
                                    @endphp
                                    <td class="text-capitalize">{{ $staff->name  ?? 'N/D' }}</td>
                                    <td>{{ $order->aircode_1  ?? 'N/D' }}</td>
                                    <td>{{ $order->cust_cont_name_1 }}</td>
                                    <td>{{ $order->cust_cont_email_1 ?? 'N/D' }}</td>
                                    <td>{{ $order->cust_cont_address_1	 ?? 'N/D'}}</td>
                                    <td>{{ $order->job_status	 ?? 'N/D'}}</td>

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
                                          <a href="{{ route('admin.order.pdf', $order->id) }}" rel="tooltip" class="btn btn-success btn-round" data-original-title="PDF" title="PDF">
                                              <i class="material-icons">PDF</i>
                                          </a>

                                         <a onclick="deleteAlert('{{ route('admin.order.delete.order.list', $order->id) }}')"  rel="tooltip" class="btn btn-danger btn-round" style="color: white" data-original-title="Delete" title="Delete">
                                            <i class="material-icons">delete</i>
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
