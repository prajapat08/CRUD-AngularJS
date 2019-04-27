<?php
$conn = mysqli_connect('localhost', 'root', '', 'mydbassi3');
$info = json_decode(file_get_contents("php://input"));
 
    $btn_name = $info->btnName;
                                 
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