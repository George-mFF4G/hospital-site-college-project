<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

$conn = mysqli_connect($servername, $username, $password, $dbname);



if (isset($_POST['specalist']) && $_POST['specalist'] != "none") {
    echo "helllo";
    $specalist = $_POST['specalist'];
    $address_check = "SELECT * FROM doctors WHERE specalist=$specalist";
    $result = mysqli_query($conn, $address_check);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['first_name'] + " " + $row['last_name']; ?></option>
<?php
        }
    } else {
        echo "0 results";
    }
}
?>