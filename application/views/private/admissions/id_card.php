<div class="container">
    <h4 class="text-info">ID Card</h4>
    <div class="row">
        <div class="col-md-4">
            <?php echo form_open('admissions/id_card', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Student Class</label>
                <div class="col-lg-10">
                    <?php
                    $drop=array();
                    foreach($class_drop as $r){
                        $drop[$r['class']]=$r['class'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('class', $drop,'', $attribute_class);
                    ?>
                    <?php echo form_error('class'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Student Section</label>
                <div class="col-lg-10">

                    <?php
                    $drop=array();
                    foreach($section_drop as $r){
                        $drop[$r['section_name']]=$r['section_name'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('section', $drop,'', $attribute_class);
                    ?>
                    <?php echo form_error('section'); ?>
                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Show', 'class' => 'btn btn-info',
                'style' => 'margin-left:50px; margin-top:5px;']); ?>
            <?php form_close();?>
        </div>
        <div class="col-lg-8">
            <table class="table table-hover ">
                <thead>
                <tr class="info">
                    <th>Name</th>
                    <th>Class</th>
                    <th>Section</th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($table_view)): ?>

                    <?php foreach ($table_view as $tbv): ?>
                        <tr>
                            <td><?php echo $tbv['student_first_name'] ?></td>
                            <td><?php echo $tbv['student_class'] ?></td>
                            <td><?php echo $tbv['student_section'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr class="success">
                        <td>No Records Found</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>