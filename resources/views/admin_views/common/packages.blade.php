@extends('admin_views.layout.app')

@section('title')
Package List
@endsection

@section('content')

<div class="page-wrapper pagehead">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Data Tables</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin_panel.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Tables</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Default Datatable</h4>
                        <p class="card-text">This is the most basic example of the datatables with zero configuration. Use the <code>.datatable</code> class to initialize datatables.</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            @if (session()->has('error'))
                                <p class="mb-0 alert alert-danger">{{ session()->get('error') }}</p>
                            @endif
                            @if (session()->has('success'))
                                <p class="mb-0 alert alert-success">{{ session()->get('success') }}</p>
                            @endif

                            <table class="table datanew">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Validity</th>
                                        <th>Price</th>
                                        <th>Limit</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($packages as $package)
                                        <form action="{{ route('admin_panel.update_admin') }}" method="POST">

                                            @csrf

                                            <tr>
                                                <td>{{ $package->title }}</td>
                                                <td>{{ $package->validity }}</td>
                                                <td>{{ $package->price }}</td>
                                                <td>{{ $package->limit }}</td>
                                                <td>
                                                    <select name="status" class="js-example-basic-single select2 form-control">
                                                        @if ($package->status == 1)
                                                            <option value="1">Active</option>
                                                            <option value="0">Deactive</option>
                                                        @else
                                                            <option value="0">Deactive</option>
                                                            <option value="1">Active</option>
                                                        @endif
                                                    </select>
                                                </td>
                                                <td>{{ $package->created_at }}</td>
                                                <td>
                                                    <a class="btn btn-success text-white" href="{{ route('admin_panel.update_package', ['package_id'=>$package->package_id]) }}">Update</a>
                                                </td>
                                            </tr>

                                        </form>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

