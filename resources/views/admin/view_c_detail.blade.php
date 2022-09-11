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
                            <button type="button" class="btn btn-primary">View Client Info</button>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="/view_tracking_detail">
                            <button type="button" class="btn btn-primary">Tracking</button>
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

    <div class="col-md-8 dash bod">
        <div>
            <h2 class="deposit">Client List</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-dark " style="
    width: auto;
    ">
                <thead style="background-color: #10363c;">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Reciever Firstname</th>
                        <th scope="col">Reciever Lasttname</th>
                        <th scope="col">Reciever Email</th>
                        <th scope="col">Reciever Phone</th>
                        <th scope="col">Reciever Address</th>
                        <th scope="col">Reciever City</th>
                        <th scope="col">Reciever State</th>
                        <th scope="col">Reciever Country</th>
                        <th scope="col">Reciever Zip</th>
                        <th scope="col">Sender Firstname</th>
                        <th scope="col">Sender Lasttname</th>
                        <th scope="col">Sender Email</th>
                        <th scope="col">Sender Phone</th>
                        <th scope="col">Sender Address</th>
                        <th scope="col">Sender City</th>
                        <th scope="col">Sender State</th>
                        <th scope="col">Sender Country</th>
                        <th scope="col">Sender Zip</th>
                        <th scope="col">Tracking</th>
                        {{-- <th scope="col">OTP</th> --}}
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($client as $client)
                        <tr>
                            <th scope="row">{{ $number++ }}</th>
                            <td>{{ $client->r_fname }}</td>
                            <td>{{ $client->r_lname }}</td>
                            <td>{{ $client->r_email }}</td>
                            <td>{{ $client->r_phone }}</td>
                            <td>{{ $client->r_address }}</td>
                            <td>{{ $client->r_city }}</td>
                            <td>{{ $client->r_state }}</td>
                            <td>{{ $client->r_country }}</td>
                            <td>{{ $client->r_zip }}</td>
                            <td>{{ $client->s_fname }}</td>
                            <td>{{ $client->s_lname }}</td>
                            <td>{{ $client->s_email }}</td>
                            <td>{{ $client->s_phone }}</td>
                            <td>{{ $client->s_address }}</td>
                            <td>{{ $client->s_city }}</td>
                            <td>{{ $client->s_state }}</td>
                            <td>{{ $client->s_country }}</td>
                            <td>{{ $client->s_zip }}</td>
                            <td>{{ $client->tracking }}</td>
                            {{-- <td>{{ $client->otp }}</td> --}}
                            <td>
                                <a href="/clients/{{ $client->id }}/edit">
                                    <button type="button" class="btn btn-primary my_btn">EDIT INFO</button>
                                </a>
                            </td>
                            <td>
                                {{ Form::open(['url' => 'clients/' . $client->id, 'class' => 'pull-right']) }}
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
