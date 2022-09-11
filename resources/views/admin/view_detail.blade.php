@extends('layouts/app')

@section('content')

    <div class="col-md-8 dash">
        <div class="card">
            <div class="card-header">{{ __('Edit & View details') }}</div>

            <div class="card-body bod">
                {{-- @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{ __('You are logged in!') }} --}}
                <div class="row g-3">
                    <div class="col-md-4">
                        <a href="/view_c_details">
                            <button type="button" class="btn btn-primary">Edit Client Info</button>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="/view_tracking_detail">
                            <button type="button" class="btn btn-warning">Edit Tracking</button>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="/view_p_details">
                            <button type="button" class="btn btn-success">View Package Info</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
