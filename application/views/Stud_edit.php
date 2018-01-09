<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "utf-8">
    <title>Students Example</title>
</head>

<body>

    <?php
    echo form_open('StudController/update_student');
    echo form_hidden('old_id',$old_id);
    echo form_label('Roll No.');
    echo form_input(array('id'=>'id',
               'name'=>'id','value'=>$records[0]->id));
            echo "
            ";

            echo form_label('Name');
            echo form_input(array('id'=>'name','name'=>'name',
               'value'=>$records[0]->name));
            echo "
            ";

            echo form_submit(array('id'=>'submit','value'=>'Edit'));
            echo form_close();
         ?>


</body>

</html>