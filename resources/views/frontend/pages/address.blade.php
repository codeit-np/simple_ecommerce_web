@extends('frontend.dashboard')
@section('content')
    <div class="container">
        <h5>Address</h5>
        <div class="row">
            <div class="col-md-12">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="getLocation();">
                    Add New Address
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-body">
                                <form action="" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="address_title">Address Title *</label>
                                                <input id="address_title" class="form-control" type="text" name="address_title" placeholder="eg.Home">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Full Name *</label>
                                                <input id="name" class="form-control" type="text" name="name" placeholder="eg.Sajal Shrestha">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="city">City *</label>
                                                <input id="city" class="form-control" type="text" name="city" placeholder="eg.Dharan">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="street">Street *</label>
                                                <input id="street" class="form-control" type="text" name="street" placeholder="eg.Purano Bazar">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mobile">Mobile *</label>
                                                <input id="mobile" class="form-control" type="text" name="mobile" placeholder="eg.984xxxxxxx">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email *</label>
                                                <input id="email" class="form-control" type="text" name="email" placeholder="eg.example@yourdomain.com">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lat">Lat *</label>
                                                <input id="lat" class="form-control" type="text" name="lat" >
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lng">Lng *</label>
                                                <input id="lng" class="form-control" type="text" name="lng" >
                                            </div>
                                        </div>

                                        <div class="col-md-12 my-2">

                                            <div id="map"></div>
                                        </div>
                                    </div>
                                </form>


                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
