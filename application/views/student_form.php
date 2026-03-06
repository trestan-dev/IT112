<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
</head>
<body>

    <h2>Student Registration Form</h2>
    <?php echo validation_errors();?>

    <form method="post" action="<?php echo site_url('student/save');?>">
        <input type="number" name="student_no" placeholder="Student Number">
        <input type="text" name="first_name" placeholder="First Name">
        <input type="text" name="last_name" placeholder="Last Name">
        <input type="text" name="course" placeholder="Course">
        <input type="submit" value="Register">
    </form>

    <h2>Registered Students</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Student</th>
            <th>Name</th>
            <th>Course</th>
        </tr>
    
    <?php foreach($students as $row):?>
        <tr>
            <td><?php echo $row->id;?></td>
            <td><?php echo $row->student_no;?></td>
            <td><?php echo $row->first_name . " " . $row->last_name;?></td>
            <td><?php echo $row->course;?></td>
        </tr>
    <?php endforeach;?>
    </table>

    <br>
    
</body>
</html>