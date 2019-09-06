@extends('layouts.app')

@section('content')


<div class="main">

    <div class="container">
        <div class="booking-content">
            <div class="booking-image">
                <img class="booking-img" src="img/registerIMG/form-img.jpg" alt="Booking Image">
            </div>
            <div class="booking-form">
            <form action="{{route('post.store')}}" method="POST" id="booking-form" class="forma"  >
                    <h2 style="margin-top: -28%;">Register Yourself for International homeopathy Clinic</h2>
                    <div class="form-group form-input">
                        {{ csrf_field() }}
                        <input class ="inputa" type="text" name="Name" id="Name" value="" required/>
                        <label for="Name" class="form-label">Your Full Name</label>
                    </div>

                     <div class="form-radio">
                        <label class="label-radio"> Select Your Gender</label>
                        <div class="radio-item-list">
                            <span class="radio-item">
                                <input type="radio" class ="inputa" name="Gender" value="male" id="male" />
                                <label for="male">Male</label>
                            </span>
                            <span class="radio-item active">
                                <input type="radio" class ="inputa" name="Gender" value="female" id="female" checked="checked" />
                                <label for="female">Female</label>
                            </span>
                        </div>
                    </div>

                     <div class="form-group form-input">
                        <input class ="inputa" type="date" name="dob" id="dob" value="" placeholder="" required />
                        <label for="dob" class="form-label">Birth Date</label>
                    </div>



                     <div class="form-group form-input">
                        <input class ="inputa" type="text" name="Nic" id="Nic" value="" required />
                        <label for="Nic" class="form-label">NIC</label>
                    </div>
                    <div class="form-group form-input">
                        <input type="text" class ="inputa" name="Address1" id="Address1" value="" required />
                        <label for="Address1" class="form-label">Address Line 1</label>
                    </div>

                    <div class="form-group form-input">
                        <input type="text" class ="inputa"  name="Address2" id="Address2" value="" required />
                        <label for="Address2" class="form-label">Address Line 2</label>
                    </div>

                    <div class="form-group form-input">
                        <input type="text" class ="inputa" name="City" id="City" value="" required />
                        <label for="City" class="form-label">City</label>
                    </div>

                    <div class="form-group form-input">
                        <input type="number" class ="inputa" name="phone-number" id="phone-number " value="" required />
                        <label for="phone-number" class="form-label">Phone Number</label>
                    </div>

                    <div class="form-group form-input">
                        <input type="email" class ="inputa" name="Email" id="Email " value="" required />
                        <label for="Email" class="form-label">Email</label>
                    </div>

                    <div class="form-group form-input">
                        <input type="text" class ="inputa" name="Username" id="Username" value="" required />
                        <label for="Username" class="form-label">Username</label>
                    </div>

                    <div class="form-group form-input">
                        <input type="text" class ="inputa" name="Password" id="Password" value="" required />
                        <label for="Password" class="form-label">Password</label>
                    </div>


                   

                 <!-- <div class="form-group">
                        <div class="select-list">
                            <select name="time" id="time" required>
                                <option value="">Time</option>
                                <option value="6pm">6:00 PM</option>
                                <option value="7pm">7:00 PM</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="select-list">
                            <select name="food" id="food" required>
                                <option value="">Food</option>
                                <option value="seasonalfish">Seasonal steamed fish</option>
                                <option value="assortedmushrooms">Assorted mushrooms</option>
                            </select>
                        </div>
                    </div>-->
              

                    <div class="form-submit">
                        <input type="submit" value="Register Now" class="submit" id="submit" name="submit" />
                        <a href="#" class="vertify-booking">Already a member? click to login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>




@endsection