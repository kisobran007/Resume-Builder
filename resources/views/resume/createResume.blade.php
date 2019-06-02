@extends('layouts.main')
@section('content')
    <form class="add-resume-form">
        <h3 class="form-section-heading">Personal Details </h3>

            <div class="form-group row">
                <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-8">
                    <input type="text" id="first_name" placeholder="First Name">
                </div>
            </div>

            <div class="form-group row">
                <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-8">
                    <input type="text" id="last_name" placeholder="Last Name">
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email Address</label>
                <div class="col-sm-8">
                    <input type="email" id="email" placeholder="Example: test@test.com">
                </div>
            </div>

            <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-8">
                    <textarea cols="30" rows="6" id="address" placeholder="Address"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="postal" class="col-sm-2 col-form-label">Postal Code</label>
                <div class="col-sm-8">
                    <input type="text" id="email" placeholder="Postal">
                </div>
            </div>

            <div class="form-group row">
                <label for="phone" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-8">
                    <input type="text" id="phone" placeholder="Phone Number">
                </div>
            </div>

            <div class="form-group row">
                <label for="mobile" class="col-sm-2 col-form-label">Mobile number</label>
                <div class="col-sm-8">
                    <input type="text" id="mobile" placeholder="Mobile number">
                </div>
            </div>

        <h3 class="form-section-heading">Personal Profile</h3>

            <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Personal Statement</label>
                <div class="col-sm-8">
                    <textarea cols="30" rows="6" id="personal_statement" placeholder="Personal Statement"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="skill_1" class="col-sm-2 col-form-label">Skills</label>
                <div class="col-sm-4 col-xs-5">
                    <input type="text" id="skill_1">
                </div>
                <div class="col-sm-4 col-xs-5">
                    <input type="text" id="skill_2">
                </div>
            </div>

            <div class="form-group row">
                <label for="skill_3" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-4 col-sm-offset-2 col-xs-5">
                    <input type="text" id="skill_3">
                </div>
                <div class="col-sm-4 col-xs-5">
                    <input type="text" id="skill_4">
                </div>
            </div>

            <div class="form-group row">
                <label for="skill_5" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-4 col-sm-offset-2 col-xs-5">
                    <input type="text" id="skill_5">
                </div>
                <div class="col-sm-4 col-xs-5">
                    <input type="text" id="skill_6">
                </div>
            </div>

        <h3 class="form-section-heading">Education</h3>
            <div class="form-group row">
                <label for="college_name" class="col-sm-2 col-form-label">School / College Name</label>
                <div class="col-sm-8">
                    <input type="text" id="college_name" placeholder="School / College Name">
                </div>
            </div>

            <div class="form-group row">
                <label for="city" class="col-sm-2 col-form-label">City</label>
                <div class="col-sm-8">
                    <input type="text" id="city" placeholder="City">
                </div>
            </div>

            <div class="form-group row">
                <label for="start_date" class="col-sm-2 col-form-label">Start Date</label>
                <div class="col-sm-8">
                    <input type="text" id="start_date" placeholder="Start Date">
                </div>
            </div>

            <div class="form-group row">
                <label for="start_date" class="col-sm-2 col-form-label">End Date</label>
                <div class="col-sm-8">
                    <input type="text" id="start_date" placeholder="End Date">
                </div>
            </div>

        <h3 class="form-section-heading">Work Experience</h3>
            <div class="form-group row">
                <label for="job_title" class="col-sm-2 col-form-label">Job Title</label>
                <div class="col-sm-8">
                    <input type="text" id="job_title" placeholder="Job Title">
                </div>
            </div>

            <div class="form-group row">
                <label for="company_name" class="col-sm-2 col-form-label">Company Name</label>
                <div class="col-sm-8">
                    <input type="text" id="company_name" placeholder="Company Name">
                </div>
            </div>

            <div class="form-group row">
                <label for="company_city" class="col-sm-2 col-form-label">City</label>
                <div class="col-sm-8">
                    <input type="text" id="company_city" placeholder="City">
                </div>
            </div>

            <div class="form-group row">
                <label for="work_start_date" class="col-sm-2 col-form-label">Start Date</label>
                <div class="col-sm-8">
                    <input type="text" id="work_start_date" placeholder="Start Date">
                </div>
            </div>

            <div class="form-group row">
                <label for="work_end_date" class="col-sm-2 col-form-label">End Date</label>
                <div class="col-sm-8">
                    <input type="text" id="work_end_date" placeholder="End Date">
                </div>
            </div>
    </form>
@endsection