@extends('layouts/app')

@section('content')

    {{-- FORM --}}

    <div class="card my_card" style="margin-top: 3em;">
        <div class="card-header">{{ __('Insert Details') }}</div>

        <div class="card-body">

            <form class="row g-3" action="{{ route('clients.update', $client->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="col-12">
                    <h3 style="text-align: center">Sender's Info</h3>
                </div>

                <div class="col-6">
                    <label for="inputAddress" class="form-label">Firstname</label>
                    <input type="text" class="form-control" name="r_fname" id="inputAddress" value="{{ $client->r_fname }}">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Lastname</label>
                    <input type="text" class="form-control" name="r_lname" id="inputAddress" value="{{ $client->r_lname }}">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="r_phone" id="inputAddress" value="{{ $client->r_phone }}">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" name="r_email" id="inputEmail4" value="{{ $client->r_email }}">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" name="r_address" id="inputAddress"
                        value="{{ $client->r_address }}">
                </div>
                <div class="col-md-2">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" name="r_city" id="inputCity" value="{{ $client->r_city }}">
                </div>
                <div class="col-md-2">
                    <label for="inputState" class="form-label">State</label>
                    <input type="text" class="form-control" name="r_state" id="inputCity" value="{{ $client->r_state }}">
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" name="r_zip" id="inputZip" value="{{ $client->r_zip }}">
                </div>
                <div class="col-md-2 country">
                    <label for="inputZip" class="form-label">Country</label>
                    <select id="inputState" name="r_country" class="form-select">
                        <option selected>{{ $client->r_country }}</option>
                        @foreach ($data as $country)
                            <option value="{{ $country['name'] }}">{{ $country['name'] }}</option>
                        @endforeach
                    </select>
                </div>

                <br><br>
                <div class="col-12">
                    <h3 style="text-align: center;margin-top: 2em;">Reciever's Info</h3>
                </div>

                <div class="col-6">
                    <label for="inputAddress" class="form-label">Firstname</label>
                    <input type="text" class="form-control" name="s_fname" id="inputAddress"
                        value="{{ $client->s_fname }}">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Lastname</label>
                    <input type="text" class="form-control" name="s_lname" id="inputAddress"
                        value="{{ $client->s_lname }}">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="inputAddress" name="s_phone"
                        value="{{ $client->s_phone }}">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="s_email"
                        value="{{ $client->s_email }}">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" name="s_address"
                        value="{{ $client->s_address }}">
                </div>
                <div class="col-md-2">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" name="s_city" id="inputCity" value="{{ $client->s_city }}">
                </div>
                <div class="col-md-2">
                    <label for="inputState" class="form-label">State</label>
                    <input type="text" class="form-control" name="s_state" id="inputCity" value="{{ $client->s_state }}">
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" name="s_zip" id="inputZip" value="{{ $client->s_zip }}">
                </div>
                <div class="col-md-2 country">
                    <label for="inputZip" class="form-label">Country</label>
                    <select id="inputState" name="s_country" class="form-select">
                        <option selected>{{ $client->s_country }}</option>
                        @foreach ($data as $country)
                            <option value="{{ $country['name'] }}">{{ $country['name'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12">
                    <h3 style="text-align: center;margin-top: 2em;">Tracking</h3>
                </div>


                <div class="col-md-6">
                    <label for="inputState" class="form-label">Tracking Number</label>
                    <input type="text" class="form-control" name="tracking" id="inputCity" value="{{ $client->tracking }}">
                </div>
                {{-- <div class="col-md-6">
                    <label for="inputState" class="form-label">OTP</label>
                    <input type="text" class="form-control" name="otp" id="inputCity" value="{{ $client->otp }}">
                </div> --}}




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
