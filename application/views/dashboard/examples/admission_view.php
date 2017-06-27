
<div class="row">
    <div class="col-lg-1">

    </div>
    <div class="col-lg-10">
        <h5>Admissions </h5>
    </div>
    <div class="col-lg-1">

    </div>
</div>
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <table class="table table-striped table-hover ">
            <thead>
            <tr>

                <th>Admission No.</th>
                <th>Name</th>
                <th>Father</th>
                <th>Mother</th>
                <th>Class</th>
                <th>Section</th>
                <th>Roll No.</th>
                <th>DOB</th>
                <th>Contact No.</th>
                <th>Route</th>
                <th>Scholarship No.</th>
                <th>Old Balance</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td></td>
                <td><pre><?php


                        foreach($det as $dataa){

                            echo $dataa['student_first_name'].' ';
                        }
                        ; ?></pre></td>
                <td><?php   ?></td>
                <td><?php  ?></td>

            </tr>
            <tr>


            </tr>
            <tr class="info">
                <td>Class 3rd</td>

            </tr>
            <tr class="success">
                <td>Class 4th</td>

            </tr>
            </tbody>
        </table>
    </div>
    <div class="col-lg-1"></div>
</div>