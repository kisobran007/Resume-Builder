@extends('layouts.main')
@section('content')
    <form id="create_resume_form" method="post" action="{{ route('createResumePost') }}" class="add-resume-form" >
        {{ csrf_field() }}

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h3 class="form-section-heading">Personal Details </h3>

            <div class="form-group row">
                <label for="job_applied_for" class="col-sm-2 col-form-label">Job Title</label>
                <div class="col-sm-8">
                    <input type="text" name="job_applied_for" placeholder="Marketing Manager" id="job_applied_for" value="{{ old('job_applied_for') }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-8">
                    <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-8">
                    <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email Address</label>
                <div class="col-sm-8">
                    <input type="email" name="email" id="email" value="{{ old('email') }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-8">
                    <textarea cols="30" rows="6" name="address" id="address" value="{{ old('address') }}"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="postal" class="col-sm-2 col-form-label">Postal Code</label>
                <div class="col-sm-8">
                    <input type="text" name="postal" id="postal" value="{{ old('postal') }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="phone" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-8">
                    <input type="text" name="phone" id="phone" value="{{ old('phone') }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="mobile" class="col-sm-2 col-form-label">Mobile number</label>
                <div class="col-sm-8">
                    <input type="text" name="mobile" id="mobile" value="{{ old('mobile') }}">
                </div>
            </div>

        <h3 class="form-section-heading">Personal Profile</h3>

            <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Personal Statement</label>
                <div class="col-sm-8">
                    <textarea cols="30" rows="6" name="personal_statement" id="personal_statement" value="{{ old('personal_statement') }}"></textarea>
                </div>
            </div>
        @if(old('key_skills'))
            @foreach(old('key_skills') as $skill)
                <div class="skills_wrapper">
                    <div class="form-group row">
                        <label for="key_skills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-8">
                            <input type="text" name="key_skills[]" id="key_skills" value="{{ old('key_skills')[$loop->index] }}">
                        </div>
                        @if ($loop->index > 0)
                            <a href="javascript:void(0);" class="remove_button_skill">
                                <i class="glyphicon glyphicon-plus">Remove</i>
                            </a>
                        @else
                            <a href="javascript:void(0);" class="add_button_skill">
                                <i class="glyphicon glyphicon-plus">Add More</i>
                            </a>
                        @endif
                    </div>
                </div>
            @endforeach
        @else
            <div class="skills_wrapper">
                <div class="form-group row">
                    <label for="key_skills" class="col-sm-2 col-form-label">Skills</label>
                    <div class="col-sm-8">
                        <input type="text" name="key_skills[]" id="skills">
                    </div>
                    <a href="javascript:void(0);" class="add_button_skill">
                        <i class="glyphicon glyphicon-plus">Add More</i>
                    </a>
                </div>
            </div>
        @endif

            <div class="education_wrapper">
                <h3 class="form-section-heading">Education</h3>
                @if(old('college_name'))
                    @foreach(old('college_name') as $college_section)
                        <div class="education_category">
                            <div class="form-group row">
                                <label for="college_name" class="col-sm-2 col-form-label">School / College Name</label>
                                <div class="col-sm-8">
                                    <input type="text" name="college_name[]" id="college_name" value="{{ old('college_name')[$loop->index] }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="education_city" class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-8">
                                    <input type="text" name="education_city[]" id="education_city" value="{{ old('education_city')[$loop->index] }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="education_start_date" class="col-sm-2 col-form-label">Start Date</label>
                                <div class="col-sm-8">
                                    <input type="text" name="education_start_date[]" id="education_start_date" value="{{ old('education_start_date')[$loop->index] }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="education_end_date" class="col-sm-2 col-form-label">End Date</label>
                                <div class="col-sm-8">
                                    <input type="text" name="education_end_date[]" id="education_end_date" value="{{ old('education_end_date')[$loop->index] }}">
                                </div>
                                @if ($loop->index > 0)
                                    <a href="javascript:void(0);" class="remove_button_education">
                                        <i class="glyphicon glyphicon-plus">Remove</i>
                                    </a>
                                @else
                                    <a href="javascript:void(0);" class="add_button_education">
                                        <i class="glyphicon glyphicon-plus">Add</i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="education_category">
                        <div class="form-group row">
                            <label for="college_name" class="col-sm-2 col-form-label">School / College Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="college_name[]" id="college_name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="education_city" class="col-sm-2 col-form-label">City</label>
                            <div class="col-sm-8">
                                <input type="text" name="education_city[]" id="education_city">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="education_start_date" class="col-sm-2 col-form-label">Start Date</label>
                            <div class="col-sm-8">
                                <input type="text" name="education_start_date[]" id="education_start_date">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="education_end_date" class="col-sm-2 col-form-label">End Date</label>
                            <div class="col-sm-8">
                                <input type="text" name="education_end_date[]" id="education_end_date">
                            </div>
                            <a href="javascript:void(0);" class="add_button_education">
                                <i class="glyphicon glyphicon-plus">Add</i>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        <div class="experience_wrapper">
            <h3 class="form-section-heading">Work Experience</h3>
            @if(old('job_title'))
                @foreach(old('job_title') as $job_title)
                    <div class="form-group row">
                        <label for="job_title" class="col-sm-2 col-form-label">Job Title</label>
                        <div class="col-sm-8">
                            <input type="text" name="job_title[]" id="job_title" value="{{ old('job_title')[$loop->index] }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="company_name" class="col-sm-2 col-form-label">Company Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="company_name[]" id="company_name" value="{{ old('company_name')[$loop->index] }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="company_city" class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-8">
                            <input type="text" id="company_city" name="company_city[]" value="{{ old('company_city')[$loop->index] }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="work_start_date" class="col-sm-2 col-form-label">Start Date</label>
                        <div class="col-sm-8">
                            <input type="text" name="work_start_date[]" id="work_start_date" value="{{ old('work_start_date')[$loop->index] }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="work_end_date" class="col-sm-2 col-form-label">End Date</label>
                        <div class="col-sm-8">
                            <input type="text" name="work_end_date[]" id="work_end_date" value="{{ old('work_end_date')[$loop->index] }}">
                        </div>
                        @if ($loop->index > 0)
                            <a href="javascript:void(0);" class="remove_button_experience">
                                <i class="glyphicon glyphicon-plus">Remove</i>
                            </a>
                        @else
                            <a href="javascript:void(0);" class="add_button_experience">
                                <i class="glyphicon glyphicon-plus">Add</i>
                            </a>
                        @endif
                    </div>
                @endforeach
            @else
            <div class="form-group row">
                <label for="job_title" class="col-sm-2 col-form-label">Job Title</label>
                <div class="col-sm-8">
                    <input type="text" name="job_title[]" id="job_title">
                </div>
            </div>

            <div class="form-group row">
                <label for="company_name" class="col-sm-2 col-form-label">Company Name</label>
                <div class="col-sm-8">
                    <input type="text" name="company_name[]" id="company_name">
                </div>
            </div>

            <div class="form-group row">
                <label for="company_city" class="col-sm-2 col-form-label">City</label>
                <div class="col-sm-8">
                    <input type="text" id="company_city" name="company_city[]">
                </div>
            </div>

            <div class="form-group row">
                <label for="work_start_date" class="col-sm-2 col-form-label">Start Date</label>
                <div class="col-sm-8">
                    <input type="text" name="work_start_date[]" id="work_start_date">
                </div>
            </div>

            <div class="form-group row">
                <label for="work_end_date" class="col-sm-2 col-form-label">End Date</label>
                <div class="col-sm-8">
                    <input type="text" name="work_end_date[]" id="work_end_date">
                </div>
                <a href="javascript:void(0);" class="add_button_experience">
                    <i class="glyphicon glyphicon-plus">Add</i>
                </a>
            </div>
            @endif
        </div>
        <div class="col-lg-12 col-lg-12 text-center">
            <button id="create_resume_btn" type="button" class="btn btn-lg btn-primary" style="margin: 15px 0;">Create Resume</button>
        </div>
    </form>
    <script type="text/javascript">
        jQuery('#create_resume_btn').click(function(){
            jQuery('#create_resume_form').submit();
        });
        jQuery(document).ready(function(){
            addRemoveEducation(10, '.add_button_education', '.education_wrapper', '.remove_button_education');
            addRemoveExperience(10, '.add_button_experience', '.experience_wrapper', '.remove_button_experience');
            addRemoveSkill(10, '.add_button_skill', '.skills_wrapper', '.remove_button_skill');
        });

        function addRemoveSkill(max, add_button_class, wrapper_class, remove_button_class){
            var maxField = max; //Input fields increment limitation
            var addButton = jQuery(add_button_class); //Add button selector
            var wrapper = jQuery(wrapper_class); //Input field wrapper
            var fieldHTML = '<div class="skills_wrapper"><div class="form-group row">\n' +
                '                    <label for="key_skills" class="col-sm-2 col-form-label"></label>\n' +
                '                    <div class="col-sm-8">\n' +
                '                        <input type="text" name="key_skills[]">\n' +
                '                    </div>\n' +
                '                    <a href="javascript:void(0);" class="remove_button_skill">\n' +
                '                        <i class="glyphicon glyphicon-plus">Remove</i>\n' +
                '                    </a>\n' +
                '                </div></div>';
            var x = 1; //Initial field counter is 1

            //Once add button is clicked
            jQuery(addButton).click(function(){
                //Check maximum number of input fields
                if(x < maxField){
                    x++; //Increment field counter
                    jQuery(wrapper).append(fieldHTML); //Add field html
                }
            });

            //Once remove button is clicked
            jQuery(wrapper).on('click', remove_button_class, function(e){
                e.preventDefault();
                jQuery(this).parent('div').parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        }

        function addRemoveEducation(max, add_button_class, wrapper_class, remove_button_class){
            var maxField = max; //Input fields increment limitation
            var addButton = jQuery(add_button_class); //Add button selector
            var wrapper = jQuery(wrapper_class); //Input field wrapper
            var fieldHTML =
                '<div class="education_category"><div class="form-group row">' +
                '                    <label for="college_name" class="col-sm-2 col-form-label">School / College Name</label>' +
                '                    <div class="col-sm-8">' +
                '                        <input type="text" name="college_name[]" id="college_name"">\n' +
                '                    </div>\n' +
                '                </div>\n' +
                '\n' +
                '                <div class="form-group row">\n' +
                '                    <label for="education_city" class="col-sm-2 col-form-label">City</label>\n' +
                '                    <div class="col-sm-8">\n' +
                '                        <input type="text" name="education_city[]" id="education_city">\n' +
                '                    </div>\n' +
                '                </div>\n' +
                '\n' +
                '                <div class="form-group row">\n' +
                '                    <label for="education_start_date" class="col-sm-2 col-form-label">Start Date</label>\n' +
                '                    <div class="col-sm-8">\n' +
                '                        <input type="text" name="education_start_date[]" id="education_start_date">\n' +
                '                    </div>\n' +
                '                </div>\n' +
                '\n' +
                '                <div class="form-group row">\n' +
                '                    <label for="education_end_date" class="col-sm-2 col-form-label">End Date</label>\n' +
                '                    <div class="col-sm-8">\n' +
                '                        <input type="text" name="education_end_date[]" id="education_end_date" >\n' +
                '                    </div>\n' +
                '                    <a href="javascript:void(0);" class="' + remove_button_class.replace(".", "") + '">\n' +
                '                        <i class="glyphicon glyphicon-plus">Remove</i>\n' +
                '                    </a>\n' +
                '                </div></div>';
            var x = 1; //Initial field counter is 1

            //Once add button is clicked
            jQuery(addButton).click(function(){
                //Check maximum number of input fields
                if(x < maxField){
                    x++; //Increment field counter
                    jQuery(wrapper).append(fieldHTML); //Add field html
                }
            });

            //Once remove button is clicked
            jQuery(wrapper).on('click', remove_button_class, function(e){
                e.preventDefault();
                jQuery(this).parent('div').parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        }
        function addRemoveExperience(max, add_button_class, wrapper_class, remove_button_class){
            var maxField = max; //Input fields increment limitation
            var addButton = jQuery(add_button_class); //Add button selector
            var wrapper = jQuery(wrapper_class); //Input field wrapper
            var fieldHTML =
                '<div class="experience_container">\n' +
                '            <div class="form-group row">\n' +
                '                <label for="job_title" class="col-sm-2 col-form-label">Job Title</label>\n' +
                '                <div class="col-sm-8">\n' +
                '                    <input type="text" name="job_title[]" id="job_title" >\n' +
                '                </div>\n' +
                '            </div>\n' +
                '\n' +
                '            <div class="form-group row">\n' +
                '                <label for="company_name" class="col-sm-2 col-form-label">Company Name</label>\n' +
                '                <div class="col-sm-8">\n' +
                '                    <input type="text" name="company_name[]" id="company_name">\n' +
                '                </div>\n' +
                '            </div>\n' +
                '\n' +
                '            <div class="form-group row">\n' +
                '                <label for="company_city" class="col-sm-2 col-form-label">City</label>\n' +
                '                <div class="col-sm-8">\n' +
                '                    <input type="text" name="company_city[]" id="company_city">\n' +
                '                </div>\n' +
                '            </div>\n' +
                '\n' +
                '            <div class="form-group row">\n' +
                '                <label for="work_start_date" class="col-sm-2 col-form-label">Start Date</label>\n' +
                '                <div class="col-sm-8">\n' +
                '                    <input type="text" name="work_start_date[]" id="work_start_date">\n' +
                '                </div>\n' +
                '            </div>\n' +
                '\n' +
                '            <div class="form-group row">\n' +
                '                <label for="work_end_date" class="col-sm-2 col-form-label">End Date</label>\n' +
                '                <div class="col-sm-8">\n' +
                '                    <input type="text" name="work_end_date[]" id="work_end_date">\n' +
                '                </div>\n' +
                '                    <a href="javascript:void(0);" class="' + remove_button_class.replace(".", "") + '">\n' +
                '                        <i class="glyphicon glyphicon-plus">Remove</i>\n' +
                '                    </a>\n' +
                '            </div>\n' +
                '        </div></div>';
            var x = 1; //Initial field counter is 1

            //Once add button is clicked
            jQuery(addButton).click(function(){
                //Check maximum number of input fields
                if(x < maxField){
                    x++; //Increment field counter
                    jQuery(wrapper).append(fieldHTML); //Add field html
                }
            });

            //Once remove button is clicked
            jQuery(wrapper).on('click', remove_button_class, function(e){
                e.preventDefault();
                jQuery(this).parent('div').parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        }
    </script>

@endsection