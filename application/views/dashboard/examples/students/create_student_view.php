<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-4">
        <h5>Student / New</h5>
        <a href="#" class="btn btn-default">Save</a>
        <a href="#" class="btn btn-default">Discard</a>
        <form class="form-horizontal">
            <fieldset>
                <div class="form-group" style="margin-top: 10px;">
                    <label for="select" class="col-lg-2 control-label">Title</label>
                    <div class="col-lg-10">
                        <select class="form-control" id="select">
                            <option>Mr.</option>
                            <option>Miss</option>
                            <option>Doctor</option>
                            <option>Madam</option>
                            <option>Professor</option>
                        </select>
                        <br>
                    </div>
                </div>
                <div class="row"><div class="col-lg-10" style="margin-left: 90px;">
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="First Name">
                            <input type="text" class="form-control"  placeholder="Middle Name">
                            <input type="text" class="form-control"  placeholder="Last Name">
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    <div class="col-lg-1"></div>
</div>
</body>
<script src="<?= base_url()?>public/assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>public//assets/js/bootstrap.min.js" type="text/javascript"></script>
</html>