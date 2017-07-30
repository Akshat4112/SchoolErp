<div class="container">
    <h4 class="text-info">ID Card</h4>
    <div class="row">
        <div class="col-md-5">
            <?php echo form_open('admissions/id_card', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Student Class</label>
                <div class="col-lg-10">
                    <?php
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('class', $class_drop, 'class', $attribute_class);
                    ?>
                    <?php echo form_error('class'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Student Section</label>
                <div class="col-lg-10">

                    <?php
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('section', $section_drop, 'section', $attribute_class);
                    ?>
                    <?php echo form_error('section'); ?>
                </div>
            </div>
        </div>
    </div>
</div>