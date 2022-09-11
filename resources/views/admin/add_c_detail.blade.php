@extends('layouts/app')

@section('content')

@section('content')


    {{-- FORM --}}

    <div class="card my_card" style="margin-top: 3em;">
        <div class="card-header">{{ __('Insert Details') }}</div>

        <div class="card-body">

            <form class="row g-3" action="{{ route('clients.store') }}" method="POST">
                @csrf
                <div class="col-12">
                    <h3 style="text-align: center">Sender's Info</h3>
                </div>

                <div class="col-6">
                    <label for="inputAddress" class="form-label">Firstname</label>
                    <input type="text" class="form-control" name="r_fname" id="inputAddress" placeholder="Enter Firstname">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Lastname</label>
                    <input type="text" class="form-control" name="r_lname" id="inputAddress" placeholder="Enter Lastname">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="r_phone" id="inputAddress"
                        placeholder="Enter Phone Number">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" name="r_email" id="inputEmail4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" name="r_address" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-md-2">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" name="r_city" id="inputCity">
                </div>
                <div class="col-md-2">
                    <label for="inputState" class="form-label">State</label>
                    <input type="text" class="form-control" name="r_state" id="inputCity">
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" name="r_zip" id="inputZip">
                </div>
                <div class="col-md-2 country">
                    <label for="inputZip" class="form-label">Country</label>
                    <select id="inputState" name="r_country" class="form-select">
                        <option selected>Choose...</option>
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
                    <input type="text" class="form-control" name="s_fname" id="inputAddress" placeholder="Enter Firstname">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Lastname</label>
                    <input type="text" class="form-control" name="s_lname" id="inputAddress" placeholder="Enter Lastname">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="inputAddress" name="s_phone"
                        placeholder="Enter Phone Number">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="s_email">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" name="s_address" placeholder="1234 Main St">
                </div>
                <div class="col-md-2">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" name="s_city" id="inputCity">
                </div>
                <div class="col-md-2">
                    <label for="inputState" class="form-label">State</label>
                    <input type="text" class="form-control" name="s_state" id="inputCity">
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" name="s_zip" id="inputZip">
                </div>
                <div class="col-md-2 country">
                    <label for="inputZip" class="form-label">Country</label>
                    <select id="inputState" name="s_country" class="form-select">
                        <option selected>Choose...</option>
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
                    <input type="text" class="form-control" name="tracking" id="inputCity">
                </div>
                {{-- <div class="col-md-6">
                    <label for="inputState" class="form-label">OTP</label>
                    <input type="text" class="form-control" name="otp" id="inputCity">
                </div> --}}




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
