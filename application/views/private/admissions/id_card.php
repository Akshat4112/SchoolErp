<div class="container">
    <h4 class="text-primary">ID Card</h4>
    <div class="row">
        <div class="col-md-4">
            <?php echo form_open('admissions/id_card', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Class</label>
                <div class="col-lg-5">
                    <?php
                    $drop=array();
                    foreach($class_drop as $r){
                        $drop[$r['class']]=$r['class'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('class', $drop,set_value('class'), $attribute_class);
                    ?>
                    <?php echo form_error('class'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-3 control-label">Section</label>
                <div class="col-lg-5">

                    <?php
                    $drop=array();
                    foreach($section_drop as $r){
                        $drop[$r['section_name']]=$r['section_name'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('section', $drop,set_value('section'), $attribute_class);
                    ?>
                    <?php echo form_error('section'); ?>
                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Show', 'class' => 'btn btn-primary btn-sm',
                'style' => 'margin-left:100px; margin-top:5px;']); ?>
            <?php form_close();?>
        </div>
        <div class="col-lg-8" style="overflow-y:scroll; overflow-x:hidden; height: 400px; width:500px;">
            <table class="table table-hover table-bordered">
                <thead>
                <tr class="text-default">
                    <th>Name</th>
                    <th>Class</th>
                    <th>Section</th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($table_view)): ?>
                    <?php foreach ($table_view as $tbv): ?>
                        <tr>
                            <td><?php echo $tbv['student_first_name']; ?></td>
                            <td><?php echo $tbv['student_class'] ?></td>
                            <td><?php echo $tbv['student_section'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr class="">
                        <td>No Records Found</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6"></div>
        <div class="col-lg-6">
            <button class="btn btn-primary btn-sm" style="margin-top: 10px;">Generate</button>
        </div>
    </div>
</div>