<div class="container">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab" aria-expanded="true"><b>General</b></a></li>
        <li class="" style="margin-left: 20px;"><a href="#address" data-toggle="tab" aria-expanded="false"><b>Address Details</b></a></li>
        <li class="" style="margin-left: 20px;"><a href="#parent" data-toggle="tab" aria-expanded="false"><b>Parents Details</b></a></li>
        <li class="" style="margin-left: 20px;"><a href="#misc" data-toggle="tab" aria-expanded="false"><b>Misc Details</b></a></li>
        <li class="" style="margin-left: 20px;"><a href="#attach" data-toggle="tab" aria-expanded="false"><b>Attachements</b></a></li>
        <li class="" style="margin-left: 20px;"><a href="#balance" data-toggle="tab" aria-expanded="false"><b>Balance</b></a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="home" style="margin-top: 15px;">
            <div class="row">
                <div class="col-md-5">
                    <form class="form-horizontal">
                        <fieldset>
                            <div class="form-group">
                                <label for="inputText" class="col-lg-2 control-label">First Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputText" placeholder="First Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputText" class="col-lg-2 control-label">Middle Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputText" placeholder="Middle Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputText" class="col-lg-2 control-label">Last Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputText" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputText" class="col-lg-2 control-label">Date of Birth</label>
                                <div class="col-lg-10">
                                    <input type="date" class="form-control" id="inputText" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="select" class="col-lg-2 control-label">Gender</label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="select">
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                    </select>
                                    <br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="select" class="col-lg-2 control-label">Category</label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="select">
                                        <option>General</option>
                                        <option>OBC</option>
                                        <option>SC</option>
                                        <option>ST</option>
                                        <option>Others</option>
                                    </select>
                                    <br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="select" class="col-lg-2 control-label">Caste</label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="select">
                                        <option>Hindu</option>
                                        <option>Christian</option>
                                    </select>
                                    <br>
                                </div>
                            </div>
                </div>
                <div class="col-md-5">
                            <div class="form-group">
                                <label for="inputText" class="col-lg-2 control-label">Class</label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="select">
                                        <option>Ist</option>
                                        <option>IInd</option>
                                        <option>IIIrd</option>
                                        <option>IVth</option>
                                        <option>Vth</option>
                                        <option>VIth</option>
                                        <option>VIIth</option>
                                        <option>VIIth</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputText" class="col-lg-2 control-label">Section</label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="select">
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputText" class="col-lg-2 control-label">Roll No.</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputText" placeholder="Enter Roll Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputText" class="col-lg-2 control-label">Route</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputText" placeholder="Route">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputText" class="col-lg-2 control-label">House</label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="select">
                                        <option>Red</option>
                                        <option>Green</option>
                                        <option>Blue</option>
                                    </select><br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="select" class="col-lg-2 control-label">Photo</label>
                                <div class="col-lg-10">
                                    <input type="file" name="photo">
                                    <br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="select" class="col-lg-2 control-label">Admission No.</label>
                                <div class="col-lg-10">
                                    <input type="text" name="adm_no" placeholder="Enter Admission Number">
                                    <br><br>
                                </div>
                            </div>

                    <button type="reset" class="btn btn-primary" style="margin-left: 25px;">Save</button>
                    <button type="submit" class="btn btn-default">Discard</button>
                </div>
                    </div>
            </fieldset>
            </form>
        </div>
        <div class="tab-pane fade" id="address" style="margin-top: 20px;">
            <form class="form-horizontal">
                <fieldset>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">House No.</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Enter House Number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Street Name</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Enter Street Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Other Info</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Enter any Landmark (If possible)">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Zip Code</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Enter Zipcode">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">City</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Enter City">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">State</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Enter State">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Country</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Enter Country">
                        </div>
                    </div>
                </fieldset>
                <button type="reset" class="btn btn-primary" style="margin-left: 150px;">Save</button>
                <button type="submit" class="btn btn-default">Discard</button>
            </form>
        </div>
        <div class="tab-pane fade" id="parent">
            <div class="row">
                <div class="col-md-5">
                    <form class="form-horizontal">
                        <fieldset>
                            <div>
                                <h5>Father's Details</h5>
                            </div>
                            <div class="form-group">
                                <label for="inputText" class="col-lg-2 control-label">First Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputText" placeholder="First Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputText" class="col-lg-2 control-label">Middle Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputText" placeholder="Middle Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputText" class="col-lg-2 control-label">Last Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputText" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputText" class="col-lg-2 control-label">DOB</label>
                                <div class="col-lg-10">
                                    <input type="date" class="form-control" id="inputText" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="select" class="col-lg-2 control-label">Mobile</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputText" placeholder="Mobile">
                                    <br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="select" class="col-lg-2 control-label">Qualification</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputText" placeholder="Qualification">
                                    <br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="select" class="col-lg-2 control-label">Occupation</label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="select">
                                        <option>Business</option>
                                        <option>Service</option>
                                    </select>
                                    <br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputText" class="col-lg-2 control-label">Photo</label>
                                <div class="col-lg-10">
                                    <input type="file" name="fphoto">
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
                            <input type="text" class="form-control" id="inputText" placeholder="First Name">
                        </div><br><br>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Middle Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputText" placeholder="Middle Name">
                        </div><br><br>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Last Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputText" placeholder="Last Name">
                        </div><br><br>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">DOB</label>
                        <div class="col-lg-10">
                            <input type="date" class="form-control" id="inputText" placeholder="Last Name">
                        </div><br><br>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Mobile</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputText" placeholder="Mobile">
                        </div><br><br>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Qualification</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputText" placeholder="Qualification">
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Occupation</label>
                        <div class="col-lg-10">
                            <select class="form-control" id="select">
                                <option>Business</option>
                                <option>Service</option>
                            </select><br>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Photo</label>
                        <div class="col-lg-10">
                            <input type="file" name="fphoto">
                        </div><br>
                    </div>
                    <button type="reset" class="btn btn-primary" style="margin-left: 25px; margin-top: 20px;">Save</button>
                    <button type="submit" class="btn btn-default" style="margin-top: 20px;">Discard</button>
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
                                    <input type="text" class="form-control" id="inputText" placeholder="Enter Last Attended School">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputText" class="col-lg-2 control-label">Remarks</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputText" placeholder="Remarks">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputText" class="col-lg-2 control-label">Last Exam Given</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputText" placeholder="Last Exam Given">
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
                                    <input type="text" class="form-control" id="inputText" placeholder="Mobile">
                                    <br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="select" class="col-lg-2 control-label">Marks</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputText" placeholder="Qualification">
                                    <br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="select" class="col-lg-2 control-label">Board</label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="select">
                                        <option>Business</option>
                                        <option>Service</option>
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
                                <option>A+</option>
                                <option>A-</option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Vision (Left)</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputText" placeholder="First Name">
                        </div><br><br><br>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Vision (Right)</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputText" placeholder="Middle Name">
                        </div><br><br>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Height</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputText" placeholder="Last Name">
                        </div><br><br>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Weight</label>
                        <div class="col-lg-10">
                            <input type="date" class="form-control" id="inputText" placeholder="Last Name">
                        </div><br><br>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Dental Hygiene</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputText" placeholder="Mobile">
                        </div><br><br>
                    </div>
                    <button type="reset" class="btn btn-primary" style="margin-left: 25px; margin-top: 20px;">Save</button>
                    <button type="submit" class="btn btn-default" style="margin-top: 20px;">Discard</button>
                </div>
            </div>
            </fieldset>
            </form>
        </div>
        </div>
        <div class="tab-pane fade" id="attach">
            <h4>Attachements</h4>
        </div>
        <div class="tab-pane fade" id="balance">
            <h4>Balance Details</h4>
        </div>


    </div>
</div>




