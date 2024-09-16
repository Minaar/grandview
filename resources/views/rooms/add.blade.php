
@extends('layouts.app')

@section('content')
    <!-- Contact Us -->
    <div id="contact-us" class="section">
        <div class="app-wrapper">
            <div class="contact-header">
                <div class="row contact-us ml-0 mr-0">
                    <div class="col s12 m12 l8 form-header">
                        <h6 class="form-header-text"><i class="material-icons"> mail_outline </i> Add Room</h6>
                    </div>
                </div>
            </div>

            <!-- Contact Sidenav -->
            <div id="sidebar-list" class="row contact-sidenav ml-0 mr-0">
                <div class="col s12 m12 l8 contact-form margin-top-contact">
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col m6 s12">
                                    <input id="name" type="text" class="validate">
                                    <label for="name">Room Type</label>
                                </div>
                                <div class="input-field col m6 s12">
                                    <input id="email" type="text" class="validate">
                                    <label for="email">Room No</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col m6 s12">
                                    <input id="company" type="text" class="validate">
                                    <label for="company">Price</label>
                                </div>
                                <div class="input-field col m6 s12">
                                    <input id="budget" type="text" class="validate">
                                    <label for="budget">Floor</label>
                                </div>
                                <div class="input-field col s12 width-100">
                                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                                    <label for="textarea1">Remarks</label>
                                    <a class="waves-effect waves-light btn">Add</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection