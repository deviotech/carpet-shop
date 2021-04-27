@extends('layouts.admin')
@section('title', 'Staff Setup')
@section('nav-title', 'Staff Setup')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form class="validate-form" action="{{ route('admin.staff.save') }}" method="POST">
                @csrf
                <div class="card ">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">list</i>
                        </div>
                        <h5 class="card-title"> Add Staff </h5>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="name">Staff Name*</label>
                                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="off" required placeholder="Enter Area Name..">
                                    @error('name')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
