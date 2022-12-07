<?php

namespace App\Http\Controllers;




use Illuminate\Http\Request;
// -------------------------------------------------------
// session_start();

// --------------------------------------------------------
class AppointController extends Controller
{
    public function index()
    {
        return view('appointment.appoint-index');
    }

    public function create()
    {
        return view('appointment.form');
    }

    public function delete($id)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hospital";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $sql = "DELETE FROM `appointement` WHERE `id`=$id";
        mysqli_query($conn, $sql);
        echo "<center><h2>One Appointment Deleted...</h2></center>";
        // exit();
        // return view('appointment.appoint-index');
        return redirect('appoint')->with('msg', 'One Appointment Deleted...');
    }

    // -------------------------------------------
    public function store()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hospital";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (isset($_POST['patient_name'])) {

            $patient_name = $_POST["patient_name"];
            $phone = $_POST["phone"];
            $age = $_POST["age"];
            $description = $_POST["description"];
            $appointement_date = $_POST["appointement_date"];
            $appointement_doc_id = $_POST["doc_id"];



            $sql = "INSERT INTO `appointement` (`id`, `patient_name`, `phone`, `age`, `description`, `appointement_date`,`doc_id` ) VALUES (NULL, '$patient_name', '$phone', '$age',  '$description' , '$appointement_date','$appointement_doc_id')";


            if (mysqli_query($conn, $sql)) {
                //  echo "<center><h2>New Appointment Added...</h2></center>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            // header('Location: appoint-index.blade.php');
            // exit;
            return redirect('appoint/create')->with('msg', 'New Appointment Added...');
        }
    }
}
