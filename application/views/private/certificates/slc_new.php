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
            School Code: 871238
        </div>
        <div class="col-lg-8">
            <p style="font-size: 40px;"><b></b></p>
        </div>
        <div class="col-lg-2">
            Dise Code: 989897
        </div>
    </div>
    <div class="row">
        <?php echo form_open('certificates/slc_new', ['class' => 'form-horizontal']); ?>
        <div class="col-lg-12">
            <p style="font-size: 15px;">
                This is to certify that <input type="text" name="student_name"><?php echo form_error('student_name'); ?>Son of Mr. <input type="text" name="f_name">
                and Mrs. <input type="text" name="m_name"> was reading in class <input type="text" name="class"> of the
                school <input type="text" name="school_name">.He has ended school from <input type="text" name="end_date"> to
                <input type="text" name="start_date"> having paid all fees dues to school
            </p>
            <p style="font-size: 15px;">
                According to Admission Register his Date of birth (In Figures) <input type="text" name="dob">
                In Words <input type="text" name="dob_words">.
            </p>
            <p style="font-size: 15px;">
                He has been vaccinated or immunized against smll pox. Details of last examination passed by him are as follows
                 :--
            </p>
            <p style="font-size: 15px;">
                Class <input type="text" name="class_present">Medium English, Year <input type="text" name="year">.
                He was admitted to this school in class <input type="text" name="start_class">.He belongs to <input type="text" name="caste_name">
                caste.
            </p>
            <p style="font-size: 15px;">
                He possess a good character.
            </p>
            <p style="font-size: 15px;">

            </p>
            <input type="submit" name="submit" value="genrate" class="btn btn-info" style="margin-left: 500px;">
            <?php echo form_close();?>
        </div>
    </div>
</div>

