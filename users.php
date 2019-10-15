<?php
    include_once "./db.php";
    $sql = "SELECT user_name, full_name, group_name FROM students";
    $result = $conn->query($sql);
    $data=array();
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $data['data'][]=array(
                $row['user_name'],
                $row['full_name'],
                $row['group_name']
            );
        }
    }
    echo json_encode($data);

    $conn->close();
?>