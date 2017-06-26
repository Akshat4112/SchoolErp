<div class="container">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab" aria-expanded="true"><b>General</b></a></li>
        <li class="" style="margin-left: 20px;"><a href="#address" data-toggle="tab" aria-expanded="false"><b>Address
                    Details</b></a></li>
        <li class="" style="margin-left: 20px;"><a href="#parent" data-toggle="tab" aria-expanded="false"><b>Parents
                    Details</b></a></li>
        <li class="" style="margin-left: 20px;"><a href="#misc" data-toggle="tab" aria-expanded="false"><b>Misc
                    Details</b></a></li>
        <li class="" style="margin-left: 20px;"><a href="#attach" data-toggle="tab" aria-expanded="false"><b>Attachements</b></a>
        </li>
        <li class="" style="margin-left: 20px;"><a href="#balance" data-toggle="tab"
                                                   aria-expanded="false"><b>Balance</b></a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="home" style="margin-top: 15px;">
            <div class="row">
                <div class="col-md-5">
                    <?php echo validation_errors(); ?>
                    <?php echo form_open('admissions/student_details', ['class' => 'form-horizontal']); ?>
                    <fieldset>
                        <div class="form-group">
                            <label for="inputText" class="col-lg-2 control-label">First Name</label>
                            <div class="col-lg-10">
                                <?php echo form_input(['name' => 'student_first_name', 'class' => 'form-control', 'placeholder' => 'Enter First Name', 'value' => set_value('student_first_name')]); ?>
                                <?php echo form_error('student_first_name', "<p class='text-danger'>", "</p>"); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputText" class="col-lg-2 control-label">Middle Name</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputText" placeholder="Middle Name"
                                       name="student_middle_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputText" class="col-lg-2 control-label">Last Name</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputText" placeholder="Last Name"
                                       name="student_last_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputText" class="col-lg-2 control-label">Date of Birth</label>
                            <div class="col-lg-10">
                                <input type="date" class="form-control" id="inputText" placeholder="DOB"
                                       name="student_dob">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-2 control-label">Gender</label>
                            <div class="col-lg-10">
                                <select class="form-control" id="select" name="gender">
                                    <option id="1">Male</option>
                                    <option id="2">Female</option>
                                    <option id="3">Other</option>
                                </select>
                                <br>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-2 control-label">Category</label>
                            <div class="col-lg-10">
                                <select class="form-control" id="select" name="category">
                                    <option id="1">General</option>
                                    <option id="2">OBC</option>
                                    <option id="3">SC</option>
                                    <option id="4">ST</option>
                                    <option id="5">Others</option>
                                </select>
                                <br>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-2 control-label">Caste</label>
                            <div class="col-lg-10">
                                <select class="form-control" id="select" name="caste">
                                    <option id="1">Hindu</option>
                                    <option id="2">Christian</option>
                                </select>
                                <br>
                            </div>
                        </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Class</label>
                        <div class="col-lg-10">
                            <select class="form-control" id="select" name="student_class">
                                <option id="1">Ist</option>
                                <option id="2">IInd</option>
                                <option id="3">IIIrd</option>
                                <option id="4">IVth</option>
                                <option id="5">Vth</option>
                                <option id="6">VIth</option>
                                <option id="7">VIIth</option>
                                <option id="8">VIIth</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Section</label>
                        <div class="col-lg-10">
                            <select class="form-control" id="select" name="student_section">
                                <option id="1">A</option>
                                <option id="2">B</option>
                                <option id="3">C</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Roll No.</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputText" placeholder="Enter Roll Number"
                                   name="student_roll_no">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Route</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputText" placeholder="Route" name="route">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">House</label>
                        <div class="col-lg-10">
                            <select class="form-control" id="select" name="house">
                                <option id="1">Red</option>
                                <option id="2">Green</option>
                                <option id="3">Blue</option>
                            </select><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Photo</label>
                        <div class="col-lg-10">
                            <input type="file" name="student_photo">
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Admission No.</label>
                        <div class="col-lg-10">
                            <input type="text" placeholder="Enter Admission Number" name="admission_no">
                            <br><br>
                        </div>
                    </div>
                    <?php echo form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-default']),
                    form_submit(['name' => 'Submit', 'value' => 'Update', 'class' => 'btn btn-primary']); ?>


                </div>
            </div>
            </fieldset>
            </form>
        </div>
        <div class="tab-pane fade" id="address" style="margin-top: 20px;">
            <?php echo validation_errors(); ?>
            <?php echo form_open('admissions/address_details', ['class' => 'form-horizontal']); ?>
                <fieldset>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">House No.</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Enter House Number" name="house_no">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Street Name</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Enter Street Name" name="street_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Other Info</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="inputEmail"
                                   placeholder="Enter any Landmark (If possible)" name="other_info">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Zip Code</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Enter Zipcode" name="zip_code">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">City</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Enter City" name="city">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">State</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Enter State" name="state">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Country</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Enter Country" name="country">
                        </div>
                    </div>
                </fieldset>
            <?php echo form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-default']),
            form_submit(['name' => 'Submit', 'value' => 'Update', 'class' => 'btn btn-primary']); ?>
            </form>
        </div>
        <div class="tab-pane fade" id="parent">
            <div class="row">
                <div class="col-md-5">
                    <?php echo validation_errors(); ?>
                    <?php echo form_open('admissions/other_info_details', ['class' => 'form-horizontal']); ?>
                        <fieldset>
                            <div>
                                <h5>Father's Details</h5>
                            </div>
                            <div class="form-group">
                                <label for="inputText" class="col-lg-2 control-label">First Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputText" placeholder="First Name" name="fathers_first_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputText" class="col-lg-2 control-label">Middle Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputText" placeholder="Middle Name" name="fathers_middle_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputText" class="col-lg-2 control-label">Last Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputText" placeholder="Last Name" name="fathers_last_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputText" class="col-lg-2 control-label">DOB</label>
                                <div class="col-lg-10">
                                    <input type="date" class="form-control" id="inputText" placeholder="DOB" name="f_dob">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="select" class="col-lg-2 control-label">Mobile</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputText" placeholder="Mobile" name="f_mobile">
                                    <br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="select" class="col-lg-2 control-label">Qualification</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputText" placeholder="Qualification" name="f_qual">
                                    <br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="select" class="col-lg-2 control-label">Occupation</label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="select" name="f_occu">
                                        <option>Business</option>
                                        <option>Service</option>
                                    </select>
                                    <br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputText" class="col-lg-2 control-label">Photo</label>
                                <div class="col-lg-10">
                                    <input type="file" name="f_photo">
                                </div>
                            </div>
                </div>
                <div class="col-md-5">
                    <div>
                        <h5>Mother's Details</h5>
                    </div>

                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">First Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputText" placeholder="First Name" name="mothers_first_name">
                        </div>
                        <br><br>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Middle Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputText" placeholder="Middle Name" name="mothers_middle_name">
                        </div>
                        <br><br>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Last Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputText" placeholder="Last Name" name="mothers_last_name">
                        </div>
                        <br><br>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">DOB</label>
                        <div class="col-lg-10">
                            <input type="date" class="form-control" id="inputText" placeholder="DOB" name="m_dob">
                        </div>
                        <br><br>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Mobile</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputText" placeholder="Mobile" name="m_mobile">
                        </div>
                        <br><br>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Qualification</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputText" placeholder="Qualification" name="m_qual">
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Occupation</label>
                        <div class="col-lg-10">
                            <select class="form-control" id="select" name="m_occu">
                                <option>Business</option>
                                <option>Service</option>
                            </select><br>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Photo</label>
                        <div class="col-lg-10">
                            <input type="file" name="m_photo">
                        </div>
                        <br>
                    </div>
                    <?php echo form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-default']),
                    form_submit(['name' => 'Submit', 'value' => 'Update', 'class' => 'btn btn-primary']); ?>
                </div>
            </div>
            </fieldset>
            </form>
        </div>
        <div class="tab-pane fade" id="misc">
            <div class="row"><br>
                <div class="col-md-5">
                    <form class="form-horizontal">
                        <fieldset>
                            <div class="form-group">
                                <label for="inputText" class="col-lg-2 control-label">Last Attended School</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputText"
                                           placeholder="Enter Last Attended School">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputText" class="col-lg-2 control-label">Remarks</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputText" placeholder="Enter Remarks">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputText" class="col-lg-2 control-label">Last Exam Given</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputText"
                                           placeholder="Last Exam Given">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputText" class="col-lg-2 control-label">Year</label>
                                <div class="col-lg-10">
                                    <input type="date" class="form-control" id="inputText" placeholder="Enter Year">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="select" class="col-lg-2 control-label">Status</label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="select">
                                        <option>Pass</option>
                                        <option>Fail</option>
                                    </select
                                    <br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="select" class="col-lg-2 control-label">Marks</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputText"
                                           placeholder="Enter Marks in Percentage">
                                    <br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="select" class="col-lg-2 control-label">Board</label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="select">
                                        <option>CBSE</option>
                                        <option>ICSE</option>
                                        <option>State Board</option>
                                    </select>
                                    <br>
                                </div>
                            </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Blood Group</label>
                        <div class="col-lg-10">
                            <select class="form-control" id="select">
                                <option disabled="disabled">Enter Blood Group</option>
                                <option>A+</option>
                                <option>A-</option>
                            </select>
                        </div>
                        <br><br>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Vision (Left)</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputText" placeholder="Enter Left Vision">
                        </div>
                        <br><br><br>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Vision (Right)</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputText" placeholder="Enter Right Vision">
                        </div>
                        <br><br>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Height</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputText" placeholder="Enter Height">
                        </div>
                        <br><br>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Weight</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputText" placeholder="Enter Weight">
                        </div>
                        <br><br>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Dental Hygiene</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputText" placeholder="Enter Dental Hygiene">
                        </div>
                        <br><br>
                    </div>
                    <button type="reset" class="btn btn-primary" style="margin-left: 25px; margin-top: 20px;">Save
                    </button>
                    <button type="submit" class="btn btn-default" style="margin-top: 20px;">Discard</button>
                </div>
            </div>
            </fieldset>
            </form>
        </div>
        <div class="tab-pane fade" id="attach">
            <div class="col-md-5">
                <form class="form-horizontal">
                    <fieldset>
                        <h4>Attachement</h4>
                        <div class="form-group">
                            <label for="inputText" class="col-lg-2 control-label">TC</label>
                            <div class="col-lg-10">
                                <input type="file" name="fphoto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputText" class="col-lg-2 control-label">CC</label>
                            <div class="col-lg-10">
                                <input type="file" name="fphoto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputText" class="col-lg-2 control-label">Report</label>
                            <div class="col-lg-10">
                                <input type="file" name="fphoto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputText" class="col-lg-2 control-label">DOB Certificate</label>
                            <div class="col-lg-10">
                                <input type="file" name="fphoto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputText" class="col-lg-2 control-label">Date of Admission</label>
                            <div class="col-lg-10">
                                <input type="date" name="fphoto">
                            </div>
                        </div>
                        <button type="reset" class="btn btn-primary" style="margin-left: 25px; margin-top: 20px;">Save
                        </button>
                        <button type="submit" class="btn btn-default" style="margin-top: 20px;">Discard</button>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="tab-pane fade" id="balance">
            <div class="col-md-5">
                <form class="form-horizontal">
                    <fieldset>
                        <h2>Balance</h2>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>




