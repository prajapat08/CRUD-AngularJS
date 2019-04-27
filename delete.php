<?php
$conn = mysqli_connect('localhost', 'root', '', 'mydbassi3');
$data    = json_decode(file_get_contents("php://input"));
if (count($data) > 0) {
    $id    = $data->id;
    $query = "DELETE FROM insert_emp_info WHERE id='$id'";
    if (mysqli_query($conn, $query)) {
        echo 'Data Deleted Successfully...';
    } else {
        echo 'Failed';
    }
}
?>