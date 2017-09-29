<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/22/2017
 * Time: 12:11 PM
 */
//print_r($org_info);

?>
<div class="container">
    <p class="" style="font-size: 20px;">School Leaving Certificate / New</p>
    <div class="row">
        <div class="col-lg-2">
            School Code: <?php
            $c = json_encode($org_info);
            $c = json_decode($c, true);
            echo $c[0]['school_code'] ?>
        </div>
        <div class="col-lg-5">
            <p style="font-size: 40px;"><b>
                    <?php
                    echo '<p style="text-align: center; font-size: 30px;">' . $c[0]['name'] . '</p>';
                    ?>
                </b></p>
        </div>
        <div class="col-lg-2">
            Dise Code: <?php echo $c[0]['dise_code'] ?>
        </div>
    </div>
    <div class="row" style="text-align: justify; letter-spacing: 1px; margin-top: 30px;">
        <?php echo form_open('certificates/slc_new', ['class' => 'form-horizontal']); ?>
        <div class="col-lg-10">
            <p style="font-size: 15px;">
                This is to certify that <input type="text" name="name" class=""> Son of Mr.
                <input type="text" name="f_name"> and Mrs. <input type="text" name="m_name"> was <br><br>
                reading in class <input type="text" name="class"> of the school <input type="text" name="school_name">.
                He has ended school from<br><br> <input type="text" name="end_date"> to
                <input type="text" name="start_date"> having paid all fees dues to school.
            </p>
            <p style="font-size: 15px;">
                According to Admission Register his Date of birth (In Figures) <input type="text" name="dob">
                In Words <input type="text" name="dob_words">.
            </p>
            <p style="font-size: 15px;">
                He has been vaccinated or immunized against smll pox. Details of last examination
                passed by him are as follows
                :--
            </p>
            <p style="font-size: 15px;">
                Class <input type="text" name="class_present"> Medium English, Year
                 <input type="text" name="year">.
                He was admitted to this school in class <br><br><input type="text" name="start_class">.
                He belongs to <input type="text" name="caste_name">
                caste.
            </p>
            <p style="font-size: 15px;">
                He possess a good character.
            </p>
            <p style="font-size: 15px;">

            </p>
            <input type="submit" name="submit" value="Generate" class="btn btn-primary btn-sm"
                   style="margin-left: 500px;">
            <?php echo form_close(); ?>
        </div>
        <div class="col-lg-2">
            <?php echo form_error('student_name'); ?>
        </div>
    </div>
</div>

