<div class="container">
    <h4 class="text-info">ID Card</h4>
    <div class="row">
        <div class="col-md-5">
            <?php echo form_open('admissions/id_card', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Student Class</label>
                <div class="col-lg-10">

                    <?php echo form_input(['name' => 'stu_class', 'class' => 'form-control',
                        'placeholder' => 'Enter Student Class',
                        'value' => set_value('stu_class')]);
                    ?>
                    <?php echo form_error('stu_class'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Student Section</label>
                <div class="col-lg-10">

                    <?php echo form_input(['name' => 'stu_section', 'class' => 'form-control',
                        'placeholder' => 'Enter Student Section',
                        'value' => set_value('stu_section')]);
                    ?>
                    <?php echo form_error('stu_class'); ?>
                </div>
            </div>
        </div>
    </div>
</div>