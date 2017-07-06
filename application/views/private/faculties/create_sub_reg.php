<div class="container">
    <div class="row">
        <h4>New</h4>
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
                        <a href="<?= site_url('admissions/confirm_view');?>"><button type="reset" class="btn btn-primary">Submit</button></a>
                        <button type="submit" class="btn btn-success" style="margin-left: 230px;">Draft</button>
                        <button type="submit" class="btn btn-default">Submitted</button>
                        <button type="submit" class="btn btn-default">Approved</button>
                        <button type="submit" class="btn btn-default">Rejected</button><br><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <form class="form-horizontal">
                <fieldset>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Student</label>
                        <div class="col-lg-10">
                            <select class="form-control" id="select">
                                <option>Student 1</option>
                                <option>Student 2</option>
                            </select>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Batch</label>
                        <div class="col-lg-10">
                            <select class="form-control" id="select">
                                <option>BOA-1A</option>
                                <option>BOA-1B</option>
                            </select>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-lg-2 control-label">Maximum Unit Load</label>
                        <div class="col-lg-10">
                            <input type="text" name="end_date"><br>
                            <br>
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
                <label for="inputText" class="col-lg-2 control-label">Minimum Unit Load</label>
                <div class="col-lg-10">
                    <input type="text" name="end_date"><br>
                    <br>
                </div>
            </div>
            </fieldset>
            </form>
        </div>
    </div>
</div>
