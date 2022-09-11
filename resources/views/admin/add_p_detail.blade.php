@extends('layouts/app')


@section('content')


    {{-- FORM --}}

    <div class="card my_card" style="margin-top: 3em;">
        <div class="card-header">{{ __('Insert Details') }}</div>

        <div class="card-body">

            <form class="row g-3" action="{{ route('packages.store') }}" method="POST">
                @csrf
                <div class="col-12">
                    <h3 style="text-align: center">Package Info</h3>
                </div>

                <div class="col-6">
                    <label for="inputAddress" class="form-label">Item</label>
                    <input type="text" class="form-control" name="item" id="inputAddress" placeholder="Enter Item Name">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Serial</label>
                    <input type="text" class="form-control" name="serial" id="inputAddress"
                        placeholder="Enter Serial Number">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Quantity</label>
                    <input type="number" class="form-control" name="quantity" id="inputAddress">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Price</label>
                    <input type="text" class="form-control" name="price">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Total</label>
                    <input type="text" class="form-control" name="total" id="inputAddress">
                </div>

                <div class="col-md-12 country">
                    <label for="inputZip" class="form-label">Select Client</label>
                    <select id="inputState" name="client_id" class="form-select">
                        <option selected>Choose...</option>
                        @foreach ($client as $client)
                            <option value="{{ $client->id }}">{{ $client->r_fname . ' ' . $client->r_lname }}</option>
                        @endforeach
                    </select>
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
