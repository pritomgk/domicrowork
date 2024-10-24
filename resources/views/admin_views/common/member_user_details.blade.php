@extends('admin_views.layout.app')

@section('title')
Member User Details
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
            <div class="col-lg-10 mx-auto">
                <div class="card">

                    <div class="card-header">
                        <h5 class="card-title">View Member</h5>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin_panel.member_user_details_info') }}" method="POST">

                            @if (session()->has('error'))
                                <p class="mb-0 alert alert-danger">{{ session()->get('error') }}</p>
                            @endif
                            @if (session()->has('success'))
                                <p class="mb-0 alert alert-success">{{ session()->get('success') }}</p>
                            @endif

                            @csrf

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control" readonly value="{{ $member_user_details->name }}" />
                                </div>
                                @error('name')
                                    <p class="mb-0 alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Email</label>
                                <div class="col-md-8">
                                    <input type="email" name="email" class="form-control" readonly value="{{ $member_user_details->email }}" />
                                </div>
                                @error('email')
                                    <p class="mb-0 alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Phone</label>
                                <div class="col-md-8">
                                    <input type="text" name="phone" class="form-control" readonly value="{{ $member_user_details->phone }}" />
                                </div>
                                @error('phone')
                                    <p class="mb-0 alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">User Code</label>
                                <div class="col-md-8">
                                    <input type="text" name="user_code" class="form-control" readonly value="{{ $member_user_details->user_code }}" />
                                </div>
                                @error('user_code')
                                    <p class="mb-0 alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Balance</label>
                                <div class="col-md-8">
                                    <input type="text" name="balance" class="form-control" readonly value="{{ $member_user_details->balance }}" />
                                </div>
                                @error('balance')
                                    <p class="mb-0 alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Deposit Balance</label>
                                <div class="col-md-8">
                                    <input type="text" name="deposit_balance" class="form-control" readonly value="{{ $member_user_details->deposit_balance }}" />
                                </div>
                                @error('deposit_balance')
                                    <p class="mb-0 alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Package</label>
                                <div class="col-md-8">
                                    <input type="text" name="package_id" class="form-control" readonly value="{{ $member_user_details->package_id }}" />
                                </div>
                                @error('package_id')
                                    <p class="mb-0 alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Total Withdrawn</label>
                                <div class="col-md-8">
                                    <input type="text" name="withdraws" class="form-control" readonly value="{{ $member_user_details->withdraws }}" />
                                </div>
                                @error('withdraws')
                                    <p class="mb-0 alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">First Level Refer</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" readonly value="{{ $member_user_details->first_level_refer->count() }}" />
                                </div>
                                {{-- @error('name')
                                    <p class="mb-0 alert alert-danger">{{ $message }}</p>
                                @enderror --}}
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Second Level Refer</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" readonly value="{{ $member_user_details->second_level_refer->count() }}" />
                                </div>
                                {{-- @error('name')
                                    <p class="mb-0 alert alert-danger">{{ $message }}</p>
                                @enderror --}}
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Third Level Refer</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" readonly value="{{ $member_user_details->third_level_refer->count() }}" />
                                </div>
                                {{-- @error('name')
                                    <p class="mb-0 alert alert-danger">{{ $message }}</p>
                                @enderror --}}
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Fourth Level Refer</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" readonly value="{{ $member_user_details->fourth_level_refer->count() }}" />
                                </div>
                                {{-- @error('name')
                                    <p class="mb-0 alert alert-danger">{{ $message }}</p>
                                @enderror --}}
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Fifth Level Refer</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" readonly value="{{ $member_user_details->fifth_level_refer->count() }}" />
                                </div>
                                {{-- @error('name')
                                    <p class="mb-0 alert alert-danger">{{ $message }}</p>
                                @enderror --}}
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Approved By</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" readonly value="{{ !empty($member_user_details->approver->name) ? $member_user_details->approver->name : '' }}" />
                                </div>
                                {{-- @error('approver_id')
                                    <p class="mb-0 alert alert-danger">{{ $message }}</p>
                                @enderror --}}
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Todays Income</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" readonly value="{{ $member_user_details->daily_income }}" />
                                </div>
                                {{-- @error('name')
                                    <p class="mb-0 alert alert-danger">{{ $message }}</p>
                                @enderror --}}
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Expire Date</label>
                                <div class="col-md-8">
                                    <input type="datetime-local" name="expire_date" class="form-control" readonly value="{{ $member_user_details->expire_date }}" />
                                </div>
                                @error('expire_date')
                                    <p class="mb-0 alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Status</label>
                                <div class="col-md-10">
                                    {{-- <p>Use select2() function on select element to convert it to Select 2.</p> --}}
                                    <select name="status" class="js-example-basic-single select2 form-control">
                                        @if ($member_user_details->status == 1)
                                            <option value="1">Active</option>
                                            <option value="0">Deactive</option>
                                        @else
                                            <option value="0">Deactive</option>
                                            <option value="1">Active</option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row text-center">
                                <div class="col-md-10 mx-auto">
                                    <input type="hidden" name="member_id" hidden value="{{ $member_user_details->member_id }}">
                                    <input type="submit" class="btn btn-warning" value="Update">
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

