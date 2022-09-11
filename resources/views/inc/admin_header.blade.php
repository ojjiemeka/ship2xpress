<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body bod">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} --}}
                    <div class="row g-3">
                        <div class="col-md-3">
                            <a href="/add_c_details">
                                <button type="button" class="btn btn-primary">Add Client Detail</button>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="/add_p_details">
                                <button type="button" class="btn btn-success">Add Package Info</button>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="/view_detail">
                                <button type="button" class="btn btn-warning">Edit & View All Info</button>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="/add_tracking">
                                <button type="button" class="btn btn-danger">Tracking & OTP</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
