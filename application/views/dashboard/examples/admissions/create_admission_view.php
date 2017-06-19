<div class="container">
    <div class="row">
        <h4>Admission Registers / New</h4>
        <div class="row">
            <div class="col-md-3">
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="reset" class="btn btn-primary">Save</button>
                    <button type="submit" class="btn btn-default">Discard</button>
                </div>
            </div>
            </div>
        </div><hr>
        <div class="row">
            <div class="col-md-12">
            <div class="form-group">
                <div class="col-lg-12 col-lg-offset-1">
                    <a href="<?= site_url('admissions/confirm_view');?>"><button type="reset" class="btn btn-primary">Confirm</button></a>
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-success" style="margin-left: 230px;">Draft</button>
                    <button type="submit" class="btn btn-default">Confirmed</button>
                    <button type="submit" class="btn btn-default">Application Gethering</button>
                    <button type="submit" class="btn btn-default">Admission Process</button>
                    <button type="submit" class="btn btn-default">Done</button>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-5">
            <form class="form-horizontal">
                <fieldset>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Start Date</label>
                        <div class="col-lg-10">

                            <input type="date" name="start_date">
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Product</label>
                        <div class="col-lg-10">
                            <select class="form-control" id="select">
                                <option>Admission fees of BOA</option>
                                <option>Admission fees of BOP</option>
                                <option>Admission fees of BOM</option>
                                <option>Admission fees of BOH</option>
                            </select>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Maximum Number of Admission</label>
                        <div class="col-lg-10"><br><br>
                            <input type="text" class="form-control" id="inputEmail" placeholder="Maximum Number of Admissions">
                        </div>
                    </div>



        </div>
        <div class="col-md-5 col-md-offset-1" style="margin-top: 50px;">
            <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Course</label>
                        <div class="col-lg-10">
                            <select class="form-control" id="select">
                                <option>Bachelor of Accountancy</option>
                                <option>Bachelor of Biology</option>
                                <option>Bachelor of Maths</option>
                                <option>Bachelor of Physics</option>
                            </select>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">End Date</label>
                        <div class="col-lg-10">
                            <input type="date" name="end_date"><br>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Minimum Number of Admissions</label>
                        <div class="col-lg-10"><br><br>
                            <input type="text" class="form-control" id="inputEmail" placeholder="Minimum Number of Admissions">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
