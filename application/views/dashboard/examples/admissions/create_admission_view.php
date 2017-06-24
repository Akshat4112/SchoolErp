<div class="container">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab" aria-expanded="true"><b>General</b></a></li>
        <li class="" style="margin-left: 20px;"><a href="#address" data-toggle="tab" aria-expanded="false"><b>Address Details</b></a></li>
        <li class="" style="margin-left: 20px;"><a href="#edu" data-toggle="tab" aria-expanded="false"><b>Educational Details</b></a></li>
        <li class="" style="margin-left: 20px;"><a href="#qual" data-toggle="tab" aria-expanded="false"><b>Qualification Details</b></a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="home" style="margin-top: 15px;">
            <form class="form-horizontal">
                <fieldset>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">First Name</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inputText" placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Middle Name</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inputText" placeholder="Middle Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Last Name</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inputText" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Date of Birth</label>
                        <div class="col-lg-4">
                            <input type="date" class="form-control" id="inputText" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Gender</label>
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
                            <select class="form-control" id="select">
                                <option>Genral</option>
                                <option>OBC</option>
                                <option>SC</option>
                                <option>ST</option>
                                <option>Others</option>
                            </select>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Nationality</label>
                        <div class="col-lg-4">
                            <select class="form-control" id="select">
                                <option>Indian</option>
                                <option>American</option>
                                <option>Australian</option>
                            </select>
                            <br>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="tab-pane fade" id="address" style="margin-top: 20px;">
            <form class="form-horizontal">
                <fieldset>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Address</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Address">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">City</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="inputEmail" placeholder="City">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">State</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="inputEmail" placeholder="State">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Pincode</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Pincode">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="tab-pane fade" id="edu">

        </div>
        <div class="tab-pane fade" id="qual">

        </div>
    </div>
<button type="reset" class="btn btn-primary">Save</button>
<button type="submit" class="btn btn-default">Discard</button>

</div>
