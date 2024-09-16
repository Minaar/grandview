
@extends('layouts.app')

@section('content')
    <!-- Contact Us -->
    <div id="contact-us" class="section">
        <div class="app-wrapper">
            <div class="contact-header">
                <div class="row contact-us ml-0 mr-0">
                    <div class="col s12 m12 l12 form-header">
                        <h6 class="form-header-text"><i class="material-icons"> mail_outline </i> Add Reservation</h6>
                    </div>
                </div>
            </div>

            <!-- Contact Sidenav -->
           
            <div id="sidebar-list" class="row contact-sidenav ml-0 mr-0">
                
                <div class="col s12 m12 l12 contact-form margin-top-contact">
                    
                    <div class="row">
                        <form class="col s12 l12">
                            <div class="row">
                                <div class="input-field col m6 s12 l2">
                                    <input id="name" type="text" class="validate">
                                    <label for="name">Title</label>
                                </div>
                                <div class="input-field col m6 s12 l6 offset-l4">
                                    <input id="name" type="text" class="validate">
                                    <label for="name">Confirmation No</label>
                                </div>
                                <div class="input-field col m6 s12 l6">
                                    <input id="email" type="text" class="validate">
                                    <label for="email">Last Name</label>
                                </div>
                                <div class="input-field col m6 s12 l6">
                                    <select class="">
                                        <option value="bkash">Bkash</option>
                                        <option value="card">card</option>
                                        <option value="cash">Cash</option>
                                    </select>
                                </div>
                                <div class="input-field col m6 s12 l6">
                                    <input id="email" type="text" class="validate">
                                    <label for="email">First Name</label>
                                </div>
                                <div class="input-field col m6 s12 l6">
                                    <input id="pnid" type="text" class="validate">
                                    <label for="pnid">Passport/NID No</label>
                                </div>
                                <div class="input-field col m6 s12 l3">
                                 <input type="text" class="assign-date datepicker" placeholder="Pick A date" value="14/11/2019">
                                    <label for="email">Arrival</label>
                                </div>
                                <div class="input-field col m6 s12 l3">
                                    <input type="text" class="timepicker">
                                    <label for="email">Arrival</label>
                                </div>
                                <div class="input-field col m6 s12 l6">
                                    <input type="text" class="assign-date datepicker" placeholder="Pick A date" value="14/11/2019">
                                       <label for="email">Date of Birth</label>
                                   </div>
                                <div class="input-field col m6 s12 l3">
                                 <input type="text" class="assign-date datepicker" placeholder="Pick A date" value="14/11/2019">
                                    <label for="email">Depurture</label>
                                </div>
                                <div class="input-field col m6 s12 l3">
                                    <input type="text" class="timepicker">
                                    <label for="email">Depurture</label>
                                </div>
                                <div class="input-field col m6 s12 l6">
                                    <input id="pnid" type="text" class="validate">
                                       <label for="email">Company Name</label>
                                   </div>
                                <div class="input-field col m6 s12 l6">
                                    <input id="email" type="text" class="validate">
                                    <label for="email">Country</label>
                                </div>
                                <div class="input-field col m6 s12 l6">
                                    <input id="pnid" type="email" class="validate">
                                    <label for="email">email</label>
                                </div>
                                <div class="input-field col m6 s12 l6">
                                    <input id="email" type="text" class="validate">
                                    <label for="email">Contact Person</label>
                                </div>
                                <div class="input-field col m6 s12 l2">
                                    <input id="email" type="text" class="validate">
                                    <label for="email">Room No</label>
                                </div>
                                <div class="input-field col m6 s12 l2">
                                    <input id="email" type="text" class="validate">
                                    <label for="noofroom">No of Room</label>
                                </div>
                                <div class="input-field col m6 s12 l2">
                                    <input id="email" type="text" class="validate">
                                    <label for="discount">Discount %</label>
                                </div>
                                <div class="input-field col m6 s12 l2">
                                    <input id="email" type="text" class="validate">
                                    <label for="email">Adult</label>
                                </div>
                                <div class="input-field col m6 s12 l2">
                                    <input id="email" type="text" class="validate">
                                    <label for="email">Adult</label>
                                </div>
                                <div class="input-field col m6 s12 l2">
                                    <input id="email" type="text" class="validate">
                                    <label for="email">Adult</label>
                                </div>
                                <div class="input-field col m6 s12 l12">
                                    <input id="email" type="text" class="validate">
                                    <label for="email">Remarks</label>
                                </div>
                                <div class="input-field col m6 s12 l3">
                                    <input id="pnid" type="text" class="validate">
                                       <label for="email">Room Type</label>
                                   </div>
                                   <div class="input-field col m6 s12 l3">
                                       <input id="pnid" type="text" class="validate">
                                       <label for="email">Rent</label>
                                   </div>
                                   <div class="input-field col m6 s12 l3">
                                       <input id="email" type="text" class="validate">
                                       <label for="email">Ser</label>
                                   </div>
                                   <div class="input-field col m6 s12 l3">
                                       <input id="email" type="text" class="validate">
                                       <label for="email">Vat</label>
                                   </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
              
            </div>
        </div>
    </div>


    
@endsection