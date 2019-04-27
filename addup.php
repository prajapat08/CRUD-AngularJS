<?php
$conn = mysqli_connect('localhost', 'root', '', 'mydbassi3');
$info = json_decode(file_get_contents("php://input"));
if (count($info) > 0) {
    $name     = mysqli_real_escape_string($conn, $info->name);
    $email    = mysqli_real_escape_string($conn, $info->email);
    $age      = mysqli_real_escape_string($conn, $info->age);
    $btn_name = $info->btnName;
                                if ($btn_name == "Insert") {
                                    $query = "INSERT INTO insert_emp_info(name, email, age) VALUES ('$name', '$email', '$age')";
                                    if (mysqli_query($conn, $query)) {
                                        echo "user Inserted Successfully";
                                    } else {
                                        echo 'Failed';
                                    }
                                }
    if ($btn_name == 'Update') {
        $id    = $info->id;
        $query = "UPDATE insert_emp_info SET name = '$name', email = '$email', age = '$age' WHERE id = '$id'";
        if (mysqli_query($conn, $query)) {
            echo 'user Updated Successfully';
        } else {
            echo 'Failed';
        }
    }
}
?>