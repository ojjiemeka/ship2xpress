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
            <h2 class="deposit">Packages</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-dark " style="
    width: auto;
    ">
                <thead style="background-color: #10363c;">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Item</th>
                        <th scope="col">Serial</th>
                        <th scope="col">Quatity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Total</th>
                        {{-- <th scope="col">ID</th> --}}
                        <th scope="col">Reciever Name</th>
                        <th scope="col">Sender Name</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($package as $package)
                        <tr>
                            <th scope="row">{{ $number++ }}</th>
                            <td>{{ $package->item }}</td>
                            <td>{{ $package->serial }}</td>
                            <td>{{ $package->quantity }}</td>
                            <td>{{ $package->price }}</td>
                            <td>{{ $package->total }}</td>
                            {{-- <td>{{$package->client_id}}</td> --}}
                            <td>{{ $package->r_fname }} {{ $package->r_lname }}</td>
                            <td>{{ $package->s_fname }} {{ $package->s_lname }}</td>
                            <td>
                                <a href="/packages/{{ $package->id }}/edit">
                                    <button type="button" class="btn btn-primary my_btn">EDIT INFO</button>
                                </a>
                            </td>
                            <td>
                                {{ Form::open(['url' => 'packages/' . $package->id, 'class' => 'pull-right']) }}
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
