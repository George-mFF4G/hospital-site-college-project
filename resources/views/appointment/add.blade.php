<?php

include_once "database_conn.php";


if (isset($_POST['add_appointement'])) {

    $patient_name = $_POST["patient_name"];
    $phone = $_POST["phone"];
    $age = $_POST["age"];
    $description = $_POST["description"];
    $appointement_date = $_POST["appointement_date"];
    // //////////////////////////////////////////////////////////////////////
    $doc_id = $_POST["doc_id"];

    // //////////////////////////////////////////////////////////////////////////////////


    $sql = "INSERT INTO `appointement` (`id`, `patient_name`, `phone`, `age`, `description`, `appointement_date`,`doc_id` ) VALUES (NULL, '$patient_name', '$phone', '$age',  '$description' , '$appointement_date','$doc_id')";
    

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    header('Location: index.php');
    exit;
}
?>