<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "utf-8">
    <title>Students Example</title>
</head>
<body>
<?php
echo form_open('StudController/add_student');
echo form_label('Roll No.');
echo form_input(array('id'=>'id','name'=>'id'));
echo "<br/>";

echo form_label('Name');
echo form_input(array('id'=>'name','name'=>'name'));
echo "<br/>";

echo form_submit(array('id'=>'submit','value'=>'Add'));
echo form_close();
?>
</body>
</html>