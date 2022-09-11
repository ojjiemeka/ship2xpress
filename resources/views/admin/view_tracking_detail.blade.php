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
                            <button type="button" class="btn btn-danger"> Client Info</button>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="/view_tracking_detail">
                            <button type="button" class="btn btn-primary">Tracking</button>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="/view_p_details">
                            <button type="button" class="btn btn-success">Package Info</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8 dash bod">
        <div>
            <h2 class="deposit">TRACKING</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-dark " style="
    width: auto;
    ">
                <thead style="background-color: #10363c;">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tracking Number</th>
                        {{-- <th scope="col">OTP</th> --}}
                        <th scope="col">Reciever Name</th>
                        <th scope="col">Sender Name</th>
                        <th scope="col">Date Sent</th>
                        <th scope="col">Arrival Date</th>
                        <th scope="col">Process</th>
                        {{-- <th scope="col">ID</th> --}}

                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($track as $track)
                        <tr>
                            <th scope="row">{{ $number++ }}</th>
                            <td>{{ $track->tracking }}</td>
                            {{-- <td>{{ $track->otp }}</td> --}}
                            <td>{{ $track->r_fname }} {{ $track->r_lname }}</td>
                            <td>{{ $track->s_fname }} {{ $track->s_lname }}</td>
                            <td>{{ $track->date_sent }}</td>
                            <td>{{ $track->arrival_date }}</td>
                            <td>{{ $track->progress }}</td>

                            <td>
                                <a href="/trackings/{{ $track->id }}/edit">
                                    <button type="button" class="btn btn-primary my_btn">EDIT INFO</button>
                                </a>
                            </td>
                            <td>
                                {{ Form::open(['url' => 'trackings/' . $track->id, 'class' => 'pull-right']) }}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Delete', ['class' => 'btn btn-danger my_btn']) }}
                                {{ Form::close() }}
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

@endsection
