@extends('layouts/show')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">Tracking</li>
    </ol>

    <div class="container">
        <div class="row my_row">
            <div class="col-md-3 dash top">
                <img src="images/checked-checkbox-48.png" alt="" srcset="">
            </div>
            <div class="col-md-5 dash top">
                <h4>Waybill:</h4>
                @foreach ($track as $track)

                    <h5 style="color: rgb(190, 38, 38)">SIgned for by: {{ $track->r_fname }} {{ $track->r_lname }}
                        <span></span>
                    </h5>
            </div>
            <div class="col-md-4 dash top">
                <p>Date Sent: <span style="color: rgb(190, 38, 38)"> {{ $track->date_sent }}</span> </p>
                <p>Origin Service Area: <span style="color: rgb(190, 38, 38)"> {{ $track->s_country }}</span></p>
                <p>Destination Service Area: <span style="color: rgb(190, 38, 38)"> {{ $track->r_country }}</span></p>


                @endforeach

            </div>

        </div>

        <div class="row">
            <div class="col-md-12 col-lg-8 dash bod">
                <div>
                    <h2 class="deposit">Packages</h2>
                </div>
                <div class="table-responsive">
                    <table class="table table-light " style="width: auto;">
                        <thead style="background-color: #889799;">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Item</th>
                                <th scope="col">Serial</th>
                                <th scope="col">Quatity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Total</th>
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

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 dash bod">
                <div class="card">
                    <div class="card-header">{{ __('Progress') }}</div>
                    <div class="card-body bod">
                        @foreach ($track2 as $track2)
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                    aria-valuenow="{{ $track2->progress }}" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 100%">{{ $track2->progress }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
