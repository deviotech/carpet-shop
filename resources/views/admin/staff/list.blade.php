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
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->created_at->format('d-m-y')}}</td>
                                    <td>
                                        <a href="{{ route('admin.staff.edit', $item->id) }}" rel="tooltip" class="btn btn-success btn-round" data-original-title="Edit" title="Edit">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <button type="button" onclick="deleteAlert('{{ route('admin.staff.delete', $item->id) }}')" rel="tooltip" class="btn btn-danger btn-round delete-btn" data-original-title="Delete" title="Delete">
                                            <i class="material-icons">close</i>
                                        </button>
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