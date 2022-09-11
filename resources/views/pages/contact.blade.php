@extends('layouts/main')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
    </ol>
    <!-- //breadcrumb -->
    <!-- /Contact-->
    <section class="banner-bottom-w3ls py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3layouts py-lg-5 py-3">
                <h3 class="tittle text-center mb-md-5 mb-4">Contact Us</h3>
                <div class="address row">

                    <div class="col-lg-4 address-grid">
                        <div class="row address-info">
                            <div class="col-md-3 address-left text-center">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="col-md-9 address-right text-left">
                                <h6>Address</h6>
                                <p>Carrer de Portugalete, 19, 08014 Barcelona, Spain</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 address-grid">
                        <div class="row address-info">
                            <div class="col-md-3 address-left text-center">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="col-md-9 address-right text-left">
                                <h6>Email</h6>
                                <p><a href="mailto:support@serviunocourier.com">info@unitedcargoservice.com</a>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 address-grid">
                        <div class="row address-info">
                            <div class="col-md-3 address-left text-center">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="col-md-9 address-right text-left">
                                <h6>Phone</h6>
                                <p>+1 407 848 2652</p>
                                <p>+ 9332565454</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="contact_grid_right">
                    <form action="#" method="post">
                        <div class="row contact_left_grid">
                            <div class="col-md-6 con-left">
                                <div class="form-group">
                                    <label class="my-2">Name</label>
                                    <input class="form-control" type="text" name="Name" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="Email" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label class="my-2">Subject</label>
                                    <input class="form-control" type="text" name="Subject" placeholder="" required="">
                                </div>
                            </div>
                            <div class="col-md-6 con-right-w3ls">
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea id="textarea" placeholder="" required=""></textarea>
                                </div>
                                <input class="form-control" type="submit" value="Submit">

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- //Contact -->
    <div class="contact-map">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3443.828271221999!2d-81.41979161145262!3d30.327402155144384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e449503f8dc341%3A0x8c17dd9789fcfa60!2sAll%20Star%20Automotive%20Services!5e0!3m2!1sen!2sng!4v1616620953995!5m2!1sen!2sng"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

@endsection
