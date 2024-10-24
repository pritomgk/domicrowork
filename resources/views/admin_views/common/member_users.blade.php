@extends('admin_views.layout.app')

@section('title')
Member Users
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>User Code</th>
                                        <th>Parent</th>
                                        <th>Balance</th>
                                        <th>Deposit</th>
                                        <th>Package</th>
                                        <th>Status</th>
                                        <th>Apply Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($member_users as $member_user)
                                        <form action="{{ route('admin_panel.update_admin') }}" method="POST">

                                            @csrf

                                            <tr>
                                                <td>{{ $member_user->name }}</td>
                                                <td>{{ $member_user->email }}</td>
                                                <td>{{ $member_user->phone }}</td>
                                                <td>{{ $member_user->user_code }}</td>
                                                <td>{{ !empty($member_user->parent->name)? $member_user->parent->name : '' }}</td>
                                                <td>{{ $member_user->balance }}</td>
                                                <td>{{ $member_user->deposit_balance }}</td>
                                                <td>{{ !empty($member_user->package->title)? $member_user->package->title : 'None' }}</td>
                                                <td>
                                                    <select disabled class="form-control" name="status" id="">
                                                        @if ($member_user->status == 1)
                                                            <option value="1">Active</option>
                                                            {{-- <option value="0">Deactive</option> --}}
                                                        @else
                                                            <option value="0">Deactive</option>
                                                            {{-- <option value="1">Active</option> --}}
                                                        @endif
                                                    </select>
                                                </td>
                                                <td>{{ $member_user->created_at }}</td>
                                                <td>
                                                    {{-- <input type="hidden" hidden name="member_id" value="{{ $member_user->member_id }}"> --}}
                                                    {{-- <input type="submit" class="btn btn-success text-white" value="Update"> --}}
                                                    <a class="btn btn-success text-white" href="{{ route('admin_panel.member_user_details', ['member_id'=>$member_user->member_id]) }}">View</a>
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

