@extends('layouts/app')


@section('content')


    {{-- FORM --}}

    <div class="card my_card" style="margin-top: 3em;">
        <div class="card-header">{{ __('Insert Details') }}</div>

        <div class="card-body">

            <form class="row g-3" action="{{ route('packages.update', $data->id) }}" method="POST">
                @method('PUT')

                @csrf
                <div class="col-12">
                    <h3 style="text-align: center">Package Info</h3>
                </div>

                <div class="col-6">
                    <label for="inputAddress" class="form-label">Item</label>
                    <input type="text" class="form-control" name="item" id="inputAddress" value="{{ $data->item }}">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Serial</label>
                    <input type="text" class="form-control" name="serial" id="inputAddress" value="{{ $data->serial }}">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Quantity</label>
                    <input type="number" class="form-control" name="quantity" id="inputAddress"
                        value="{{ $data->quantity }}">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Price</label>
                    <input type="text" class="form-control" name="price" value="{{ $data->price }}">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Total</label>
                    <input type="text" class="form-control" name="total" id="inputAddress" value="{{ $data->total }}">
                </div>

                <div class="col-2 country">
                    <label for="inputAddress" class="form-label">Client ID</label>
                    <input type="text" class="form-control" name="client_id" id="inputAddress" readonly
                        value="{{ $data->client_id }}">

                </div>

                <div class="col-12 submit">
                    <button type="submit" class="btn btn-primary">EDIT</button>
                </div>
            </form>

        </div>
    </div>
    </div>


    {{-- END FORM --}}

    </div>
    </div>
@endsection
