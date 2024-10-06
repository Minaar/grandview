
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
                        <form action="{{ route('rooms.store') }}" method="POST" class="col s12">
                            @csrf
                            <div class="row">
                                <div class="input-field col m6 s12">
                                    <select class="" name="type_id" id="type_id" required>
                                        <option value="">Select Type</option>
                                        @foreach ($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                    <label for="type_id">Room Type</label>
                                </div>
                                <div class="input-field col m6 s12">
                                    <input id="room_number" name="room_number" type="text" class="validate" required>
                                    <label for="room_number">Room No</label>
                                </div>

                                <div class="input-field col m6 s12">
                                    <select class="" name="has_ac" id="has_ac" required>
                                        <option value="">Select Air Condition</option>
                                            <option value="true"> Yes </option>
                                            <option value="false"> No </option>
                                        </select>
                                    <label for="has_ac">Air Condition</label>
                                </div>

                                <div class="input-field col m6 s12">
                                    <input id="total_bed" name="total_bed" type="number" class="validate" required>
                                    <label for="total_bed">No of Bed</label>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="input-field col m6 s12">
                                    <input id="price" name="price" type="number" class="validate" required>
                                    <label for="price">Price</label>
                                </div>
                                <div class="input-field col m6 s12">
                                    <input id="floor" name="floor" type="text" class="validate" required>
                                    <label for="floor">Floor</label>
                                </div>
                                <div class="input-field col s12 width-100">
                                    <textarea id="remark" name="remark" class="materialize-textarea"></textarea>
                                    <label for="remark">Remarks (Optional)</label>
                                    <button type="submit" class="waves-effect waves-light btn">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection