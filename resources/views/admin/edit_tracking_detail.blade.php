@extends('layouts/app')


@section('content')



    {{-- FORM --}}

    <div class="card my_card" style="margin-top: 3em;">
        <div class="card-header">{{ __('Insert Details') }}</div>

        <div class="card-body">

            <form class="row g-3" action="{{ route('trackings.update', $track->id) }}" method="POST">
                @method('PUT')
                @csrf

                <div class="col-12">
                    <h3 style="text-align: center">Tracking Info</h3>
                </div>

                <div class="col-6">
                    <label for="inputAddress" class="form-label">Date Sent</label>
                    <input type="date" class="form-control" name="date_sent" id="inputAddress"
                        value="{{ $track->date_sent }}">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Arrival Date</label>
                    <input type="date" class="form-control" name="arrival_date" id="inputAddress"
                        value="{{ $track->arrival_date }}">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Progress</label>
                    <input type="number" class="form-control" name="progress" id="inputAddress"
                        value="{{ $track->progress }}">
                </div>

                <div class="col-12 submit">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>
    </div>


    {{-- END FORM --}}

    </div>
    </div>
@endsection
